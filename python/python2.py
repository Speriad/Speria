import os

clearConsole = lambda: os.system('cls'
  if os.name in ('nt', 'dos') else 'clear')
from random import *
from time import sleep

def lotto():
  print('로또 번호를 5줄을 생성하도록 하겠다.')
  sleep(1.5)
  print('3')
  sleep(0.5)
  print('2')
  sleep(0.5)
  print('1')
  sleep(0.5)
  clearConsole()
  import random

  a1 = random.sample(range(1, 46), 7)
  ary = ['x', 'x', 'x', 'x', 'x', 'x']
  print(ary)
  sleep(0.5)
  ary = [a1[0], 'x', 'x', 'x', 'x', 'x']
  clearConsole()
  print(ary)
  sleep(0.5)
  ary = [a1[0], a1[1], 'x', 'x', 'x', 'x']
  clearConsole()
  print(ary)
  sleep(0.5)
  ary = [a1[0], a1[1], a1[2], 'x', 'x', 'x']
  clearConsole()
  print(ary)
  sleep(0.5)
  ary = [a1[0], a1[1], a1[2], a1[3], 'x', 'x']
  clearConsole()
  print(ary)
  sleep(0.5)
  ary = [a1[0], a1[1], a1[2], a1[3], a1[4], 'x']
  clearConsole()
  print(ary)
  sleep(0.5)
  ary = [a1[0], a1[1], a1[2], a1[3], a1[4], a1[5]]
  clearConsole()
  print(ary)
  aa1 = ary
  aaa1 = sorted(aa1)

  a2 = random.sample(range(1, 46), 7)

  sleep(1)
  clearConsole()
  ary2 = ['x', 'x', 'x', 'x', 'x', 'x']
  print(aa1)
  print(ary2)
  sleep(0.5)
  ary2 = [a2[0], 'x', 'x', 'x', 'x', 'x']
  clearConsole()
  print(aa1)
  print(ary2)
  sleep(0.5)
  ary2 = [a2[0], a2[1], 'x', 'x', 'x', 'x']
  clearConsole()
  print(aa1)
  print(ary2)
  sleep(0.5)
  ary2 = [a2[0], a2[1], a2[2], 'x', 'x', 'x']
  clearConsole()
  print(aa1)
  print(ary2)
  sleep(0.5)
  ary2 = [a2[0], a2[1], a2[2], a2[3], 'x', 'x']
  clearConsole()
  print(aa1)
  print(ary2)
  sleep(0.5)
  ary2 = [a2[0], a2[1], a2[2], a2[3], a2[4], 'x']
  clearConsole()
  print(aa1)
  print(ary2)
  sleep(0.5)
  ary2 = [a2[0], a2[1], a2[2], a2[3], a2[4], a2[5]]
  clearConsole()
  print(aa1)
  print(ary2)
  aa2 = ary2
  aaa2 = sorted(aa2)

  a3 = random.sample(range(1, 46), 7)

  sleep(1)
  clearConsole()
  ary3 = ['x', 'x', 'x', 'x', 'x', 'x']
  print(aa1)
  print(aa2)
  print(ary3)
  sleep(0.5)
  ary3 = [a3[0], 'x', 'x', 'x', 'x', 'x']
  clearConsole()
  print(aa1)
  print(aa2)
  print(ary3)
  sleep(0.5)
  ary3 = [a3[0], a3[1], 'x', 'x', 'x', 'x']
  clearConsole()
  print(aa1)
  print(aa2)
  print(ary3)
  sleep(0.5)
  ary3 = [a3[0], a3[1], a3[2], 'x', 'x', 'x']
  clearConsole()
  print(aa1)
  print(aa2)
  print(ary3)
  sleep(0.5)
  ary3 = [a3[0], a3[1], a3[2], a3[3], 'x', 'x']
  clearConsole()
  print(aa1)
  print(aa2)
  print(ary3)
  sleep(0.5)
  ary3 = [a3[0], a3[1], a3[2], a3[3], a3[4], 'x']
  clearConsole()
  print(aa1)
  print(aa2)
  print(ary3)
  sleep(0.5)
  ary3 = [a3[0], a3[1], a3[2], a3[3], a3[4], a3[5]]
  clearConsole()
  print(aa1)
  print(aa2)
  print(ary3)
  aa3 = ary3
  aaa3 = sorted(aa3)

  a4 = random.sample(range(1, 46), 7)

  sleep(1)
  clearConsole()
  ary4 = ['x', 'x', 'x', 'x', 'x', 'x']
  print(aa1)
  print(aa2)
  print(aa3)
  print(ary4)
  sleep(0.5)
  ary4 = [a4[0], 'x', 'x', 'x', 'x', 'x']
  clearConsole()
  print(aa1)
  print(aa2)
  print(aa3)
  print(ary4)
  sleep(0.5)
  ary4 = [a4[0], a4[1], 'x', 'x', 'x', 'x']
  clearConsole()
  print(aa1)
  print(aa2)
  print(aa3)
  print(ary4)
  sleep(0.5)
  ary4 = [a4[0], a4[1], a4[2], 'x', 'x', 'x']
  clearConsole()
  print(aa1)
  print(aa2)
  print(aa3)
  print(ary4)
  sleep(0.5)
  ary4 = [a4[0], a4[1], a4[2], a4[3], 'x', 'x']
  clearConsole()
  print(aa1)
  print(aa2)
  print(aa3)
  print(ary4)
  sleep(0.5)
  ary4 = [a4[0], a4[1], a4[2], a4[3], a4[4], 'x']
  clearConsole()
  print(aa1)
  print(aa2)
  print(aa3)
  print(ary4)
  sleep(0.5)
  ary4 = [a4[0], a4[1], a4[2], a4[3], a4[4], a4[5]]
  clearConsole()
  print(aa1)
  print(aa2)
  print(aa3)
  print(ary4)
  aa4 = ary4
  aaa4 = sorted(aa4)

  a5 = random.sample(range(1, 46), 7)

  sleep(1)
  clearConsole()
  ary5 = ['x', 'x', 'x', 'x', 'x', 'x']
  print(aa1)
  print(aa2)
  print(aa3)
  print(aa4)
  print(ary5)
  sleep(0.5)
  ary5 = [a5[0], 'x', 'x', 'x', 'x', 'x']
  clearConsole()
  print(aa1)
  print(aa2)
  print(aa3)
  print(aa4)
  print(ary5)
  sleep(0.5)
  ary5 = [a5[0], a5[1], 'x', 'x', 'x', 'x']
  clearConsole()
  print(aa1)
  print(aa2)
  print(aa3)
  print(aa4)
  print(ary5)
  sleep(0.5)
  ary5 = [a5[0], a5[1], a5[2], 'x', 'x', 'x']
  clearConsole()
  print(aa1)
  print(aa2)
  print(aa3)
  print(aa4)
  print(ary5)
  sleep(0.5)
  ary5 = [a5[0], a5[1], a5[2], a5[3], 'x', 'x']
  clearConsole()
  print(aa1)
  print(aa2)
  print(aa3)
  print(aa4)
  print(ary5)
  sleep(0.5)
  ary5 = [a5[0], a5[1], a5[2], a5[3], a5[4], 'x']
  clearConsole()
  print(aa1)
  print(aa2)
  print(aa3)
  print(aa4)
  print(ary5)
  sleep(0.5)
  ary5 = [a5[0], a5[1], a5[2], a5[3], a5[4], a5[5]]
  clearConsole()
  print(aa1)
  print(aa2)
  print(aa3)
  print(aa4)
  print(ary5)
  aa5 = ary5
  aaa5 = sorted(aa5)
  sleep(0.5)
  print('정렬 하는중 ..')
  sleep(2)
  clearConsole()

  print('결과(보너스 번호 포함) : ')
  print('{0} + {1}'.format(aaa1, a1[6]))
  print('{0} + {1}'.format(aaa2, a2[6]))
  print('{0} + {1}'.format(aaa3, a3[6]))
  print('{0} + {1}'.format(aaa4, a4[6]))
  print('{0} + {1}'.format(aaa5, a5[6]))

def q1(arr):
  print('{0} {1}'.format('Given array is',arr))
  if arr[0]==arr[-1]:
    print(True)
  else:
    print(False)

q1([10,20,30,40,10])
q1([10,20,30,40,50])

def q2(arr2):
  print('Given Array Is', arr2)
  for numdrake in arr2:     #for 변수명 in arr2
    if (numdrake % 5 == 0):    #나누고 난 후의 나머지를 구함
      print(numdrake)

q2([10,20,33,22])

def q3():
  array31=[21,22,23,24,25,26]
  array32=[41,42,43,44,45,46]
  newarrayq3=[]
  for numq3 in array31:
    if numq3 % 2 == 1:
      newarrayq3.append(numq3)
  for num2q3 in array32:
    if num2q3 % 2 == 0:
      newarrayq3.append(num2q3)
  print(newarrayq3)

q3()

def q4(sumnumnum):
  previousnumber=0
  for q4var in range(sumnumnum):
    sum=q4var+previousnumber       #시간 순서대로 진행됨. sumnumnum 까지 반복, 합계 = 전 + 현, previousnumber는 출력되고 바뀜.
    print('Current : ', q4var, 'Previous Number : ', previousnumber, 'sum : ', sum)
    previousnumber=q4var
q4(10)

def q5(q5array):
  print('Current Array is ', q5array)
  for q5q5q5 in q5array:
    if q5q5q5 % 5 == 0 :
      print(q5q5q5)
q5([10,22,25,30])

def q6():
  iq6=1
  for iq6 in range(11):
    print(iq6)

def q7():
  for iq7 in range(2,21):
    print(iq7)
    iq7=iq7+2		

def q8():
  iq8=6
  for iq8row in range(1, iq8):
    for column in range(1, iq8row+1):
      print(column, end = '  ')
      
    print("")