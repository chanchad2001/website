<?php ob_start(); ?>

    <div id="fh5co-explore" class="fh5co-bg-section">
        <div class="fh5co-explore">
			<div class="container animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h3>Rechercher un tutoriel :</h3>
					<input type="text" id="fname" class="form-control" name="search" id="search" placeholder="Tutoriel Html">
				</div>
			</div>
		</div>
		<div class="fh5co-explore">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
						<h2>Derniers cours disponible :</h2>
					</div>
				</div>
				<div class="row">
							<div class="col-lg-4 col-md-4">
								<div class="fh5co-blog animate-box">
									<a href="#"><img class="img-responsive" src="images/LED.webp" style="width:359px; height:256px;" alt=""></a>
									<div class="blog-text">
										<h3><a href=""#>Arduino : les LEDs (diode électroluminescente) </a></h3>
										<span class="posted_on">jun. 15th</span>
										<span class="comment"><a href="">42<i class="icon-speech-bubble"></i></a></span>
										<p><b>Tutoriel n°1 :</b> Dans ce tutoriel nous parlerons des leds et de tous ce qui est important a sont fonctionnement (Resistance, loi d'Ohm etc).</p>
										<a href="tutoriel/arduino/id=1" class="btn btn-primary">Read More</a>
									</div> 
								</div>
							</div>
							<div class="col-lg-4 col-md-4">
								<div class="fh5co-blog animate-box">
									<a href="#"><img class="img-responsive" src="images/project-2.jpg" alt=""></a>
									<div class="blog-text">
										<h3><a href=""#>45 Minimal Worksspace Rooms for Web Savvys</a></h3>
										<span class="posted_on">Nov. 15th</span>
										<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
										<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
										<a href="#" class="btn btn-primary">Read More</a>
									</div> 
								</div>
							</div>
							<div class="col-lg-4 col-md-4">
								<div class="fh5co-blog animate-box">
									<a href="#"><img class="img-responsive" src="images/project-3.jpg" alt=""></a>
									<div class="blog-text">
										<h3><a href=""#>45 Minimal Workspace Rooms for Web Savvys</a></h3>
										<span class="posted_on">Nov. 15th</span>
										<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
										<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
										<a href="#" class="btn btn-primary">Read More</a>
									</div> 
								</div>
							</div>
						</div>
				<div class="row animate-box">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
						<h2>Cours à la Une :</h2>
					</div>
				</div>
				<div class="row">
							<div class="col-lg-4 col-md-4">
								<div class="fh5co-blog animate-box">
									<a href="#"><img class="img-responsive" src="images/project-4.jpg" alt=""></a>
									<div class="blog-text">
										<h3><a href=""#>45 Minimal Workspace Rooms for Web Savvys</a></h3>
										<span class="posted_on">Nov. 15th</span>
										<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
										<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
										<a href="#" class="btn btn-primary">Read More</a>
									</div> 
								</div>
							</div>
							<div class="col-lg-4 col-md-4">
								<div class="fh5co-blog animate-box">
									<a href="#"><img class="img-responsive" src="images/project-2.jpg" alt=""></a>
									<div class="blog-text">
										<h3><a href=""#>45 Minimal Worksspace Rooms for Web Savvys</a></h3>
										<span class="posted_on">Nov. 15th</span>
										<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
										<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
										<a href="#" class="btn btn-primary">Read More</a>
									</div> 
								</div>
							</div>
							<div class="col-lg-4 col-md-4">
								<div class="fh5co-blog animate-box">
									<a href="#"><img class="img-responsive" src="images/project-3.jpg" alt=""></a>
									<div class="blog-text">
										<h3><a href=""#>45 Minimal Workspace Rooms for Web Savvys</a></h3>
										<span class="posted_on">Nov. 15th</span>
										<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
										<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
										<a href="#" class="btn btn-primary">Read More</a>
									</div> 
								</div>
							</div>
						</div>
			</div>
		</div>	
	</div>

<?php $content = ob_get_clean(); 
include('template.php');