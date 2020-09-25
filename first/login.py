from flask import Flask
from flask import render_template
from flask import request

app = Flask(__name__)


@app.route('/login', methods=['GET','POST'])
def login():
    if request.method == 'GET':
        return render_template('login.html')
    else:
        nombre = request.form['nombre']
        contrasena = request.form['contrasena']
        if nombre == "david" and contrasena == "brun":
            return "Acceso concedido"
        else:
            return "Accesso denegado"
