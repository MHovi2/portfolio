@extends('frontend.layout')
@section('main')
    <div class="portfolio">
        <!-- Page Title Starts -->
        <section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
            <h1>my <span>portfolio</span></h1>
            <span class="title-bg">works</span>
        </section>
        <!-- Page Title Ends -->
        <!-- Main Content Starts -->
        <section class="main-content text-center revealator-slideup revealator-once revealator-delay1">
            <div id="grid-gallery" class="container grid-gallery">
                <!-- Portfolio Grid Starts -->
                <section class="grid-wrap">
                    <ul class="row grid">
                        <!-- Portfolio Item Starts -->
                        <li>
                            <figure>
                                <img src="assets/frontend/img/projects/project-1.jpg" alt="Portolio Image" />
                                <div><span>BD-MAG</span></div>
                            </figure>
                        </li>
                        <!-- Portfolio Item Ends -->
                        <!-- Portfolio Item Starts -->
                        <li>
                            <figure>
                                <img src="assets/frontend/img/projects/project-2.jpg" alt="Portolio Image" />
                                <div><span>Age Calculator</span></div>
                            </figure>
                        </li>
                        <!-- Portfolio Item Ends -->
                        <!-- Portfolio Item Starts -->
                        <li>
                            <figure>
                                <img src="assets/frontend/img/projects/finano1.jpg" alt="Portolio Image" />
                                <div><span>Finano-Consulting</span></div>
                            </figure>
                        </li>
                        <!-- Portfolio Item Ends -->
                        <!-- Portfolio Item Starts -->
                        <li>
                            <figure>
                                <img src="assets/frontend/img/projects/bdblog.jpg" alt="Portolio Image" />
                                <div><span>BD-Blog</span></div>
                            </figure>
                        </li>
                        <!-- Portfolio Item Ends -->
                        <!-- Portfolio Item Starts -->
                        <li>
                            <figure>
                                <img src="assets/frontend/img/projects/finano-e.jpg" alt="Portolio Image" />
                                <div><span>Finano-E</span></div>
                            </figure>
                        </li>
                        <!-- Portfolio Item Ends -->
                        <!-- Portfolio Item Starts -->
                        <li>
                            <figure>
                                <img src="assets/frontend/img/projects/accueil.jpg" alt="Portolio Image" />
                                <div><span>CONSEIL</span></div>
                            </figure>
                        </li>
                        <!-- Portfolio Item Ends -->
                        <!-- Portfolio Item Starts -->
                        <li>
                            <figure>
                                <img src="assets/frontend/img/projects/blacks.jpg" alt="Portolio Image" />
                                <div><span>Black's Barbecue</span></div>
                            </figure>
                        </li>
                        <!-- Portfolio Item Ends -->
                        <!-- Portfolio Item Starts -->
                        <li>
                            <figure>
                                <img src="assets/frontend/img/projects/project-8.jpg" alt="Portolio Image" />
                                <div><span>Image Project</span></div>
                            </figure>
                        </li>
                        <!-- Portfolio Item Ends -->
                        <!-- Portfolio Item Starts -->
                        <li>
                            <figure>
                                <img src="assets/frontend/img/projects/project-9.jpg" alt="Portolio Image" />
                                <div><span>Image Project</span></div>
                            </figure>
                        </li>
                        <!-- Portfolio Item Ends -->
                    </ul>
                </section>
                <!-- Portfolio Grid Ends -->
                <!-- Portfolio Details Starts -->
                <section class="slideshow">
                    <ul>
                        <!-- Portfolio Item Detail Starts -->
                        <li>
                            <figure>
                                <!-- Project Details Starts -->
                                <figcaption>
                                    <h3>News Portal</h3>
                                    <div class="row open-sans-font">
                                        <div class="col-12 col-sm-6 mb-2">
                                            <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project
                                            </span>: <span class="ft-wt-600 uppercase">BD-MAG</span>
                                        </div>
                                        <div class="col-12 col-sm-6 mb-2">
                                            <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>:
                                            <span class="ft-wt-600 uppercase">BD-MAG</span>
                                        </div>
                                        <div class="col-12 col-sm-6 mb-2">
                                            <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>:
                                            <span class="ft-wt-600 uppercase">HTML, CSS, Bootstrap</span>
                                        </div>
                                        <div class="col-12 col-sm-6 mb-2">
                                            <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview
                                            </span>: <span class="ft-wt-600 uppercase"><a href="http://mehedihasanovi.info/"
                                                    target="_blank">www.mehedihasanovi.info/</a></span>
                                        </div>
                                    </div>
                                </figcaption>
                                <!-- Project Details Ends -->
                                <!-- Main Project Content Starts -->
                                <img src="assets/frontend/img/projects/project-1.jpg" alt="Portolio Image" />
                                <!-- Main Project Content Ends -->
                            </figure>
                        </li>
                        <!-- Portfolio Item Detail Ends -->
                        <!-- Portfolio Item Detail Starts -->
                        <li>
                            <figure>
                                <!-- Project Details Starts -->
                                <figcaption>
                                    <h3>Age Calculator</h3>
                                    <div class="row open-sans-font mb-4">
                                        <div class="col-12 col-sm-6 mb-2">
                                            <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Year
                                            </span>: <span class="ft-wt-600 uppercase" id="ay">YYYY</span>
                                        </div>
                                        <div class="col-12 col-sm-6 mb-2">
                                            <i class="fa fa-user-o pr-2"></i><span class="project-label">Month </span>:
                                            <span class="ft-wt-600 uppercase" id="am">MM</span>
                                        </div>
                                        <div class="col-12 col-sm-6 mb-2">
                                            <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Day
                                            </span>: <span class="ft-wt-600 uppercase" id="ad">DD</span>
                                        </div>
                                        <div class="col-12 col-sm-6 mb-2">
                                            <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>:
                                            <span class="ft-wt-600 uppercase"> Javascript</span>
                                        </div>
                                    </div>
                                    <div class="getAge">
                                        <form>
                                            <div class="row">
                                                <div class="col-12 col-md-4">
                                                    <select name="cars" id="bm">
                                                        <option value="mercedes">mm</option>
                                                        <option value="1">January</option>
                                                        <option value="2">February</option>
                                                        <option value="3">March</option>
                                                        <option value="4">April</option>
                                                        <option value="5">May</option>
                                                        <option value="6">June</option>
                                                        <option value="7">July</option>
                                                        <option value="8">August</option>
                                                        <option value="9">September</option>
                                                        <option value="10">October</option>
                                                        <option value="11">November</option>
                                                        <option value="12">December</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <select name="cars" id="bd">
                                                        <option value="mercedes">dd</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>

                                                    </select>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <input type="number" id="by" placeholder="yyyy">
                                                </div>
                                            </div>
                                        </form>
                                        <button type="submit" class="btn btn-contact" onclick="result()">Calculate</button>
                                    </div>
                                    <!-- Contact Form Ends -->
                                </figcaption>
                            </figure>
                        </li>
                        <!-- Portfolio Item Detail Ends -->
                        <!-- Portfolio Item Detail Starts -->
                        <li>
                            <figure>
                                <!-- Project Details Starts -->
                                <figcaption>
                                    <h3>Finano Consulting</h3>
                                    <div class="row open-sans-font">
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project
                                            </span>: <span class="ft-wt-600 uppercase">FINANO</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>:
                                            <span class="ft-wt-600 uppercase">Finano Consulting</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>:
                                            <span class="ft-wt-600 uppercase">HTML, CSS, Javascript</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview
                                            </span>: <span class="ft-wt-600 uppercase"><a href="#"
                                                    target="_blank">www.finano.com</a></span>
                                        </div>
                                    </div>
                                </figcaption>
                                <!-- Project Details Ends -->
                                <!-- Main Project Content Starts -->
                                <div id="slider" class="carousel slide portfolio-slider" data-ride="carousel"
                                    data-interval="false">
                                    <ol class="carousel-indicators">
                                        <li data-target="#slider" data-slide-to="0" class="active"></li>
                                        <li data-target="#slider" data-slide-to="1"></li>
                                        <li data-target="#slider" data-slide-to="2"></li>
                                    </ol>
                                    <!-- The slideshow -->
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="assets/frontend/img/projects/finano1.jpg" alt="slide 1">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/frontend/img/projects/finano2.png" alt="slide 2">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/frontend/img/projects/finano3.png" alt="slide 3">
                                        </div>
                                    </div>
                                </div>
                                <!-- Main Project Content Ends -->
                            </figure>
                        </li>
                        <!-- Portfolio Item Detail Ends -->
                        <!-- Portfolio Item Detail Starts -->
                        <li>
                            <figure>
                                <!-- Project Details Starts -->
                                <figcaption>
                                    <h3>BD-Blog</h3>
                                    <div class="row open-sans-font">
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project
                                            </span>: <span class="ft-wt-600 uppercase">FINANO</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>:
                                            <span class="ft-wt-600 uppercase">Finano Consulting</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>:
                                            <span class="ft-wt-600 uppercase">HTML, CSS, Javascript</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview
                                            </span>: <span class="ft-wt-600 uppercase"><a href="#"
                                                    target="_blank">www.bdblog.com</a></span>
                                        </div>
                                    </div>
                                </figcaption>
                                <!-- Project Details Ends -->
                                <!-- Main Project Content Starts -->
                                <div id="slider" class="carousel slide portfolio-slider" data-ride="carousel"
                                    data-interval="false">
                                    <ol class="carousel-indicators">
                                        <li data-target="#slider" data-slide-to="0" class="active"></li>
                                        <li data-target="#slider" data-slide-to="1"></li>
                                        <li data-target="#slider" data-slide-to="2"></li>
                                    </ol>
                                    <!-- The slideshow -->
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="assets/frontend/img/projects/bdblog.jpg" alt="slide 1">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/frontend/img/projects/bdblog2.png" alt="slide 2">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/frontend/img/projects/bdblog3.png" alt="slide 3">
                                        </div>
                                    </div>
                                </div>
                                <!-- Main Project Content Ends -->
                            </figure>
                        </li>
                        <!-- Portfolio Item Detail Ends -->
                        <!-- Portfolio Item Detail Starts -->
                        <li>
                            <figure>
                                <!-- Project Details Starts -->
                                <figcaption>
                                    <h3>Finano-E</h3>
                                    <div class="row open-sans-font">
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project
                                            </span>: <span class="ft-wt-600 uppercase">Finano-E</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>:
                                            <span class="ft-wt-600 uppercase">Finano</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>:
                                            <span class="ft-wt-600 uppercase">HTML, CSS, Javascript</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview
                                            </span>: <span class="ft-wt-600 uppercase"><a href="#"
                                                    target="_blank">www.finanoe.com</a></span>
                                        </div>
                                    </div>
                                </figcaption>
                                <!-- Project Details Ends -->
                                <!-- Main Project Content Starts -->
                                <img src="assets/frontend/img/projects/finano-e.jpg" alt="Portolio Image" />
                                <!-- Main Project Content Ends -->
                            </figure>
                        </li>
                        <!-- Portfolio Item Detail Ends -->
                        <!-- Portfolio Item Detail Starts -->
                        <li>
                            <figure>
                                <!-- Project Details Starts -->
                                <figcaption>
                                    <h3>CONSEIL</h3>
                                    <div class="row open-sans-font">
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project
                                            </span>: <span class="ft-wt-600 uppercase">Conseil</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>:
                                            <span class="ft-wt-600 uppercase">Conseil</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>:
                                            <span class="ft-wt-600 uppercase">WordPress , Elementor , Elementor Pro</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview
                                            </span>: <span class="ft-wt-600 uppercase"><a href="#"
                                                    target="_blank">www.conseil.com</a></span>
                                        </div>
                                    </div>
                                </figcaption>
                                <!-- Project Details Ends -->
                                <!-- Main Project Content Starts -->
                                <img src="assets/frontend/img/projects/accueil.jpg" alt="Portolio Image" />
                                <!-- Main Project Content Ends -->
                            </figure>
                        </li>
                        <!-- Portfolio Item Detail Ends -->
                        <!-- Portfolio Item Detail Starts -->
                        <li>
                            <figure>
                                <!-- Project Details Starts -->
                                <figcaption>
                                    <h3>Black's Barbecue</h3>
                                    <div class="row open-sans-font">
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project
                                            </span>: <span class="ft-wt-600 uppercase">Restorat</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>:
                                            <span class="ft-wt-600 uppercase">Black's Barbecue</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>:
                                            <span class="ft-wt-600 uppercase">WordPress , Elementor , Elementor Pro</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview
                                            </span>: <span class="ft-wt-600 uppercase"><a href="#"
                                                    target="_blank">www.envato.com</a></span>
                                        </div>
                                    </div>
                                </figcaption>
                                <!-- Project Details Ends -->
                                <!-- Main Project Content Starts -->
                                <img src="assets/frontend/img/projects/blacks.jpg" alt="Portolio Image" />
                                <!-- Main Project Content Ends -->
                            </figure>
                        </li>
                        <!-- Portfolio Item Detail Ends -->
                        <!-- Portfolio Item Detail Starts -->
                        <li>
                            <figure>
                                <!-- Project Details Starts -->
                                <figcaption>
                                    <h3>Image Project</h3>
                                    <div class="row open-sans-font">
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project
                                            </span>: <span class="ft-wt-600 uppercase">Website</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>:
                                            <span class="ft-wt-600 uppercase">Envato</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>:
                                            <span class="ft-wt-600 uppercase">HTML, CSS, Javascript</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview
                                            </span>: <span class="ft-wt-600 uppercase"><a href="#"
                                                    target="_blank">www.envato.com</a></span>
                                        </div>
                                    </div>
                                </figcaption>
                                <!-- Project Details Ends -->
                                <!-- Main Project Content Starts -->
                                <img src="assets/frontend/img/projects/project-8.jpg" alt="Portolio Image" />
                                <!-- Main Project Content Ends -->
                            </figure>
                        </li>
                        <!-- Portfolio Item Detail Ends -->
                        <!-- Portfolio Item Detail Starts -->
                        <li>
                            <figure>
                                <!-- Project Details Starts -->
                                <figcaption>
                                    <h3>Image Project</h3>
                                    <div class="row open-sans-font">
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project
                                            </span>: <span class="ft-wt-600 uppercase">Website</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>:
                                            <span class="ft-wt-600 uppercase">Envato</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>:
                                            <span class="ft-wt-600 uppercase">HTML, CSS, Javascript</span>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview
                                            </span>: <span class="ft-wt-600 uppercase"><a href="#"
                                                    target="_blank">www.envato.com</a></span>
                                        </div>
                                    </div>
                                </figcaption>
                                <!-- Project Details Ends -->
                                <!-- Main Project Content Starts -->
                                <img src="assets/frontend/img/projects/project-9.jpg" alt="Portolio Image" />
                                <!-- Main Project Content Ends -->
                            </figure>
                        </li>
                        <!-- Portfolio Item Detail Ends -->
                    </ul>
                    <!-- Portfolio Navigation Starts -->
                    <nav>
                        <span class="icon nav-prev"><img src="assets/frontend/img/projects/navigation/left-arrow.png"
                                alt="previous"></span>
                        <span class="icon nav-next"><img src="assets/frontend/img/projects/navigation/right-arrow.png"
                                alt="next"></span>
                        <span class="nav-close"><img src="assets/frontend/img/projects/navigation/close-button.png"
                                alt="close"> </span>
                    </nav>
                    <!-- Portfolio Navigation Ends -->
                </section>
            </div>
        </section>
        <!-- Main Content Ends -->
    </div>
@endsection
