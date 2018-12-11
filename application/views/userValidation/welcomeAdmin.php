<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome Admin</title>
</head>
<body>
    
<h1>Welcome <?php print_r($this->session->userdata('user')[0]->username);?></h1>

<a href=<?php echo base_url().'Loginpanel/logout'?> class="btn btn-danger">Log out</a> 

</body>
</html>