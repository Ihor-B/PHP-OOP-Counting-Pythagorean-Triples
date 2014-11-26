
	$(document).ready(function () {

    $('#count').click(function(){
      $.ajax({
        type: 'GET',
        dataType: 'json',
        url: 'classes/counting.php',
        data: 'integers=' + $('#integers').val(),
        success: function(response){
          $.each(response, function(index, number) {
            $('#result').html(number.i);
          });
          $.each(response, function(index, data) {
            $("#list").append("<li>" + data.a + " - " + data.b + " - " + data.c + "</li>");
          });
        }
      });
      return false;
    });

	});