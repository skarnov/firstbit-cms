<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Manage Customer
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Manage Customer</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header">
                <div class="input-group col-md-4">
                    <input type="text" name="search" onkeyup="customerSearch(this.value);" class="form-control input-lg" placeholder="Search" />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </div>
            <div class="box-body" id="search_customer">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile </th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($all_customer as $v_customer) {
                            ?>
                            <tr>
                                <td><?php echo $v_customer->customer_name; ?></td>
                                <td><?php echo $v_customer->customer_email; ?></td>
                                <td><?php echo $v_customer->customer_mobile; ?></td>
                                <td><?php echo $v_customer->customer_gender; ?></td>
                                <td><?php echo $v_customer->customer_address; ?></td>
                                <td>
                                    <span class="btn-success">
                                        <?php
                                        if ($v_customer->customer_status == '1') {
                                            echo 'Active';
                                        }
                                        ?> 
                                    </span>
                                    <span class="btn-danger">
                                        <?php
                                        if ($v_customer->customer_status == 0) {
                                            echo 'Inactive';
                                        }
                                        ?>   
                                    </span>
                                </td>
                                <td>
                                    <?php
                                    if ($v_customer->customer_status == '1') {
                                        ?>
                                        <a href="<?php echo base_url(); ?>eticket_admin/deactive_customer/<?php echo $v_customer->customer_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Deactive Customer"><i class="fa fa-times"></i></a>
                                        <?php
                                    } else {
                                        ?>
                                        <a href="<?php echo base_url(); ?>eticket_admin/active_customer/<?php echo $v_customer->customer_id; ?>" class="btn btn-success" data-toggle="tooltip" title="Active Customer"><i class="fa fa-check"></i></a>
                                        <?php
                                    }
                                    ?>
                                    <a href="<?php echo base_url(); ?>eticket_admin/delete_customer/<?php echo $v_customer->customer_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete Customer" onclick="return check_delete();"><i class="fa fa-trash"></i></a>
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