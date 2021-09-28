<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="<?php echo base_url(); ?>asset/css/custom.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="container body">
            <div class="main_container">
                <div class="login_wrapper">
                    <div class="animate form login_form">
                        <section class="login_content">
                            <div style="background-color:wheat;"><?php echo validation_errors(); ?></div><br/>
                            <h3 style="color:red">
                                <?php
                                $exc = $this->session->userdata('exception');
                                if (isset($exc)) {
                                    echo $exc;
                                    $this->session->unset_userdata('exception');
                                }
                                ?>
                            </h3>
                            <form action="<?php echo base_url(); ?>auth/check_admin_login" method="POST">
                                <h1>1stbit Panel Login</h1>
                                <div>
                                    <input type="email" name="email" placeholder="E-Mail" required="" class="form-control"/>
                                </div>
                                <div>
                                    <input type="password" name="password" placeholder="Password" required="" class="form-control" />
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-default submit">Log in</button>
                                    <a class="reset_pass" href="">Lost your password?</a>
                                </div>
                                <div class="clearfix"></div>
                                <div class="separator">
                                    <div class="clearfix"></div>
                                    <div>
                                        <h1><i class="fa fa-paw"></i> LabTrio</h1>
                                        <p>© 2016 All Rights Reserved</p>
                                    </div>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
