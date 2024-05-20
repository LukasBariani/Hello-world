frase = input('Qual seu nome copleto? ')

print(frase.upper())
print(frase.lower())

frase2 = frase.replace(" ", "")
print(len(frase2))

primeiro = frase.split()
print(len(primeiro[0]))