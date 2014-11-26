
	$(document).ready(function () {

    $('#count').click(function(){
      $.ajax({
        type: 'GET',
        dataType: 'json',
        url: 'classes/counting.php',
        data: 'integers=' + $('#integers').val(),
        success: function(response){
          $('#result').html(
            response['result']
          );
        }
      });
      return false;
    });

	});