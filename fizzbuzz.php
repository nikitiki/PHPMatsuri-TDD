<?php
class fizzbuzz
{
  public function say($number)
  {
    if($number % 3 === 0){
      return 'Fizz';
    }
    return $number;

  }
}
?>