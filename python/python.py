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
print('나는 {}과 {}하는것을 좋아합니다.' .format('ㅁㅁ','ㅈㅈ'))
print('나는 {age}살이고 {color}색을 좋아합니다.' .format(age=20, color='검정'))
# =print('나는 {}살이고 {}색을 좋아합니다.' .format(20,'검정'))
# = age=20
# color = '검정'
# print(f'나는 {age}살이며, {color}색을 좋아한다.')

print('가는말이 고와야\n오는말이 곱다')  # \n=줄바꿈
# print('저는 '김무겸' 입니다') 
print('저는 \'김무겸\' 입니다')   #따옴표 탈출문자 

url='http://naver.com'
my_str=url.replace("http://","")
my_str = my_str[0:my_str.index('.')]
password=my_str[0:3] + str(len(my_str)) + str(my_str.count('e')) + '!'
print('{0} 의 비밀번호는 {1} 입니다.'.format(url, password))

# subway1=10
# subway2=20
# subway3=30

subway=[10,20,30]
print(subway)

subway=['Tyler','Drake','Kendrick']
print(subway.index('Drake')+1)
print(subway)
subway.append('Nas') #Nas를 Subway 뒤에 추가
print(subway)
subway.insert(1,'Tory') #Tory를 Subway 리스트의 1에 추가
print(subway)
print(subway.pop())  #뒤에서부터 한명을 뺌
print(subway)
cabinet = {3:'유재석',100:'김태호'}
기섭헐;;미;ㄴ알펌내ㅔㅑㅇ펴ㅗㅁ'ㅔㄴ애러매쟈;ㄷ룜;ㅈ대ㅔ로ㅓㅁㅈ디ㅏㅓ료먀