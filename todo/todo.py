import sqlite3
from flask import Flask
from flask import g
from flask import render_template
from flask import request
DATABASE = 'db/todo.db'

app = Flask(__name__)

def getDb():
    conn = sqlite3.connect(DATABASE)
    return conn
def loadTodoTable():
    cur = getDb()
    select = '''SELECT * FROM TODO'''
    recs = cur.execute(select)
    result = []
    for row in recs:
        result.append(row)
    cur.close()
    return result

@app.route('/')
def index():    
    return render_template('todo.html')

@app.route('/show')
def show():
    result=loadTodoTable()
    return render_template('todo.html', value = result)

@app.route('/insert/',methods=['GET','POST'])
@app.route('/insert/?<value>',methods=['GET','POST'])
def insert(value=None):
    cur = getDb()
    fResult = request.form['value']
    if fResult != None:
        print(fResult + " He llegado ")
        query = ("INSERT INTO TODO(NOMBRE) values(?)")
        cosa = (fResult, )
        cur.execute(query,cosa)
        cur.commit()
        cur.close()
    respuestaDb=loadTodoTable()
    return render_template('todo.html', value = respuestaDb)