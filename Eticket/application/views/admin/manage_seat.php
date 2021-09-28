<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Manage Seat Plan
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>eticket_admin/add_seat">Add New Seat Plan</a></li>
            <li class="active">Manage Seat Plan</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 style="color:green">
                    <?php
                    $msg = $this->session->userdata('edit_seat');
                    if (isset($msg)) {
                        echo $msg;
                        $this->session->unset_userdata('edit_seat');
                    }
                    ?>
                </h3>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Available Seat</th>
                            <th>Seat Plan Name</th>
                            <th>Number of Row</th>
                            <th>Number of Column</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($all_seat as $v_seat) {
                            ?>
                            <tr>
                                <td><?php echo $v_seat->available_seat; ?></td>
                                <td><?php echo $v_seat->seat_name; ?></td>
                                <td><?php echo $v_seat->seat_row; ?></td>
                                <td><?php echo $v_seat->seat_column; ?></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>eticket_admin/edit_seat/<?php echo $v_seat->seat_id; ?>" class="btn btn-primary" data-toggle="tooltip" title="Edit Seat Plan"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="<?php echo base_url(); ?>eticket_admin/manage_seat_booking/<?php echo $v_seat->seat_id; ?>" class="btn btn-success" data-toggle="tooltip" title="Manage Booking"><i class="fa fa-eraser"></i></a>
                                    <a href="<?php echo base_url(); ?>eticket_admin/delete_seat/<?php echo $v_seat->seat_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete Seat Plan" onclick="return check_delete();"><i class="fa fa-trash"></i></a>
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