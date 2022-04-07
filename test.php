<?php

for($i=1;$i<=100;$i++)
        {
            if($i%3==0 && $i%5==0)
            {
                print_r("\n");
                print_r('FizzBuzz');
            }
            else if($i%3==0)
            {
                print_r("\n");
                print_r('Fizz');
            }
            else if($i%5==0)
            {
                print_r("\n");
                print_r('Buzz');
            }
            else
            {
                print_r("\n");
                print_r($i);
            }
        }

   ?>