km = float(input('Quantos KM vc rodou?'))
dias = int(input('Quantos dias vc rodou?'))
pdias = dias * 60
pkm = km * 0.5
total = pkm + pdias
print('Em {:.2f} dias e {:.2f}Km rodados, você gastou {:.2f} reais, fsendo {:.2f} reais pelos km e {:.2f} reais pelos dias'.format(dias, km, total, pkm, pdias ))