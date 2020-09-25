from flask import Flask
from flask import render_template
from flask import request

app = Flask(__name__)

@app.route('/armstrong', methods=['GET','POST'])
def mostrar_armstrong():
    mostrar = ""
    i=1
    while i <= 10000:
        if es_armstrong(i) == True:
            mostrar += " " + str(i)
            i += 1
        else:
            i += 1
    return mostrar

def es_armstrong(num1):
    cifras = 0
    total = 0
    numCifraCount = num1
    numCifraCount2 = num1

    while numCifraCount >= 1:
        numCifraCount /= int(10)
        cifras += 1

    while numCifraCount2 >= 1:
        total += pow((numCifraCount2%10),cifras)
        numCifraCount2 = int(numCifraCount2 / 10)
    return num1 == total
