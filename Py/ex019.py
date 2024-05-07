import math
co = float(input('Digite o comprimento do cateto oposto: '))
ca = float(input('Digite o comprimento do cateto adjacente: '))
hipq = math.pow(co, 2) + math.pow(ca, 2)
hip = math.sqrt(hipq)
print('A hipotenusa dos catetos {} e {}, é igual á {}'.format(co, ca, hip))