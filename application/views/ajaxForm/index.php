<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax Form</title>
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    
</head>
<body>

    <div class='container'>
    
          <h1 id="test">Employee detail</h1>

           <table class='table table-bordered'>

                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Username</td>
                        <td>Email</td>
                        <td>Gender</td>
                        <td>Mobile</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody id="userdata">
                    
                        
                    
                </tbody>
            
           </table>
           <div id="insertData" style='display:none'>
      
           <form action="" class='' method="post">
           <div class='form-group col-md-4'>
                <label for="name">Name</label>
                    <input class='form-control' type="text" name='name'>
                </div>  
            <div class="form-group col-md-4">
                <label for="username">Username</label>
                    <input class='form-control' type="text" name='username'>
                </div>
            <div class="form-group col-md-4">
                <label for="email">Email</label>
                  <input class='form-control' type="email" name='email'>   
                </div>
            <div class="form-group col-md-4">    
                <label for="mobile">Mobile</label>
                  <input class='form-control ' type="number" name='mobile'>
                </div>
            <div class="form-group col-md-4">          
               <label for="gender">Male</label>
                   <input type="radio"  name="gender" value="male">
               <label for="gender">Female</label>   
                   <input type="radio" name="gender" value="female">
                   <button id='add' type='button' class='btn btn-success'>Add List</button>
                </div>
             
            </form>
             
           </div>

           <button id='addlist' class='btn btn-success'>Add List</button>
</div>

<script src='http://localhost/codeignitor/myJsFile/ajax.js'></script>

</body>
</html>