<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    

<style>
    .login{
        float:left;
        margin-left:10px;
    }
    .placeholder {
    font-size: 14px;
    padding: 4px 8px;
    margin-left:5px;
    margin-bottom:10px;
    width:40%
    }
    .width{
        width:81.7%;
    }
    input.gendr{
        margin-left:10px;
    }
    .gender{
    color: #1d2129;
    font-size: 18px;
    font-weight: normal;
    line-height: 18px;
    padding: 0 10px 0 3px;   
    }
    input.signUp{
        width:40%;
        margin-left:5px;
    }
    .back{
        #background:#eeeeee;
    }
</style>
</head>
<body>
    
    <div class=loginContainer>
          <div class="container">
                 <div class="jumbotron">
                    <div class="row">
                    <div class="col-md-6"></div>
                    
                      <div class="col-md-6 ">
                       <form action='<?php echo base_url();?>login/check' method="post">
                           <div class="login">
                           <label for="username">Username:</label><br>
                              <input type="text" name="username" required>
                           </div>
                           <div class="login right">
                           <label for="password">Password:</label><br>
                              <input type="password" name="password" >
                            <input type="submit" class="btn btn-primary" value="Log in" name="button"><br>
                            <?php if(!empty($wrong)) echo $wrong;?>
                           
                           </div>
                       </form>
                       </div>
                    </div>
                 </div>
          </div>
    </div>

    <div class="container">
        <div class="jumbotron">
        <div class="row">
             <div class="col-md-6"></div>
             <div class="col-md-6">
             <form action="<?php echo base_url()?>login/insert" method="post">
                           
                    <input class="placeholder" type="text" name="Iname" placeholder="Name" required>
                         
                    <input class="placeholder " type="text" name="Iusername" placeholder="Username" required>
                         
                    <input class="placeholder width" type="text" name="Iemail" placeholder="Email" required>
                         
                    <input class="placeholder width" type="password" name="Ipassword" placeholder="New password" required>
                         
                    <input class="placeholder" type="text" name="Imobile" placeholder="Mobile">

                    <input class="gendr" type="radio" name="Igender" value="male" >
                        <label class="gender">Male</label>

                    <input class="gendr" type="radio" name="Igender" value="female" >
                    <label class="gender">Female</label>
                    <input type="submit" class="btn btn-success signUp" value="Sign Up">
                    <?php if(!empty($right)) echo $right;?>        
            </div>
        </div>
    </div>
  </div>
</body>
</html>