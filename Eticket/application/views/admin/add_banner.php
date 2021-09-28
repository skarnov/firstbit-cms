<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Add New Banner
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>eticket_admin/manage_banner"> Manage Banner</a></li>
            <li class="active">Add New Banner</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <form action="<?php echo base_url(); ?>eticket_admin/save_banner" method="POST" enctype="multipart/form-data">
                        <h3 style="color:green">
                            <?php
                            $msg = $this->session->userdata('save_banner');
                            if (isset($msg)) {
                                echo "<p style='margin-left:2%;'>$msg</p>";
                                $this->session->unset_userdata('save_banner');
                            }
                            ?>
                        </h3>
                        <div class="col-xs-6">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Banner Text </label>
                                    <input type="text" name="banner_text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Banner Link </label>
                                    <input type="text" name="banner_link" value="http://" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Banner Image </label>
                                    <input type="file" name="banner_image" class="form-control">
                                </div>
                                <button type="reset" class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-info pull-right">Save</button>
                            </div>
                        </div>
                        <div class="box-footer"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>