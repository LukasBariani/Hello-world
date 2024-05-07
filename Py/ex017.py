preco = float(input('Qual o preço? R$'))
precot = (preco * 20 /100) + preco
parce = int(input('Qual a Quantidade de parcelas? '))
precopar = precot / parce

print('O valor com juros sera de R${}, com {} parcelas você pagará R${} por parcela'.format(precot, parce, precopar))