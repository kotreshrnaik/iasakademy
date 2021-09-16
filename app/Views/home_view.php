<?= $this->extend("layouts/base"); ?>
<?= $this->Section("content"); ?>
<!-- slider starts  -->
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="<?= base_url(); ?>/public/assets/images/slider/slide1.png" class="d-block w-100" alt="...">

        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="<?= base_url(); ?>/public/assets/images/slider/slide2.png" class="d-block w-100" alt="...">

        </div>
        <div class="carousel-item">
            <img src="<?= base_url(); ?>/public/assets/images/slider/slide3.png" class="d-block w-100" alt="...">

        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- slider ends  -->

<!--Home-content-starts--> 
<div id="home-content" class="pt-2 pb-2 pt-md-5 pb-md-5">
    <div class="container">
        <div class="row">
            <!-- Left column starts  -->
            <div class="col-md-3 left-column">

                <div class="pt-2 pb-2">
                    <h4 class="side-line pt-3 pb-3 text-center">
                        <span class="line">Search</span>

                    </h4>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success text-white border border-white" type="submit">Search</button>
                    </form>
                </div>
                <div class="pt-3 pb-3">
                    <h4 class="side-line pt-3 pb-3 text-center">
                        <span class="line">Current Affairs</span>

                    </h4>
                    <ul class="list-unstyled">
                        <li><a href="#">CA September 2021</a></li>
                        <li><a href="#">CA August 2021</a></li>
                        <li><a href="#">CA July 2021</a></li>
                        <li><a href="#">CA June 2021</a></li>
                    </ul>
                </div>
                <div class="pt-3 pb-3">
                    <h4 class="side-line pt-3 pb-3 text-center">
                        <span class="line">Current Afffairs Categories</span>

                    </h4>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="pt-3 pb-3">
                    <h4 class="side-line pt-3 pb-3 text-center">
                        <span class="line">CA MCQs</span>

                    </h4>
                    <ul class="list-unstyled">
                        <li><a href="#">CA September 2021</a></li>
                        <li><a href="#">CA August 2021</a></li>
                        <li><a href="#">CA July 2021</a></li>
                        <li><a href="#">CA June 2021</a></li>
                    </ul>
                </div>
                <div class="pt-3 pb-3">
                    <h4 class="side-line pt-3 pb-3 text-center">
                        <span class="line">CA MCQs Categories</span>

                    </h4>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="pt-3 pb-3">
                    <h4 class="side-line pt-3 pb-3 text-center">
                        <span class="line">Prelims</span>

                    </h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Prelims September 2021</a></li>
                        <li><a href="#">Prelims August 2021</a></li>
                        <li><a href="#">Prelims July 2021</a></li>
                        <li><a href="#">Prelims June 2021</a></li>
                    </ul>
                </div>
                <div class="pt-3 pb-3">
                    <h4 class="side-line pt-3 pb-3 text-center">
                        <span class="line">Prelims Categories</span>

                    </h4>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="pt-3 pb-3">
                    <h4 class="side-line pt-3 pb-3 text-center">
                        <span class="line">Mains</span>

                    </h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Mains September 2021</a></li>
                        <li><a href="#">Mains August 2021</a></li>
                        <li><a href="#">Mains July 2021</a></li>
                        <li><a href="#">Mains June 2021</a></li>
                    </ul>
                </div>
                <div class="pt-3 pb-3">
                    <h4 class="side-line pt-3 pb-3 text-center">
                        <span class="line">Mains Categories</span>

                    </h4>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="pt-3 pb-3">
                    <h4 class="side-line pt-3 pb-3 text-center">
                        <span class="line">Other Links</span>

                    </h4>
                    <ul class="list-unstyled">
                        <li><a href="#">September 2021</a></li>
                        <li><a href="#">August 2021</a></li>
                        <li><a href="#">July 2021</a></li>
                        <li><a href="#">June 2021</a></li>
                        <li><a href="#">May 2021</a></li>
                        <li><a href="#">April 2021</a></li>
                        <li><a href="#">March 2021</a></li>
                        <li><a href="#">Febraury 2021</a></li>
                        <li><a href="#">January 2021</a></li>
                    </ul>
                </div>
                <!-- Left column ends  -->
                
            </div>
            <div class="col-md-9">
                    <!-- Welcome starts  -->
                    <div id="welcome" class="pt-2 pb-2 pt-md-5 pb-md-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">

                                    <h2 class="text-center">Welcome to IAS AKADEMY</h2>
                                    <div class="row">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4">
                                            <h4 class="side-line text-center">
                                                <span class="line"><i class="fas fa-book-reader"></i></span>
                                            </h4>
                                        </div>
                                        <div class="col-md-4"></div>
                                    </div>
                                    <P>Learn English Online with the free learning English videos and materials from A2Z ENGLISH TIPS. This channel will help you to learn English and improve your Pronunciation, Grammar, Spoken English, Communication Skills, Interview Skills, Life Skills, Motivations and vocabulary knowledge.</P>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Welcome ends  -->
                </div>
        </div>
    </div>
    <!--Home-content-end--> 
    <?= $this->endSection(); ?>