<div class='top'>
<?php echo form_open_multipart('Loginpanel/formValidation');?>
<div class='form-group col-md-4' >
         
         <label for='username'>Username</label>
         <input class='form-control' type='text' name='username' placeholder=''>
          
</div><?php echo form_error('username')?>
<div class='form-group col-md-4'>
         
         <label for='email'>Email</label>
         <input class='form-control' type='text' name='email' placeholder=''> 
</div>
<div class='form-group col-md-4'>
         
         <label for='Password'>Password</label>
         <input class='form-control' type='password' name='password' placeholder=''> 
</div>
<div class='form-group col-md-4'>
         
         <label for='Password'>Image</label>
         <input class='form-control' type='file' name='image' placeholder=''> 
</div>
     
<div class='form-group  col-md-4'>    

         <input type="submit" class="btn btn-success signUp" value="Sign Up"> 

</div>
</form>

<?php echo validation_errors();?>
</div>