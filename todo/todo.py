import sqlite3
from flask import Flask
from flask import g
from flask import render_template
from flask import request
DATABASE = 'db/todo.db'

#Aquí declaramos la aplicación de flask
app = Flask(__name__)

#Este metodo devuelve una conexión hacia la base de datos
def getDb():
    conn = sqlite3.connect(DATABASE)
    return conn

#Este metodo carga los resultados de un select en una lista y los devuelve
def loadTodoTable():
    cur = getDb()
    select = '''SELECT * FROM TODO'''
    recs = cur.execute(select)
    result = []
    for row in recs:
        result.append(row)
    cur.close()
    return result

#Este metodo nos devuelve la página principal
@app.route('/')
def index():    
    return render_template('todo.html')

#Este metodo utiliza el metodo para cargar datos de una tabla y devuelve la página principal pero con los datos cargados
@app.route('/show')
def show():
    result=loadTodoTable()
    return render_template('todo.html', value = result)

""" 
Este metodo recibe valores de un formulario por POST 
y hace un insert a través de parametros para despues
devolver la página principal con los datos actualizados
"""
@app.route('/insert/',methods=['GET','POST'])
@app.route('/insert/?<value>',methods=['GET','POST'])
def insert(value=None):
    cur = getDb()
    fResult = request.form['value']
    if fResult != None:
        query = ("INSERT INTO TODO(NOMBRE) values(?)")
        cosa = (fResult, )
        cur.execute(query,cosa)
        cur.commit()
        cur.close()
    respuestaDb=loadTodoTable()
    return render_template('todo.html', value = respuestaDb)