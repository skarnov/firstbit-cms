<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Manage Brand
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>eticket_admin/add_brand">Add New Brand</a></li>
            <li class="active">Manage Brand</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 style="color:green">
                    <?php
                    $msg = $this->session->userdata('edit_brand');
                    if (isset($msg)) {
                        echo $msg;
                        $this->session->unset_userdata('edit_brand');
                    }
                    ?>
                </h3>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Brand Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($all_brand as $v_brand) {
                            ?>
                            <tr>
                                <td><?php echo $v_brand->brand_name; ?></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>eticket_admin/edit_brand/<?php echo $v_brand->brand_id; ?>" class="btn btn-primary" data-toggle="tooltip" title="Edit Brand"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="<?php echo base_url(); ?>eticket_admin/delete_brand/<?php echo $v_brand->brand_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete Brand" onclick="return check_delete();"><i class="fa fa-trash"></i></a>
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