<?php

$number = 99;

if( $number >= 33 && $number < 40 ){
    echo "The student is passed and got D grade";
}elseif( $number >=40 && $number < 50 ){
    echo "The student got C grade";
}elseif( $number >=50 && $number < 60 ){
    echo "The student got B grade";
}elseif( $number >=60 && $number < 70 ){
    echo "The student got A- grade";
}elseif( $number >=70 && $number < 80 ){
    echo "The student got A grade";
}elseif( $number >=80 && $number <= 100 ){
    echo "The student got A+ grade";
}elseif( $number >= 0 && $number < 33 ){
    echo "The student fail";
}elseif( $number < 0 || $number > 100 ){
    echo "Invalid Number";
}