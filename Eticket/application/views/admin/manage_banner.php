<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Manage Banner
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>super_admin/add_banner">Add New Banner</a></li>
            <li class="active">Manage Banner</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Text</th>
                            <th>Link</th>
                            <th>Image</th>
                            <th>Position</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($all_banner as $v_banner) {
                            ?>
                            <tr>
                                <td><?php echo $v_banner->banner_text; ?></td>
                                <td><?php echo $v_banner->banner_link; ?></td>
                                <td><img src="<?php echo base_url() . $v_banner->banner_image; ?>" style="height:200px; width:200px;" /></td>
                                <td>
                                    <div class='activation_color'>
                                        <?php
                                        if ($v_banner->banner_position == '1') {
                                            echo 'Content Up Right';
                                        }
                                        elseif ($v_banner->banner_position == '2') {
                                            echo 'Service Box 1';
                                        }
                                        elseif ($v_banner->banner_position == '3') {
                                            echo 'Service Box 2';
                                        }
                                        elseif ($v_banner->banner_position == '4') {
                                            echo 'Service Box 3';
                                        }
                                        elseif ($v_banner->banner_position == '5') {
                                            echo 'Content Down Right';
                                        }
                                        elseif ($v_banner->banner_position == '6') {
                                            echo 'Middle Left';
                                        }
                                        elseif ($v_banner->banner_position == '7') {
                                            echo 'Middle Right';
                                        }
                                        ?>   
                                    </div>
                                </td>
                                <td>
                                    <a href="<?php echo base_url(); ?>super_admin/edit_banner/<?php echo $v_banner->banner_id; ?>" class="btn btn-primary" data-toggle="tooltip" title="Edit Slide"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="<?php echo base_url(); ?>super_admin/delete_banner/<?php echo $v_banner->banner_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete Banner" onclick="return check_delete();"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>