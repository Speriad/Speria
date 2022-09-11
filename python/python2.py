import os
import random

def askwhatisa():
  a = int(input('몇까지 숫자를 셀지 입력해주세요 :  '))
  
  if a >= 1:
      def onetoa(a):

        i = 1

        while i<a+1:
          print(i)
          i = i + 1
        
      onetoa(a)
      start()
  else:
      print('1 이상의 자연수를 입력해주세요.')
      askwhatisa()

ab = ''
def sampler(ab):
  ab = int(input('몇 개의 로또 번호를 뽑을지 입력해주세요 :  '))

  if ab >= 1:

    lottery = random.sample(range(1,46), ab)
    lottery.sort()
    print(lottery)
    start()
  else:
    print('1 이상의 자연수를 입력해주세요.')
    sampler(ab)

def formatinput():
  formatinputask = input('Type First Word :  ')
  formatinputask2 = input('Type Second Word :  ')
  formatinputask3 = input('Type Third Word :  ')

  print('First : {0}, Second : {1}, Third : {2}'.format(formatinputask, formatinputask2, formatinputask3))
  start()

def start():
  print('')
  print('1. Number Counting Program')
  print('2. Lottery Program')
  print('3. Format Word Program')
  print('')
  startn = int(input('시작하고 싶은 프로그램의 번호를 입력해주세요 :  '))
  
  if startn == 1:
    askwhatisa()
  elif startn == 2:
    sampler(ab)
  elif startn == 3:
    formatinput()
  else:
    start()

start()