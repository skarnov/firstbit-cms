<div class="container">
    <ul class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>">Home</a></li>
        <li><a href="<?php echo base_url(); ?>checkout">Shipping Address</a></li>
        <li><a href="">Payment Form</a></li>
    </ul>
    <div class="row">
        <div id="content" class="col-sm-9">
            <h1>Payment Method</h1>
            <div class="checkout-area">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel_default">
                            <form action="<?php echo base_url(); ?>checkout/save_payment_form" method="POST">
                                <div id="payment-address" class="collapse in">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-6 col-xs-12">
                                                <fieldset id="address">
                                                    <div class="form-group">
                                                        <label>
                                                            <input type="radio" name="payment_method" value="Bkash" checked=""> Bkash
                                                        </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>
                                                            <input type="radio" name="payment_method" value="Bank"> Bank Transfer
                                                        </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>
                                                            <input type="radio" name="payment_method" value="Cash on Delivery"> Cash on Delivery
                                                        </label>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="buttons clearfix">
                                                    <div class="col-xs-12">
                                                        <button type="submit" class="btn btn-primary pull-right"/>Execute</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>