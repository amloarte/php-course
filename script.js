$(document).ready(function() {

    $("#operaciones").submit(function(e) {
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: 'operaciones.php',
            data: $(this).serialize(),
            success: function(response) {
                $("#total").html(response)
            }
        })
    });

    $("#edad").submit(function(e) {
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: 'operaciones.php',
            data: $(this).serialize(),
            success: function(response) {
                console.log(response)
                $("#resultado").html(response)
            }
        })
    });

});