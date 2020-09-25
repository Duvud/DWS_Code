from flask import Flask
from flask import render_template
from flask import request

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('answer.html')

@app.route('/segunda_página')
def segunda_página():
    return 'Esta es la segunda página'

@app.route('/articulos/<codigo>')
def mostrar_articulo(codigo):
    return codigo

@app.route('/formulario')
def mostrar_formulario():
    return render_template('formulario.html')

@app.route('/procesa_formulario',methods=['GET','POST'])
@app.route('/procesa_formulario/<fname>',methods=['GET','POST'])
def procesa_formulario(fname=None,fname2=None):
        #fname = request.args.get('fname')
        #fname2 = request.args.get('fname2')
        #fname = request.form['fname']
        #fname2 = request.form['fname2']
        return render_template('answer.html', fname = fname, fname2 = fname2)

