<?php
//Odd int 6kata

function findIt(array $seq) : int
{
  $data = array_count_values($seq); 
  foreach($data as $key=>$val){
      if($val % 2 == 0)
    {
          continue;
      } 
      else{ 
        return $key;
      }    
  } 
}

// Vowel Count 7kata

function getCount($str) {
  $vowelsCount = 0;
  $arr1 = str_split($str);
  $num = count($arr1);
  for($i = 0; $i < $num; $i++)
  {
    if($arr1[$i]=='a'||$arr1[$i]=='e'||$arr1[$i]=='i'||$arr1[$i]=='o'||$arr1[$i]=='u')
    {
      $vowelsCount ++;
    }
  }
  return $vowelsCount;
}

//Bonus 8kata

function bonusTime($salary, $bonus) {
    if($bonus == true) {
      $new = $salary * 10;
      $total = '$'.$new;
      return $total;
    } else {
      return '$'.$salary;
    }
}