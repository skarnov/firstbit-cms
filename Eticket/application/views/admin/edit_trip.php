<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Edit Trip
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>eticket_admin/manage_trip"> Manage Trip</a></li>
            <li class="active">Edit Trip</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <form action="<?php echo base_url(); ?>eticket_admin/update_trip" method="POST" name="trip">
                    <div class="box box-info">
                        <div class="col-xs-6">
                            <div class="box-body">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Select Bus</label>
                                        <select name="bus_id" class="form-control select2" style="width: 100%;">
                                            <option value="">Select Bus For Trip</option>
                                            <?php
                                            foreach ($all_bus as $v_bus) {
                                                ?>
                                                <option value="<?php echo $v_bus->bus_id; ?>"><?php echo $v_bus->bus_name; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Select Bus Type</label>
                                    <select name="bus_type_id" class="form-control select2" style="width: 100%;">
                                        <option value="">Select Bus Type</option>
                                        <?php
                                        foreach ($all_bus_type as $v_bus_type) {
                                            ?>
                                            <option value="<?php echo $v_bus_type->bus_type_id; ?>"><?php echo $v_bus_type->bus_type_name; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Select Brand</label>
                                    <select name="brand_id" class="form-control select2" style="width: 100%;">
                                        <option value="">Select Brand</option>
                                        <?php
                                        foreach ($all_brand as $v_brand) {
                                            ?>
                                            <option value="<?php echo $v_brand->brand_id; ?>"><?php echo $v_brand->brand_name; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Select Coach</label>
                                    <select name="coach_id" class="form-control select2" style="width: 100%;">
                                        <option value="">Select Coach</option>
                                        <?php
                                        foreach ($all_coach as $v_coach) {
                                            ?>
                                            <option value="<?php echo $v_coach->coach_id; ?>"><?php echo $v_coach->coach_name; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Select Seat</label>
                                    <select name="seat_id" class="form-control select2" style="width: 100%;">
                                        <option value="">Select Seat</option>
                                        <?php
                                        foreach ($all_seat as $v_seat) {
                                            ?>
                                            <option value="<?php echo $v_seat->seat_id; ?>"><?php echo $v_seat->seat_name . ' | Row: ' . $v_seat->seat_row . ' | Column: ' . $v_seat->seat_column; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Select Ticket</label>
                                    <select name="ticket_id" class="form-control select2" style="width: 100%;">
                                        <option value="">Select Ticket</option>
                                        <?php
                                        foreach ($all_ticket as $v_ticket) {
                                            ?>
                                            <option value="<?php echo $v_ticket->ticket_id; ?>"><?php echo $v_ticket->ticket_price; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Ticket Old Price</label>
                                    <input type="text" name="ticket_old_price" value="<?php echo $trip_info->ticket_old_price; ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Select Route</label>
                                    <select name="route_id" class="form-control select2" style="width: 100%;">
                                        <option value="">Select Route</option>
                                        <?php
                                        foreach ($all_route as $v_route) {
                                            ?>
                                            <option value="<?php echo $v_route->route_id; ?>"><?php echo $v_route->route_startpoint . ' - ' . $v_route->route_endpoint; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Trip Date</label>
                                    <input type="text" name="trip_date" value="<?php echo $trip_info->trip_date; ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Departure Time</label>
                                    <input type="text" name="trip_time" value="<?php echo $trip_info->trip_time; ?>" class="form-control">
                                    <input type="hidden" name="trip_id" value="<?php echo $trip_info->trip_id; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Arrival Time</label>
                                    <input type="text" name="trip_arrival_time" value="<?php echo $trip_info->trip_arrival_time; ?>" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="reset" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-info pull-right">Publish</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<script>
    document.forms['trip'].elements['bus_id'].value = '<?php echo $trip_info->bus_id; ?>';
    document.forms['trip'].elements['bus_type_id'].value = '<?php echo $trip_info->bus_type_id; ?>';
    document.forms['trip'].elements['brand_id'].value = '<?php echo $trip_info->brand_id; ?>';
    document.forms['trip'].elements['coach_id'].value = '<?php echo $trip_info->coach_id; ?>';
    document.forms['trip'].elements['seat_id'].value = '<?php echo $trip_info->seat_id; ?>';
    document.forms['trip'].elements['ticket_id'].value = '<?php echo $trip_info->ticket_id; ?>';
    document.forms['trip'].elements['route_id'].value = '<?php echo $trip_info->route_id; ?>';
</script>