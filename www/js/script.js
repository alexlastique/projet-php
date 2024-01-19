var carousel = $(".carousel"),
    items = $(".item"),
    currdeg  = 0;

$(".next").on("click", { d: "n" }, rotate);
$(".prev").on("click", { d: "p" }, rotate);

// Ajout de la rotation automatique chaque 3 secondes
var autoRotate = setInterval(function() {
    currdeg = currdeg - 60;
    rotate({ data: { d: "n" } });
}, 3000);

function rotate(e){
  if(e.data.d=="n"){
    currdeg = currdeg - 60;
  }
  if(e.data.d=="p"){
    currdeg = currdeg + 60;
  }
  carousel.css({
    "-webkit-transform": "rotateY("+currdeg+"deg)",
    "-moz-transform": "rotateY("+currdeg+"deg)",
    "-o-transform": "rotateY("+currdeg+"deg)",
    "transform": "rotateY("+currdeg+"deg)"
  });
  items.css({
    "-webkit-transform": "rotateY("+(-currdeg)+"deg)",
    "-moz-transform": "rotateY("+(-currdeg)+"deg)",
    "-o-transform": "rotateY("+(-currdeg)+"deg)",
    "transform": "rotateY("+(-currdeg)+"deg)"
  });
}

// Arrête la rotation automatique lorsqu'un bouton est cliqué
$(".next, .prev").on("click", function() {
    clearInterval(autoRotate);
});
