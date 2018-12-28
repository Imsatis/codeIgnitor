$(document).ready(function() {

    $('#form').submit(function(event) {
        event.preventDefault();
       $.post('JsonCrud/insert',
       $('#form').serialize(),
       function(data) {
           if(data) {
            $('#form')[0].reset();
           }
       })
    });

    $('#fetch').submit(function(event) {
        event.preventDefault();
        $.post('JsonCrud/searchData',
        $('#fetch').serialize(),
        function(data) {
            //console.log(data);
           
            $('#show').html(data);
        }
        )

    });

});