<?php ob_start(); ?>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<?php verify_logout() ?>

<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5  col-md-push-0 animate-box">
                <h3>Vos Informations :</h3>
                    
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
							<input type="submit" value="Enregister" name ="submit_bio" class="btn btn-primary">
						</div>
					</form>		
					<button class="btn btn-primary" onclick="document.getElementById('id01').style.display='block'">Modifier mon profil</button>
					<form action="" method="POST">
					<input type="submit" value="déconnection" name ="logout" class="btn btn-primary">
					</form> 
				</div>
			</div>
		</div>
	</div>

<?php $content = ob_get_clean(); 
include('template.php');

/*
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
*/