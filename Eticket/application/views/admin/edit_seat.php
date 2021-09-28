<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Edit Seat Plan
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>eticket_admin/manage_seat"> Manage Seat Plan</a></li>
            <li class="active">Edit Seat Plan</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <form action="<?php echo base_url(); ?>eticket_admin/update_seat" method="POST" name="seat">
                    <div class="col-xs-3">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Available Seat</label>
                                <input type="text" name="available_seat" value="<?php echo $seat_info->available_seat; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Seat Name</label>
                                <input type="text" name="seat_name" value="<?php echo $seat_info->seat_name; ?>" class="form-control">
                                <input type="hidden" name="seat_id" value="<?php echo $seat_info->seat_id; ?>">
                            </div>
                            <div class="form-group">
                                <label>Seat Row</label>
                                <input type="text" name="seat_row" value="<?php echo $seat_info->seat_row; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Seat Column</label>
                                <input type="text" name="seat_column" value="<?php echo $seat_info->seat_column; ?>" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-offset-2 col-xs-3" style="box-shadow: 0px 0px 10px red; margin-top: 2%;">
                        <div class="box-body">
                            <div class="row">
                                <div class="form-group col-xs-1">
                                    <label>A1</label>
                                    <input type="checkbox" name="a1" value="1">
                                </div>
                                <div class="form-group col-xs-1">
                                    <label>A2</label>
                                    <input type="checkbox" name="a2" value="1">
                                </div>
                                <div class="form-group col-xs-offset-1 col-xs-1">
                                    <label>A3</label>
                                    <input type="checkbox" name="a3" value="1">
                                </div>
                                <div class="form-group col-xs-1">
                                    <label>A4</label>
                                    <input type="checkbox" name="a4" value="1">
                                </div>
                                <div class="form-group col-xs-1">
                                    <label>A5</label>
                                    <input type="checkbox" name="a5" value="1">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-xs-1">
                                    <label>B1</label>
                                    <input type="checkbox" name="b1" value="1">
                                </div>
                                <div class="form-group col-xs-1">
                                    <label>B2</label>
                                    <input type="checkbox" name="b2" value="1">
                                </div>
                                <div class="form-group col-xs-offset-1 col-xs-1">
                                    <label>B3</label>
                                    <input type="checkbox" name="b3" value="1">
                                </div>
                                <div class="form-group col-xs-1">
                                    <label>B4</label>
                                    <input type="checkbox" name="b4" value="1">
                                </div>
                                <div class="form-group col-xs-1">
                                    <label>B5</label>
                                    <input type="checkbox" name="b5" value="1">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-xs-1">
                                    <label>C1</label>
                                    <input type="checkbox" name="c1" value="1">
                                </div>
                                <div class="form-group col-xs-1">
                                    <label>C2</label>
                                    <input type="checkbox" name="c2" value="1">
                                </div>
                                <div class="form-group col-xs-offset-1 col-xs-1">
                                    <label>C3</label>
                                    <input type="checkbox" name="c3" value="1">
                                </div>
                                <div class="form-group col-xs-1">
                                    <label>C4</label>
                                    <input type="checkbox" name="c4" value="1">
                                </div>
                                <div class="form-group col-xs-1">
                                    <label>C5</label>
                                    <input type="checkbox" name="c5" value="1">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-xs-1">
                                    <label>D1</label>
                                    <input type="checkbox" name="d1" value="1">
                                </div>
                                <div class="form-group col-xs-1">
                                    <label>D2</label>
                                    <input type="checkbox" name="d2" value="1">
                                </div>
                                <div class="form-group col-xs-offset-1 col-xs-1">
                                    <label>D3</label>
                                    <input type="checkbox" name="d3" value="1">
                                </div>
                                <div class="form-group col-xs-1">
                                    <label>D4</label>
                                    <input type="checkbox" name="d4" value="1">
                                </div>
                                <div class="form-group col-xs-1">
                                    <label>D5</label>
                                    <input type="checkbox" name="d5" value="1">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-xs-1">
                                    <label>E1</label>
                                    <input type="checkbox" name="e1" value="1">
                                </div>
                                <div class="form-group col-xs-1">
                                    <label>E2</label>
                                    <input type="checkbox" name="e2">
                                </div>
                                <div class="form-group col-xs-offset-1 col-xs-1">
                                    <label>E3</label>
                                    <input type="checkbox" name="e3" value="1">
                                </div>
                                <div class="form-group col-xs-1">
                                    <label>E4</label>
                                    <input type="checkbox" name="e4" value="1">
                                </div>
                                <div class="form-group col-xs-1">
                                    <label>E5</label>
                                    <input type="checkbox" name="e5" value="1">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-xs-1">
                                    <label>F1</label>
                                    <input type="checkbox" name="f1" value="1">
                                </div>
                                <div class="form-group col-xs-1">
                                    <label>F2</label>
                                    <input type="checkbox" name="f2" value="1">
                                </div>
                                <div class="form-group col-xs-offset-1 col-xs-1">
                                    <label>F3</label>
                                    <input type="checkbox" name="f3" value="1">
                                </div>
                                <div class="form-group col-xs-1">
                                    <label>F4</label>
                                    <input type="checkbox" name="f4" value="1">
                                </div>
                                <div class="form-group col-xs-1">
                                    <label>F5</label>
                                    <input type="checkbox" name="f5" value="1">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-xs-1">
                                    <label>G1</label>
                                    <input type="checkbox" name="g1" value="1">
                                </div>
                                <div class="form-group col-xs-1">
                                    <label>G2</label>
                                    <input type="checkbox" name="g2" value="1">
                                </div>
                                <div class="form-group col-xs-offset-1 col-xs-1">
                                    <label>G3</label>
                                    <input type="checkbox" name="g3" value="1">
                                </div>
                                <div class="form-group col-xs-1">
                                    <label>G4</label>
                                    <input type="checkbox" name="g4" value="1">
                                </div>
                                <div class="form-group col-xs-1">
                                    <label>G5</label>
                                    <input type="checkbox" name="g5" value="1">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-xs-1">
                                    <label>H1</label>
                                    <input type="checkbox" name="h1" value="1">
                                </div>
                                <div class="form-group col-xs-1">
                                    <label>H2</label>
                                    <input type="checkbox" name="h2">
                                </div>
                                <div class="form-group col-xs-offset-1 col-xs-1" value="1">
                                    <label>H3</label>
                                    <input type="checkbox" name="h3" value="1">
                                </div>
                                <div class="form-group col-xs-1">
                                    <label>H4</label>
                                    <input type="checkbox" name="h4" value="1">
                                </div>
                                <div class="form-group col-xs-1">
                                    <label>H5</label>
                                    <input type="checkbox" name="h5" value="1">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-xs-1">
                                    <label>I1</label>
                                    <input type="checkbox" name="i1" value="1">
                                </div>
                                <div class="form-group col-xs-1">
                                    <label>I2</label>
                                    <input type="checkbox" name="i2" value="1">
                                </div>
                                <div class="form-group col-xs-offset-1 col-xs-1">
                                    <label>I3</label>
                                    <input type="checkbox" name="i3" value="1">
                                </div>
                                <div class="form-group col-xs-1">
                                    <label>I4</label>
                                    <input type="checkbox" name="i4" value="1">
                                </div>
                                <div class="form-group col-xs-1">
                                    <label>I5</label>
                                    <input type="checkbox" name="i5" value="1">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-xs-1">
                                    <label>J1</label>
                                    <input type="checkbox" name="j1" value="1">
                                </div>
                                <div class="form-group col-xs-1">
                                    <label>J2</label>
                                    <input type="checkbox" name="j2" value="1">
                                </div>
                                <div class="form-group col-xs-offset-1 col-xs-1">
                                    <label>J3</label>
                                    <input type="checkbox" name="j3" value="1">
                                </div>
                                <div class="form-group col-xs-1">
                                    <label>J4</label>
                                    <input type="checkbox" name="j4" value="1">
                                </div>
                                <div class="form-group col-xs-1">
                                    <label>J5</label>
                                    <input type="checkbox" name="j5" value="1">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-xs-1">
                                    <label>K1</label>
                                    <input type="checkbox" name="k1" value="1">
                                </div>
                                <div class="form-group col-xs-1">
                                    <label>K2</label>
                                    <input type="checkbox" name="k2" value="1">
                                </div>
                                <div class="form-group col-xs-offset-1 col-xs-1">
                                    <label>K3</label>
                                    <input type="checkbox" name="k3" value="1">
                                </div>
                                <div class="form-group col-xs-1">
                                    <label>K4</label>
                                    <input type="checkbox" name="k4" value="1">
                                </div>
                                <div class="form-group col-xs-1">
                                    <label>K5</label>
                                    <input type="checkbox" name="k5" value="1">
                                </div>
                            </div>
                            <button type="reset" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-info pull-right">Update</button>
                        </div>
                    </div>
                    <div class="box-footer"></div>
                </form>
            </div>
        </div>
    </section>
</div>