<?php
//Задание 1: Определение четности чисел

$numbers = [3, 8, 10, 15, 1];
foreach ($numbers as $number) {
    if ($number % 2 == 0) {
       echo " Число $number — четное <br>";
    } else {
        echo " Число $number — нечетное <br>";
    }
    }

//Задание 2: Подсчет положительных и отрицательных чисел

$numbers1 = [3, 8, 10, 15, 1, -8, -9];
$sum1 = 0;
$sum2 = 0;
foreach ($numbers1 as $number1) {
    if ($number1 > 0) {
        $sum1 = $sum1+1;  
       
    } else {
        $sum2 = $sum2+1; 
       
    }
    }
    echo " Положительных чисел: $sum1<br>";
    echo " Отрицательных чисел: $sum2<br>";

//Задание 3: Таблица умножения

for ($i = 1; $i <= 10; $i++) {
    echo "5 * $i = " . (5 * $i) . "<br>";
    }

//Задание 4: Условное отображение оценок студентов

$students = [
    "Иван" => 25,
    "Мария" => 74,
    "Алексей" => 90
    ];
    foreach ($students as $name => $score) {
        if ($score >= 50) {
            echo " $name сдал экзамен!<br>";    
        } else {
            echo " $name не сдал экзамен!<br>"; 
        }
    }

//Задание 5: Поиск минимального и максимального значений

$numbers3 = [3, 2, 1, 76, 0, 76, 645, 98];
$min = $numbers3[0];
$max = $numbers3[0];

foreach ($numbers3 as $number3) {
    if ($number3 > $max) {
        $max = $number3; 
      
    }
        if ($number3 < $min) {
            $min = $number3; 
            }
}
echo " Максимальное число: $max<br>";
echo " Минимальное число: $min<br>";
    

    