<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    
    <?php echo form_open();?>
    
    <div class='form-group col-md-4' >
         
         <label for='username'>Username</label>
         <input class='form-control' type='text' name='username' value="<?php echo set_value('username')?>">
         <?php echo form_error('username')?>    
</div>
    
<div class='form-group col-md-4'>
         
         <label for='Password'>Password</label>
         <input class='form-control' type='password' name='password' value="<?php echo set_value('password')?>">
         <?php echo form_error('password')?> 
</div>

    </form>
</body>
</html>