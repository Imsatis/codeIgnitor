$(document).ready(function () {


    $('#addlist').click(function() {
        $('#addlist').hide();
        $("#insertData").fadeIn(); 
        console.log('hellow')
    });

    $("#add").click(function(e) {
    //e.preventDefault();
    let obj = { name:$("input[name=name]").val(),
                username:$("input[name=username]").val(),
                email:$("input[name=email]").val(),
                mobile:$("input[name=mobile]").val(),
                gender:$("input[name=gender]").val()
           }

    $.post('http://localhost/codeignitor/index.php/crudAjax/insertData',
           {insertData:JSON.stringify(obj)},
           function(data) {
               if(data) {
               $("#insertData").fadeOut();
               showAll();
               $('#addlist').show();
               }
           }
    );
    });



    function showAll() {

        $.post("http://localhost/codeignitor/index.php/crudAjax/showAll", {},
            function (data) {
                
                data = JSON.parse(data);
                //console.log(data);
                let html = '';
                for (x in data) {
                    // console.log(data[x]);
                    html += "<tr>" +
                        "<td>" + data[x]._NAME + "</td>" +
                        "<td>" + data[x]._USERNAME + "</td>" +
                        "<td>" + data[x]._EMAIL + "</td>" +
                        "<td>" + data[x]._GENDER + "</td>" +
                        "<td>" + data[x]._MOBILE + "</td>" +
                        "<td>" +
                        "<a href='#' class='btn btn-info'>Edit</a>" +
                        "<a href='#' class='btn btn-danger'>Delete</a>" +
                        "</td>" +
                        "</tr>";
                }
                $("#userdata").html(html);

            }
        );


    }
    showAll();

});