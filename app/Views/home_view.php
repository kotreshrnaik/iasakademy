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
<!-- Welcome starts  -->
<div id="welcome" class="pt-2 pb-2 pt-md-5 pb-md-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 welcome">

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
                <P><strong>Learn English Online with the free learning English videos and materials from A2Z ENGLISH TIPS. This channel will help you to learn English and improve your Pronunciation, Grammar, Spoken English, Communication Skills, Interview Skills, Life Skills, Motivations and vocabulary knowledge.</strong></P>
            </div>
        </div>
    </div>
</div>
<!-- Welcome ends  -->
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
                        <option value="1"><a href="#">CA Economy</a></option>
                        <option value="2"><a href="#">CA Environment</a></option>
                        <option value="3"><a href="#">CA International</a></option>
                        <option value="4"><a href="#">CA Policy</a></option>
                        <option value="5"><a href="#">CA Polity</a></option>
                        <option value="6"><a href="#">CA Science & Technology</a></option>
                        <option value="7"><a href="#">CA Security</a></option>
                        <option value="8"><a href="#">CA Social</a></option>
                        <option value="9"><a href="#">CA Miscellaneous</a></option>
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
                        <option value="1"><a href="#">CA MCQs-Economy</a></option>
                        <option value="2"><a href="#">CA MCQs-Environment</a></option>
                        <option value="3"><a href="#">CA MCQs-International</a></option>
                        <option value="4"><a href="#">CA MCQs-Policy</a></option>
                        <option value="5"><a href="#">CA MCQs-Polity</a></option>
                        <option value="6"><a href="#">CA MCQs-Science & Technology</a></option>
                        <option value="7"><a href="#">CA MCQs-Security</a></option>
                        <option value="8"><a href="#">CA MCQs-Social</a></option>
                        <option value="9"><a href="#">CA MCQs-Miscellaneous</a></option>
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
                        <option value="1"><a href="#">Prelims GS</a></option>
                        <option value="2"><a href="#">CSAT</a></option>

                    </select>
                </div>
                <div class="pt-3 pb-3">
                    <h4 class="side-line pt-3 pb-3 text-center">
                        <span class="line">Mains GS</span>

                    </h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Mains GS September 2021</a></li>
                        <li><a href="#">Mains GS August 2021</a></li>
                        <li><a href="#">Mains GS July 2021</a></li>
                        <li><a href="#">Mains GS June 2021</a></li>
                    </ul>
                </div>
                <div class="pt-3 pb-3">
                    <h4 class="side-line pt-3 pb-3 text-center">
                        <span class="line">Mains GS Categories</span>

                    </h4>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1"><a href="#">Mains Paper-1: Essay</a></option>
                        <option value="2"><a href="#">Mains Paper-2: GS-I</a></option>
                        <option value="3"><a href="#">Mains Paper-3: GS-II</a></option>
                        <option value="4"><a href="#">Mains Paper-4: GS-III</a></option>
                        <option value="5"><a href="#">Mains Paper-5: GS-IV</a></option>
                    </select>
                </div>
                <div class="pt-3 pb-3">
                    <h4 class="side-line pt-3 pb-3 text-center">
                        <span class="line">Mains Optional</span>

                    </h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Mains Optional September 2021</a></li>
                        <li><a href="#">Mains Optional August 2021</a></li>
                        <li><a href="#">Mains Optional July 2021</a></li>
                        <li><a href="#">Mains Optional June 2021</a></li>
                    </ul>
                </div>
                <div class="pt-3 pb-3">
                    <h4 class="side-line pt-3 pb-3 text-center">
                        <span class="line">Mains Optional Subjects</span>

                    </h4>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1"><a href="#">Agriculture</a></option>
                        <option value="2"><a href="#">Animal Husbandry & Veterinary Science</a></option>
                        <option value="3"><a href="#">Anthropology</a></option>
                        <option value="4"><a href="#">Botany</a></option>
                        <option value="5"><a href="#">Chemistry</a></option>
                        <option value="6"><a href="#">Civil Engineering</a></option>
                        <option value="7"><a href="#">Commerce & Accountancy</a></option>
                        <option value="8"><a href="#">Economics</a></option>
                        <option value="9"><a href="#">Electrical Engineering</a></option>
                        <option value="10"><a href="#">Geography</a></option>
                        <option value="11"><a href="#">Geology</a></option>
                        <option value="12"><a href="#">History</a></option>
                        <option value="13"><a href="#">Law</a></option>
                        <option value="14"><a href="#">Management</a></option>
                        <option value="15"><a href="#">Mathematics</a></option>
                        <option value="16"><a href="#">Mechanical Engineering</a></option>
                        <option value="17"><a href="#">Medical Science</a></option>
                        <option value="18"><a href="#">Philosophy</a></option>
                        <option value="19"><a href="#">Physics</a></option>
                        <option value="20"><a href="#">Political Science & International Relations</a></option>
                        <option value="21"><a href="#">Psychology</a></option>
                        <option value="22"><a href="#">Public Administration</a></option>
                        <option value="23"><a href="#">Sociology</a></option>
                        <option value="24"><a href="#">Statistics</a></option>
                        <option value="25"><a href="#">Zoology</a></option>
                        <option value="26"><a href="#">Assamese (Literature)</a></option>
                        <option value="27"><a href="#">Bengali (Literature)</a></option>
                        <option value="28"><a href="#">Bodo (Literature)</a></option>
                        <option value="29"><a href="#">Dogri (Literature)</a></option>
                        <option value="30"><a href="#">Gujarati (Literature)</a></option>
                        <option value="31"><a href="#">Hindi (Literature)</a></option>
                        <option value="32"><a href="#">Kannada (Literature)</a></option>
                        <option value="33"><a href="#">Kashmiri (Literature)</a></option>
                        <option value="34"><a href="#">Konkani (Literature)</a></option>
                        <option value="35"><a href="#">Maithili (Literature)</a></option>
                        <option value="36"><a href="#">Malayalam (Literature)</a></option>
                        <option value="37"><a href="#">Manipuri (Literature)</a></option>
                        <option value="38"><a href="#">Marathi (Literature)</a></option>
                        <option value="39"><a href="#">Nepali (Literature)</a></option>
                        <option value="40"><a href="#">Odia (Literature)</a></option>
                        <option value="41"><a href="#">Punjabi (Literature)</a></option>
                        <option value="42"><a href="#">Sanskrit (Literature)</a></option>
                        <option value="43"><a href="#">Santhali (Literature)</a></option>
                        <option value="44"><a href="#">Sindhi (Literature)</a></option>
                        <option value="45"><a href="#">Tamil (Literature)</a></option>
                        <option value="46"><a href="#">Telugu (Literature)</a></option>
                        <option value="47"><a href="#">English (Literature)</a></option>
                        <option value="48"><a href="#">Urdu (Literature)</a></option>

                    </select>
                </div>
                <div class="pt-3 pb-3">
                    <h4 class="side-line pt-3 pb-3 text-center">
                        <span class="line">Mains Qualifying Papers</span>

                    </h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Mains Qualifying Paper-English</a></li>
                        <li><a href="#">Mains Qualifying Paper-Kannada</a></li>
                        <li><a href="#">Mains Qualifying Paper-Hindi</a></li>
                        <li><a href="#">Mains Qualifying Paper-Telugu</a></li>
                    </ul>
                </div>
                <div class="pt-3 pb-3">
                    <h4 class="side-line pt-3 pb-3 text-center">
                        <span class="line">Mains Qualifying Papers-Other Language</span>

                    </h4>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1"><a href="#">Mains Qualifying Paper-Assamese</a></option>
                        <option value="2"><a href="#">Mains Qualifying Paper-Bengali</a></option>
                        <option value="3"><a href="#">Mains Qualifying Paper-Bodo</a></option>
                        <option value="4"><a href="#">Mains Qualifying Paper-Dogri</a></option>
                        <option value="5"><a href="#">Mains Qualifying Paper-Gujarati</a></option>
                        <option value="6"><a href="#">Mains Qualifying Paper-Kashmiri</a></option>
                        <option value="7"><a href="#">Mains Qualifying Paper-Konkani</a></option>
                        <option value="8"><a href="#">Mains Qualifying Paper-Maithili</a></option>
                        <option value="9"><a href="#">Mains Qualifying Paper-Malayalam</a></option>
                        <option value="10"><a href="#">Mains Qualifying Paper-Manipuri</a></option>
                        <option value="11"><a href="#">Mains Qualifying Paper-Marathi</a></option>
                        <option value="12"><a href="#">Mains Qualifying Paper-Nepali</a></option>
                        <option value="13"><a href="#">Mains Qualifying Paper-Odia</a></option>
                        <option value="14"><a href="#">Mains Qualifying Paper-Punjabi</a></option>
                        <option value="15"><a href="#">Mains Qualifying Paper-Sanskrit</a></option>
                        <option value="16"><a href="#">Mains Qualifying Paper-Santhali</a></option>
                        <option value="17"><a href="#">Mains Qualifying Paper-Sindhi</a></option>
                        <option value="18"><a href="#">Mains Qualifying Paper-Tamil</a></option>
                        <option value="19"><a href="#">Mains Qualifying Paper-Urdu</a></option>
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
            <!-- Top-Right Column Content starts   -->
            <div class="col-md-9 right-column">

                <!-- Current Affairs starts  -->
                <div class="container">
                    <div class="row">
                        <!-- Right Column-1 Starts   -->
                        <div class="col-md-6 right-column-1">

                            <h2 class="text-center">Current Affairs</h2>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <h4 class="side-line text-center">
                                        <span class="line"><i class="fas fa-book-reader"></i></span>
                                    </h4>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                            <div class="accordion" id="accordionExample1">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Current Affairs 2021
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample1">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">Daily Current Affairs: September 16 2021</a></li>
                                                <li><a href="#">Daily Current Affairs: September 15 2021</a></li>
                                                <li><a href="#">Daily Current Affairs: September 14 2021</a></li>
                                                <li><a href="#">Daily Current Affairs: September 13 2021</a></li>
                                                <li><a href="#">Daily Current Affairs: September 12 2021</a></li>
                                                <li><a href="#">Daily Current Affairs: September 11 2021</a></li>
                                                <li><a href="#">Daily Current Affairs: September 10 2021</a></li>
                                                <li><a href="#">Daily Current Affairs: September 9 2021</a></li>
                                                <li><a href="#">Daily Current Affairs: September 8 2021</a></li>
                                                <li><a href="#">Daily Current Affairs: September 7 2021</a></li>
                                                <li><a href="#">Daily Current Affairs: September 6 2021</a></li>
                                                <li><a href="#">Daily Current Affairs: September 5 2021</a></li>
                                                <li><a href="#">Daily Current Affairs: September 4 2021</a></li>
                                                <li><a href="#">Daily Current Affairs: September 3 2021</a></li>
                                                <li><a href="#">Daily Current Affairs: September 2 2021</a></li>
                                                <li><a href="#">Daily Current Affairs: September 1 2021</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Current Affairs 2020
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample1">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">Current Affairs: December 2020</a></li>
                                                <li><a href="#">Current Affairs: November 2020</a></li>
                                                <li><a href="#">Current Affairs: October 2020</a></li>
                                                <li><a href="#">Current Affairs: September 2020</a></li>
                                                <li><a href="#">Current Affairs: August 2020</a></li>
                                                <li><a href="#">Current Affairs: July 2020</a></li>
                                                <li><a href="#">Current Affairs: June 2020</a></li>
                                                <li><a href="#">Current Affairs: May 2020</a></li>
                                                <li><a href="#">Current Affairs: April 2020</a></li>
                                                <li><a href="#">Current Affairs: March 2020</a></li>
                                                <li><a href="#">Current Affairs: Febraury 2020</a></li>
                                                <li><a href="#">Current Affairs: January 2020</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Current Affairs 2019
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample1">
                                            <div class="accordion-body">
                                                <ul class="list-unstyled">
                                                    <li><a href="#">Current Affairs: December 2019</a></li>
                                                    <li><a href="#">Current Affairs: November 2019</a></li>
                                                    <li><a href="#">Current Affairs: October 2019</a></li>
                                                    <li><a href="#">Current Affairs: September 2019</a></li>
                                                    <li><a href="#">Current Affairs: August 2019</a></li>
                                                    <li><a href="#">Current Affairs: July 2019</a></li>
                                                    <li><a href="#">Current Affairs: June 2019</a></li>
                                                    <li><a href="#">Current Affairs: May 2019</a></li>
                                                    <li><a href="#">Current Affairs: April 2019</a></li>
                                                    <li><a href="#">Current Affairs: March 2019</a></li>
                                                    <li><a href="#">Current Affairs: Febraury 2019</a></li>
                                                    <li><a href="#">Current Affairs: January 2019</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                            </div>  

                        </div>
                        <!-- Right Column-1 ends   --> 
                        <!-- Right Column-2 Starts   --> 
                        <div class="col-md-6 right-column-2">
                            <h2 class="text-center">CA MCQs</h2>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <h4 class="side-line text-center">
                                        <span class="line"><i class="fas fa-book-reader"></i></span>
                                    </h4>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                            <div class="accordion" id="accordionExample2">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                            CA MCQs 2021
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse " aria-labelledby="headingFour" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">Daily CA MCQs: September 16 2021</a></li>
                                                <li><a href="#">Daily CA MCQs: September 15 2021</a></li>
                                                <li><a href="#">Daily CA MCQs: September 14 2021</a></li>
                                                <li><a href="#">Daily CA MCQs: September 13 2021</a></li>
                                                <li><a href="#">Daily CA MCQs: September 12 2021</a></li>
                                                <li><a href="#">Daily CA MCQs: September 11 2021</a></li>
                                                <li><a href="#">Daily CA MCQs: September 10 2021</a></li>
                                                <li><a href="#">Daily CA MCQs: September 9 2021</a></li>
                                                <li><a href="#">Daily CA MCQs: September 8 2021</a></li>
                                                <li><a href="#">Daily CA MCQs: September 7 2021</a></li>
                                                <li><a href="#">Daily CA MCQs: September 6 2021</a></li>
                                                <li><a href="#">Daily CA MCQs: September 5 2021</a></li>
                                                <li><a href="#">Daily CA MCQs: September 4 2021</a></li>
                                                <li><a href="#">Daily CA MCQs: September 3 2021</a></li>
                                                <li><a href="#">Daily CA MCQs: September 2 2021</a></li>
                                                <li><a href="#">Daily CA MCQs: September 1 2021</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            CA MCQs 2020
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">CA MCQs: December 2020</a></li>
                                                <li><a href="#">CA MCQs: November 2020</a></li>
                                                <li><a href="#">CA MCQs: October 2020</a></li>
                                                <li><a href="#">CA MCQs: September 2020</a></li>
                                                <li><a href="#">CA MCQs: August 2020</a></li>
                                                <li><a href="#">CA MCQs: July 2020</a></li>
                                                <li><a href="#">CA MCQs: June 2020</a></li>
                                                <li><a href="#">CA MCQs: May 2020</a></li>
                                                <li><a href="#">CA MCQs: April 2020</a></li>
                                                <li><a href="#">CA MCQs: March 2020</a></li>
                                                <li><a href="#">CA MCQs: Febraury 2020</a></li>
                                                <li><a href="#">CA MCQs: January 2020</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingSix">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                CA MCQs 2019
                                            </button>
                                        </h2>
                                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                                <ul class="list-unstyled">
                                                    <li><a href="#">CA MCQs: December 2019</a></li>
                                                    <li><a href="#">CA MCQs: November 2019</a></li>
                                                    <li><a href="#">CA MCQs: October 2019</a></li>
                                                    <li><a href="#">CA MCQs: September 2019</a></li>
                                                    <li><a href="#">CA MCQs: August 2019</a></li>
                                                    <li><a href="#">CA MCQs: July 2019</a></li>
                                                    <li><a href="#">CA MCQs: June 2019</a></li>
                                                    <li><a href="#">CA MCQs: May 2019</a></li>
                                                    <li><a href="#">CA MCQs: April 2019</a></li>
                                                    <li><a href="#">CA MCQs: March 2019</a></li>
                                                    <li><a href="#">CA MCQs: Febraury 2019</a></li>
                                                    <li><a href="#">CA MCQs: January 2019</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Right Column-2 ends   -->
                    </div>
                </div>
                <!-- Current Affairs ends  -->
                <!-- UPSC Prelims starts  -->
                <div class="container">
                    <div class="row">
                        <!-- Right Column-1 Starts   -->
                        <div class="col-md-6 pt-2 pb-2 pt-md-5 pt-md-5 right-column-1">

                            <h2 class="text-center">UPSC Prelims</h2>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <h4 class="side-line text-center">
                                        <span class="line"><i class="fas fa-book-reader"></i></span>
                                    </h4>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                            <div class="accordion" id="accordionExample3">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSeven">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                            Prelims Paper-1: General Studies
                                        </button>
                                    </h2>
                                    <div id="collapseSeven" class="accordion-collapse collapse " aria-labelledby="headingSeven" data-bs-parent="#accordionExample3">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Prelims: Paper-1: GS: 1. History of India and Indian National Movement</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-1: GS: 2. Indian and World Geography-Physical, Social, Economic Geography of India and the World</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-1: GS: 3. Indian Polity and Governance – Constitution, Political System, Panchayati Raj, Public Policy, Rights Issues, etc.</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-1: GS: 4. Economic and Social Development – Sustainable Development, Poverty, Inclusion, Demographics, Social Sector initiatives, etc.</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-1: GS: 5. General issues on Environmental Ecology, Biodiversity, and Climate Change – that do not require subject specialisation.</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-1: GS: 6. General Science</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingEight">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                            Prelims Paper-2: CSAT
                                        </button>
                                    </h2>
                                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample3">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 1. Comprehension</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 2. Interpersonal skills including communication skills</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 3. Logical reasoning and analytical ability</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 4. Decision-making and problem solving</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 5. General mental ability</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 6. Basic numeracy (numbers and their relations, orders of magnitude, etc.) (Class X level), Data interpretation (charts, graphs, tables, data sufficiency, etc. – Class X level)</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>    
                            </div>  

                        </div>
                        <!-- Right Column-1 ends   --> 
                        <!-- Right Column-2 Starts   --> 
                        <div class="col-md-6 pt-2 pb-2 pt-md-5 pt-md-5 right-column-2">
                            <h2 class="text-center">UPSC Prelims MCQs</h2>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <h4 class="side-line text-center">
                                        <span class="line"><i class="fas fa-book-reader"></i></span>
                                    </h4>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                            <div class="accordion" id="accordionExample4">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingNine">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                                            Prelims MCQs Paper-1: General Studies
                                        </button>
                                    </h2>
                                    <div id="collapseNine" class="accordion-collapse collapse " aria-labelledby="headingNine" data-bs-parent="#accordionExample4">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Prelims MCQs: Paper-1: GS: 1. History of India and Indian National Movement</a></li>
                                                <li><a href="#">UPSC Prelims MCQs: Paper-1: GS: 2. Indian and World Geography-Physical, Social, Economic Geography of India and the World</a></li>
                                                <li><a href="#">UPSC Prelims MCQs: Paper-1: GS: 3. Indian Polity and Governance – Constitution, Political System, Panchayati Raj, Public Policy, Rights Issues, etc.</a></li>
                                                <li><a href="#">UPSC Prelims MCQs: Paper-1: GS: 4. Economic and Social Development – Sustainable Development, Poverty, Inclusion, Demographics, Social Sector initiatives, etc.</a></li>
                                                <li><a href="#">UPSC Prelims MCQs: Paper-1: GS: 5. General issues on Environmental Ecology, Biodiversity, and Climate Change – that do not require subject specialisation.</a></li>
                                                <li><a href="#">UPSC Prelims MCQs: Paper-1: GS: 6. General Science</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTen">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                            Prelims MCQs Paper-2: CSAT
                                        </button>
                                    </h2>
                                    <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample4">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Prelims MCQs: Paper-2: CSAT: 1. Comprehension</a></li>
                                                <li><a href="#">UPSC Prelims MCQs: Paper-2: CSAT: 2. Interpersonal skills including communication skills</a></li>
                                                <li><a href="#">UPSC Prelims MCQs: Paper-2: CSAT: 3. Logical reasoning and analytical ability</a></li>
                                                <li><a href="#">UPSC Prelims MCQs: Paper-2: CSAT: 4. Decision-making and problem solving</a></li>
                                                <li><a href="#">UPSC Prelims MCQs: Paper-2: CSAT: 5. General mental ability</a></li>
                                                <li><a href="#">UPSC Prelims MCQs: Paper-2: CSAT: 6. Basic numeracy (numbers and their relations, orders of magnitude, etc.) (Class X level), Data interpretation (charts, graphs, tables, data sufficiency, etc. – Class X level)</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Right Column-2 ends   -->
                    </div>
                </div>
                <!-- UPSC Prelims ends  -->
                <!-- UPSC Mains Essay & GS starts  -->
                <div class="container">
                    <div class="row">
                        <!-- Right Column-1 Starts   -->
                        <div class="col-md-6 pt-2 pb-2 pt-md-5 pt-md-5 right-column-1">

                            <h2 class="text-center">UPSC Mains: Essay & General Studies</h2>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <h4 class="side-line text-center">
                                        <span class="line"><i class="fas fa-book-reader"></i></span>
                                    </h4>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                            <div class="accordion" id="accordionExample5">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingEleven">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                                            Mains Paper-1: Essay
                                        </button>
                                    </h2>
                                    <div id="collapseEleven" class="accordion-collapse collapse " aria-labelledby="headingEleven" data-bs-parent="#accordionExample5">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Prelims: Paper-1: GS: 1. History of India and Indian National Movement</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-1: GS: 2. Indian and World Geography-Physical, Social, Economic Geography of India and the World</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-1: GS: 3. Indian Polity and Governance – Constitution, Political System, Panchayati Raj, Public Policy, Rights Issues, etc.</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-1: GS: 4. Economic and Social Development – Sustainable Development, Poverty, Inclusion, Demographics, Social Sector initiatives, etc.</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-1: GS: 5. General issues on Environmental Ecology, Biodiversity, and Climate Change – that do not require subject specialisation.</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-1: GS: 6. General Science</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwelve">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                            Mains Paper-2: General Studies-I
                                        </button>
                                    </h2>
                                    <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample5">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 1. Comprehension</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 2. Interpersonal skills including communication skills</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 3. Logical reasoning and analytical ability</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 4. Decision-making and problem solving</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 5. General mental ability</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 6. Basic numeracy (numbers and their relations, orders of magnitude, etc.) (Class X level), Data interpretation (charts, graphs, tables, data sufficiency, etc. – Class X level)</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThirteen">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                            Mains Paper-3: General Studies-II
                                        </button>
                                    </h2>
                                    <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen" data-bs-parent="#accordionExample5">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 1. Comprehension</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 2. Interpersonal skills including communication skills</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 3. Logical reasoning and analytical ability</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 4. Decision-making and problem solving</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 5. General mental ability</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 6. Basic numeracy (numbers and their relations, orders of magnitude, etc.) (Class X level), Data interpretation (charts, graphs, tables, data sufficiency, etc. – Class X level)</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFourteen">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                            Mains Paper-4: General Studies-III
                                        </button>
                                    </h2>
                                    <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen" data-bs-parent="#accordionExample5">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 1. Comprehension</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 2. Interpersonal skills including communication skills</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 3. Logical reasoning and analytical ability</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 4. Decision-making and problem solving</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 5. General mental ability</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 6. Basic numeracy (numbers and their relations, orders of magnitude, etc.) (Class X level), Data interpretation (charts, graphs, tables, data sufficiency, etc. – Class X level)</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFifteen">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                                            Mains Paper-5: General Studies-IV
                                        </button>
                                    </h2>
                                    <div id="collapseFifteen" class="accordion-collapse collapse" aria-labelledby="headingFifteen" data-bs-parent="#accordionExample5">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 1. Comprehension</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 2. Interpersonal skills including communication skills</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 3. Logical reasoning and analytical ability</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 4. Decision-making and problem solving</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 5. General mental ability</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 6. Basic numeracy (numbers and their relations, orders of magnitude, etc.) (Class X level), Data interpretation (charts, graphs, tables, data sufficiency, etc. – Class X level)</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>  

                        </div>
                        <!-- Right Column-1 ends   --> 
                        <!-- Right Column-2 Starts   --> 
                        <div class="col-md-6 pt-2 pb-2 pt-md-5 pt-md-5 right-column-2">
                            <h2 class="text-center">UPSC Mains Q&As: Essay & General Studies</h2>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <h4 class="side-line text-center">
                                        <span class="line"><i class="fas fa-book-reader"></i></span>
                                    </h4>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                            <div class="accordion" id="accordionExample6">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSixteen">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixteen" aria-expanded="true" aria-controls="collapseSixteen">
                                            Mains Q&As Paper-1: Essay
                                        </button>
                                    </h2>
                                    <div id="collapseSixteen" class="accordion-collapse collapse " aria-labelledby="headingSixteen" data-bs-parent="#accordionExample6">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Prelims: Paper-1: GS: 1. History of India and Indian National Movement</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-1: GS: 2. Indian and World Geography-Physical, Social, Economic Geography of India and the World</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-1: GS: 3. Indian Polity and Governance – Constitution, Political System, Panchayati Raj, Public Policy, Rights Issues, etc.</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-1: GS: 4. Economic and Social Development – Sustainable Development, Poverty, Inclusion, Demographics, Social Sector initiatives, etc.</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-1: GS: 5. General issues on Environmental Ecology, Biodiversity, and Climate Change – that do not require subject specialisation.</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-1: GS: 6. General Science</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSeventeen">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                                            Mains Q&As Paper-2: General Studies-I
                                        </button>
                                    </h2>
                                    <div id="collapseSeventeen" class="accordion-collapse collapse" aria-labelledby="headingSeventeen" data-bs-parent="#accordionExample6">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 1. Comprehension</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 2. Interpersonal skills including communication skills</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 3. Logical reasoning and analytical ability</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 4. Decision-making and problem solving</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 5. General mental ability</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 6. Basic numeracy (numbers and their relations, orders of magnitude, etc.) (Class X level), Data interpretation (charts, graphs, tables, data sufficiency, etc. – Class X level)</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingEighteen">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEighteen" aria-expanded="false" aria-controls="collapseEighteen">
                                            Mains Q&As Paper-3: General Studies-II
                                        </button>
                                    </h2>
                                    <div id="collapseEighteen" class="accordion-collapse collapse" aria-labelledby="headingEighteen" data-bs-parent="#accordionExample6">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 1. Comprehension</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 2. Interpersonal skills including communication skills</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 3. Logical reasoning and analytical ability</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 4. Decision-making and problem solving</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 5. General mental ability</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 6. Basic numeracy (numbers and their relations, orders of magnitude, etc.) (Class X level), Data interpretation (charts, graphs, tables, data sufficiency, etc. – Class X level)</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingNinteen">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNinteen" aria-expanded="false" aria-controls="collapseNinteen">
                                            Mains Q&As Paper-4: General Studies-III
                                        </button>
                                    </h2>
                                    <div id="collapseNinteen" class="accordion-collapse collapse" aria-labelledby="headingNinteen" data-bs-parent="#accordionExample6">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 1. Comprehension</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 2. Interpersonal skills including communication skills</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 3. Logical reasoning and analytical ability</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 4. Decision-making and problem solving</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 5. General mental ability</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 6. Basic numeracy (numbers and their relations, orders of magnitude, etc.) (Class X level), Data interpretation (charts, graphs, tables, data sufficiency, etc. – Class X level)</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwenty">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                                            Mains Q&As Paper-5: General Studies-IV
                                        </button>
                                    </h2>
                                    <div id="collapseTwenty" class="accordion-collapse collapse" aria-labelledby="headingTwenty" data-bs-parent="#accordionExample6">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 1. Comprehension</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 2. Interpersonal skills including communication skills</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 3. Logical reasoning and analytical ability</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 4. Decision-making and problem solving</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 5. General mental ability</a></li>
                                                <li><a href="#">UPSC Prelims: Paper-2: CSAT: 6. Basic numeracy (numbers and their relations, orders of magnitude, etc.) (Class X level), Data interpretation (charts, graphs, tables, data sufficiency, etc. – Class X level)</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Right Column-2 ends   -->
                    </div>
                </div>
                <!-- UPSC Mains Essay & GS ends  -->
                <!-- UPSC Mains Optional starts  -->
                <div class="container">
                    <div class="row">
                        <!-- Right Column-1 Starts   -->
                        <div class="col-md-6 pt-2 pb-2 pt-md-5 pt-md-5 right-column-1">

                            <h2 class="text-center">UPSC Mains: Optional Subjects</h2>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <h4 class="side-line text-center">
                                        <span class="line"><i class="fas fa-book-reader"></i></span>
                                    </h4>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                            <div class="accordion" id="accordionExample7">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwentyOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyOne" aria-expanded="true" aria-controls="collapseTwentyOne">
                                        Agriculture
                                        </button>
                                    </h2>
                                    <div id="collapseTwentyOne" class="accordion-collapse collapse " aria-labelledby="headingTwentyOne" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwentyTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyTwo" aria-expanded="false" aria-controls="collapseTwentyTwo">
                                        Animal Husbandry & Veterinary Science
                                        </button>
                                    </h2>
                                    <div id="collapseTwentyTwo" class="accordion-collapse collapse" aria-labelledby="headingTwentyTwo" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwentyThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyThree" aria-expanded="false" aria-controls="collapseTwentyThree">
                                        Anthropology
                                        </button>
                                    </h2>
                                    <div id="collapseTwentyThree" class="accordion-collapse collapse" aria-labelledby="headingTwentyThree" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwentyFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyFour" aria-expanded="false" aria-controls="collapseTwentyFour">
                                        Botany
                                        </button>
                                    </h2>
                                    <div id="collapseTwentyFour" class="accordion-collapse collapse" aria-labelledby="headingTwentyFour" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwentyFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyFive" aria-expanded="false" aria-controls="collapseTwentyFive">
                                        Chemistry
                                        </button>
                                    </h2>
                                    <div id="collapseTwentyFive" class="accordion-collapse collapse" aria-labelledby="headingTwentyFive" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwentySix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentySix" aria-expanded="false" aria-controls="collapseTwentySix">
                                        Civil Engineering
                                        </button>
                                    </h2>
                                    <div id="collapseTwentySix" class="accordion-collapse collapse" aria-labelledby="headingTwentySix" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwentySeven">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentySeven" aria-expanded="false" aria-controls="collapseTwentySeven">
                                        Commerce & Accountancy
                                        </button>
                                    </h2>
                                    <div id="collapseTwentySeven" class="accordion-collapse collapse" aria-labelledby="headingTwentySeven" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwentyEight">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyEight" aria-expanded="false" aria-controls="collapseTwentyEight">
                                        Economics
                                        </button>
                                    </h2>
                                    <div id="collapseTwentyEight" class="accordion-collapse collapse" aria-labelledby="headingTwentyEight" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwentyNine">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyNine" aria-expanded="false" aria-controls="collapseTwentyNine">
                                        Electrical Engineering
                                        </button>
                                    </h2>
                                    <div id="collapseTwentyNine" class="accordion-collapse collapse" aria-labelledby="headingTwentyNine" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThirty">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirty" aria-expanded="false" aria-controls="collapseThirty">
                                        Geography
                                        </button>
                                    </h2>
                                    <div id="collapseThirty" class="accordion-collapse collapse" aria-labelledby="headingThirty" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThirtyOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirtyOne" aria-expanded="false" aria-controls="collapseThirtyOne">
                                        Geology
                                        </button>
                                    </h2>
                                    <div id="collapseThirtyOne" class="accordion-collapse collapse" aria-labelledby="headingThirtyOne" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThirtyTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirtyTwo" aria-expanded="false" aria-controls="collapseThirtyTwo">
                                        History
                                        </button>
                                    </h2>
                                    <div id="collapseThirtyTwo" class="accordion-collapse collapse" aria-labelledby="headingThirtyTwo" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThirtyThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirtyThree" aria-expanded="false" aria-controls="collapseThirtyThree">
                                        Law
                                        </button>
                                    </h2>
                                    <div id="collapseThirtyThree" class="accordion-collapse collapse" aria-labelledby="headingThirtyThree" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading34">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse34" aria-expanded="false" aria-controls="collapse34">
                                        Management
                                        </button>
                                    </h2>
                                    <div id="collapse34" class="accordion-collapse collapse" aria-labelledby="heading34" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading35">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse35" aria-expanded="false" aria-controls="collapse35">
                                        Mathematics
                                        </button>
                                    </h2>
                                    <div id="collapse35" class="accordion-collapse collapse" aria-labelledby="heading35" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading36">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse36" aria-expanded="false" aria-controls="collapse36">
                                        Mechanical Engineering
                                        </button>
                                    </h2>
                                    <div id="collapse36" class="accordion-collapse collapse" aria-labelledby="heading36" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading37">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse37" aria-expanded="false" aria-controls="collapse37">
                                        Medical Science
                                        </button>
                                    </h2>
                                    <div id="collapse37" class="accordion-collapse collapse" aria-labelledby="heading37" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading38">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse38" aria-expanded="false" aria-controls="collapse38">
                                        Philosophy
                                        </button>
                                    </h2>
                                    <div id="collapse38" class="accordion-collapse collapse" aria-labelledby="heading38" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading39">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse39" aria-expanded="false" aria-controls="collapse39">
                                        Physics
                                        </button>
                                    </h2>
                                    <div id="collapse39" class="accordion-collapse collapse" aria-labelledby="heading39" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading40">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse40" aria-expanded="false" aria-controls="collapse40">
                                        Political Science & International Relations
                                        </button>
                                    </h2>
                                    <div id="collapse40" class="accordion-collapse collapse" aria-labelledby="heading40" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading41">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse41" aria-expanded="false" aria-controls="collapse41">
                                        Psychology
                                        </button>
                                    </h2>
                                    <div id="collapse41" class="accordion-collapse collapse" aria-labelledby="heading41" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading42">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse42" aria-expanded="false" aria-controls="collapse42">
                                        Public Administration
                                        </button>
                                    </h2>
                                    <div id="collapse42" class="accordion-collapse collapse" aria-labelledby="heading42" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading43">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse43" aria-expanded="false" aria-controls="collapse43">
                                        Sociology
                                        </button>
                                    </h2>
                                    <div id="collapse43" class="accordion-collapse collapse" aria-labelledby="heading43" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading44">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse44" aria-expanded="false" aria-controls="collapse44">
                                        Statistics
                                        </button>
                                    </h2>
                                    <div id="collapse44" class="accordion-collapse collapse" aria-labelledby="heading44" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading45">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse45" aria-expanded="false" aria-controls="collapse45">
                                        Zoology
                                        </button>
                                    </h2>
                                    <div id="collapse45" class="accordion-collapse collapse" aria-labelledby="heading45" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading46">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse46" aria-expanded="false" aria-controls="collapse46">
                                        Assamese (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse46" class="accordion-collapse collapse" aria-labelledby="heading46" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading47">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse47" aria-expanded="false" aria-controls="collapse47">
                                        Bengali (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse47" class="accordion-collapse collapse" aria-labelledby="heading47" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading48">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse48" aria-expanded="false" aria-controls="collapse48">
                                        Bodo (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse48" class="accordion-collapse collapse" aria-labelledby="heading48" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading49">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse49" aria-expanded="false" aria-controls="collapse49">
                                        Dogri (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse49" class="accordion-collapse collapse" aria-labelledby="heading49" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading50">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse50" aria-expanded="false" aria-controls="collapse50">
                                        English (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse50" class="accordion-collapse collapse" aria-labelledby="heading50" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading51">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse51" aria-expanded="false" aria-controls="collapse51">
                                        Gujarati (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse51" class="accordion-collapse collapse" aria-labelledby="heading51" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading52">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse52" aria-expanded="false" aria-controls="collapse52">
                                        Hindi (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse52" class="accordion-collapse collapse" aria-labelledby="heading52" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading53">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse53" aria-expanded="false" aria-controls="collapse53">
                                        Kannada (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse53" class="accordion-collapse collapse" aria-labelledby="heading53" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading54">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse54" aria-expanded="false" aria-controls="collapse54">
                                        Kashmiri (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse54" class="accordion-collapse collapse" aria-labelledby="heading54" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading55">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse55" aria-expanded="false" aria-controls="collapse55">
                                        Konkani (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse55" class="accordion-collapse collapse" aria-labelledby="heading55" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading56">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse56" aria-expanded="false" aria-controls="collapse56">
                                        Maithili (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse56" class="accordion-collapse collapse" aria-labelledby="heading56" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading57">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse57" aria-expanded="false" aria-controls="collapse57">
                                        Malayalam (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse57" class="accordion-collapse collapse" aria-labelledby="heading57" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading58">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse58" aria-expanded="false" aria-controls="collapse58">
                                        Manipuri (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse58" class="accordion-collapse collapse" aria-labelledby="heading58" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading59">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse59" aria-expanded="false" aria-controls="collapse59">
                                        Marathi (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse59" class="accordion-collapse collapse" aria-labelledby="heading59" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading60">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse60" aria-expanded="false" aria-controls="collapse60">
                                        Nepali (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse60" class="accordion-collapse collapse" aria-labelledby="heading60" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading61">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse61" aria-expanded="false" aria-controls="collapse61">
                                        Odia (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse61" class="accordion-collapse collapse" aria-labelledby="heading61" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading62">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse62" aria-expanded="false" aria-controls="collapse62">
                                        Punjabi (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse62" class="accordion-collapse collapse" aria-labelledby="heading62" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading63">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse63" aria-expanded="false" aria-controls="collapse63">
                                        Sanskrit (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse63" class="accordion-collapse collapse" aria-labelledby="heading63" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading64">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse64" aria-expanded="false" aria-controls="collapse64">
                                        Santhali (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse64" class="accordion-collapse collapse" aria-labelledby="heading64" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading65">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse65" aria-expanded="false" aria-controls="collapse65">
                                        Sindhi (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse65" class="accordion-collapse collapse" aria-labelledby="heading65" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading66">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse66" aria-expanded="false" aria-controls="collapse66">
                                        Tamil (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse66" class="accordion-collapse collapse" aria-labelledby="heading66" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading67">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse67" aria-expanded="false" aria-controls="collapse67">
                                        Telugu (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse67" class="accordion-collapse collapse" aria-labelledby="heading67" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading68">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse68" aria-expanded="false" aria-controls="collapse68">
                                        Urdu (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse68" class="accordion-collapse collapse" aria-labelledby="heading68" data-bs-parent="#accordionExample7">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                

                            </div>  

                        </div>
                        <!-- Right Column-1 ends   --> 
                        <!-- Right Column-2 Starts   --> 
                        <div class="col-md-6 pt-2 pb-2 pt-md-5 pt-md-5 right-column-2">

                            <h2 class="text-center">UPSC Mains Q&As: Optional Subjects</h2>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <h4 class="side-line text-center">
                                        <span class="line"><i class="fas fa-book-reader"></i></span>
                                    </h4>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                            <div class="accordion" id="accordionExample8">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading69">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse69" aria-expanded="true" aria-controls="collapse69">
                                        Agriculture
                                        </button>
                                    </h2>
                                    <div id="collapse69" class="accordion-collapse collapse " aria-labelledby="heading69" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading70">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse70" aria-expanded="false" aria-controls="collapse70">
                                        Animal Husbandry & Veterinary Science
                                        </button>
                                    </h2>
                                    <div id="collapse70" class="accordion-collapse collapse" aria-labelledby="heading70" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading71">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse71" aria-expanded="false" aria-controls="collapse71">
                                        Anthropology
                                        </button>
                                    </h2>
                                    <div id="collapse71" class="accordion-collapse collapse" aria-labelledby="heading71" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading72">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse72" aria-expanded="false" aria-controls="collapse72">
                                        Botany
                                        </button>
                                    </h2>
                                    <div id="collapse72" class="accordion-collapse collapse" aria-labelledby="heading72" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading73">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse73" aria-expanded="false" aria-controls="collapse73">
                                        Chemistry
                                        </button>
                                    </h2>
                                    <div id="collapse73" class="accordion-collapse collapse" aria-labelledby="heading73" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading74">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse74" aria-expanded="false" aria-controls="collapse74">
                                        Civil Engineering
                                        </button>
                                    </h2>
                                    <div id="collapse74" class="accordion-collapse collapse" aria-labelledby="heading74" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading75">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse75" aria-expanded="false" aria-controls="collapse75">
                                        Commerce & Accountancy
                                        </button>
                                    </h2>
                                    <div id="collapse75" class="accordion-collapse collapse" aria-labelledby="heading75" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading76">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse76" aria-expanded="false" aria-controls="collapse76">
                                        Economics
                                        </button>
                                    </h2>
                                    <div id="collapse76" class="accordion-collapse collapse" aria-labelledby="heading76" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading77">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse77" aria-expanded="false" aria-controls="collapse77">
                                        Electrical Engineering
                                        </button>
                                    </h2>
                                    <div id="collapse77" class="accordion-collapse collapse" aria-labelledby="heading77" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading78">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse78" aria-expanded="false" aria-controls="collapse78">
                                        Geography
                                        </button>
                                    </h2>
                                    <div id="collapse78" class="accordion-collapse collapse" aria-labelledby="heading78" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading79">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse79" aria-expanded="false" aria-controls="collapse79">
                                        Geology
                                        </button>
                                    </h2>
                                    <div id="collapse79" class="accordion-collapse collapse" aria-labelledby="heading79" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading80">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse80" aria-expanded="false" aria-controls="collapse80">
                                        History
                                        </button>
                                    </h2>
                                    <div id="collapse80" class="accordion-collapse collapse" aria-labelledby="heading80" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading81">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse81" aria-expanded="false" aria-controls="collapse81">
                                        Law
                                        </button>
                                    </h2>
                                    <div id="collapse81" class="accordion-collapse collapse" aria-labelledby="heading81" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading82">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse82" aria-expanded="false" aria-controls="collapse82">
                                        Management
                                        </button>
                                    </h2>
                                    <div id="collapse82" class="accordion-collapse collapse" aria-labelledby="heading82" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading83">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse83" aria-expanded="false" aria-controls="collapse83">
                                        Mathematics
                                        </button>
                                    </h2>
                                    <div id="collapse83" class="accordion-collapse collapse" aria-labelledby="heading83" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading84">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse84" aria-expanded="false" aria-controls="collapse84">
                                        Mechanical Engineering
                                        </button>
                                    </h2>
                                    <div id="collapse84" class="accordion-collapse collapse" aria-labelledby="heading84" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading85">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse85" aria-expanded="false" aria-controls="collapse85">
                                        Medical Science
                                        </button>
                                    </h2>
                                    <div id="collapse85" class="accordion-collapse collapse" aria-labelledby="heading85" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading86">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse86" aria-expanded="false" aria-controls="collapse86">
                                        Philosophy
                                        </button>
                                    </h2>
                                    <div id="collapse86" class="accordion-collapse collapse" aria-labelledby="heading86" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading87">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse87" aria-expanded="false" aria-controls="collapse87">
                                        Physics
                                        </button>
                                    </h2>
                                    <div id="collapse87" class="accordion-collapse collapse" aria-labelledby="heading87" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading88">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse88" aria-expanded="false" aria-controls="collapse88">
                                        Political Science & International Relations
                                        </button>
                                    </h2>
                                    <div id="collapse88" class="accordion-collapse collapse" aria-labelledby="heading88" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading89">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse89" aria-expanded="false" aria-controls="collapse89">
                                        Psychology
                                        </button>
                                    </h2>
                                    <div id="collapse89" class="accordion-collapse collapse" aria-labelledby="heading89" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading90">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse90" aria-expanded="false" aria-controls="collapse90">
                                        Public Administration
                                        </button>
                                    </h2>
                                    <div id="collapse90" class="accordion-collapse collapse" aria-labelledby="heading90" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading91">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse91" aria-expanded="false" aria-controls="collapse91">
                                        Sociology
                                        </button>
                                    </h2>
                                    <div id="collapse91" class="accordion-collapse collapse" aria-labelledby="heading91" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading92">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse92" aria-expanded="false" aria-controls="collapse92">
                                        Statistics
                                        </button>
                                    </h2>
                                    <div id="collapse92" class="accordion-collapse collapse" aria-labelledby="heading92" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading93">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse93" aria-expanded="false" aria-controls="collapse93">
                                        Zoology
                                        </button>
                                    </h2>
                                    <div id="collapse93" class="accordion-collapse collapse" aria-labelledby="heading93" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading94">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse94" aria-expanded="false" aria-controls="collapse94">
                                        Assamese (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse94" class="accordion-collapse collapse" aria-labelledby="heading94" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading95">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse95" aria-expanded="false" aria-controls="collapse95">
                                        Bengali (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse95" class="accordion-collapse collapse" aria-labelledby="heading95" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading96">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse96" aria-expanded="false" aria-controls="collapse96">
                                        Bodo (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse96" class="accordion-collapse collapse" aria-labelledby="heading96" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading97">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse97" aria-expanded="false" aria-controls="collapse97">
                                        Dogri (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse97" class="accordion-collapse collapse" aria-labelledby="heading97" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading98">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse98" aria-expanded="false" aria-controls="collapse98">
                                        English (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse98" class="accordion-collapse collapse" aria-labelledby="heading98" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading99">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse99" aria-expanded="false" aria-controls="collapse99">
                                        Gujarati (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse99" class="accordion-collapse collapse" aria-labelledby="heading99" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading100">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse100" aria-expanded="false" aria-controls="collapse100">
                                        Hindi (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse100" class="accordion-collapse collapse" aria-labelledby="heading100" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading101">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse101" aria-expanded="false" aria-controls="collapse101">
                                        Kannada (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse101" class="accordion-collapse collapse" aria-labelledby="heading101" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading102">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse102" aria-expanded="false" aria-controls="collapse102">
                                        Kashmiri (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse102" class="accordion-collapse collapse" aria-labelledby="heading102" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading103">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse103" aria-expanded="false" aria-controls="collapse103">
                                        Konkani (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse103" class="accordion-collapse collapse" aria-labelledby="heading103" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading104">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse104" aria-expanded="false" aria-controls="collapse104">
                                        Maithili (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse104" class="accordion-collapse collapse" aria-labelledby="heading104" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading105">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse105" aria-expanded="false" aria-controls="collapse105">
                                        Malayalam (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse105" class="accordion-collapse collapse" aria-labelledby="heading105" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading106">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse106" aria-expanded="false" aria-controls="collapse106">
                                        Manipuri (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse106" class="accordion-collapse collapse" aria-labelledby="heading106" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading107">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse107" aria-expanded="false" aria-controls="collapse107">
                                        Marathi (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse107" class="accordion-collapse collapse" aria-labelledby="heading107" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading108">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse108" aria-expanded="false" aria-controls="collapse108">
                                        Nepali (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse108" class="accordion-collapse collapse" aria-labelledby="heading108" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading109">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse109" aria-expanded="false" aria-controls="collapse109">
                                        Odia (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse109" class="accordion-collapse collapse" aria-labelledby="heading109" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading110">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse110" aria-expanded="false" aria-controls="collapse110">
                                        Punjabi (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse110" class="accordion-collapse collapse" aria-labelledby="heading110" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading111">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse111" aria-expanded="false" aria-controls="collapse111">
                                        Sanskrit (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse111" class="accordion-collapse collapse" aria-labelledby="heading111" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading112">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse112" aria-expanded="false" aria-controls="collapse112">
                                        Santhali (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse112" class="accordion-collapse collapse" aria-labelledby="heading112" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading113">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse113" aria-expanded="false" aria-controls="collapse113">
                                        Sindhi (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse113" class="accordion-collapse collapse" aria-labelledby="heading113" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading114">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse114" aria-expanded="false" aria-controls="collapse114">
                                        Tamil (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse114" class="accordion-collapse collapse" aria-labelledby="heading114" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading115">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse115" aria-expanded="false" aria-controls="collapse115">
                                        Telugu (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse115" class="accordion-collapse collapse" aria-labelledby="heading115" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading116">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse116" aria-expanded="false" aria-controls="collapse116">
                                        Urdu (Literature)
                                        </button>
                                    </h2>
                                    <div id="collapse116" class="accordion-collapse collapse" aria-labelledby="heading116" data-bs-parent="#accordionExample8">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-6: Optional Paper-1</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-7: Optional Paper-2</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                

                            </div>  

                        </div>
                        <!-- Right Column-2 ends   -->
                    </div>
                </div>
                <!-- UPSC Mains Optional ends  -->
                <!-- UPSC Mains Compulsory starts  -->
                <div class="container">
                    <div class="row">
                        <!-- Right Column-1 Starts   -->
                        <div class="col-md-6 pt-2 pb-2 pt-md-5 pt-md-5 right-column-1">

                            <h2 class="text-center">UPSC Mains: Compulsory Papers</h2>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <h4 class="side-line text-center">
                                        <span class="line"><i class="fas fa-book-reader"></i></span>
                                    </h4>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                            <div class="accordion" id="accordionExample9">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading117">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse117" aria-expanded="true" aria-controls="collapse117">
                                            UPSC Mains: Paper-8: Compulsory Paper-1: English
                                        </button>
                                    </h2>
                                    <div id="collapse117" class="accordion-collapse collapse " aria-labelledby="heading117" data-bs-parent="#accordionExample9">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-8: Compulsory Paper-1: English</a></li>
                                                

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading118">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse118" aria-expanded="false" aria-controls="collapse118">
                                            UPSC Mains: Paper-9: Compulsory Paper-2: Any Indian Language
                                        </button>
                                    </h2>
                                    <div id="collapse118" class="accordion-collapse collapse" aria-labelledby="heading118" data-bs-parent="#accordionExample9">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains: Paper-9: Compulsory Paper-2: Assamese</a></li>
                                                <li><a href="#">UPSC Mains: Paper-9: Compulsory Paper-2: Bengali</a></li>
                                                <li><a href="#">UPSC Mains: Paper-9: Compulsory Paper-2: Bodo</a></li>
                                                <li><a href="#">UPSC Mains: Paper-9: Compulsory Paper-2: Dogri</a></li>
                                                <li><a href="#">UPSC Mains: Paper-9: Compulsory Paper-2: Gujarati</a></li>
                                                <li><a href="#">UPSC Mains: Paper-9: Compulsory Paper-2: Hindi</a></li>
                                                <li><a href="#">UPSC Mains: Paper-9: Compulsory Paper-2: Kannada</a></li>
                                                <li><a href="#">UPSC Mains: Paper-9: Compulsory Paper-2: Kashmiri</a></li>
                                                <li><a href="#">UPSC Mains: Paper-9: Compulsory Paper-2: Konkani</a></li>
                                                <li><a href="#">UPSC Mains: Paper-9: Compulsory Paper-2: Maithili</a></li>
                                                <li><a href="#">UPSC Mains: Paper-9: Compulsory Paper-2: Malayalam</a></li>
                                                <li><a href="#">UPSC Mains: Paper-9: Compulsory Paper-2: Manipuri</a></li>
                                                <li><a href="#">UPSC Mains: Paper-9: Compulsory Paper-2: Marathi</a></li>
                                                <li><a href="#">UPSC Mains: Paper-9: Compulsory Paper-2: Nepali</a></li>
                                                <li><a href="#">UPSC Mains: Paper-9: Compulsory Paper-2: Odia</a></li>
                                                <li><a href="#">UPSC Mains: Paper-9: Compulsory Paper-2: Punjabi</a></li>
                                                <li><a href="#">UPSC Mains: Paper-9: Compulsory Paper-2: Sanskrit</a></li>
                                                <li><a href="#">UPSC Mains: Paper-9: Compulsory Paper-2: Santhali</a></li>
                                                <li><a href="#">UPSC Mains: Paper-9: Compulsory Paper-2: Sindhi</a></li>
                                                <li><a href="#">UPSC Mains: Paper-9: Compulsory Paper-2: Tamil</a></li>
                                                <li><a href="#">UPSC Mains: Paper-9: Compulsory Paper-2: Telugu</a></li>
                                                <li><a href="#">UPSC Mains: Paper-9: Compulsory Paper-2: Urdu</a></li>
                                                
                                                
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                

                            </div>  

                        </div>
                        <!-- Right Column-1 ends   --> 
                        <!-- Right Column-2 Starts   --> 
                        <div class="col-md-6 pt-2 pb-2 pt-md-5 pt-md-5 right-column-1">

                            <h2 class="text-center">UPSC Mains Q&As: Compulsory Papers</h2>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <h4 class="side-line text-center">
                                        <span class="line"><i class="fas fa-book-reader"></i></span>
                                    </h4>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                            <div class="accordion" id="accordionExample10">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading119">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse119" aria-expanded="true" aria-controls="collapse119">
                                            UPSC Mains Q&As: Paper-8: Compulsory Paper-1: English
                                        </button>
                                    </h2>
                                    <div id="collapse119" class="accordion-collapse collapse " aria-labelledby="heading119" data-bs-parent="#accordionExample10">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-8: Compulsory Paper-1: English</a></li>
                                                

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading120">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse120" aria-expanded="false" aria-controls="collapse120">
                                            UPSC Mains Q&As: Paper-9: Compulsory Paper-2: Any Indian Language
                                        </button>
                                    </h2>
                                    <div id="collapse120" class="accordion-collapse collapse" aria-labelledby="heading120" data-bs-parent="#accordionExample10">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Mains Q&As: Paper-9: Compulsory Paper-2: Assamese</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-9: Compulsory Paper-2: Bengali</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-9: Compulsory Paper-2: Bodo</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-9: Compulsory Paper-2: Dogri</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-9: Compulsory Paper-2: Gujarati</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-9: Compulsory Paper-2: Hindi</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-9: Compulsory Paper-2: Kannada</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-9: Compulsory Paper-2: Kashmiri</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-9: Compulsory Paper-2: Konkani</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-9: Compulsory Paper-2: Maithili</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-9: Compulsory Paper-2: Malayalam</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-9: Compulsory Paper-2: Manipuri</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-9: Compulsory Paper-2: Marathi</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-9: Compulsory Paper-2: Nepali</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-9: Compulsory Paper-2: Odia</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-9: Compulsory Paper-2: Punjabi</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-9: Compulsory Paper-2: Sanskrit</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-9: Compulsory Paper-2: Santhali</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-9: Compulsory Paper-2: Sindhi</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-9: Compulsory Paper-2: Tamil</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-9: Compulsory Paper-2: Telugu</a></li>
                                                <li><a href="#">UPSC Mains Q&As: Paper-9: Compulsory Paper-2: Urdu</a></li>
                                                
                                                
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                

                            </div>  

                        </div>
                        <!-- Right Column-2 ends   -->
                    </div>
                </div>
                <!-- UPSC Mains Compulsory ends  -->
                <!-- UPSC Interview starts  -->
                <div class="container">
                    <div class="row">
                        <!-- Right Column-1 Starts   -->
                        <div class="col-md-6 pt-2 pb-2 pt-md-5 pt-md-5 right-column-1">

                            <h2 class="text-center">UPSC Interview</h2>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <h4 class="side-line text-center">
                                        <span class="line"><i class="fas fa-book-reader"></i></span>
                                    </h4>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                            <div class="accordion" id="accordionExample11">
                                
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading121">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse121" aria-expanded="false" aria-controls="collapse121">
                                            UPSC Interview
                                        </button>
                                    </h2>
                                    <div id="collapse121" class="accordion-collapse collapse" aria-labelledby="heading121" data-bs-parent="#accordionExample11">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Interview</a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>  

                        </div>
                        <!-- Right Column-1 ends   --> 
                        <!-- Right Column-2 Starts   --> 
                        <div class="col-md-6 pt-2 pb-2 pt-md-5 pt-md-5 right-column-2">
                            <h2 class="text-center">UPSC Interview Q&As</h2>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <h4 class="side-line text-center">
                                        <span class="line"><i class="fas fa-book-reader"></i></span>
                                    </h4>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                            <div class="accordion" id="accordionExample12">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading122">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse122" aria-expanded="true" aria-controls="collapse122">
                                            UPSC Interview Q&As
                                        </button>
                                    </h2>
                                    <div id="collapse122" class="accordion-collapse collapse " aria-labelledby="heading122" data-bs-parent="#accordionExample12">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#">UPSC Interview Q&As</a></li>
                                                

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <!-- Right Column-2 ends   -->
                    </div>
                </div>
                <!-- UPSC Interview ends  -->
            </div>

        </div>
        <!-- Top-Right Column Content ends   -->
    </div>
</div>
<!--Home-content-end--> 
<?= $this->endSection(); ?>