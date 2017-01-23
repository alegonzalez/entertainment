$(document).ready(function(){
  $("#content").hide();
  $("#drawButton").click(function(){
    $("#content").show(1000);
  });
  $("#order").click(function(){
    $(function () {
      $(".grid").sortable({
        tolerance: 'pointer',
        revert: 'invalid',
        placeholder: 'span2 well placeholder tile',
        forceHelperSize: true
      });
    });
  });
});
//This function show for order
function createElementOrder(){
  $(".grid").remove();
  var element = "";
  element += "<div class='contentDynamic col-md-6 col-md-offset-3'><div class='row grid span8 col-md-8 col-md-offset-2'>";
  element += "<div class='well span2 tile'>A</div>";
  element += "<div class='well span2 tile'>B</div>";
  element += "<div class='well span2 tile'>C</div>";
  element += "<div class='well span2 tile'>D</div>";
  element += "<div class='well span2 tile'>E</div>";
  element += "<div class='well span2 tile'>F</div>";
  element += "<div class='well span4 tile'>G</div>";
  element+= "<div></div>";
  $(".row").after(element);
  $(".grid").show(1000);
}
