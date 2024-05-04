preco = float(input('Qual o preço do produto? '))
desc = (preco/100) * 5
precof =  preco - desc
print('O produto com desconto custará {} reais'.format(precof))