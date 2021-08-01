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

#사전

cabinet = {3:'유재석',100:'김태호'}
print(cabinet[3])    #=print(cabinet.get(3))
print(cabinet[100])   #print(cabinet.get(100))
#cabinet 에서 대괄호로 없는 값을 가져올때는 오류를 일으키고 프로그램 종료
#cabinet 에서 .get()로 없는 값을 가져올때는 none 이라고 쓰고 프로그램 종료 하지 않음
print(3 in cabinet)  #true  #3이 cabinet 안에 있는가?
print (5 in cabinet)  #false

cabinet2 = {'A':'유재석','B':'김태호'}
print(cabinet2['A'])
print(cabinet2['B'])

cabinet2['C'] = '조세호'     #C 라는 조세호의 값이 추가됨
cabinet2['A'] = 'Drake'     #A 에 유재석 대신 Drake 가 들어감
print(cabinet2)

del cabinet2['A']        #A 의 값을 삭제
print(cabinet2)

print(cabinet2.keys())   #key 들만 출력 
print(cabinet2.values())   #값들만 출력
print(cabinet2.items())   #key, 값 쌍으로 출력

cabinet2.clear()   #cabinet2 클리어
print(cabinet2)

#튜플

menu=('돈까스', '치킨')
print(menu[0])
print(menu[1])

name = '김무겸'
age = 15
hobby = 'Drake'
#= (name, age, hobby) = ('김무겸',15,'Drake')

#세트

my_set = {1,2,3,3,3}
print(my_set)

java = {'Drake','Tyler','Nas'}
python = set(['Tyler','Future'])

print(java&python)   #교집합(java 또는 python 을 모두 만족하는 값)
print(java.intersection(python)) #교집합(java 또는 python 을 모두 만족하는 값)

print(java | python)  #합집합 (java 또는 python 에 있는 값)
print(java.union(python)) #합집합 (java 또는 python 에 있는 값)

print(java-python)  #차집합 (java에는 있으나 python 에는 없는 것)
print(java.difference(python))  #차집합 (java에는 있으나 python 에는 없는 것)

python.add('Tory')   #python에 Tory 추가
print(python)

python.remove('Drake')   #python에서 Drake 제거
print(python)
