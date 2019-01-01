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
                    "<button id='delete' value='"+data.id[x]+"'>Delete</button>" +
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
              $('#update').fadeIn();
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

     $(document).on('click','#delete',function(event) {

        $.post('JsonCrud/deletebyid/'+event.target.value,
        {},
        function(data) {

             if(data) {

                // In this we are selecting that particular event in which event is occur and then we are selecting parent of parent to hide the whole row;
                 $(event.target).parent().parent().fadeOut('slow');
                
                // In this we are selecting Element from its id and jQuery selects the first Id in multiple ID's and return it,and thats why it hiding only the first id in the stack. 
                // $('#'+event.target.id).parent().parent().fadeOut('slow');

             }

        });

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
             $('#update').hide();
             showData();
         })
     });


    // $('#test').click(function(event) {
    //     //event.preventDefault();

    //     console.log('hi');
        
    // });

     $(document).on('click','#chk',function(event) {
       // $('#chk').click(function (event) {
        console.log($('#'+event.target.id).html());
    });


    $('#form').submit(function(event) {
        event.preventDefault();
       $.post('JsonCrud/insert',
       $('#form').serialize(),
       function(data) {
           if(data) {
            $('#form')[0].reset();
            showData();
           }
       })
    });

    $('#fetch').keyup(function(event) {
        
        event.preventDefault();
        $.post('JsonCrud/searchData',
        $('#fetch').serialize(),
        function(data) {
            console.log(data);
           
            $('#show').html(data);
        });

    });

    $('#fetch').submit(function(event) {
        console.log('chk');
        event.preventDefault();
    });

});

//Active resource loading counts reached a per-frame limit while the tab was in background. Network requests will be delayed until a previous loading finishes, or the tab is brought to the foreground. See https://www.chromestatus.com/feature/5527160148197376 for more details