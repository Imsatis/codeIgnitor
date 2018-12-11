<div class='top'>
<?php echo form_open_multipart('Loginpanel/formValidation');?>
<div class='form-group col-md-4' >
         
         <label for='username'>Username</label>
         <input class='form-control' type='text' name='username' value="<?php echo set_value('username')?>">
         <?php echo form_error('username')?>    
</div>
<div class='form-group col-md-4'>
         
         <label for='email'>Email</label>
         <input class='form-control' type='text' name='email' value="<?php echo set_value('email')?>"> 
         <?php echo form_error('email')?>
</div>
<div class='form-group col-md-4'>
         
         <label for='Password'>Password</label>
         <input class='form-control' type='password' name='password' value="<?php echo set_value('password')?>">
         <?php echo form_error('password')?> 
</div>
<div class='form-group col-md-4'>
         
         <label for='Image'>Image</label>
         <input class='form-control' type='file' name='image' value="<?php echo set_value('image')?>"> 
         <?php echo form_error('image')?> 
</div>
     
<div class='form-group  col-md-4'>    

         <input type="submit" class="btn btn-success signUp" value="Sign Up">
         </form>
         <a href=<?php echo base_url().'Loginpanel'?> class="btn btn-info">Log in</a> 
        
</div>

<div class='form-group  col-md-4'>

         <?php echo $this->session->flashdata('register')?>

</div>


<?php //echo validation_errors();?>
</div>