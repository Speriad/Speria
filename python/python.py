print(abs(-5)) #절댓값
print(pow(4,2)) #제곱
print(max(5,12))    #둘중 큰거
print(min(5,12)) #둘중 작은거
print(round(3.14)) #반올림

from math import*    #파이썬에서 제공하는 매스 라이브러리
print(floor(4.99)) #내림
print(ceil(3.14)) #올림
print(sqrt(16)) #제곱근

from random import*   #파이썬에서 제공하는 랜덤 라이브러리
print(random())  #0~1.0 무작위 수
print(random()*99) #0~99.0 무작위 수
print(int(random()*99)) #0~99 무작위 수
print(int(random()*99)+1) #1~99 '이하' 의 무작위 수
print(int(random()*25)+4)

sentence='나는 남자이다'
print(sentence)
sentence2='코딩 코딩 코딩'
print(sentence2)
sentence3='''
어서오세요
어쩌고저쩌고
안녕하세요
'''
print(sentence3)

주민='070409-3333333'

print('성별 : '+주민[7])
print('연 : '+주민[0:2]) #0부터 2직전까지
print('뒷자리 : '+주민[-7:])  #뒤에서 7번째부터 끝까지

python='This Is America'
print(python.lower())  #전체 소문자 변환
print(python.upper())  #전체 대문자 변환
print(python[0].isupper())  #0번째 문자가 대문자 인가 ? : TRUE
print(len(python))  #python의 길이가 어떻게 되는가? 
print(python.replace('America','South Korea'))  #America를 South Korea로 대체

print('나는 %d살입니다.' %20)
print("아프리카계 미국인은 %s입니다." %'흑인')
print('나는 {}색과 {}색을 좋아합니다.' .format('파란','빨강'))
print('나는 {}과 {}하는것을 좋아합니다.' .format('코딩','대화'))
print('나는 {age}살이고 {color}색을 좋아합니다.' .format(age=20, color='검정'))
# =print('나는 {}살이고 {}색을 좋아합니다.' .format(20,'검정'))
# = age=20
# color = '검정'
# print(f'나는 {age}살이며, {color}색을 좋아한다.')

print('가는말이 고와야\n오는말이 곱다')  # \n=줄바꿈
# print('저는 '김무겸' 입니다') 
print('저는 \'김무겸\' 입니다')   #따옴표 탈출문자 
