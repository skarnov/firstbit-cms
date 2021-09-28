<div class="content">
    <div class="contact">
        <div class="container">
            <div class="col-md-6 contact-left">
<!--                <h4>Advertisement</h4>-->
            </div>
            <div class="col-md-6 contact-left cont">
                <h4>Search Buses</h4>
                <form action="<?php echo base_url(); ?>eticket/search_bus/" method="POST">
                    <div class="form-group">
                        <label>From</label>
                        <input type="text" name="search" id="startpoint" class="form-control" placeholder="Enter City">
                        <div id="startpoint-suggesstion-box"></div>
                    </div>
                    <div class="form-group">
                        <label>To</label>
                        <input type="text" name="endpoint_search" id="endpoint" class="form-control" placeholder="Enter City">
                        <div id="endpoint-suggesstion-box"></div>
                    </div>
                    <div class="form-group">
                        <label>Date of Journey</label>
                        <input type="text" name="date_of_journey" data-date-format="dd/mm/yyyy" class="span2 form-control" id="dpd1">
                    </div>
                    <div class="form-group">
                        <label>Date of Return</label>
                        <input type="text" name="date_of_return" class="span2 form-control" id="dpd2">
                    </div>
                    <button type="submit" class="btn btn-success col-md-12">Search</button>
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
