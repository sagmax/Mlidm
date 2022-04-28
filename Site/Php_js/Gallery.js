let numberImg = 1;
const countImg = 5;
const countDiv = 10;
const speed = 200;

function GenerateImg () {
    let widthDiv = 500/countDiv
    let Image = "/Site/Img/0"+numberImg+".jpg"
    for (let i=0; i < countDiv; i++){
        let item = $("<div></div>")
        item.addClass("elementImg")
        item.css("height", widthDiv+"px")
        item.css("background-image", 'url('+Image+')')
        
        item.css("background-position-y", - i * widthDiv + "px")
        $("#mainImage").append(item);
    }
}

function Img1 () {
    
    let Image = "/Site/Img/0"+numberImg+".jpg"
    let i = 1;
        
    $("#mainImage div").each(function(){
        
        $(this).hide(speed*i, function(){
        //$(this).animate({left:"400px", speed}, function(){
            $(this).css("background-image",'url('+Image+')');
            $(this).show(speed*i);
         })
         i++;
    })
}

function Img2 () {
    
    let Image = "/Site/Img/0"+numberImg+".jpg"
    let i = 1;
    
    $("#mainImage div").each(function(){
        
        //$(this).fadeOut(speed*i, function(){
        $(this).hide(speed*i, function(){
            $(this).css("background-image",'url('+Image+')');
            $(this).show(speed*i);
         })
         i++;
    })
}

function leftImg () {
    if (numberImg > 1){
        numberImg--;
    }
    else{
        numberImg = countImg;
    }
    Img2 ();
}

function rightImg () {
    if (numberImg < countImg){
        numberImg++;
    }
    else{
        numberImg = 1;
    }
    Img1 ();
}

$( document ).ready(function() {
    GenerateImg();
});

