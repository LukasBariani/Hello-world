import pygame
pygame.init()
# chamando musica
pygame.mixer.music.load('cr7-bom-dia - Copia.mp3')
# play na musica
pygame.mixer.music.play()
input()
pygame.event.wait()