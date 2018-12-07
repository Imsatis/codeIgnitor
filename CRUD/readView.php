<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Welcome <?php echo ""; ?> </h1>
    
   <?php
   if(!empty($userdata)) {
  
    foreach ($userdata as $key=>$name){

    $path = base_url()."read/user/$name->studentId";
    echo "<a href=$path>".$name->studentName."</a><br>";
   
   }
} 

   if(!empty($user)) {
       
     echo "<br>Name : " .$user->studentName."<br>";
     echo "Email : " .$user->studentEmail."<br>";
     echo "Age : " .$user->studentAge."<br>";
     $update = base_url()."read/update_user/".$user->studentId;
     $delete = base_url()."read/delete_user/".$user->studentId;
     echo "<br><a href='".$update."'><button>Update User</button></a> ";
     echo " <a href='".$delete."'><button>Delete User</button></a><br>"; 
    } 
    
    if(!empty($check)) {
   
        echo "<br><br><form action='' method='post'>
        <input type='text' name='uname' value='".$user->studentName."'><br>
        <input type='text' name='uemail' value='".$user->studentEmail."'><br>
        <input type='text' name='uage' value='".$user->studentAge."'><br>
        <input type='submit' name='submit' value='update'>
        </form>";
    }
 
   ?>


</body>
</html>