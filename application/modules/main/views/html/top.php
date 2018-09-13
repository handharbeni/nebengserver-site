
    <!-- Top Bar-->
    <div class="top">
        <div class="row">
            <div class="col-sm-3">
                <div class="logo">
                    <a href="index.html"><img src="<?=base_url()?>assets/main/images/logo.png" alt="" />
                    </a>
                </div>
            </div>
            <div class="col-sm-9">

                <nav id="desktop-menu">
                    <ul class="sf-menu" id="navigation">
                        <li class="<?=$current=='home'?'current':''?>"><a href="<?=base_url('main/index')?>">Home</a></li>
                        <li><a href="<?=base_url('main/index')?>">Wordpress Hosting</a></li>
                        <li><a href="#">Domains</a></li>
                        <li class="<?=$current=='page'?'current':''?>">
                            <a href="#">Pages</a>
                            <ul>
                                <li><a href="<?=base_url('main/about')?> ">About</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="<?=base_url('main/login')?>">Login</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Blog</a></li>
                        <li class="<?=$current=='contact'?'current':''?>"><a href="<?=base_url('main/contact')?>">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- End of Top Bar-->

