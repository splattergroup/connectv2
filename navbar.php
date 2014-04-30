<div class="navbar navbar-fixed-top header">
 	<div class="col-md-12">
        <div class="navbar-header">
          
          <a href="#" class="navbar-brand">Welcome to Splatter Connect</a>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse1">
          <i class="glyphicon glyphicon-search"></i>
          </button>
      
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse1">
          
          <ul class="nav navbar-nav navbar-right">
             <li><a href="#registerModal" role="button" data-toggle="modal">Register</a></li>
             <li><a href="#loginModal" role="button" data-toggle="modal">Login</a></li>
	     <?php
	     
	     $languages = getLanguages($database);
	     foreach ($languages as $language=>$value){

		?>
		 <li><a href="?lang=<?php echo $value['lang_code'];?>">
		<img src=""
		class="flag flag-<?php echo $value['flag_code'];?>"
		alt="<?php echo $language;?>" /></a></li>
            <?php 
                
            }
		
	?>
	     
	  </ul>
        </div>	
     </div>	
</div>
<div class="navbar navbar-default" id="subnav">
    <div class="col-md-12">
        
        <div class="collapse navbar-collapse" id="navbar-collapse2">


        		


            
        </div>	
     </div>	
</div>

<!--login modal-->
<div id="loginModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="text-center">Login To Splatter Connect</h3>
            </div>
            <div class="modal-body">
                <form class="form col-md-12 center-block">
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control input-lg" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-lg btn-block">Sign In</button>
			<h3 class="text_center">or</h3>
			<button class="btn btn-primary btn-lg btn-block">Facebook</button> 
                        <button class="btn btn-danger btn-lg btn-block">Google+</button> 
                        <button class="btn btn-info btn-lg btn-block">Twitter</button> 
                        <span class="pull-right"><a href="#registerModal" role="button" data-toggle="modal" data-dismiss="modal" aria-hidden="true">Register</a></span><span><a href="#">Need help?</a></span>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="col-md-12">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
		</div>	
            </div>
        </div>
    </div>
</div>


<!--login modal-->
<div id="registerModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-register">
        <div class="modal-content">
            <div class="modal-body">
                
                <div class="form col-md-12 center-block">
                    <div class="col-md-4">
                    
                    </div>
                </div>
                <form class="form col-md-12 center-block" id="register-form" role="form" method="post" action="" enctype="multipart/form-data">
			<div class="form-group">
			    <h3>Register for work with Splatter</h3>
			</div>

			<div class="form-group">
			    <input type="text" name="first-name" class="form-control input-sm" placeholder="First Name" required>
			</div>
			<div class="form-group">
			    <input type="text" name="last-name" class="form-control input-sm" placeholder="Last Name" required>
			</div>
			<div class="form-group">
			    <input type="text" name="mobile" minlength="9" maxlength="15" value="" class="form-control input-sm" placeholder="Mobile Number" required>
			</div>
			<div class="form-group">
			    <input type="text" name="email" id="email" class="form-control input-sm" placeholder="Email Address" required>
			</div>
			
			<div class="form-group">
			    <input type="password" name="pass" id="pass" minlength="6" class="form-control input-sm" placeholder="Password" required>
			</div>
			<div class="form-group">
			    <input type="password" name="confirm-pass" minlength="6" class="form-control input-sm" placeholder="Retype Password" required>
			</div>
			<div class="form-group">
				<select name="town" class="form-control input-sm"  required>
					<option value="">Choose Town</option>
					<?php 
					//need to implement country detection from IP
					$country_id = 1;
					$towns = getAllTowns($database, $country_id);
					foreach ($towns as $town){
						echo '<option value="'.$town['town_id'].'">'.$town['town_name'].'</option>';
					}
					?>
				</select>
			</div>
			<div class="row">
				<!-- blank row to line up form elements -->
			</div>
			<div class="row form-group">
				<div class="col-xs-4 col-md-4">
					<select name="day" class = "form-control input-sm"  required>
						<option value="">Date of Birth - Day</option>
						<?php 
						for($i = 1; $i < 32; $i++){
						?>	
							<option value="<?php echo $i ?>"><?php echo $i ?></option>
						<?php 
						}
						?>
					</select>                    
				</div>
				<div class="col-xs-4 col-md-4">
					<select name="month" class = "form-control input-sm"  required>
						<option value="">Date of Birth - Month</option>
							<?php 
							for($i = 1; $i < 13; $i++){
							?>	
								<option value="<?php echo $i ?>"><?php echo $i ?></option>
							<?php 
							}
							?>
					</select>    
                    	        </div>
				<div class="col-xs-4 col-md-4">
					<select name="year" class = "form-control input-sm" required>
						<option value="">Date of Birth -Year</option>
							<?php 
							for($i = 1940; $i < 2000; $i++){
							?>	
								<option value="<?php echo $i ?>"><?php echo $i ?></option>
							<?php 
							}
							?>
					</select>
				</div>
			</div>

			<span class="help-block"><?php echo $lang['JOIN_TERMS'];?></span>
                    
            	
			<div class="form-group">
			    <button class="btn btn-primary btn-lg btn-block">Register</button>
			</div>
			<div class="form-group text-center">
				<h3>Or Sign Up Using</h3>
			</div>
			
			<div class="form-group text-center">
			    <button class="btn btn-primary btn-lg">Facebook</button> 
			    <button class="btn btn-danger btn-lg">Google+</button> 
			    <button class="btn btn-info btn-lg">Twitter</button> 
			    <button class="btn btn-primary btn-lg">LinkedIn</button> 
			</div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="col-md-12">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
		</div>	
            </div>
        </div>
    </div>
</div>


<script>
$("#register-form").validate({
rules: 	{
	
	email: {
		required: true,
		email: true
	},
	mobile: {
		required: true,
		digits: true
	},
	pass: "required",
	confirm_pass: {
		equalTo: "#pass"
	}
}
});

$("#email").blur(function(){
	$.ajax({
		type: "POST",
		data: "email="+$(this).val(),
		url: "scripts/registration/checkemail.php",
		success: function(data){

		}
	});
});	
</script>