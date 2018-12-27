$(document).ready(function () {


    $('#addlist').click(function() {
        $('#addlist').hide();
        $("#insertData").fadeIn(); 
        //console.log('hellow')
    });

    $("#insertUser").submit(function(event) {
        event.preventDefault();
        //console.log('test');
   
    
    let obj = { name:$("input[name=name]").val(),
                username:$("input[name=username]").val(),
                email:$("input[name=email]").val(),
                mobile:$("input[name=mobile]").val(),
                gender:$("input[name=gender]").val()
           }

    $.post('http://localhost/codeignitor/index.php/crudAjax/insertData',
           {insertData:JSON.stringify(obj)},
           function(data) {
               //console.log(data+'testing');
               data = JSON.parse(data);
               if(data.success) {
                   
                  //console.log(data.success);
                   ///console.logr(form_error());
               $('#insertUser')[0].reset();
               $("#insertData").fadeOut();
               showAll();
               $('#addlist').show();
               }else {

                   console.log('No data Found');
                    let i=0;
                    console.log(data);
                   $.each(data,function(key,value) {
                    $('#error-'+key)[0].html(value);
                    console.log($('#error-'+key)[0]);
                    console.log(i)
                    // i++;
                    
                });

                   
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