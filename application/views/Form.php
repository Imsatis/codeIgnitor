<?php

defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title> 
</head>
<body>

<form action='http://localhost/codeignitor/index.php/Form/view/insert' method='post'>
        Userame:<input type='text' name='username'>
        Email:<input type='text' name='email'>
        Password:<input type='password' name='password'>
        <input type='submit' name='submit'>

</form>
        
</body> 
</html>
