<?php
// Задача 1: Создание простого массива
$friends = ["Anna", "Olga", "Nikita", "Sergey"];
foreach ($friends as $friend) {
    echo $friend . "\n";
}

// Задача 2: Индексы массива
$numbers = [15, 2, -9, 52, 8542, 69];
echo $numbers[2] . "\n";

// Задача 3: Ассоциативный массив
$person = ["name" => "Olga",
            "age" => 33,
            "city" => "St.Petersburg"];

echo "Имя: " . $person["name"] . "\n". "Возраст: " . $person["age"] . "\n";

// Задача 4: Массивы с циклами
$array = [1, 8, 58, 36, 74, 98];
foreach ($array as $arr) {
    if ($arr > 10) {
    echo $arr . "\n";
}
}

// Задача 5: Работа с массивами функций
$sumArray = [1, 8, 58, 36, 74, 98];
echo array_sum($sumArray) . "\n";

// Далее представлены задачи повышенной сложности. Достаточно решить 1 из них

// Задача 9: Объединение и сортировка массивов

$array1 = [1, 3, 5, 7, 8];
$array2 = [2, 3, 4, 5, 6];

function mergeArrays($array1, $array2) {
$merged_array = array_merge($array1, $array2);
return $merged_array;
}
$merged_array = mergeArrays($array1, $array2);
print_r($merged_array);

function sortArray($array) {
$n = count($array);
for ($i = 0; $i < $n - 1; $i++) {
for ($j = 0; $j < $n - $i - 1; $j++) {
if ($array[$j] > $array[$j + 1]) {
// Меняем местами элементы, если они в неправильном порядке
$temp = $array[$j];
$array[$j] = $array[$j + 1];
$array[$j + 1] = $temp;
}
}
}
return $array;
}
$sorted_array = sortArray($merged_array);
print_r($sorted_array);
?>

