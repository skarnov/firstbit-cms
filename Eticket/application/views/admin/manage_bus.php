<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Manage Bus
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>eticket_admin/add_bus">Add New Bus</a></li>
            <li class="active">Manage Bus</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 style="color:green">
                    <?php
                    $msg = $this->session->userdata('edit_bus');
                    if (isset($msg)) {
                        echo $msg;
                        $this->session->unset_userdata('edit_bus');
                    }
                    ?>
                </h3>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Bus Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($all_bus as $v_bus) {
                            ?>
                            <tr>
                                <td><?php echo $v_bus->bus_name; ?></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>eticket_admin/edit_bus/<?php echo $v_bus->bus_id; ?>" class="btn btn-primary" data-toggle="tooltip" title="Edit Bus"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="<?php echo base_url(); ?>eticket_admin/delete_bus/<?php echo $v_bus->bus_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete Bus" onclick="return check_delete();"><i class="fa fa-trash"></i></a>
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