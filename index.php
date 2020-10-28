<?php


function selectionSort($list)
{
    $n=count($list);
    $nextSwap=null;     //the index of next min value or max value
    $temp=null;

    for($i=0; $i<$n-1; $i++)//outer loop
    {

        $nextSwap=$i;
        for($j=$i+1; $j<$n; $j++)//inner loop
        {
            if( $list[$j]<$list[$nextSwap] ) //change the < to > for descending order
            {
                $nextSwap=$j;
            }
        }

        //swap the current index of the outer loop with the next min value
        $temp=$list[$i];
        $list[$i]=$list[$nextSwap];
        $list[$nextSwap]=$temp;
    }

    return array_reverse($list);
}

echo implode(", ",array( 1, 9, 4.5, 6.6, 5.7, -4.5));
echo "<br>";
echo implode(", ",selectionSort(array( 1, 9, 4.5, 6.6, 5.7, -4.5)));

