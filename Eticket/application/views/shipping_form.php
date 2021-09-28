<div class="container">
    <ul class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>">Home</a></li>
        <li><a href="">Shipping Form</a></li>
    </ul>
    <div class="row">
        <div id="content" class="col-sm-9">
            <h1>Shipping Form</h1><br/>
            <form action="<?php echo base_url(); ?>checkout/save_shipping_form" method="POST" class="form-horizontal">
                <fieldset id="account">
                    <legend>Enter Your Shipping Address. Edit This If You Need</legend><br/>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-firstname">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="shipping_name" value="<?php echo $shipping_info->customer_name; ?>" placeholder="Name" id="input-firstname" class="form-control">
                            <input type="hidden" name="customer_id" value="<?php echo $this->session->userdata('customer_id');?>" />
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
                        <div class="col-sm-10">
                            <input type="email" name="shipping_email" value="<?php echo $shipping_info->customer_email; ?>" placeholder="E-Mail" id="input-email" class="form-control">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-telephone">Mobile</label>
                        <div class="col-sm-10">
                            <input type="tel" name="shipping_mobile" value="<?php echo $shipping_info->customer_mobile; ?>" placeholder="Mobile" id="input-telephone" class="form-control">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-address-1">Address</label>
                        <div class="col-sm-10">
                            <input type="text" name="shipping_address" value="<?php echo $shipping_info->customer_address; ?>" placeholder="Address" id="input-address-1" class="form-control">
                        </div>
                    </div>
                </fieldset>
                <div class="buttons">
                    <div class="pull-right">
                        <input type="submit" value="Done" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>