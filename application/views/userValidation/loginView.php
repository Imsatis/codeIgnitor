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
    
    <?php echo form_open('Loginpanel/loginCheck');?>
    
    <div class='form-group col-md-4' >
         
         <label for='username'>Username</label>
         <input class='form-control' type='text' name='user' value="<?php echo set_value('user')?>">
         <?php echo form_error('user')?>    
</div>
    
<div class='form-group col-md-4'>
         
         <label for='Password'>Password</label>
         <input class='form-control' type='password' name='userpass' value="<?php //echo set_value('userpass')?>">
         <?php echo form_error('userpass')?> 
</div>

<div class='form-group  col-md-4'>    

<input type="submit" class="btn btn-info " value="Log in">
</form>
<a href=<?php echo base_url().'Loginpanel/index/registrationView'?> class="btn btn-success">Sign Up</a> 

  </div>

</form>

 <div class='form-group  col-md-4'>

      <?php //echo form_error('pass')?>

</div>

</body>
</html>