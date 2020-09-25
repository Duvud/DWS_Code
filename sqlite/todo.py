import sqlite3
from flask import Flask
from flask import g
DATABASE = '/db/database.db'

app = Flask(__name__)

def getDb():
    db = getattr(g, '_databse', None)
    if db is None:
        db = g._databse = sqlite3.connect(DATABASE)
    return db

@app.teardown_appcontext
def close_connection(exception):
    db = getattr(g, '_database',None)
    if db is not None:
        db.close()

@app.route('/')
def index():
    cur = get_db().cursor()