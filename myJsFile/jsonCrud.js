$(document).ready(function() {

    function showData(){
        $.post('JsonCrud/readData',
        {},
        function(data) {
            data = JSON.parse(data);

            let html = '';
            //console.log(data);
            for (x in data.user) {
                //console.log(x);

                html += "<tr>" +
                    "<td>" + data.user[x].name[0] + "</td>" +
                    "<td>" + data.user[x].name[1] + "</td>" +
                    "<td>" + data.user[x].name[2] + "</td>" +
                    "<td>" + data.user[x].name[3] + "</td>" +
                    "<td>" + data.user[x].username + "</td>" +
                    "<td>" +
                    "<button id='edit' value='"+data.id[x]+"'>Edit</button>" +
                    "<a href='rf' class='btn id='delete' value='"+data.id[x]+"'>Delete</a>" +
                    "</td>" +
                    "</tr>";
            }

         $('#userdata').html(html);
        }
        )
    }showData();

    $(document).on('click', '#edit', function(event) { 


           
          $.post('JsonCrud/selectbyid',
          {id:event.target.value},
          function(data) {
              data = JSON.parse(data);
              //console.log(data)
              $('#update').show();
              for(let i=0;i<$('#update form')[0].length-1;i++) {
                if($('#update form')[0][i].name !== 'username') {
                $('#update form')[0][i].value = data.name[i];
                } else{
                $('#update form')[0][i].value = data.username;
                $('#update form')[0][i+1].id = event.target.value; 
                }
              }

          }
          );
     });

     $('#update form').submit(function(event) {
         event.preventDefault();
         //console.log($('#update form').serialize())
         let id = $('#update form')[0][5].id;
         $.post('JsonCrud/updatebyid/'+id,
         $('#update form').serialize(),
         function (data) {
             console.log(data);
             $('#update form')[0].reset();
             $('#update form').hide();
             showData();
         })
     });


    // $('#test').click(function(event) {
    //     //event.preventDefault();

    //     console.log('hi');
        
    // });


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

    $('#fetch').submit(function(event) {//
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