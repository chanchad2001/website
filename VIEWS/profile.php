<?php ob_start(); ?>

<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5  col-md-push-0 animate-box">
                <h3>Vos Informations :</h3>
                    <form action="" method="POST">
                        <div class="row form-group">
							<div class="col-md-6">
								<input type="text" id="fname" class="form-control" name="firstname" placeholder="Romain">
							</div>
							<div class="col-md-6">
								<input type="text" id="lname" class="form-control" name="name" placeholder="Berthoule">
							</div>
                        </div>
                        <div class="row form-group">
							<div class="col-md-12">
								<input type="text" id="fname" class="form-control" name="pseudo" placeholder="Throows">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<input type="text" id="email" class="form-control" name="email" placeholder="thoowsdev@gmail.com">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="subject">Subject</label> -->
								<input type="password" id="password" class="form-control" name="password" placeholder="Votre nouveau mot de passe" >
							</div>
                        </div>
                        <div class="form-group">
							<input type="submit" value="Modifier ces Informations" name="submit_info" class="btn btn-primary">
						</div>
					</form>
				</div>
				<div class="col-md-6 animate-box">
                    <h3>Votre Profil : </h3>
                    <div class="row form-group">
                        <div class="col-md-offset-3">
                            <img src="images/<?= $_SESSION['photo'] ?>" alt="<?= $_SESSION['pseudo'] ?>" style="width:250px; height: 250px;">
                        </div>
                    </div>    
					<form action="" method="POST">
						<div class="row form-group">
							<div class="col-md-12">
								<textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Votre Bio..."></textarea>
                            </div>
                        </div>
                        <div class="row form-group">
							<div class="col-md-12">
                                <label for="statut">Statut : </label>
								<input type="textarea" id="statut" class="form-control" name="email" placeholder="Votre Statut">
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Modifier ces Informations" name ="submit_bio" class="btn btn-primary">
						</div>
					</form>		
				</div>
			</div>
		</div>
	</div>

<?php $content = ob_get_clean(); 
include('template.php');