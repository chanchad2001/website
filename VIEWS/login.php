<?php ob_start(); ?>

	<?php verify_credentials(); ?>
	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-6  col-md-push-0 animate-box">
                <h3>Connection :</h3>
                    <form action="" method="POST">
						<div class="row form-group">
							<div class="col-md-10">
								<!-- <label for="email">Email</label> -->
								<input type="text" id="email" class="form-control" name="email" placeholder="Votre addresse E-mail" required>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-10">
								<!-- <label for="subject">Subject</label> -->
								<input type="password" id="password" class="form-control" name="password" placeholder="Votre mot de passe" required>
							</div>
                        </div>
                        <div class="form-group">
							<input type="submit" value="Valider" name="submit_login" class="btn btn-primary">
						</div>
					</form>
				</div>
				<div class="col-md-6 animate-box">
					<h3>Formulaire d'inscription :</h3>
					<form action="" method="POST">
						<div class="row form-group">
							<div class="col-md-6">
								<!-- <label for="fname">First Name</label> -->
								<input type="text" id="fname" class="form-control" name="name" placeholder="Votre nom">
							</div>
							<div class="col-md-6">
								<!-- <label for="lname">Last Name</label> -->
								<input type="text" id="lname" class="form-control" name="pseudo" placeholder="Votre pseudo">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="text" id="email" class="form-control" name="email" placeholder="Votre addresse E-mail">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="subject">Subject</label> -->
								<input type="password" id="subject" class="form-control" name="password" placeholder="Votre mot de passe">
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Valider" name ="submit_register" class="btn btn-primary">
						</div>
					</form>		
				</div>
			</div>
		</div>
	</div>

<?php $content = ob_get_clean(); 
include('template.php'); 