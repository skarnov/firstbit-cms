<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Add New Bus Type
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>eticket_admin/manage_bus_type"> Manage Bus Type</a></li>
            <li class="active">Add New Bus Type</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <h3 style="color:green">
                    <?php
                    $msg = $this->session->userdata('save_bus_type');
                    if (isset($msg)) {
                        echo $msg;
                        $this->session->unset_userdata('save_bus_type');
                    }
                    ?>
                </h3>
                <form action="<?php echo base_url(); ?>eticket_admin/save_bus_type" method="POST">
                    <div class="box box-info">
                        <div class="col-xs-8">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Bus Type Name</label>
                                    <input type="text" name="bus_type_name" class="form-control">
                                </div>
                                <button type="reset" class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-info pull-right">Save</button>
                            </div>
                        </div>
                        <div class="box-footer"></div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>