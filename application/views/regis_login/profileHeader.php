
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<style>

.list{
    color:red;
}
</style>
</head>
<body>
    
<div class="black"> 
    <div class="topwrap">
          <div class="container">
              <div class="jumbotron">
                   <div class="row">
                        <div class="col-md-10">
                             <h2>Welcome <?php echo $_SESSION['user'][0]->_NAME;?>!</h2>                        </div>
                        <div class="col-md-2">
                         <form action="<?php echo base_url();?>login" method='post'> 
                         <button class="btn btn-primary" name="logout" value='TRUE'>Log out</button>
                        </form>
                         </div>
                   </div>
              </div>
          </div>
    </div>