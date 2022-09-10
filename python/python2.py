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
  else:
      print('1 이상의 자연수를 입력해주세요.')
      askwhatisa()

def sampler():
  lottery = random.sample(range(1,46),6)
  lottery.sort()
  print(lottery)

askwhatisa()
sampler()

