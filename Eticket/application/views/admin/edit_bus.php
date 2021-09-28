<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Edit Bus
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>eticket_admin/manage_bus"> Manage Bus</a></li>
            <li class="active">Edit Bus</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <form action="<?php echo base_url(); ?>eticket_admin/update_bus" method="POST" name="bus">
                    <div class="box box-info">
                        <div class="col-xs-8">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Bus Name</label>
                                    <input type="text" name="bus_name" value="<?php echo $bus_info->bus_name; ?>" class="form-control">
                                    <input type="hidden" name="bus_id" value="<?php echo $bus_info->bus_id; ?>">
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