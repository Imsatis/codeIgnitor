<div class="contentwrap">
          <div class="container">
              <div class="jumbotron">
                   <div class="row">
                      <div class="col-md-10">
                        <?php
                        echo " <ul><form action='".base_url()."login/update/TRUE' method='POST'>
                        
                        <li><span class='list'> Username: </span><input type='text' name ='Uusername' value='".$_SESSION['user'][0]->_USERNAME."'></li>
                        <li><span class='list'> Name: </span><input type='text' name ='Uname' value='".$_SESSION['user'][0]->_NAME."'></li>
                        <li><span class='list'> Email: </span><input type='text' name ='Uemail' value='".$_SESSION['user'][0]->_EMAIL."'></li>
                        <li><span class='list'> Mobile: </span><input type='text' name ='Umobile' value='".$_SESSION['user'][0]->_MOBILE."'></li>
                        <li><span class='list'> Gender: </span><input type='text' name ='Ugender' value='".$_SESSION['user'][0]->_GENDER."'></li>
                        </ul>
                        </div>
                        <div class='col-md-2'>
                             <a href=''><button class='btn btn-success'>Update</button></a></form>
                        </div>
                        ";?>
                   </div>
              </div>
          </div>
</body>
</html>