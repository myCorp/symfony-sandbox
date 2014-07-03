$(document).ready(function()
{
    $(".points").mouseover(function()
    {        
        //console.log($(this));
        var article_id = $(this).attr("id");
        var data = {
          "article_id": article_id
        };
        data = $(this).serialize() + "&" + $.param(data);
        //console.log(data);
        
        $.ajax({
          type: "POST",
          dataType: "json",
          url: "Zadanie1json.php",
          data: data,

          success: function(data)
          {
          $(".qwe").html("<br />JSON: " + data["json"] + data);

          //$(".title").html(data["qss"]);
          console.dir(data);
          $( ".points" ).attr( "title", data["qss"] );

          //alert(data);
          }
      });
    });
});

