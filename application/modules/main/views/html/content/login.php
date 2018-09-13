    <!-- Breadcrumps -->
    <div class="breadcrumbs">
        <div class="row">
            <div class="col-sm-6">
                <h1>Login</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li>You are here: </li>
                    <li><a href="index.html">Home</a>
                    </li>
                    <li>Pages
                    </li>
                    <li class="active">Login</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- End of Breadcrumps -->

    <!-- Login -->
    <section class="login">

        <div class="row spacing-40">
            <div class="col-sm-12">
                <div class="login-form-panel">
                    <h3 class="badge">LOGIN <?=$this->session->flashdata('message')?></h3>


                    <div class="row">
                        <div class="col-sm-5 center-block">
                            <div class="login-form">
                                <form method="post" action="<?=base_url('main/doLogin')?>">
                                    <input type="text" name="username" size="50" placeholder="E-mail address" />
                                    <input type="password" name="password" size="20" placeholder="Password" />
                                    <p class="text-center"><a href="">Forgot Password?</a>
                                    </p>
                                    <input type="submit" value="Login" />
                                    <p class="text-center"><a href="<?=base_url('main/register')?>">Register Here</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- End of Login -->