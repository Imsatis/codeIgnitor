



    <div class="contentwrap">
          <div class="container">
              <div class="jumbotron">
                   <div class="row">
                      <div class="col-md-10">
                        <?php
                        echo " <ul>
                        
                        <li><span class='list'> Username: </span>".$_SESSION['user'][0]->_USERNAME."</li>
                        <li><span class='list'> Name: </span>".$_SESSION['user'][0]->_NAME."</li>
                        <li><span class='list'> Email: </span>".$_SESSION['user'][0]->_EMAIL."</li>
                        <li><span class='list'> Mobile: </span>".$_SESSION['user'][0]->_MOBILE."</li>
                        <li><span class='list'> Gender: </span>".$_SESSION['user'][0]->_GENDER."</li>
                        </ul>";?>
                        </div>
                        <div class="col-md-2">
                             <a href="<?php echo base_url();?>login/update"><button class="btn btn-success">Update Profile</button></a>
                        </div>
                        
                   </div>
              </div>
          </div>
</body>
</html>