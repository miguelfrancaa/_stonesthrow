$(".hamb").click(
  function () {
    $(".popup").toggleClass('fechado aberto')
  }
  );

$(".xis").click(
  function () {
    $(".popup").toggleClass('fechado aberto')
  }
  )

//

let numberInputs = document.getElementsByClassName("formInputs").length + 1;

for (let i = 1; i < numberInputs; i++){
  $(".formInput"+i+"").focus(
  function () {
    $(".formLabel"+i+"").css("margin-top", "0px");
  }
  );

document.querySelector(".formInput"+i+"").focusin = function (){
if(document.querySelector(".formInput"+i+"").value === ""){
  document.querySelector(".formLabel"+i+"").style.marginTop = "20px";
}else{
  document.querySelector(".formLabel"+i+"").style.marginTop = "0px";
}
};

document.querySelector(".formInput"+i+"").focusout = function (){
if(document.querySelector(".formInput"+i+"").value === ""){
  document.querySelector(".formLabel"+i+"").style.marginTop = "20px";
}else{
  document.querySelector(".formLabel"+i+"").style.marginTop = "0px";
}
}; 
}


let origin1 = document.querySelector(".price1").innerHTML;
let origin2 = document.querySelector(".price2").innerHTML;
let origin4 = document.querySelector(".price4").innerHTML;

$(".john").hover(function() {
$( this ).attr("src","img/john2.png");
}, function() {
 $( this ).attr("src","img/john1.png");
});

$(".price1").hover(function() {
  $( this ).text("BUY")
}, function() {
   $( this ).text(origin1)
});

$(".chamber").hover(function() {
$( this ).attr("src","img/chamber2.png");
}, function() {
 $( this ).attr("src","img/chamber.png");
});

$(".price2").hover(function() {
  $( this ).text("BUY")
}, function() {
   $( this ).text(origin2)
});

$(".mfdoom").hover(function() {
$( this ).attr("src","img/mfdoom2.png");
}, function() {
 $( this ).attr("src","img/mfdoom.png");
});

$(".price4").hover(function() {
  $( this ).text("BUY")
}, function() {
   $( this ).text(origin4)
});

$(".sudanarchives").hover(function() {
$( this ).attr("src","img/sudanarchives2.png");
}, function() {
 $( this ).attr("src","img/sudanarchives.png");
});

$(".price3").hover(function() {
  $( this ).text("BUY")
}, function() {
   $( this ).text(origin1)
});

$(".menos").click(function() {
  console.log("funca")
});






