<div class="container">
    <ul class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>">Home</a></li>
        <li><a href="<?php echo base_url(); ?>checkout/payment_form">Payment Method</a></li>
        <li><a href="">Bank</a></li>
    </ul>
    <div class="row"> 
        <div id="content" class="col-sm-9">
            <h1>Bank</h1>
            <div class="panel-collapse collapse in" id="collapse-checkout-option" style="height: auto;">
                <div class="panel-body">
                    <div class="row">
                        <form action="<?php echo base_url(); ?>checkout/confirm_order" method="POST" class="form-horizontal">
                            <strong>Bank Name:</strong> Brac Bank Limited<br/>
                            <strong>Account Name:</strong> A.N.M. Rahmat Ullah<br/>
                            <strong>Account Number:</strong> 1514202150990001<br/>
                            <strong>Branch Name:</strong> Ring Road Branch<br/><br/>
                            <div class="buttons">
                                <div>
                                    <input type="submit" value="Execute" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>