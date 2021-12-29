from tkinter import * 
from tkinter import messagebox
import time
import random

win = Tk()
win.title("Speria's tkinter")
win.geometry("500x500")

def now():
  rightnow = time.time()
  tm = time.localtime(rightnow)
  tm2 = str(tm.tm_hour + 9) + ' : ' + str(tm.tm_min) + ' : ' + str(tm.tm_sec)
  button.config(text = tm2)

hello = Label(win , text="This is Speria's tkinter Program")
hello.pack()
button = Button(win, text='What time is it now?', command = now)
button.pack()
passing = Label(win, text="")
passing.pack()

blank = Entry(win)
blank.pack()

def blankget():
  whatisblank = blank.get()
  button2.config(text = whatisblank)

writesomethingandclickthisbutton = Label(text = "Write Something and click this button")
writesomethingandclickthisbutton.pack()
button2 = Button(win, text='Change This Button\'s name', command = blankget)
button2.pack()
passing = Label(win, text="")
passing.pack()

getlotto = Label(text = "Get Lotto Numbers")
getlotto.pack()

def lotto():
  lottonumber = random.sample(range(1,46),6)
  lottonumber.sort()
  lottotext.config(text = lottonumber)
    
button3 = Button(win, text = "Get Number", command = lotto)
button3.pack()
lottotext = Label(win, text = "")
lottotext.pack()
passing = Label(win, text="")
passing.pack()

  

win.mainloop()