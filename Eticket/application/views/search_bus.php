<div class="team">
    <div class="container">
        <h3 class="tittle">Departure</h3>
        <div class="team-grids">
            <div class="col-md-12 team-grid">
                <h2>Available Buses</h2>
                <p></p>
                <table class="table table-bordered" style="text-align: center;">
                    <thead>
                        <tr>
                            <th>Bus Operators</th>
                            <th style="text-align: center;">Dep. Time</th>
                            <th style="text-align: center;">Arr. Time</th>
                            <th style="text-align: center;">Seats Available</th>
                            <th style="text-align: center;">Fair</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($search_bus as $v_bus) {
                            date_default_timezone_set('Asia/Dhaka');
                            $trip_time = $v_bus->trip_time;
                            $time = strtotime($trip_time);
                            $now_time = strtotime("now");
                            if ($now_time < $time) {
                                if ($v_bus->available_seat > 0) {
                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo $v_bus->bus_name . '<br><small>' . $v_bus->brand_name . ' , ' . $v_bus->bus_type_name . '</small>' . '<p><strong>Route: </strong>' . $v_bus->route_startpoint . ' - ' . $v_bus->route_endpoint . '</p>'; ?>
                                            <br/><a href="#" class="form-group" style="color:orange;">Cancellation Policy</a>
                                        </td>
                                        <td><?php echo $v_bus->trip_time; ?></td>
                                        <td><?php echo $v_bus->trip_arrival_time; ?></td>
                                        <td><?php echo $v_bus->available_seat; ?></td>
                                        <td>
                                            <p><?php echo $v_bus->ticket_price; ?></p><br/>
                                            <a href="<?php echo base_url(); ?>eticket/manage_bus_ticket/<?php echo $v_bus->seat_id; ?>" class="btn btn-success">View Seats</a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>