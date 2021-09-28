<div class="container">
    <ul class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>">Home</a></li>
        <li><a href="">Login</a></li>
    </ul>
    <div class="row"> 
        <div id="content" class="col-sm-9">
            <h1>Login</h1><br/>
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-collapse collapse in" id="collapse-checkout-option" style="height: auto;">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2>New Customer</h2>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="account" value="register" checked="checked">
                                            Register Account
                                        </label>
                                    </div>
                                    <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                                    <br/>
                                    <a href="<?php echo base_url(); ?>eticket/register" value="Continue" id="button-account" class="btn btn-primary">Continue</a>
                                </div>
                                <div class="col-sm-6">
                                    <h3 style="color:red">
                                        <?php
                                        $exc = $this->session->userdata('exception');
                                        if (isset($exc)) {
                                            echo $exc;
                                            $this->session->unset_userdata('exception');
                                        }
                                        ?>
                                    </h3>
                                    <form action="<?php echo base_url(); ?>customer_login/customer_login_check" method="POST">
                                        <h2>Returning Customer</h2>
                                        <p>I am a returning customer</p>
                                        <div class="form-group">
                                            <label class="control-label" for="input-email">E-Mail</label>
                                            <input type="text" name="customer_email" value="" placeholder="E-Mail" id="input-email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="input-password">Password</label>
                                            <input type="password" name="customer_password" value="" placeholder="Password" id="input-password" class="form-control">
                                            <br/><a href="">Forgotten Password</a>
                                        </div>
                                        <input type="submit" value="Login" id="button-login" data-loading-text="Loading..." class="btn btn-primary">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>