//Problem: User when clicking on image goes to a dead end
//Solution: Create an overlay with the large image - Lightbox

var $overlay = $('<div id="overlay"></div>');
var $image = $("<img>");
var $caption = $("<p></p>");


var $rows = Math.ceil($numPhotos/$columns);
var $pageHeight = $photoSize * $rows * 1.12;

//An image to overlay
$overlay.append($image);

//A caption to overlay
$overlay.append($caption);

//Add overlay
$("body").append($overlay);

//Capture the click event on a link to an image
$("#imageGallery li").children().click(function(event){

  event.preventDefault();
  //var imageLocation = $(this).attr("imageLocation");
  //Update overlay with the image linked in the link
  $image.attr("src", $(this).children().attr("href"));

  var $position =  event.pageY - 50;
  var $total = 2800;

  var $portion = Math.floor(($position*100)/$total);
  console.log ($portion);
  if($portion <= 25)                 $position = $position;
  if($portion > 25 && $portion < 40) $position = $position - 100;
  if($portion > 40 && $portion < 60) $position = $position - 200;
  if($portion > 60 && $portion < 85) $position = $position - 300;
  if($portion >= 85)                 $position = $position - 400;
  console.log($position + $portion);
  console.log($("#overlay img"));
  $("#overlay img").css("margin-top",$position);
  console.log($("#overlay img").css("margin-top"));

  //Show the overlay.
  $overlay.show();
  
  //Get child's alt attribute and set caption
  var captionText = $(this).children().children("img").attr("alt");
  //$caption.text(captionText);
});

$("#imageGallery li").children().hover(function(){

      $(this).parent().css({
        "-webkit-transform": "rotate(0deg)",
        "-moz-transform": "rotate(0deg)",
        "transform": "rotate(0deg)" /* For modern browsers(CSS3)  */
    });
      $(this).parent().css({
        "-webkit-transform": "scale(2.5)",
        "-moz-transform": "scale(2.5)",
        "transform": "scale(2.5)" /* For modern browsers(CSS3)  */
    });

  $(this).parent().css("z-index", "1000");
}, function(){
    $rotate = Math.floor(Math.random() * 70) - 35;
    $rotate_str = 'rotate(' + $rotate +'deg)';
      $(this).parent().css({
        "-webkit-transform": "scale(1.0)",
        "-moz-transform": "scale(1.0)",
        "transform": "scale(1.0)" /* For modern browsers(CSS3)  */
    });
    $(this).parent().css({
        "-webkit-transform": $rotate_str,
        "-moz-transform": $rotate_str,
        "transform": $rotate_str, /* For modern browsers(CSS3)  */
    });
  $(this).parent().css("z-index", "100");

});

//When overlay is clicked
$overlay.click(function(){
  //Hide the overlay
  $overlay.hide();
});

$(function(){

  if($("#redHeader").css("display") != "none") {
    $photoSize = $photoSize * $fullScreenScale;
    $horzSpread = $horzSpread * $fullScreenScale;
    $vertSpread = $vertSpread * $fullScreenScale;
    $pageHeight = $photoSize * $rows * 1.12;
  }

 $("#mainContent").css("min-height",$pageHeight);
  //$("#Gallery").css("background-image", "url(/images/cork.gif)");
 // $("#Gallery").css("height", "100%");
  $("#mainContent").css("background-image", "url(/images/cork.gif)");

  console.log(window.navigator);

  var pics = [];

    var vert_grid = [];
    var horz_grid = [];
    var grid = new Array($rows);
    for (var $i = 0; $i < $rows; $i++) {
      grid[$i] = new Array($columns);
    }


  for($j = 1; $j<= $numPhotos; $j++){
    do{
      $i = 1 + Math.floor(Math.random() *  $numPhotos);
    }while(pics[$i] == 1);
    pics[$i] = 1;

    
    $class_name = ".imgNum" + $j;
    $src = $photoPath + $i + ".jpg";
    $alt = $photoCaption + $i;
    $href = "href=" + $src;
    $img = "<img src='" + $src + "' width = " + $photoSize + " alt ='" + $alt + "'>";
    $link = "<a " + $href + "> " + $img + "</a>";
    //console.log($img);
    $($class_name).append($link);

    max = 0;
    do{
    $top  = Math.floor(Math.random() * $rows);
    $left = Math.floor(Math.random() * $columns);
    //console.log($top + " " + $left);
    max++;
    }while(grid[$top][$left] == 1 || max == 1000);

    grid[$top][$left] = 1; 

    $($class_name).parent().css("top", $top * $vertSpread + $vertOffset);
    $($class_name).parent().css("left", $left * $horzSpread + $horzOffset);

    $rotate = Math.floor(Math.random() * 70) - 35;
    $rotate_str = 'rotate(' + $rotate +'deg)';
    $($class_name).parent().css({
        "-webkit-transform": $rotate_str,
        "-moz-transform": $rotate_str,
        "transform": $rotate_str /* For modern browsers(CSS3)  */
    });

  }
});

$(document).ready(function() {

  for($j = 1; $j<=100; $j++){

    $class_name = ".imgNum" + $j;

    $($class_name).children().children("img").load(function() {

      if($(this).height() > $(this).width()){
        $(this).css('width', 'auto');
        $(this).css('height', $photoSize);
      } 
      if($(this).width() > 2 * $(this).height()){
        $(this).css('width', $photoSize * 1.2);
      } 
    });
  }
});
//href="GA2014Pics/GA2014_<?php echo $i;?>.jpg"><img src="GA2014Pics/GA2014_<?php echo $i;?>.jpg" width="200" alt="Grand Assembly 2014 <?php echo $i;?>"




