<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Manage Bus Type
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>eticket_admin/add_bus_type">Add New Bus Type</a></li>
            <li class="active">Manage Bus Type</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 style="color:green">
                    <?php
                    $msg = $this->session->userdata('edit_bus_type');
                    if (isset($msg)) {
                        echo $msg;
                        $this->session->unset_userdata('edit_bus_type');
                    }
                    ?>
                </h3>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Bus Type Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($all_bus_type as $v_bus_type) {
                            ?>
                            <tr>
                                <td><?php echo $v_bus_type->bus_type_name; ?></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>eticket_admin/edit_bus_type/<?php echo $v_bus_type->bus_type_id; ?>" class="btn btn-primary" data-toggle="tooltip" title="Edit Bus Type"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="<?php echo base_url(); ?>eticket_admin/delete_bus_type/<?php echo $v_bus_type->bus_type_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete Bus Type" onclick="return check_delete();"><i class="fa fa-trash"></i></a>
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