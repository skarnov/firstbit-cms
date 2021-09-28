<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Manage Coach
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>eticket_admin/add_coach">Add New Coach</a></li>
            <li class="active">Manage Coach</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 style="color:green">
                    <?php
                    $msg = $this->session->userdata('edit_coach');
                    if (isset($msg)) {
                        echo $msg;
                        $this->session->unset_userdata('edit_coach');
                    }
                    ?>
                </h3>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Coach Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($all_coach as $v_coach) {
                            ?>
                            <tr>
                                <td><?php echo $v_coach->coach_name; ?></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>eticket_admin/edit_coach/<?php echo $v_coach->coach_id; ?>" class="btn btn-primary" data-toggle="tooltip" title="Edit Coach"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="<?php echo base_url(); ?>eticket_admin/delete_coach/<?php echo $v_coach->coach_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete Coach" onclick="return check_delete();"><i class="fa fa-trash"></i></a>
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