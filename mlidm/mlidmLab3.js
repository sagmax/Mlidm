function check1(arr1, arr2){     
    let result = "";
    let k = 0;
    for(let i = 0; i < arr1.length; i++) {
        for(let j = 0; j < arr2.length; j++) {
            if (arr1[i] == arr2[j]){
                k = k + 1;
            }
        }
        if ( k != 1){
            result = 'не является функцией'
        }
        k = 0;
    }
    return result;
}

function check2(arr1, arr2){     
    let result = "";
    let k = 0;
    for(let i = 0; i < arr1.length; i++) {
        for(let j = 0; j < arr2.length; j++) {
            if (arr1[i] == arr2[j]){
                k = k + 1;
            }
        }
    }
    if ( k < 1){
        result = 'не является функцией'
    }
    return result;
}

function validate1(arr1, arr2){    // проверка отношения (не должно быть подряд 2 элементов из одного и того же множества) с четного элелмента
    let k=0;
    let c=0;
    let result = "";
    for(let i = 0; i < arr2.length; i++) {
        for(let j = 0; j < arr1.length; j++) {
            if (c >= 2){
                c = 0;
                k = 0;
            }
            if (arr2[i] == arr1[j]){
                k = k + 1;
            }
            if (k == 2){
                result = "Отношение введено неправильно"
            }
        }
        c++;
    }
    k = 0;                          // с нечетного эелмента
    let c1 = 1;
    for(let i = 0; i < arr2.length; i++) {
        for(let j = 0; j < arr1.length; j++) {
            if (c1 >= 2){
                c1 = 0;
                k = 0;
            }
            if (arr2[i] == arr1[j]){
                k = k + 1;
            }
            if (k == 2){
                result = "Отношение введено неправильно"
            }
        }
        c1++;
    }
    return result;
}

function validate(arr1, arr2, arr3){    // Если в отношении есть символ которого нет в множествах
    let k=0;
    let sum = arr1 + arr2;
    let result = "";
    for(let i = 0; i < arr3.length; i++) { 
        for(let j = 0; j < sum.length; j++) { 
            if (arr3[i] == sum[j]){
                k = k + 1;
            }
        }
        if (k == 0){
            result = "В отношении несуществующий элемент!"
        }
        k = 0;
    }
    return result;
}

function count(arr1, arr2){     
    let result = "";
    let k=0;
    for(let i = 1; i < arr1.length; i++) {
        for(let j = 0; j < arr1.length; j++) {
            if (arr1[i] == arr1[j]){
                k = k + 1;
            }
            if (k >= 2){
                result = "Удалите повторяющиеся элементы из множества"
            }
        }
        k = 0;
    }
    k = 0;
    for(let i = 1; i < arr2.length; i++) {
        for(let j = 0; j < arr2.length; j++) {
            if (arr2[i] == arr2[j]){
                k = k + 1;
            }
            if (k >= 2){
                result = "Удалите повторяющиеся элементы из множества"
            }
        }
        k = 0;
    }
    return result;
}

function check(arr1, arr2, arr3){   
    let result = "";  
    if (arr1 == ''){
        result = "Введите 1 множество"
    }
    if (arr2 == ''){
        result = "Введите 2 множество"
    }
    if (arr3 == ''){
        result = "Введите отношение"
    }
    return result;
}


function rasschet() {
    let result = "";
    let MnA = document.querySelector(".arr1").value;
    let MnB = document.querySelector(".arr2").value;
    let Otn = document.querySelector(".arr3").value;
   
    MnA = MnA.replace(/\s/g, '');

    MnB = MnB.replace(/\s/g, '');

    Otn = Otn.replace(/\s/g, '');

    if (check(MnA,MnB,Otn) != "" ){
        alert(check(MnA,MnB,Otn));
    }else{
        if (count(MnA, MnB) != ""){
            alert(count(MnA, MnB));
        }else{
            if (validate1(MnA, Otn)  != ""){
                alert(validate1(MnA,Otn));
            }else{
                if (validate(MnA, MnB, Otn)  != ""){
                alert(validate(MnA, MnB, Otn));
                }
            }
            if (validate1(MnB, Otn) != ""){
                alert(validate1(MnB,Otn));
            }else{
                if (validate(MnA, MnB, Otn)  != ""){
                alert(validate(MnA, MnB, Otn));
                }
            }
        }
    }
    
    if(check(MnA,MnB,Otn) == "" && validate1(MnA, Otn) == "" && validate1(MnB, Otn) == "" && count(MnA, MnB) == "" && validate(MnA, MnB, Otn) == ""){
        if (check1(MnA,Otn) == "" && check2(MnB,Otn) == "") {
            result = "является функцией A в B\n";
        }
        else{
            result += " не является функцией A в B\n";
        }
        if (check1(MnB,Otn) == "" && check2(MnA,Otn) == "") {
            result += "является функцией B в A\n";
        }
        else{
            result += " не является функцией B в A\n";
        }
        alert(check2(MnA,Otn));
    }
    
    document.getElementById("outResult").innerText = "Результат операций:\n" + result ;
}
