<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Manage Ticket
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>eticket_admin/add_ticket">Add New Ticket</a></li>
            <li class="active">Manage Ticket</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 style="color:green">
                    <?php
                    $msg = $this->session->userdata('edit_ticket');
                    if (isset($msg)) {
                        echo $msg;
                        $this->session->unset_userdata('edit_ticket');
                    }
                    ?>
                </h3>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Ticket Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($all_ticket as $v_ticket) {
                            ?>
                            <tr>
                                <td><?php echo $v_ticket->ticket_price; ?></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>eticket_admin/edit_ticket/<?php echo $v_ticket->ticket_id; ?>" class="btn btn-primary" data-toggle="tooltip" title="Edit Ticket"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="<?php echo base_url(); ?>eticket_admin/delete_ticket/<?php echo $v_ticket->ticket_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete Ticket" onclick="return check_delete();"><i class="fa fa-trash"></i></a>
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