<?php ob_start(); ?>

	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-6  col-md-push-0 animate-box">
                <h3>Connection :</h3>
                    <form action="">
						<div class="row form-group">
							<div class="col-md-10">
								<!-- <label for="email">Email</label> -->
								<input type="text" id="email" class="form-control" placeholder="Ton addresse E-mail">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-10">
								<!-- <label for="subject">Subject</label> -->
								<input type="password" id="password" class="form-control" placeholder="Ton mot de passe">
							</div>
                        </div>
                        <div class="form-group">
							<input type="submit" value="Valider" class="btn btn-primary">
						</div>
					</form>
				</div>
				<div class="col-md-6 animate-box">
					<h3>Formulaire d'inscription :</h3>
					<form action="">
						<div class="row form-group">
							<div class="col-md-6">
								<!-- <label for="fname">First Name</label> -->
								<input type="text" id="fname" class="form-control" placeholder="Your firstname">
							</div>
							<div class="col-md-6">
								<!-- <label for="lname">Last Name</label> -->
								<input type="text" id="lname" class="form-control" placeholder="Your lastname">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="text" id="email" class="form-control" placeholder="Your email address">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="subject">Subject</label> -->
								<input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="message">Message</label> -->
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Valider" class="btn btn-primary">
						</div>

					</form>		
				</div>
			</div>
			
		</div>
	</div>
	<div id="map" class="fh5co-map"></div>
	<div id="fh5co-started" style="background-image:url(images/img_bg_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Lets Get Started</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center">
					<p><a href="#" class="btn btn-default btn-lg">Create A Free Course</a></p>
				</div>
			</div>
		</div>
	</div>


<?php $content = ob_get_clean(); 
include('template.php');