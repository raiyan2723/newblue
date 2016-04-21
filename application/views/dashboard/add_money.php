
    <!-- content main container -->
    <div class="main">
        <!-- row -->
        <div class="row">
            <!-- col 12 -->
            <div class="col-md-12">
                <!-- tile -->
                <section class="tile transparent">
                    <!-- tile header -->
                    
                    <!-- /tile header -->
                    <!-- tile body -->
                    <?php // echo $link ?>
                    <div class="tile-body color transparent-black rounded-corners">
                        <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                        <div class="panel-body">
                            <?php echo form_open('Index_controller/pay_u') ?>
                            <input type="hidden" name="packages" value="" />
                            <input class="form-control" type="email" name="email" value=""/>			
                            <input type="hidden" name="firstname"        value="" />			
                            <input type="hidden" name="productinfo"      value="" />
                            <input type="hidden" name="phone"            value="" />
                            <input type="hidden" name="night"            value="" />
                            <input type="hidden" id="grand2" name="amount"           value="" />
                            <input type="hidden"  name="lastname"         value="" />
                            <input type="hidden" name="surl"            value="" />
                            <input type="hidden" name="furl"            value="" />




                            <a href="<?php echo site_url('Index_controller/booked'); ?>"><button class="btn btn-primary pull-right" type="submit">Book</button></a>
                            </form>


                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- /tile body -->
                </section>
                <!-- /tile -->

            </div>
            <!-- /col 12 -->
        </div>
        <!-- /row -->
    </div>
    <!-- /content container -->
</div>
<!-- Page content end -->

