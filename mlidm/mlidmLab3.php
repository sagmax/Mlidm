<!DOCTYPE html>
<html lang="en">

<head>
    <title>Лабораторная работа 3</title>
    <script src="mlidmLab3.js"></script>
</head>
<body>
<h1>Лабораторная работа 3</h1>
<form method="" action="" class="form">  
        <table>
            <tr>
                <td>Первое множество</td>
                <td><input type="text" class="arr1" /> </td>
            </tr>
            <tr>
                <td>Второе множество</td>
                <td><input type="text" class="arr2" /> </td>
            </tr>
            <tr>
                <td>Отношение</td>
                <td><input type="text" class="arr3" /> </td>
            </tr>
            <tr>
                <td colspan="2"> <input type="button" value="Рассчитать" onclick="rasschet();"/>
            </tr>
         </form>
        </table>
        Пример ввода: <br>
            1 2 3 <br>
            a b <br>
            1 a 2 b 3 b
    <p id="outResult"></p>
</body>
</html>