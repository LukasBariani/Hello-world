import math
ang = float(input('Digite um angulo: '))
sen = math.sin(math.radians(ang))
cos = math.cos(math.radians(ang))
tan = math.tan(math.radians(ang))
print('seno: {:.4f}  cosseno: {:.4f}  tangente: {:.4f}'.format(sen, cos, tan))