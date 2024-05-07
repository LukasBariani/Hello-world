metro = float(input('Digite um numero em metros: '))
mm = metro * 1000
cm = metro * 100
dm = metro * 10
dam = metro / 10
hm = metro / 10
km = metro / 1000

print('O numero {} em metros equivale á {}mm, {}cm, {}dm, {}dam, {}hm e {}km'.format(metro, mm, cm, dm, dam, hm, km))