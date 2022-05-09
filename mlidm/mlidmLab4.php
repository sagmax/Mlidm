<!DOCTYPE html>
<html lang="en">
<head>
    <title>Лабораторная работа 4</title>

</head>
<body>
<h1>Лабораторная работа 4</h1>
<form method="post">
    <textarea style = "width: 220px; height: 123px;" id="matrix" name = "matrix" placeholder="Введите матрицу"><?=$_POST['matrix']?></textarea><br>
    Начальная вершина
    <input style = "width: 80px;" type = "text" name = "start"  value = '<?= $_POST[start]?>'><br>
    Конечная вершина
    <input style = "width: 80px; margin-left: 8px" type = "text" name = "end"  value = '<?= $_POST[end]?>'><br>
    <input type="submit" value="Рассчитать">
    <p>
    0 2 3 4 10 <br>
    1 0 0 1 0<br>
    0 3 0 2 0<br>
    0 0 1 0 5<br>
    0 3 0 0 0
    </p>
</form>

<?php

if ($_POST[start] == "" ){
    exit('Введите первую вершину');
}
if ($_POST[end] == ""){
    exit('Введите вторую вершину');
}
$start = $_POST[start] - 1;
$end = $_POST[end] - 1;
$matrix = explode("\r\n", trim($_POST[matrix], " "));
for($i = 0; $i < count($matrix); $i++) {
    $matrix[$i] = explode(" ", $matrix[$i]);
    if (count($matrix) != count($matrix[$i])) {
        exit('Матрица введена неверно');
    }
}
for ($i = 0; $i < count($matrix); $i++) {
    for ($j = 0; $j < count($matrix); $j++) {
        echo($matrix[$i][$j]);
        echo(" ");
    }
    echo("<br>");
}
for ($i = 0; $i < count($matrix); $i++) {
    $metka[$i] = 999;
}
$minindex = $start;
$index[0] = $start;
$metka[$minindex] = 0;
while ($minindex != -999) { 
    for ($i = 0; $i < count($matrix); $i++) {
        if (!array_search($i, $index) && $matrix[$minindex][$i] != '0') { 
            $temp = $metka[$minindex] + $matrix[$minindex][$i];
            if ($metka[$i] > $temp) {
                $metka[$i] = $temp;
            }
        }
    }
    $minindex = -999;
    $minmetka = 999;
    for ($i = 0; $i < count($matrix); $i++)  {
        $bool = true;
        for ($j = 0; $j < count($index); $j++) {
            if ($i == $index[$j]) {
                $bool = false;
            }
        }
        if ($bool) {
            if ($minmetka > $metka[$i]) {
                $minmetka = $metka[$i];
                $minindex = $i;
            }
        }
    }

    if ($minindex >= 0) {
        array_push($index,$minindex);
    }
}
echo('<br> Кратчайший путь: ' . $metka[$_POST[end]-1]);
?>

</body>
</html>