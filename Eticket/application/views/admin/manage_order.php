<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Manage Order
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>eticket_admin/add_order">Add New Order</a></li>
            <li class="active">Manage Order</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header">
                <div class="input-group col-md-4">
                    <input type="text" class="form-control input-lg" placeholder="Search" />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer Name</th>
                            <th>Mobile</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Payment Method</th>
                            <th>Order Amount</th>
                            <th>Order Date</th>
                            <th>Order Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($all_order as $v_order) {
                            ?>
                            <tr>
                                <td><?php echo $v_order->order_id; ?></td>
                                <td><?php echo $v_order->customer_name; ?></td>
                                <td><?php echo $v_order->customer_mobile; ?></td>
                                <td><?php echo $v_order->customer_gender; ?></td>
                                <td><?php echo $v_order->customer_address; ?></td>
                                <td><?php echo $v_order->payment_method; ?></td>
                                <td><?php echo $v_order->order_total; ?></td>
                                <td><?php echo $v_order->invoice_date; ?></td>
                                <td>Pending</td>
                                <td>
                                    <a href="<?php echo base_url(); ?>eticket_admin/order_details/<?php echo $v_order->order_id; ?>" class="btn btn-primary" data-toggle="tooltip" title="Order Details"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="<?php echo base_url(); ?>eticket_admin/paid_order/<?php echo $v_order->order_id; ?>" class="btn btn-primary" data-toggle="tooltip" title="Paid"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="<?php echo base_url(); ?>eticket_admin/delete_order/<?php echo $v_order->order_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete Sale" onclick="return check_delete();"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
            </div>
        </div>
    </section>
</div>