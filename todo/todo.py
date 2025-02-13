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

def render():
    return render_template('todo.html', value = show())

#Este es el metodo principal
@app.route('/todo.html',methods=['GET','POST'])
def index():
    if request.method == 'POST':
        insert()    
    return render()

@app.route('/eliminar')
@app.route('/eliminar/<id>')
def eliminar(id=None):
    if id!=None:
        cur = getDb()
        query = ("DELETE FROM TODO WHERE ID = (?)")
        parse = (id, )
        cur.execute(query,parse)
        cur.commit()
        cur.close()
    return render()


#Este metodo utiliza el metodo para cargar datos de una tabla y devuelve la página principal pero con los datos cargados
def show():
    cur = getDb()
    select = '''SELECT * FROM TODO'''
    recs = cur.execute(select)
    result = []
    for row in recs:
        result.append(row)
    cur.close()
    return result

#Este metodo realiza un insert hacia la base de datos
def insert(value=None):
    cur = getDb()
    fResult = request.form['value']
    if fResult != None:
        query = ("INSERT INTO TODO(NOMBRE) values(?)")
        cosa = (fResult, )
        cur.execute(query,cosa)
        cur.commit()
        cur.close()
    else:
        cur.close()