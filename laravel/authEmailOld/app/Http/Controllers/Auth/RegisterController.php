<?php

namespace App\Http\Controllers\Auth;

use DB;
use Mail;
use App\Models\User;
use Validator;
use Illuminate\Http\Request;
use App\Mail\EmailVerification;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class RegisterController extends Controller
{   
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'email_token' => Str::random(10),
        ]);
    }


    //Busca el usuario que tenga el mismo token y lo marca como verificado
    public function verfy($token){
        User::where('email_token',$token)->firstOfFail()->verified();
        return redirect('login');
    }

    //Pone el campo verificado en true y cambia el estado del token a null
    public function verified(){
        $this->verified = 1;
        $this->email_token = null;
        $this->save();
    }

    //Reescribimos la función de registro para poder editarlo
    protected function register(Request $request){
        $validator = $this->validator($request->all());

        if($validator->fails()){
            $this->throwValidationException($request,$validator);
        }

        DB::beginTransaction();

        try{
            $user = $this->create($request->all());
            $email = new EmailVerification(new User(['email_token' => $user->email_token, 'name' => $user->name]));

            Mail::to($user->email)->send($email);
            DB::commit();
            return back();
        }catch(Exception $e){
            DB::rollback();
            return back();
        }
    }
}
