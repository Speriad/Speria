import pygame

pygame.init()

size = [1200 , 800]
screen = pygame.display.set_mode(size)

title = "Eunsoo's KeumChun Adventure"
pygame.display.set_caption(title)

clock = pygame.time.Clock()

SB = 0
while SB == 0:
    clock.tick(60) #FPS 설정
    for event in pygame.event.get():   #이벤트 받기
        if event.type == pygame.QUIT:    #(만약 게임을 끈다면)
            SB = 1
    pygame.display.flip() #업데이트하기 (안쓰면 저장안됨)

pygame.quit()