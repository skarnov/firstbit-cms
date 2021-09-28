<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Edit Bus Type
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>eticket_admin/manage_bus_type"> Manage Bus Type</a></li>
            <li class="active">Edit Bus Type</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <form action="<?php echo base_url(); ?>eticket_admin/update_bus_type" method="POST" name="bus_type">
                    <div class="box box-info">
                        <div class="col-xs-8">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Bus Type Name</label>
                                    <input type="text" name="bus_type_name" value="<?php echo $bus_type_info->bus_type_name; ?>" class="form-control">
                                    <input type="hidden" name="bus_type_id" value="<?php echo $bus_type_info->bus_type_id; ?>">
                                </div>
                                <button type="reset" class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-info pull-right">Edit</button>
                            </div>
                        </div>
                        <div class="box-footer"></div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>