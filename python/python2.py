import pygame

pygame.init()

size = [1200 , 800]
screen = pygame.display.set_mode(size)

white = (255,255,255)
screen.fill(white)

title = "Eunsoo's KeumChun Adventure"
pygame.display.set_caption(title)

clock = pygame.time.Clock()
ss = pygame.image.load('C:/무겸/Programming/Speria/python/ak.PNG').convert_alpha()
ss = pygame.transform.scale(ss, (88.665, 250))   #ss의 크기 변경
screen.blit(ss, (550, 550))     #스크린에 ss를 (x, y)에 표시

SB = 0
while SB == 0:
    clock.tick(60) #FPS 설정
    for event in pygame.event.get():   #이벤트 받기
        if event.type == pygame.QUIT:    #(만약 게임을 끈다면)
            SB = 1
    pygame.display.flip() #업데이트하기 (안쓰면 저장안됨)

pygame.quit()