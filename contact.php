<?php include 'partials/header.php'; ?>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="contact-form">
				<h2 style="text-align: center; margin: 0;">Contact Us </h2>
				<small>message will be sent to <em>joshuabriney@yahoo.com</em></small>
				<div id="error"></div>
				<form method="POST">
				  <div class="form-group">
					<label for="name">Name</label>
					<input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter email" name="name">
				  </div>
				  <div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
				  </div>
				  <div class="form-group">
					<label for="subject">Subject</label>
					<input type="text" class="form-control" id="subject" placeholder="Password" name="subject">
				  </div>
				 
				  <div class="form-group">
					<label for="content">Message:</label>
					<textarea class="form-control" id="content" rows="10" name="content"></textarea>
				  </div>
				  
				  <button type="submit" id="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="contact-info">
				<h2>Contact Info</h2>
				<p>1324 Benton Harbor, MI 49022</p>
				<p>Phone: 269-369-2242 CALL or TEXT!!!</p>
				<p>Fax: 269-588-4607</p>
				<p>Office Hours:</p>
				<p>Monday - Friday 8AM to 7PM</p>
				<a target="_blank" title="find us on Facebook" href="https://www.facebook.com/Briney-Construction-Services-Inc-101990093213634/"><img alt="find us on facebook" class="facebook" src="//login.create.net/images/icons/user/facebook-b_130x50.png" border=0></a>
			</div>
		</div>
	</div>
</div>
<?php include 'partials/footer.php'; ?>