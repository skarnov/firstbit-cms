<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Edit Ticket
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>eticket_admin/manage_ticket"> Manage Ticket</a></li>
            <li class="active">Edit Ticket</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <form action="<?php echo base_url(); ?>eticket_admin/update_ticket" method="POST" name="ticket">
                    <div class="box box-info">
                        <div class="col-xs-8">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Ticket Price</label>
                                    <input type="text" name="ticket_price" value="<?php echo $ticket_info->ticket_price; ?>" class="form-control">
                                    <input type="hidden" name="ticket_id" value="<?php echo $ticket_info->ticket_id; ?>">
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