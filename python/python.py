print(abs(-5)) #절댓값
print(pow(4,2)) #제곱
print(max(5,12))    #둘중 큰거
print(min(5,12)) #둘중 작은거
print(round(3.14)) #반올림

from math import*  #파이썬에서 제공하는 매스 라이브러리
print(floor(4.99)) #내림
print(ceil(3.14)) #올림
print(sqrt(16)) #제곱근

from random import*   #파이썬에서 제공하는 랜덤 라이브러리
print(random())  #0~1.0 무작위 수
print(random()*99) #0~99.0 무작위 수
print(int(random()*99)) #0~99 무작위 수
print(int(random()*99)+1) #1~99 '이하' 의 무작위 수
print(int(random()*25)+4)

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
print('나는 {}과 {}하는것을 좋아합니다.' .format('ㅇㅇㅇ','ㅇㅇ'))
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

python.remove('Tyler')   #python에서 Tyler 제거
print(python)

#자료구조의 변경

menu2={"커피","우유","주스"}
print(menu2, type(menu2))

menu2 = list(menu2)
print(menu2, type(menu2))

menu2 = tuple(menu2)
print(menu2, type(menu))

menu2 = set(menu2)
print(menu2, type(menu2))

#조 건 문

a='Drake'
if a=='Drake': print(a+' is Rapper')
elif a=='Soulja' : print(a+' is Rapper')
else : print('He is not rapper')

#f o r 반 복 문
#range(n) 0에서 n미만 range(n,n+a) n 에서 n+a미만

for waiting_no in range(1,6): print("대기번호 : {0}".format(waiting_no))

#W h i l e 반 복 문

customer = '김무겸'
index = 5
while index >= 1:
    print('{0}, 코딩중이다. {1}번 남음'.format(customer, index))
    index-=1
    if index ==0:
        print('끝났다')

#continue & break

absent = [2,5]
no_book = [7]
for student in range(1,11):
    if student in absent:
        continue
    elif student in no_book:
        print('오늘은 그만함. {0}은 오셈'.format(student))
        break
    print('{0}, 책읽어보셈'.format(student))

#한줄로 하는 for 문

students=[1,2,3,4,5]
students= [i+100 for i in students]    #students 안에 있는 i를 하나씩 꺼내서 100을 더한다
print(students)

students2 = ['Drake','Tory','Tyler']     
students2 = [len(i) for i in students2]  #students2 안에 있는 i의 길이를 하나씩
print(students2)

#F U N C T I O N

def open_account():  
    print('새로운 계좌가 생성됨')

def deposit(balance,money):    #예금하기
    print('입금이 완료 되었습니다. 잔액은 {0}원 입니다.'.format(balance+money))
    return balance+money

def withdraw(balance, money): #출금하기
    if balance >= money:
        print('출금이 완료 되었습니다. 잔액은 {0} 원입니다.'.format(balance-money))
        return balance-money
    else:
        print('출금이 완료되지 않았습니다. 잔액은 {0}원 입니다.'.format(balance))
        return balance

def withdraw_night(balance,money):
    commission = 100
    return commission, balance - money - commission


balance=0 #잔액
balance = deposit(balance,1000)
print(balance)

commission, balance = withdraw_night(balance,500)
print('수수료는 {0} 원이며, 잔액은 {1} 원입니다.'.format(commission, balance))

#기본값

# def profile(name, age, main_lang):
#     print("이름 : {0}\t나이 : {1}\t주 사용 언어 : {2}"\
#         .format(name, age, main_lang))

# profile('Drake',20,'파이썬')     각각 이름 나이 주 사용언어
# profile('Rocky',25,'자바스크립트')

def profile(name, age=17, main_lang='파이썬'):
    print('이름 : {0}\t나이 : {1}\t주 사용 언어 : {2}'\
        .format(name, age, main_lang))

profile('유재석')     #이름만 지정해놓고 나머지는 기본값
profile('김태호')

#키워드값

def profile2(name, age, main_lang):
    print(name, age, main_lang)

profile2(name='유재석',main_lang='파이썬',age=20)
profile2(main_lang='자바',age=25,name='김태호')

#가변 인자

# def profile3(name, age, lang1, lang2, lang3, lang4, lang5):
#     print('이름: {0}\t나이 : {1}\t'.format(name,age))
#     print(lang1, lang2, lang3, lang4, lang5)

def profile3(name, age, *language):   #*language를 적으면 넣고싶은만큼 값을 넣을수 있음
    print('이름: {0}\t나이 : {1}\t'.format(name,age))
    for 언어 in language:
        print(언어)
    print()

profile3('유재석',20,'Python','Java','C','C++','C#')
profile3('솔자',25,'Javascript','CSS')

#지 역 변 수 , 전 역 변 수

gun = 10

def checkpoint(soldiers): #경계근무
    global gun  #전역 공간에 있는 gun을 사용하겠다.
    gun = gun - soldiers
    print('[함수 내] 남은 총 : {0}'.format(gun))

def checkpoint_ret(gun, soldiers):
    gun=gun-soldiers
    print('[함수 내] 남은 총 : {0}'.format(gun))
    return gun

print('전체 총 : {0}'.format(gun))
# checkpoint(2)   2명이 경계 근무를 나감
gun = checkpoint_ret(gun,2)    #checkpoint_ret 이라는 함수에 대하여 2명의 군인이 근무를 나감
print('남은 총 : {0}'.format(gun))

#표준 입출력

print('Hello','Hi', sep=' vs ', end='?')   #sep=',' 이 없었을땐 그냥 띄어 쓰기로 써졌으나 쓰면 사이에 sep이 생김 
#end='?' 는 마지막에 ? 를 붙임 그리고 한줄로 보냄
print('둘중 어느것이 더 좋을까요?')

# import sys
# print('Python','Java', file=sys.stdout)
# print('Python','Java', file=sys.stderr)

scores={'수학':0, '영어':50, '국어':33}
for subject, score in scores.items():
    print(subject.ljust(8), str(score).rjust(4), sep=':')      #ljust = 왼쪽 정렬 rjust = 오른쪽 정렬

for num in range(1,21):
    print('대기번호 : '+str(num).zfill(3))        #zfill = 0채우기

answer = input('아무거나 입력 하셈 : ')
print('님은 방금 '+answer+'이라고 말하셨음')

#다양한 출력포멧

print('{0:>10}'.format(500))    #빈자리는 빈공간으로 두고 오른쪽 정렬을 하고 10자리 확보
print('{0:>+10}'.format(500))   #위와 똑같지만 부호를 나타낼수 있음
print('{0:_<10}'.format(500))   #왼쪽 정렬을 하고 빈칸으로 _를 채움
print('{0:,}'.format(100000000000))   #3자리마다 콤마를 찍음
print('{0:+,}'.format(100000000000))   #3자리마다 콤마를 찍고 부호를 표시함
