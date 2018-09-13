<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    NebengServer Tim
                </a>
            </div>
            <?php
                if ($this->session->userdata('isLoggedIn')) {
            ?>
                <ul class="nav">
                    <li class="<?=$current=='index'?'active':''?>">
                        <a href="<?=base_url($link_menu."/index")?>">
                            <i class="pe-7s-graph"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="<?=$current=='user'?'active':''?>">
                        <a href="<?=base_url($link_menu."/user")?>">
                            <i class="pe-7s-user"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li class="<?=$current=='list_order'?'active':''?>">
                        <a href="<?=base_url($link_menu."/list_order")?>">
                            <i class="pe-7s-note2"></i>
                            <p>List Order</p>
                        </a>                    
                    </li>
                    <li class="<?=$current=='list_payments'?'active':''?>">
                        <a href="<?=base_url($link_menu."/list_payments")?>">
                            <i class="pe-7s-cart"></i>
                            <p>List Payments</p>
                        </a>                    
                    </li>
    <!--                 <li>
                        <a href="table.html">
                            <i class="pe-7s-note2"></i>
                            <p>Table List</p>
                        </a>
                    </li>
                    <li>
                        <a href="typography.html">
                            <i class="pe-7s-news-paper"></i>
                            <p>Typography</p>
                        </a>
                    </li>
                    <li>
                        <a href="icons.html">
                            <i class="pe-7s-science"></i>
                            <p>Icons</p>
                        </a>
                    </li>
                    <li>
                        <a href="maps.html">
                            <i class="pe-7s-map-marker"></i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li>
                        <a href="notifications.html">
                            <i class="pe-7s-bell"></i>
                            <p>Notifications</p>
                        </a>
                    </li>
     				<li class="active-pro">
                        <a href="upgrade.html">
                            <i class="pe-7s-rocket"></i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li>
     -->    <?php
                }
            ?>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
<!--                         <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-lg hidden-md"></b>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li> -->
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
<!--                         <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Dropdown
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li> -->
                        <?php
                            if ($this->session->userdata('isLoggedIn')) {
                        ?>
                            <li>
                                <a href="<?=base_url('client/main/logout')?>">
                                    <p>Log out</p>
                                </a>
                            </li>
                        <?php
                            }
                        ?>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>