def es_armstrong(num1):
    cifras = 0
    total = 0
    numCifraCount = num1
    numCifraCount2 = num1

    while numCifraCount >= 1:
        numCifraCount /= int(10)
        cifras += 1

    while numCifraCount2 >= 1:
        print("Cifra: " + str(int(numCifraCount2%10)))
        total += pow((numCifraCount2%10),cifras)
        print("Total : " + str(total))
        numCifraCount2 = int(numCifraCount2 / 10)
        

    return num1 == total

print(str(es_armstrong(153)))