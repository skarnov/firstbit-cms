<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Edit Route
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>eticket_admin/manage_route"> Manage Route</a></li>
            <li class="active">Edit Route</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <form action="<?php echo base_url(); ?>eticket_admin/update_route" method="POST">
                    <div class="box box-info">
                        <div class="col-xs-6">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Start Point</label>
                                    <input type="text" name="route_startpoint" value="<?php echo $route_info->route_startpoint; ?>" class="form-control">
                                    <input type="text" name="route_id" value="<?php echo $route_info->route_id; ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>End Point</label>
                                    <input type="text" name="route_endpoint" value="<?php echo $route_info->route_endpoint; ?>" class="form-control">
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