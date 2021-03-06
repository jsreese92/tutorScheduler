/*
Preferences are stored in a 2D array (Day x Hour), and each cell in that
array is an array of tuples (PID, preference for that day and hour, and whether
that student is a grad or undergrad) for each student.

Number of hours scheduled are assigned dynamically within the algorithm using
PID and count. 
*/

// 1. SASB must be covered for all open hours, at least two working each hour
// We'll make a pass of the grad students and will not touch the undergrads
// until the grads have all their hours (Item 2)

preference 3Darray = (populate this via SQL) [day][hour][tuple list];
tempSchedule 3Darray = [day][hour][tuple list];
hoursWorking = array[PID];  // array the key for which is PID, value is hours 
                            // scheduled
pidList = array[index]; // just a list of every student's PID                       

function populateGrad(prefNum)
for each day
  for each hour
    for each tuple 
      if (pref = prefNum and status = grad)
        tempSchedule[day][hour].add(tuple);
        hoursWorking[tuple.PID] += 1;
        remove tuple from preference 3Darray;

for each day
  for each hour
    if (numTuples < 2)
      populateGrad(2)

for each day
  for each hour
    if (numTuples < 2)
      populateGrad(1)

// if, after running through all grads, there are still days with less than
// two people working at SASB, we do the exact same process above for ugrads

// 2. Grad students must work at least 14 hours (+ 1 hour meeting, not covered here)
sort hoursWorking from least to greatest; // now schedule those with fewest 
                                          // scheduled hours.

// note that this should be running from least to greatest
for each PID in hoursWorking
  for each day in preference
    for each hour
      for each tuple
        if status = grad and hoursWorking[tuple.PID] < 14
          tempSchedule[day][hour].add(tuple);
          hoursWorking[tuple.PID] += 1;
          remove tuple from preference 3Darray;

// 3. Undergrads work at most 10 hours
for each PID in hoursWorking
  for each day in preference
    for each hour
      for each tuple
        if status = ugrad and hoursWorking[tuple.PID] < 10
          tempSchedule[day][hour].add(tuple);
          hoursWorking[tuple.PID] += 1;
          remove tuple from preference 3Darray;

// 4. Nobody can work more than 5 hours in a day
sort hoursWorking greatest to least
countArray = array[day][PID]; // key is PID, value is number hours working that day

// initialize countArray
for each day in tempSchedule{
  for each hour{
    for each tuple{ // look through each tuple
      for each PID in pidList // see if that tuple matches someone in pidList
        if tuple.PID = PID // if so, add to count of hours worked that day
          countArray[day][PID]++;
    }
  }
}

boolean onesExhausted = false
boolean twosExhausted = false
boolean done = false

for each day in countArray{
  while(!done){
    for each PID{
      while(!done){
        for each hour in tempSchedule[day] while (!done){
          for each tuple while (!done){
            if(!onesExhausted){
              if(exist(1,PID,day)){ // scans through a day's tuples, if there are
                // tuples in tempSchedule for a given PID on given day for given
                // preference, returns true
                if tuple.PID = PID{
                  add tuple back to preference; //since they are now available
                  remove tuple from tempSchedule;
                  hoursWorking[PID]-=1;
                  countArray[day][PID]-=1;
                  if countArray[day][PID] < 5{
                    done = true;
                  }
                }
              }
              else
                onesExhausted = true;
            }
            if(onesExhausted and !twosExhausted){
              if(exist(2,PID,day)){
                if tuple.PID = PID{
                  add tuple to preference;
                  remove tuple from tempschedule;
                  hoursWorking[PID]-=1;
                  countArray[day][PID]-=1;
                  if countArray[day][PID] < 5{
                    done = true;
                  }
                }
              }
              else
                twosExhausted = true;
            }

            // should never be the case where all 3s are exhausted, that 
            // would mean they weren't working any hours
            
            if(onesExhausted and twosExhausted){
              // there should always at least be 3s, so just remove 3s until
              // the count is less than 5
              if tuple.PID = PID{
                add tuple to preferences;
                remove tuple from tempSchedule;
                hoursWorking[PID]-=1;
                countArray[day][PID]-=1;
                if countArray[day][PID] < 5{
                  done = true;
                }
              }
            }
          }
        }
      }
    }
  }
}

/*
for each day in countArray{
  for each PID{ // in order of hours working, greatest to least
    // take 1s off as long as they're working more than 5 in a day
    // TODO: have some way to stop if no more 1s exist
    while count > 5{
      for each hour in tempSchedule[day] while count > 5{
        for each tuple while count > 5{
          if tuple.PID = PID and pref = 1{
            add tuple back to preference; // since they are now available to work
            remove tuple from tempSchedule;
            hoursWorking[tuple.PID] -= 1;
            count--; // number of hours worked this day
          }
        }
      }
    }
  }
}
*/
