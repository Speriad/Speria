import os
import random

print('Hello World')

def askwhatisa():
  a = input('몇까지 숫자를 셀지 입력해주세요 :  ')
  if a == 'true':    #I don't know how to check whether a is true or not.
    def onetoa(a):

      i = 1

      while i<a+1:
        print(i)
        i = i + 1
  else:
    print('1 보다 큰 숫자를 입력하셔야합니다.')
    askwhatisa()

def sampler():
  lottery = random.sample(range(1,46),6)
  lottery.sort()
  print(lottery)

askwhatisa()
sampler()

