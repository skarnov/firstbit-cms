<div class="container">
    <ul class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>">Home</a></li>
        <li><a href="<?php echo base_url(); ?>customer_login">Login</a></li>
        <li><a href="">Register</a></li>
    </ul>
    <div class="row">
        <div id="content" class="col-sm-9">
            <h1>Register Account</h1><br/>
            <div style="background-color:red; color:white;"><?php echo validation_errors(); ?></div>
            <h3 style="color:green">
                <?php
                $msg = $this->session->userdata('save_customer');
                if (isset($msg)) {
                    echo $msg;
                    $this->session->unset_userdata('save_customer');
                }
                ?>
            </h3>
            <form action="<?php echo base_url(); ?>eticket/save_customer" method="POST" class="form-horizontal">
                <fieldset id="account">
                    <legend></legend>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-firstname">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="customer_name" placeholder="Customer Name" id="input-firstname" class="form-control">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
                        <div class="col-sm-10">
                            <input type="email" name="customer_email" placeholder="E-Mail" id="input-email" class="form-control">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-gender">Gender</label>
                        <div class="col-sm-10">
                            <label class="radio-inline"><input type="radio" name="customer_gender" value="Female">Female</label>
                            <label class="radio-inline"><input type="radio" name="customer_gender" value="Male">Male</label>
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-password">Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="customer_password" placeholder="Password" id="input-password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-confirm">Confirm Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="confirm_password" placeholder="Password Confirm" id="input-confirm" class="form-control">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-telephone">Mobile</label>
                        <div class="col-sm-10">
                            <input type="tel" name="customer_mobile" placeholder="Mobile" id="input-telephone" class="form-control">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-address-1">Address</label>
                        <div class="col-sm-10">
                            <input type="text" name="customer_address" placeholder="Address" id="input-address-1" class="form-control">
                        </div>
                    </div>
                </fieldset>
                <div class="buttons">
                    <div class="pull-right">
                        <input type="submit" value="Create" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>