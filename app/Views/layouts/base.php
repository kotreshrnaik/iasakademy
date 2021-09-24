<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href ="<?= base_url(); ?>/public/assets/scss/style.css">
        <title>Welcome to IAS Akademy</title>
    </head>
    <body>
        <!-- top-header start -->
        <div id="top-header">
            <div class="container">
                <div class="row ">
                    <div class="col-md-3 align-self-center">
                        <div class="text-center text-md-start p-1">
                            <a href="mailto:iasakademy@gmail.com"><i class="fas fa-envelope-open-text"></i> iasakademy@gmail.com</a>
                        </div>
                    </div>
                    <div class="col-md-3 align-self-center">
                        <div class="text-center text-md-start p-1">
                            <a href="tel:09731564894"><i class="fas fa-phone-volume"></i> +91 97315 64894</a>
                        </div>
                    </div>
                    <div class="col-md-3 align-self-center">
                        <ul class="d-flex list-unstyled mb-0 justify-content-center">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="social-media-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Social Media
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="social-media-dropdown">

                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/socialmedia/youtube-channel">Youtube</a></li>

                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/socialmedia/facebookpage">Facebook Page</a></li>

                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/socialmedia/instagram">Instagram</a></li>

                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/socialmedia/spotify">Spotify</a></li>

                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="downloads-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-download"></i>
                                    Downloads
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="social-media-dropdown">

                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/downloads/">UPSC Syllabus</a></li>

                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/downloads/">NCERT Books</a></li>


                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/downloads/">NIOS Study Material</a></li>

                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/downloads/">IGNOU Study Material</a></li>

                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/downloads/">Yojana & Kurukshetra</a></li>

                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/downloads/">Previous Year Papers</a></li>

                                </ul>

                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="downloads-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-brain"></i>
                                    Mindmaps
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="social-media-dropdown">

                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/mindmaps/">NCERT Books</a></li>


                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/mindmaps/">NIOS Study Material</a></li>

                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/mindmaps/">IGNOU Study Material</a></li>

                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/mindmaps/">Yojana & Kurukshetra</a></li>

                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/mindmaps/">Previous Year Papers</a></li>

                                </ul>

                            </li>
                            
                        </ul>
                    </div>
                    <div class="col-md-3 align-self-center">
                        <ul class="d-flex list-unstyled mb-0 justify-content-center justify-content-md-end">
                        <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="downloads-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-atlas"></i>
                                    Test Series
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="social-media-dropdown">

                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/testseries/">NCERT Subjectwise</a></li>

                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/testseries/">NCERT Classwise</a></li>

                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/testseries/">Prelims-General Studies</a></li>

                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/testseries/">Prelims-CSAT</a></li>

                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/testseries/">Prelims-Current Affairs</a></li>

                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/testseries/">Mains-Essays</a></li>

                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/testseries/">Mains-GS-I,II,III & IV</a></li>

                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/testseries/">Mains-Optional Subjects</a></li>

                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/testseries/">Mains-Cumpulosory English</a></li>

                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/testseries/">Mains-Cumpulosory-Indian Lauaguages</a></li>

                                </ul>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url(); ?>/contact"><i class="far fa-address-card"></i> Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-sign-in-alt"></i> Login</a>
                            </li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
        <!-- top-header-end -->
        
        <!-- navbar starts  -->
        <nav class="navbar navbar-expand-lg navbar-light sticky-top" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="<?= base_url(); ?>"> <img src="<?= base_url(); ?>/public/assets/images/logo2.png" alt="" class="img-fluid"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="downloads-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Current Affairs
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="social-media-dropdown">

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/currentaffairs/">CA Economy</a></li>

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/currentaffairs/">CA Environment</a></li>

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/currentaffairs/">CA International</a></li>

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/currentaffairs/">CA Policy</a></li>

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/currentaffairs/">CA Polity</a></li>

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/currentaffairs/">CA Science & Technology</a></li>

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/currentaffairs/">CA Security</a></li>

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/currentaffairs/">CA Social</a></li>

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/currentaffairs/">CA Miscellaneous</a></li>

                            </ul>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="downloads-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                CA MCQs
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="social-media-dropdown">

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/ca-mcqs/">CA MCQs Economy</a></li>

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/ca-mcqs/">CA MCQs Environment</a></li>

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/ca-mcqs/">CA MCQs International</a></li>

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/ca-mcqs/">CA MCQs Policy</a></li>

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/ca-mcqs/">CA MCQs Polity</a></li>

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/ca-mcqs/">CA MCQs Science & Technology</a></li>

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/ca-mcqs/">CA MCQs Security</a></li>

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/ca-mcqs/">CA MCQs Social</a></li>

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/ca-mcqs/">CA MCQs Miscellaneous</a>

                                </li>

                            </ul>

                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="downloads-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Prelims
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="social-media-dropdown">

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/prelims/">Prelims-Paper-1: Genral Studies</a></li>

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/prelims/">Prelims-Paper-2: CSAT</a></li>

                            </ul>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="downloads-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Prelims MCQs
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="social-media-dropdown">

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/prelims-mcqs/">Prelims MCQs-Paper-1: Genral Studies</a></li>

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/prelims-mcqs/">Prelims MCQs-Paper-2: CSAT</a></li>

                            </ul>

                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="downloads-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Mains
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="social-media-dropdown">

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/mains/">Mains-Paper-1: Essay</a></li>

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/mains/">Mains-Paper-2: GS-I</a></li>

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/mains/">Mains-Paper-3: GS-II</a></li>

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/mains/">Mains-Paper-4: GS-III</a></li>

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/mains/">Mains-Paper-5: GS-IV</a></li>

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/mains/">Mains-Paper-6 & 7: Optional Subjects</a></li>

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/mains/">Mains-Paper-8: Compulsory English</a></li>

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/mains/">Mains-Paper-9: Compulsory Indian Languages</a></li>

                            </ul>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="downloads-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Mains Q&As
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="social-media-dropdown">

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/mains-qas/">Mains Q&As Paper-1: Essay</a></li>

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/mains-qas/">Mains Q&As Paper-2: GS-I</a></li>

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/mains-qas/">Mains Q&As Paper-3: GS-II</a></li>

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/mains-qas/">Mains Q&As Paper-4: GS-III</a></li>

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/mains-qas/">Mains Q&As Paper-5: GS-IV</a></li>

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/mains-qas/">Mains Q&As Paper-6 & 7: Optional Subjects</a></li>

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/mains-qas/">Mains Q&As Paper-8: Compulsory English</a></li>

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/mains-qas/">Mains Q&As Paper-9: Compulsory Indian Languages</a></li>

                            </ul>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>/">Interview</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>/">Kannada</a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>

        <!-- navbar ends  -->

        <?= $this->renderSection("content"); ?>

        <!--Footer starts -->
        <footer id="footer" class="pt-2 pb-2 pt-md-2 pb-md-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="text-center"><img src="<?= base_url(); ?>/public/assets/images/logo4.png" alt="" class="img-fluid"></div>
                        <address class="text-center"> 
                            #485, 10th Cross, 8th Main, 
                            HAL 3rd Stage, Jeevan Bhima Nagar,
                            Bengaluru-560075, Karnataka. <br>
                            P: 097315 64894</address>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="">
                            <h2 class="pt-2 pb-2">Quick Links</h2>
                            <ul>
                                <li><a href="<?= base_url(); ?>">Home</a></li>
                                <li><a href="<?= base_url(); ?>/about">About</a></li>
                                <li><a href="<?= base_url(); ?>/contact">Contact</a></li>
                                <li><a href="<?= base_url(); ?>/prelims">Prelims</a></li>
                                <li><a href="<?= base_url(); ?>/mains">Mains</a></li>
                                <li><a href="<?= base_url(); ?>/interview">Interview</a></li>
                                <li><a href="<?= base_url(); ?>/prelims-mcqs">Prelims MCQs</a></li>
                                <li><a href="<?= base_url(); ?>/mains-questions">Mains Questions</a></li>
                                <li><a href="<?= base_url(); ?>/ebooks">eBooks</a></li>
                                <li><a href="<?= base_url(); ?>/downloads">Downloads</a></li>
                                <li><a href="<?= base_url(); ?>/curent-affairs">Current Affairss</a></li>
                                <li><a href="<?= base_url(); ?>/ca-mcqs">CA MCQs</a></li>
                                <li><a href="<?= base_url(); ?>/socialmedia">Social Media</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <h2 class="pt-2 pt-2">Online Courses</h2>

                    </div>
                    <div class="col-md-3">
                        <h2 class="pt-2 pb-2 text-center text-md-start">Social Media</h2>
                        <div class="align-self-center col-md-4">
                            <div class="text-center p-2 fs-5">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
            (function () {
                var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to/61446248d326717cb681f409/1ffphvra7';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>
        <!--End of Tawk.to Script-->

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="<?= base_url(); ?>/public/assets/js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        -->
    </body>
</html>