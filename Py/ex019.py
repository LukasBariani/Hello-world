import math
co = float(input('Digite o comprimento do cateto oposto: '))
ca = float(input('Digite o comprimento do cateto adjacente: '))
hi = math.hypot(ca, co)
print('A hipotenusa dos catetos {} e {}, resulta em {:.2f}'.format(ca, co, hi))