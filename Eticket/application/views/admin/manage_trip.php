<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Manage Trip
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>eticket_admin/add_trip">Add New Trip</a></li>
            <li class="active">Manage Trip</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 style="color:green">
                    <?php
                    $msg = $this->session->userdata('edit_trip');
                    if (isset($msg)) {
                        echo $msg;
                        $this->session->unset_userdata('edit_trip');
                    }
                    ?>
                </h3>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Trip Details</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($all_trip as $v_trip) {
                            ?>
                            <tr>
                                <td><?php echo 'Bus Name: '. $v_trip->bus_name.' | Type: '.$v_trip->bus_type_name.' | Brand: '.$v_trip->brand_name.' | Coach: '.$v_trip->coach_name.' | Seat Name: '.$v_trip->seat_name.'<br> Ticket Price: '.$v_trip->ticket_price.' | Route: '.$v_trip->route_startpoint.' - '.$v_trip->route_endpoint. ' | Date: '.$v_trip->trip_date.' | Time: '.$v_trip->trip_time; ?></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>eticket_admin/edit_trip/<?php echo $v_trip->trip_id; ?>" class="btn btn-primary" data-toggle="tooltip" title="Edit Trip"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="<?php echo base_url(); ?>eticket_admin/delete_trip/<?php echo $v_trip->trip_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete Trip" onclick="return check_delete();"><i class="fa fa-trash"></i></a>
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