<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Manage Route
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>eticket_admin/add_route">Add New Route</a></li>
            <li class="active">Manage Route</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 style="color:green">
                    <?php
                    $msg = $this->session->userdata('edit_route');
                    if (isset($msg)) {
                        echo $msg;
                        $this->session->unset_userdata('edit_route');
                    }
                    ?>
                </h3>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Start Point</th>
                            <th>End Point</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($all_route as $v_route) {
                            ?>
                            <tr>
                                <td><?php echo $v_route->route_startpoint; ?></td>
                                <td><?php echo $v_route->route_endpoint; ?></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>eticket_admin/edit_route/<?php echo $v_route->route_id; ?>" class="btn btn-primary" data-toggle="tooltip" title="Edit Route"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="<?php echo base_url(); ?>eticket_admin/delete_route/<?php echo $v_route->route_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete Route" onclick="return check_delete();"><i class="fa fa-trash"></i></a>
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