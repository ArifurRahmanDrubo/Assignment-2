<?php

//Task 3: Break on Condition
/*
Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a
Fibonacci number is greater than 100, break out of the loop using the break statement.
 */

 $prev = 0;
 $current = 1;
 
 echo $prev." " .$current . " ";
 $count =2;
 while ($count < 10) {
     // Calculate the next Fibonacci number
     $next = $prev + $current;
     // Check if the next Fibonacci number is greater than 100
     if ($next > 100) {
         break; // Break out of the loop if it's greater than 100
     }
     echo $next ." ";
     
     $prev = $current;
     $current = $next;
     // Increment the counter
     $count++;
 }
 

 
