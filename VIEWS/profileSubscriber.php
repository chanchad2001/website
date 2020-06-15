<?php ob_start(); ?>


<?php verify_logout() ?>
<?php modify_info() ?>
<?php modify_bio(); ?>

<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-push-0 animate-box">
				<h3>Vos Informations :</h3>
					<div class="col-md-0 animate-box">
						<p>Voici vos informations. Modifiez juste ce que vous voulez ! </br> Attention aucun retour en arrière n'est possible !</p>
					</div>
					<form action="" method="POST" enctype="multipart/form-data">
                        <div class="row form-group">
							<div class="col-md-6">
								<input type="text" id="fname" class="form-control" name="firstname" placeholder="<?= $_SESSION['name'] ?>">
							</div>
							<div class="col-md-6">
								<input type="text" id="lname" class="form-control" name="name" placeholder="<?= $_SESSION['pseudo'] ?>">
							</div>
                        </div>
						<div class="row form-group">
							<div class="col-md-12">
								<input type="text" id="email" class="form-control" name="email" placeholder="<?= $_SESSION['email'] ?>">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<input type="password" id="password" class="form-control" name="password" placeholder="Votre nouveau mot de passe" >
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="subject">Subject</label> -->
								<input type="password" id="password" class="form-control" name="password_conf" placeholder="Confirmation de votre nouveau mot de passe" >
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<input type="file" id="ffile" class="form-control" name="avatar" placeholder="Inserez votre photo de profil" >
							</div>
						</div>
                        <div class="form-group">
							<input type="submit" value="Modifier ces Informations" name="submit_info" class="btn btn-primary">
						</div>
					</form>
				</div>
				<div class="col-md-4 col-md-push-3 animate-box">
                    <h3>Votre Profil : </h3>
                    <div class="row form-group">
                        <div class="col-md-offset-2">
                            <img src="images/<?= $_SESSION['photo'] ?>" alt="<?= $_SESSION['pseudo'] ?>" style="width:250px; height: 250px;">
                        </div>
                    </div>    
					<form action="" method="POST">
						<div class="row form-group">
							<div class="col-md-12">
								<textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="<?= getBio() ?>"></textarea>
                            </div>
                        </div>
                        <div class="row form-group">
							<div class="col-md-12">
                                <label for="statut">Status : </label>
								<select class="form-control" name="status">
									<option value="none" id="statut" <?= is_selected("none") ?>>Selectionnez un status</option>
									<option value="Connecté" id="statut" <?= is_selected("Connecté") ?>>Connecté</option>
									<option value="travail" id="statut" <?= is_selected("travail") ?>>Au travail</option>
									<option value="Absent" id="statut"  <?= is_selected("Absent") ?>>Absent</option>
									<option value="concentre" id="statut"  <?= is_selected("concentre") ?>>Concentré</option>
								</select>
								<!-- <input type="text" id="statut" class="form-control" name="email" placeholder="Votre Statut"> -->
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Enregister" name ="submit_bio" class="btn btn-primary">
						</div>
					</form>		
					<form action="" method="POST">
						<input type="submit" value="déconnection" name ="logout" class="btn btn-primary">
					</form> 
				</div>
			</div>
		</div>
	</div>

<?php $content = ob_get_clean(); 
include('template.php');
