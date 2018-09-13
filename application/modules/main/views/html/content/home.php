
    <!-- Slider -->

    <div class="slidercontainer">
        <div id="mainslider" class="owl-carousel">

            <div class="item">
                <div class="slidecaption">
                    <h2>SHARED HOSTING</h2>
                    <h4>secure, fast and reliable</h4>
                    <p><a class="btn btn-slide" href="#">See the Features</a>
                    </p>
                </div>
                <img src="<?=base_url()?>assets/main/images/slider/1.jpg" alt="" />
            </div>

            <div class="item">
                <div class="slidecaption">
                    <h2>RESELLING SERVEREAST. EASIER THAN EVER.</h2>
                    <h4>your customers expect nothing but the best</h4>
                    <p><a class="btn btn-slide" href="#">Learn More</a>
                    </p>
                </div>
                <img src="<?=base_url()?>assets/main/images/slider/2.jpg" alt="" />
            </div>

            <div class="item">
                <div class="slidecaption">
                    <h2>SSD VPS. IN THE CLOUD.</h2>
                    <h4>we deliver what you need</h4>
                    <p><a class="btn btn-slide" href="#">More Info</a>
                    </p>
                </div>
                <img src="<?=base_url()?>assets/main/images/slider/3.jpg" alt="" />
            </div>

            <div class="item">
                <div class="slidecaption">
                    <h2>MANAGED DEDICATED SERVERS</h2>
                    <h4>24/7/365 Server Support</h4>
                    <p><a class="btn btn-slide" href="#">Order Now</a>
                    </p>
                </div>
                <img src="<?=base_url()?>assets/main/images/slider/4.jpg" alt="" />
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div id="mainslider-nav" class="owl-carousel">
                    <div class="item"><i class="fa fa-rocket"></i>SHARED HOSTING</div>
                    <div class="item"><i class="fa fa-line-chart"></i>RESELLER HOSTING</div>
                    <div class="item"><i class="fa fa-cloud"></i>CLOUD VPS</div>
                    <div class="item"><i class="fa fa-tasks"></i>DEDICATED SERVERS</div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Slider -->

    <!--  Features -->
    <section class="features">
        <div class="row">
            <div class="col-sm-12">
                <h2>We guarantee our commitment to quality</h2>
                <span>Philanthropy think tank, approach Martin Luther King Jr., agency</span>
            </div>
        </div>

        <div class="row spacing-70">
            <div class="col-sm-4">
                <div class="feature wow zoomIn" data-wow-delay="0.2s">
                    <img src="<?=base_url()?>assets/main/images/rocket.png" alt="" />
                    <h4>Your Website Faster</h4>
                    <p>Sustainable, liberal facilitate change movements outcomes Millennium Development Goals.</p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="feature wow zoomIn" data-wow-delay="0.4s">
                    <img src="<?=base_url()?>assets/main/images/ssd.png" alt="" />
                    <h4>SSD Drives</h4>
                    <p>John Lennon, involvement Gandhi, working alongside cornerstone. Arab Spring; honesty save lives think.</p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="feature wow zoomIn" data-wow-delay="0.6s">
                    <img src="<?=base_url()?>assets/main/images/secure.png" alt="" />
                    <h4>Highest Data Security</h4>
                    <p>Respond our grantees and partners, youth, fight against malnutrition experience in the field detection.</p>
                </div>
            </div>

        </div>
    </section>
    <!-- End of Features -->


    <!--  Call to Action -->
    <section class="calltoaction">

        <div class="row wow zoomIn" data-wow-delay="0.2s">
            <div class="col-sm-10 com-md-8 center-block">

                <div class="row no-gutter cta-content">
                    <div class="col-sm-3">
                        <div class="offer wow fadeInUp" data-wow-delay="0.5s">
                            <span>GET</span>
                            <h2>30%</h2>
                            <span>OFF</span>
                        </div>
                    </div>
                    <div class="col-sm-9">

                        <div class="offerdescription wow fadeInUp" data-wow-delay="0.7s">
                            <h2>GET STARTING TODAY</h2>
                            <p>register your site now</p>
                        </div>
                    </div>
                </div>

                <div class="wow fadeInUp" data-wow-delay="0.9s">
                    <form class="form-inline domainsearch" method="post" action="#">
                        <div class="row no-gutter">
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="sld" onfocus="if (this.value == 'Enter your domain') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Enter your domain';}" value="Enter your domain" />
                            </div>
                            <div class="col-sm-2">
                                <select name="tld" class="form-control">
                                    <option>.com</option>
                                    <option>.net</option>
                                    <option>.org</option>
                                    <option>.eu</option>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-primary" style="width:100%">SEARCH</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
    <!-- End of Call to Action -->

    <!--  Pricing Tables -->
    <section class="pricingtables">
        <div class="row">
            <div class="col-sm-12">
                <h2>Package Wordpress Hosting</h2>
                <!-- <p>Opportunity organization think tank, non-partisan fundraising campaign social responsibility</p> -->
            </div>
        </div>

        <div class="row spacing-70 no-gutter">
            <?php $i = 1; ?>
            <?php foreach ($resultPackages as $package) { ?>
            <!-- <?=$package['id_paket']==3?'most-popular':''?> -->
                <div class="col-sm-3 wow zoomIn " data-wow-delay="<?=$i/4?>s">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="text-center"><?=$package['nama_paket']?></h3>
                        </div>
                        <div class="panel-body text-center">
                            <span>STARTING FROM</span>
                            <h4><?=number_format($package['harga'])?></h4>
                            <span class="per">PER MONTH</span>
                        </div>
                        <?php $detailPackage = json_decode(modules::run('main/Main/getDetailPackage',$package['id_paket']), true); ?>
                        <ul class="text-center">
                            <li><?=$detailPackage['results']['cpu']?></li>
                            <li><?=$detailPackage['results']['ram']?> Ram</li>
                            <li><?=$detailPackage['results']['disk']?> Storage</li>
                        </ul>
                        <div class="panel-footer">
                            <a class="btn btn-lg btn-pricetable" href="#">ORDER</a>
                        </div>
                    </div>
                </div>
                <?php $i++; ?>
            <?php } ?>
        </div>
    </section>
    <!-- End of Pricing Tables -->



    <!--  Statistics -->
    <section class="statistics">
        <div class="row">
            <div class="col-sm-12">
                <h2>A few <i class="fa fa-heart"></i> lovely Theme</h2>
            </div>
        </div>

        <div class="row spacing-70">
            <?php $i = 0; ?>
            <?php foreach ($resultTheme as $theme) { ?>
                <div class="col-sm-3">
                    <div class="wow fadeInUp" data-wow-delay="<?=$i/4?>s">
                        <img src="<?=$theme['spesifikasi']?>"/>
                        <span><?=$theme['nama_tema']?></span>
                    </div>
                </div>                
            <?php } ?>
        </div>
    </section>
    <!-- End of Statistics -->

    <div class="testimonials gray">
        <div class="row">
            <div class="col-sm-12">
                <h3>What Clients Think</h3>
                <p>Foundation, Jane Addams John Lennon local solutions institutions action.</p>

                <div id="testimonials-carousel" class="owl-carousel">

                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonialimg"><img src="images/testimonial1.jpg" alt="" />
                            </div>
                            <p>Future social movement carbon emissions reductions voice; foster reduce child mortality measures theory of social change emergent women and children. Life-expectancy gender rights safeguards save lives social analysis dignity health developing nations. </p>
                            <div class="whoclient">
                                <h5>Alvaro DeMichelis, Founder of <a href="">Global Corp.</a></h5>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonialimg"><img src="images/testimonial2.jpg" alt="" />
                            </div>
                            <p>International tackle working alongside. Economic security, significant invest, Ford Foundation respect public service crowdsourcing research affordable health. Philanthropy equal opportunity assessment expert accelerate United Nations environmental, poverty, political, public.</p>
                            <div class="whoclient">
                                <h5>Bjorn Swift, CEO of <a href="">Campaign Ltd.</a></h5>
                            </div>

                        </div>
                    </div>


                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonialimg"><img src="images/testimonial3.jpg" alt="" />
                            </div>
                            <p>Save the world citizens of change; medicine immunize, convener design thinking global network Kickstarter empowerment prevention effectiveness. Service improving quality youth incubation foster. Expanding community ownership, urban experience in the field scalable</p>
                            <div class="whoclient">
                                <h5>Bill Good, Chairman of <a href="">Solution S.A.</a></h5>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>