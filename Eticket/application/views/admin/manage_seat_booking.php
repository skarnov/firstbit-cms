<style>
    input[type="checkbox"]{
        width: 20px; height: 20px; 
    }
</style>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Manage Seat Booking
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>eticket_admin/manage_seat"> Manage Seat Plan</a></li>
            <li class="active">Manage Seat Booking</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <form action="<?php echo base_url(); ?>eticket_admin/update_seat_booking" method="POST">
                    <div class="col-xs-12" style="box-shadow: 0px 0px 10px red;">
                        <div class="box-body">
                            <div class="row">
                                <input type="hidden" name="seat_id" value="<?php echo $seat_info->seat_id; ?>" />
                                <input type="hidden" name="seat_name" value="<?php echo $seat_info->seat_name; ?>" />
                                <input type="hidden" name="available_seat" value="<?php echo $seat_info->available_seat; ?>" />
                                <input type="hidden" name="seat_row" value="<?php echo $seat_info->seat_row; ?>" />
                                <input type="hidden" name="seat_column" value="<?php echo $seat_info->seat_column; ?>" />
                                <?php
                                $a1 = $seat_info->a1;
                                if ($a1 != 0) {
                                    ?>
                                    <div class="form-group col-xs-1">
                                        <label>A1</label>
                                        <?php
                                        if ($a1 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($a1 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="a1" value="<?php echo $seat_info->a1; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $a2 = $seat_info->a2;
                                if ($a2 != 0) {
                                    ?>
                                    <div class="form-group col-xs-1">
                                        <label>A2</label>
                                        <?php
                                        if ($a2 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($a2 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="a2" value="<?php echo $seat_info->a2; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $a3 = $seat_info->a3;
                                if ($a3 != 0) {
                                    ?>
                                    <div class="form-group col-xs-offset-1 col-xs-1">
                                        <label>A3</label>
                                        <?php
                                        if ($a3 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($a3 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="a3" value="<?php echo $seat_info->a3; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $a4 = $seat_info->a4;
                                if ($a4 != 0) {
                                    ?>
                                    <div class="form-group col-xs-1">
                                        <label>A4</label>
                                        <?php
                                        if ($a4 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($a4 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="a4" value="<?php echo $seat_info->a4; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $a5 = $seat_info->a5;
                                if ($a5 != 0) {
                                    ?>
                                    <div class="form-group col-xs-1">
                                        <label>A5</label>
                                        <?php
                                        if ($a5 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($a5 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="a5" value="<?php echo $seat_info->a5; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $b1 = $seat_info->b1;
                                if ($b1 != 0) {
                                    ?>
                                </div>
                                <div class="row">
                                    <div class="form-group col-xs-1">
                                        <label>B1</label>
                                        <?php
                                        if ($b1 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($b1 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="b1" value="<?php echo $seat_info->b1; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $b2 = $seat_info->b2;
                                if ($b2 != 0) {
                                    ?>
                                    <div class="form-group col-xs-1">
                                        <label>B2</label>
                                        <?php
                                        if ($b2 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($b2 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="b2" value="<?php echo $seat_info->b2; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $b3 = $seat_info->b3;
                                if ($b3 != 0) {
                                    ?>
                                    <div class="form-group col-xs-offset-1 col-xs-1">
                                        <label>B3</label>
                                        <?php
                                        if ($b3 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($b3 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="b3" value="<?php echo $seat_info->b3; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $b4 = $seat_info->b4;
                                if ($b4 != 0) {
                                    ?>
                                    <div class="form-group col-xs-1">
                                        <label>B4</label>
                                        <?php
                                        if ($b4 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($b4 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="b4" value="<?php echo $seat_info->b4; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $b5 = $seat_info->b5;
                                if ($b5 != 0) {
                                    ?>
                                    <div class="form-group col-xs-1">
                                        <label>B5</label>
                                        <?php
                                        if ($b5 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($b5 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="b5" value="<?php echo $seat_info->b5; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $c1 = $seat_info->c1;
                                if ($c1 != 0) {
                                    ?>
                                </div>
                                <div class="row">
                                    <div class="form-group col-xs-1">
                                        <label>C1</label>
                                        <?php
                                        if ($c1 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($c1 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="c1" value="<?php echo $seat_info->c1; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $c2 = $seat_info->c2;
                                if ($c2 != 0) {
                                    ?>
                                    <div class="form-group col-xs-1">
                                        <label>C2</label>
                                        <?php
                                        if ($c2 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($c2 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="c2" value="<?php echo $seat_info->c2; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $c3 = $seat_info->c3;
                                if ($c3 != 0) {
                                    ?>
                                    <div class="form-group col-xs-offset-1 col-xs-1">
                                        <label>C3</label>
                                        <?php
                                        if ($c3 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($c3 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="c3" value="<?php echo $seat_info->c3; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $c4 = $seat_info->c4;
                                if ($c4 != 0) {
                                    ?>
                                    <div class="form-group col-xs-1">
                                        <label>C4</label>
                                        <?php
                                        if ($c4 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($c4 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="c4" value="<?php echo $seat_info->c4; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $c5 = $seat_info->c5;
                                if ($c5 != 0) {
                                    ?>
                                    <div class="form-group col-xs-1">
                                        <label>C5</label>
                                        <?php
                                        if ($c5 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($c5 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="c5" value="<?php echo $seat_info->c5; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $d1 = $seat_info->d1;
                                if ($d1 != 0) {
                                    ?>
                                </div>
                                <div class="row">
                                    <div class="form-group col-xs-1">
                                        <label>D1</label>
                                        <?php
                                        if ($d1 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($d1 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="d1" value="<?php echo $seat_info->d1; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $d2 = $seat_info->d2;
                                if ($d2 != 0) {
                                    ?>
                                    <div class="form-group col-xs-1">
                                        <label>D2</label>
                                        <?php
                                        if ($d2 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($d2 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="d2" value="<?php echo $seat_info->d2; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $d3 = $seat_info->d3;
                                if ($d3 != 0) {
                                    ?>
                                    <div class="form-group col-xs-offset-1 col-xs-1">
                                        <label>D3</label>
                                        <?php
                                        if ($d3 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($d3 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="d3" value="<?php echo $seat_info->d3; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $d4 = $seat_info->d4;
                                if ($d4 != 0) {
                                    ?>
                                    <div class="form-group col-xs-1">
                                        <label>D4</label>
                                        <?php
                                        if ($d4 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($d4 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="d4" value="<?php echo $seat_info->d4; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $d5 = $seat_info->d5;
                                if ($d5 != 0) {
                                    ?>
                                    <div class="form-group col-xs-1">
                                        <label>D5</label>
                                        <?php
                                        if ($d5 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($d5 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="d5" value="<?php echo $seat_info->d5; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $e1 = $seat_info->e1;
                                if ($e1 != 0) {
                                    ?>
                                </div>
                                <div class="row">
                                    <div class="form-group col-xs-1">
                                        <label>E1</label>
                                        <?php
                                        if ($e1 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($e1 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="e1" value="<?php echo $seat_info->e1; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $e2 = $seat_info->e2;
                                if ($e2 != 0) {
                                    ?>
                                    <div class="form-group col-xs-1">
                                        <label>E2</label>
                                        <?php
                                        if ($e2 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($e2 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="e2" value="<?php echo $seat_info->e2; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $e3 = $seat_info->e3;
                                if ($e3 != 0) {
                                    ?>
                                    <div class="form-group col-xs-offset-1 col-xs-1">
                                        <label>E3</label>
                                        <?php
                                        if ($e3 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($e3 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="e3" value="<?php echo $seat_info->e3; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $e4 = $seat_info->e4;
                                if ($e4 != 0) {
                                    ?>
                                    <div class="form-group col-xs-1">
                                        <label>E4</label>
                                        <?php
                                        if ($e4 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($e4 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="e4" value="<?php echo $seat_info->e4; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $e5 = $seat_info->e5;
                                if ($e5 != 0) {
                                    ?>
                                    <div class="form-group col-xs-1">
                                        <label>E5</label>
                                        <?php
                                        if ($e5 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($e5 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="e5" value="<?php echo $seat_info->e5; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $f1 = $seat_info->f1;
                                if ($f1 != 0) {
                                    ?>
                                </div>
                                <div class="row">
                                    <div class="form-group col-xs-1">
                                        <label>F1</label>
                                        <?php
                                        if ($f1 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($f1 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="f1" value="<?php echo $seat_info->f1; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $f2 = $seat_info->f2;
                                if ($f2 != 0) {
                                    ?>
                                    <div class="form-group col-xs-1">
                                        <label>F2</label>
                                        <?php
                                        if ($f2 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($f2 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="f2" value="<?php echo $seat_info->f2; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $f3 = $seat_info->f3;
                                if ($f3 != 0) {
                                    ?>
                                    <div class="form-group col-xs-offset-1 col-xs-1">
                                        <label>F3</label>
                                        <?php
                                        if ($f3 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($f3 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="f3" value="<?php echo $seat_info->f3; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $f4 = $seat_info->f4;
                                if ($f4 != 0) {
                                    ?>
                                    <div class="form-group col-xs-1">
                                        <label>F4</label>
                                        <?php
                                        if ($f4 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($f4 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="f4" value="<?php echo $seat_info->f4; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $f5 = $seat_info->f5;
                                if ($f5 != 0) {
                                    ?>
                                    <div class="form-group col-xs-1">
                                        <label>F5</label>
                                        <?php
                                        if ($f5 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($f5 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="f5" value="<?php echo $seat_info->f5; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $g1 = $seat_info->g1;
                                if ($g1 != 0) {
                                    ?>
                                </div>
                                <div class="row">
                                    <div class="form-group col-xs-1">
                                        <label>G1</label>
                                        <?php
                                        if ($g1 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($g1 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="g1" value="<?php echo $seat_info->g1; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $g2 = $seat_info->g2;
                                if ($g2 != 0) {
                                    ?>
                                    <div class="form-group col-xs-1">
                                        <label>G2</label>
                                        <?php
                                        if ($g2 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($g2 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="g2" value="<?php echo $seat_info->g2; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $g3 = $seat_info->g3;
                                if ($g3 != 0) {
                                    ?>
                                    <div class="form-group col-xs-offset-1 col-xs-1">
                                        <label>G3</label>
                                        <?php
                                        if ($g3 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($g3 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="g3" value="<?php echo $seat_info->g3; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $g4 = $seat_info->g4;
                                if ($g4 != 0) {
                                    ?>
                                    <div class="form-group col-xs-1">
                                        <label>G4</label>
                                        <?php
                                        if ($g4 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($g4 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="g4" value="<?php echo $seat_info->g4; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $g5 = $seat_info->g5;
                                if ($g5 != 0) {
                                    ?>
                                    <div class="form-group col-xs-1">
                                        <label>G5</label>
                                        <?php
                                        if ($g5 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($g5 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="g5" value="<?php echo $seat_info->g5; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $h1 = $seat_info->h1;
                                if ($h1 != 0) {
                                    ?>
                                </div>
                                <div class="row">
                                    <div class="form-group col-xs-1">
                                        <label>H1</label>
                                        <?php
                                        if ($h1 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($h1 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="h1" value="<?php echo $seat_info->h1; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $h2 = $seat_info->h2;
                                if ($h2 != 0) {
                                    ?>
                                    <div class="form-group col-xs-1">
                                        <label>H2</label>
                                        <?php
                                        if ($h2 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($h2 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="h2" value="<?php echo $seat_info->h2; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $h3 = $seat_info->h3;
                                if ($h3 != 0) {
                                    ?>
                                    <div class="form-group col-xs-offset-1 col-xs-1">
                                        <label>H3</label>
                                        <?php
                                        if ($h3 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($h3 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="h3" value="<?php echo $seat_info->h3; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $h4 = $seat_info->h4;
                                if ($h4 != 0) {
                                    ?>
                                    <div class="form-group col-xs-1">
                                        <label>H4</label>
                                        <?php
                                        if ($h4 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($h4 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="h4" value="<?php echo $seat_info->h4; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $h5 = $seat_info->h5;
                                if ($h5 != 0) {
                                    ?>
                                    <div class="form-group col-xs-1">
                                        <label>H5</label>
                                        <?php
                                        if ($h5 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($h5 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="h5" value="<?php echo $seat_info->h5; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $i1 = $seat_info->i1;
                                if ($i1 != 0) {
                                    ?>
                                </div>
                                <div class="row">
                                    <div class="form-group col-xs-1">
                                        <label>I1</label>
                                        <?php
                                        if ($i1 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($i1 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="i1" value="<?php echo $seat_info->i1; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $i2 = $seat_info->i2;
                                if ($i2 != 0) {
                                    ?>
                                    <div class="form-group col-xs-1">
                                        <label>I2</label>
                                        <?php
                                        if ($i2 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($i2 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="i2" value="<?php echo $seat_info->i2; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $i3 = $seat_info->i3;
                                if ($i3 != 0) {
                                    ?>
                                    <div class="form-group col-xs-offset-1 col-xs-1">
                                        <label>I3</label>
                                        <?php
                                        if ($i3 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($i3 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="i3" value="<?php echo $seat_info->i3; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $i4 = $seat_info->i4;
                                if ($i4 != 0) {
                                    ?>
                                    <div class="form-group col-xs-1">
                                        <label>I4</label>
                                        <?php
                                        if ($i4 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($i4 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="i4" value="<?php echo $seat_info->i4; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $i5 = $seat_info->i5;
                                if ($i5 != 0) {
                                    ?>
                                    <div class="form-group col-xs-1">
                                        <label>I5</label>
                                        <?php
                                        if ($i5 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($i5 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="i5" value="<?php echo $seat_info->i5; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $j1 = $seat_info->j1;
                                if ($j1 != 0) {
                                    ?>
                                </div>
                                <div class="row">
                                    <div class="form-group col-xs-1">
                                        <label>J1</label>
                                        <?php
                                        if ($j1 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($j1 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="j1" value="<?php echo $seat_info->j1; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $j2 = $seat_info->j2;
                                if ($j2 != 0) {
                                    ?>
                                    <div class="form-group col-xs-1">
                                        <label>J2</label>
                                        <?php
                                        if ($j2 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($j2 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="j2" value="<?php echo $seat_info->j2; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $j3 = $seat_info->j3;
                                if ($j3 != 0) {
                                    ?>
                                    <div class="form-group col-xs-offset-1 col-xs-1">
                                        <label>J3</label>
                                        <?php
                                        if ($j3 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($j3 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="j3" value="<?php echo $seat_info->j3; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $j4 = $seat_info->j4;
                                if ($j4 != 0) {
                                    ?>
                                    <div class="form-group col-xs-1">
                                        <label>J4</label>
                                        <?php
                                        if ($j4 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($j4 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="j4" value="<?php echo $seat_info->j4; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $j5 = $seat_info->j5;
                                if ($j5 != 0) {
                                    ?>
                                    <div class="form-group col-xs-1">
                                        <label>J5</label>
                                        <?php
                                        if ($j5 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($j5 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="j5" value="<?php echo $seat_info->j5; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $k1 = $seat_info->k1;
                                if ($k1 != 0) {
                                    ?>
                                </div>
                                <div class="row">
                                    <div class="form-group col-xs-1">
                                        <label>K1</label>
                                        <?php
                                        if ($k1 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($k1 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="k1" value="<?php echo $seat_info->k1; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $k2 = $seat_info->k2;
                                if ($k2 != 0) {
                                    ?>
                                    <div class="form-group col-xs-1">
                                        <label>K2</label>
                                        <?php
                                        if ($k2 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($k2 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="k2" value="<?php echo $seat_info->k2; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $k3 = $seat_info->k3;
                                if ($k3 != 0) {
                                    ?>
                                    <div class="form-group col-xs-offset-1 col-xs-1">
                                        <label>K3</label>
                                        <?php
                                        if ($k3 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($k3 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="k3" value="<?php echo $seat_info->k3; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                $k4 = $seat_info->k4;
                                if ($k4 != 0) {
                                    ?>
                                    <div class="form-group col-xs-1">
                                        <label>K4</label>
                                        <?php
                                        if ($k4 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($k4 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="k4" value="<?php echo $seat_info->k4; ?>" style="width: 20px; height: 20px;">  
                                    </div>
                                    <?php
                                }
                                $k5 = $seat_info->k5;
                                if ($k5 != 0) {
                                    ?>
                                    <div class="form-group col-xs-1">
                                        <label>K5</label>
                                        <?php
                                        if ($k5 == 2) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: red;"></div>
                                            <?php
                                        }
                                        if ($k5 == 1) {
                                            ?>
                                            <div style="height: 20px; width: 20px; background-color: green;"></div>
                                            <?php
                                        }
                                        ?>
                                        <input type="text" name="k5" value="<?php echo $seat_info->k5; ?>" style="width: 20px; height: 20px;">
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                            <button type="reset" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-info pull-right">Done</button>
                        </div>
                    </div>
                    <div class="box-footer"></div>
                </form>
            </div>
        </div>
    </section>
</div>