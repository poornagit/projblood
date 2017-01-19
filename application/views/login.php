
<link rel="stylesheet" href="<?php echo base_url('assets/css/style_log.css'); ?>">
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="<?php echo base_url('js/index.js'); ?>"></script>

<!--login-->
<br></br>
<br></br>			
<div class="container">
	<div class="reg-page">
		<div class="form">
			<form action="<?php echo base_url();?>index.php/Donor" method="post" class="login-form">
				<input name="username" type="text" placeholder="Donor name"/>
			    <input name="address" type="text" placeholder="Address"/>
			    <input name="phone" type="text" placeholder="Phone number"/>
			    <input name="data" type="date" placeholder="Birthday"/>
			    <input name="district" type="text" placeholder="District"/>
			    <input name="bloodgroup" type="text" placeholder="Blood group"/>
				<button>register</button>
			</form>
		</div>
	</div>
</div>

	
		
	