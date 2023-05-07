var mainmage = document.getElementById("mainmage");
var smallimg = document.getElementsByClassName("small-img");

smallimg[0].onclick = function(){
    mainmage.src = smallimg[0].src;
}
smallimg[1].onclick = function(){
    mainmage.src = smallimg[1].src;
}
smallimg[2].onclick = function(){
    mainmage.src = smallimg[2].src;
}
smallimg[3].onclick = function(){
    mainmage.src = smallimg[3].src;
}
