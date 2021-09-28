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
            foreach ($search_customer as $v_customer) {
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
                        <a href="<?php echo base_url(); ?>super_admin/delete_customer/<?php echo $v_customer->customer_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete Customer" onclick="return check_delete();"><i class="fa fa-trash"></i></a>
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