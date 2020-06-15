<?php ob_start(); ?>

<?php $account = getAccountByName($_GET['profile']); ?>

<div id="fh5co-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-push-0 animate-box">
                <h2>Profile de <?= $account['pseudo'] ?> :</h2>
                <div class="col-md-offset-1">
                    <img src="images/<?= $account['image'] ?>" alt="<?= $account['pseudo'] ?>" style="width:200px; height: 200px;">
                </div>
                <div class="col-md-11 col-md-push-0 m-top">
                    <textarea name="message" id="message" cols="30" rows="5" class="form-control" readonly><?= $account['bio'] ?></textarea>
                </div>
                <div class="col-md-11 m-top">
                    <p><i class="icon-toggle"></i> <?= $account['status']; ?>
                        </br><i class="icon-mail"></i> <?= $account['email'] ?>
                        </br><i class="icon-map"></i> Paris, France
                        <br><i class="icon-link"></i><a href="https://google.fr"> Mon site Web</a></p>
                </div>
            </div>
            <div class="col-md-8 col-md-push-0 animate-box">
                <h2>Tutoriels récents :</h2>

                <div id="fh5co-testimonial">
                    <div class="row">
                        <div class="owl-carousel owl-carousel-fullwidth">

                            <div class="item">
                                <div class="col-md-5 col-md-offset-1 fh5co-blog animate-box">
                                    <a href="#"><img class="img-responsive" src="images/project-4.jpg" alt=""></a>
                                    <div class="blog-text">
                                        <h3><a href="" #>45 Minimal Workspace Rooms for Web Savvys</a></h3>
                                        <span class="posted_on">Nov. 15th</span>
                                        <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <a href="#" class="btn btn-primary">Read More</a>
                                    </div>
                                </div>
                                <div class="col-md-5 col-md-offset-0 fh5co-blog animate-box">
                                    <a href="#"><img class="img-responsive" src="images/project-4.jpg" alt=""></a>
                                    <div class="blog-text">
                                        <h3><a href="" #>45 Minimal Workspace Rooms for Web Savvys</a></h3>
                                        <span class="posted_on">Nov. 15th</span>
                                        <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <a href="#" class="btn btn-primary">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-md-5 col-md-offset-1 fh5co-blog animate-box">
                                    <a href="#"><img class="img-responsive" src="images/project-4.jpg" alt=""></a>
                                    <div class="blog-text">
                                        <h3><a href="" #>45 Minimal Workspace Rooms for Web Savvys</a></h3>
                                        <span class="posted_on">Nov. 15th</span>
                                        <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <a href="#" class="btn btn-primary">Read More</a>
                                    </div>
                                </div>
                                <div class="col-md-5 col-md-offset-0 fh5co-blog animate-box">
                                    <a href="#"><img class="img-responsive" src="images/project-4.jpg" alt=""></a>
                                    <div class="blog-text">
                                        <h3><a href="" #>45 Minimal Workspace Rooms for Web Savvys</a></h3>
                                        <span class="posted_on">Nov. 15th</span>
                                        <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <a href="#" class="btn btn-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-5 col-md-offset-1 fh5co-blog animate-box">
                                    <a href="#"><img class="img-responsive" src="images/project-4.jpg" alt=""></a>
                                    <div class="blog-text">
                                        <h3><a href="" #>45 Minimal Workspace Rooms for Web Savvys</a></h3>
                                        <span class="posted_on">Nov. 15th</span>
                                        <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <a href="#" class="btn btn-primary">Read More</a>
                                    </div>
                                </div>
                                <div class="col-md-5 col-md-offset-0 fh5co-blog animate-box">
                                    <a href="#"><img class="img-responsive" src="images/project-4.jpg" alt=""></a>
                                    <div class="blog-text">
                                        <h3><a href="" #>45 Minimal Workspace Rooms for Web Savvys</a></h3>
                                        <span class="posted_on">Nov. 15th</span>
                                        <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <a href="#" class="btn btn-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-5 col-md-offset-1 fh5co-blog animate-box">
                                    <a href="#"><img class="img-responsive" src="images/project-4.jpg" alt=""></a>
                                    <div class="blog-text">
                                        <h3><a href="" #>45 Minimal Workspace Rooms for Web Savvys</a></h3>
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
        </div>
        <div class="animate-box">
            <h2>Activité récente de <?= $account['pseudo'] ?> :</h2>
            <p></br>Prochainement...</p>
        </div>
    </div>
</div>

<?php $content = ob_get_clean();
include('template.php');
