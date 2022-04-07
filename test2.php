<?php
$j=0;
$temp =[];
for($i=1;$i<=30;$i++)
        {
            if($i>1)
            {
                $tempcount = count($temp);
                if($tempcount==1)
                {
                  //$j = $temp[];
                }
                //$j = $i+$i-2;
                print_r(','.$j);
            }
            else if($i==1){
                $temp = $i;
                print_r($i);
            }
            
        }

        

   ?>