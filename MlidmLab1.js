var arr1, arr2, error;

function count(arr, el) {
    let c = 0;
    for(let i=0; i<arr.length; i++)
        if( arr[i] == el)
            c++;
    return c;
}
//Валидация ввода
function check(str){
    let arr = false;
    if(str.length>0){
        arr = str.split(" ");
        for(let i=0; i< arr.length; i++){
            if (count(arr, arr[i]) > 1){
                arr.splice(i, 1);
                i--;
            }
        }
        //Проверка на ввод
        for(let i=0; i< arr.length; i++) {

            if (arr[i][0] < 1 || arr[i][0] > 9) {
                error = "Ошибка при вводе массива\n" + str + " В элементе " + arr[i];
                error += "\nДолжна быть введена цифра";
                error += "\nИсправьте 1 элемент (" + arr[i][0] + ")";
                arr = false;
                break;
            }
            if (arr[i][1] < 1 || arr[i][0] > 9) {
                error = "Ошибка при вводе массива\n" + str + " В элементе " + arr[i];
                error += "\nДолжна быть введена цифра";
                error += "\nИсправьте 2 элемент (" + arr[i][1] + ")";
                arr = false;
                break;
            }
            if (arr[i][2] < 1 || arr[i][0] > 9) {
                error = "Ошибка при вводе массива\n" + str + " В элементе " + arr[i];
                error += "\nДолжна быть введена цифра";
                error += "\nИсправьте 3 элемент (" + arr[i][2] + ")";
                arr = false;
                break;
            }
            if (arr[i][3] % 2 != 0) {
                error = "Ошибка при вводе массива\n" + str + " В элементе " + arr[i];
                error += "\nДолжна быть введена чётная цифра";
                error += "\nИсправьте 4 элемент (" + arr[i][3] + ")";
                arr = false;
                break;
            }
        }
    }
    else{
        error = "Массив не должен быть пустым";
    }
    return arr;
}
//Объединение
function unification(arr1, arr2){
    let result = "";
    for(let i=0; i<arr1.length; i++){
        result += arr1[i] +" ";
    }
    for(let i=0; i<arr2.length; i++){
        if(arr1.indexOf(arr2[i]) == -1){
            result += arr2[i] + " ";
        }
    }
    return result;
}
//Пересечение
function intersection(arr1, arr2){
    let result = "";
    for(let i=0; i<arr2.length; i++){
        if(arr1.indexOf(arr2[i]) != -1){
            result += arr2[i] + " ";
        }
    }
    return result;
}
//дополнение массива
function addition(arr1,arr2){
    let result= "";
    for(let i=0; i<arr1.length; i++){
        if(arr2.indexOf(arr1[i]) == -1){
            result += arr1[i] + " ";
        }
    }
    return result;
}
//симметрическая разность
function SymmetricDifference(arr1,arr2){
    let result= "";
    result = addition(arr1,arr2) +" " + addition(arr2,arr1);
    return result;
}
//Основая функция
function rasschet() {
    let result = "";
    var errorarr1 = document.getElementById('arr1');
    var errorarr2 = document.getElementById('arr2');
    if ((arr1 = check(errorarr1.value)) == false){
        alert(error);
    }
    if ((arr2 = check(errorarr2.value)) == false){
        alert(error);
    }
    else{
        result = "Объединение: " + unification(arr1, arr2) + "\n";
        result += "Пересечение: " + intersection(arr1, arr2) + "\n";
        result += "Дополнение 1 массива: " + addition(arr1, arr2) +"\n";
        result += "Дополнение 2 массива: " + addition(arr2, arr1) +"\n";
        result += "Симметрическая разность: " + SymmetricDifference(arr1, arr2);   
    }
    document.getElementById("outResult").innerText = "Результат операций:\n" + result;
}
  
  