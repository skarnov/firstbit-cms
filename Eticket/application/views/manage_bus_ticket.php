<div class="content">
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <h3>Choose your seats</h3><hr/>
                    <p>You Can Book Maximum Seats</p> 
                    <hr/>
                    <div class="row">
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
                                    <div class="book" onclick="addToCart('A1/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('A2/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('A3/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('A4/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('A5/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('B1/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('B2/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('B3/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('B4/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('B5/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('C1/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('C2/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('C3/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('C4/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('C5/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('D1/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('D2/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('D3/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('D4/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('D5/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('E1/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('E2/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('E3/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('E4/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('E5/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('F1/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('F2/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('F3/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('F4/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('F5/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('G1/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('G2/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('G3/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('G4/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('G5/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('H1/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('H2/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('H3/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('H4/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('H5/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('I1/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('I2/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('I3/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('I4/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>

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
                                    <div class="book" onclick="addToCart('I5/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('J1/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('J2/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('J3/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('J4/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('J5/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('K1/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('K2/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('K3/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('K4/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
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
                                    <div class="book" onclick="addToCart('K5/<?php echo $seat_info->seat_id; ?>')"></div>
                                    <?php
                                }
                                ?>
                            </div>
                            <?php
                        }
                        ?>
                    </div> 
                </div>
                <div class="col-xs-6">
                    <form action="<?php echo base_url(); ?>checkout" method="POST">
                        <input type="hidden" name="seat_id" value="<?php echo $seat_info->seat_id; ?>" />
                        <input type="hidden" name="coach_name" value="<?php echo $seat_info->coach_name; ?>" />
                        <input type="hidden" name="bus_name" value="<?php echo $seat_info->bus_name; ?>" />
                        <table class="table table-responsive" style="text-align: center;">
                            <thead>
                                <tr class="table-bordered">
                                    <th style="text-align: center;">Seats</th>
                                    <th style="text-align: center;">Fair</th>
                                </tr>
                            </thead>
                            <tbody id="cart"></tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var xmlhttp = false;
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (E) {
            xmlhttp = false;
        }
    }
    if (!xmlhttp && typeof XMLHttpRequest !== 'undefined') {
        xmlhttp = new XMLHttpRequest();
    }
    function addToCart(seatNumber, seatID)
    {
        if (seatNumber) {
            serverPage = '<?php echo base_url(); ?>cart/add_to_cart/' + seatNumber + '/' + seatID + '/';
            xmlhttp.open("GET", serverPage);
            xmlhttp.onreadystatechange = function ()
            {
                document.getElementById('cart').innerHTML = xmlhttp.responseText;
            };
            xmlhttp.send(null);
        }
    }
</script>