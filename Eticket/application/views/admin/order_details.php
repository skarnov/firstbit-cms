<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Order Details
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>eticket_admin/manage_order"> Manage Order</a></li>
            <li class="active">Order Details</li>
        </ol>
    </section>
    <section class="invoice">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-center" style="font-size: 22px;">
                    Bus Name: <?php echo $order_info['0']->bus_name; ?><br/>
                    Coach Number: <?php echo $order_info['0']->coach_name; ?>
                </div>
                <h2 class="page-header">
                    <i class="fa fa-globe"></i> Invoice #ET <?php echo $invoice->order_id; ?>
                    <small class="pull-right"> Date: <?php echo $invoice->invoice_date; ?></small>
                </h2>
            </div>
        </div>
        <div class="row invoice-info">
            <div class="col-sm-6 invoice-col">
                <address>
                    <strong>Customer Information</strong><hr/>
                    <?php echo $invoice->customer_name; ?><br>
                    <?php echo $invoice->customer_gender; ?><br>
                    <?php echo $invoice->customer_address; ?><br>
                    Phone: <?php echo $invoice->customer_mobile; ?><br>
                    Email: <?php echo $invoice->customer_email; ?>
                </address>
            </div>
            <div class="col-sm-6 invoice-col">
                <address>
                    <strong>Shipping Information</strong><br><hr/>
                    <?php echo $invoice->shipping_name; ?><br>
                    <?php echo $invoice->shipping_address; ?><br>
                    Phone: <?php echo $invoice->shipping_mobile; ?><br>
                    Email: <?php echo $invoice->shipping_email; ?>
                </address>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Ordered Seat</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($order_info as $v_order) {
                            ?>
                            <tr>
                                <td><?php echo $v_order->seat_name; ?></td>
                                <td><?php echo $v_order->seat_price; ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">
                <p class="lead">Payment Method: <?php echo $invoice->payment_method; ?></p>
                <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                    Fees charged by payment gateways, credit / debit cards, mobile payment gateways
                    (e.g. bKash,Mycash) are non refundable due to the policies of the respective
                    organizations, which is beyond 1stBit control. Ticket delivery fee is non-refundable.
                </p>
            </div>
            <div class="col-xs-6">
                <p class="lead">Payment Status: Unpaid</p>
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
<!--                                        <tr>
                                <th style="width:50%">Subtotal:</th>
                                <td>$250.30</td>
                            </tr>
                            <tr>
                                <th>Tax (9.3%)</th>
                                <td>$10.34</td>
                            </tr>
                            <tr>
                                <th>Shipping:</th>
                                <td>$5.80</td>
                            </tr>-->
                            <tr>
                                <th>Total:</th>
                                <td><?php echo $invoice->order_total; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row no-print">
            <div class="col-xs-12">
                <a href="" class="btn btn-default"><i class="fa fa-print"></i> Print Ticket</a>
                <a href="<?php echo base_url(); ?>eticket_admin/paid_order/<?php echo $invoice->order_id; ?>" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Paid Payment</a>
                <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
                    <i class="fa fa-download"></i> Generate PDF
                </button>
            </div>
        </div>
    </section>
</div>