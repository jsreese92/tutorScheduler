'''
This program uses an array of PIDs and randomly generates preferences for
every hour of every day, regardless of when the writing center is actually
open. Returns a csv text file to be directly imported into a mysql databse.
'''

from random import randint

def getUgradPids():
  """Returns array of PIDs hardcoded from what's currently in tutorInfo"""
  ugradPids = [714953739,715159509,720008212,720026979,720044010,720050287,
      720051882,720055023,720057834,720098569,720131322,720328470,720360006,
      720360963]
  return ugradPids

def genRandomPrefs(thePid,theDay):
  """Returns string that adheres to hoursByDay table schema (PID,day,h00...)"""
  row = "%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,\n"\
    % (thePid,theDay,pref(),pref(),pref(),pref(),pref(),pref(),
        pref(),pref(),pref(),pref(),pref(),pref(),pref(),pref(),pref(),pref(),
        pref(),pref(),pref(),pref(),pref(),pref(),pref(),pref())
  return row

def pref():
  """returns random integer from -1 to 3 inclusive"""
  return randint(-1,3)

def main():
  """writes pids to ugradPreferences.txt"""
  f = open("ugradPreferences.txt", "w+")
  days=["sun","mon","tue","wed","thu","fri","sat"]
  pids=getUgradPids()
  for pid in pids:
    for day in days:
      f.write(genRandomPrefs(pid,day))
  f.close()

main()
