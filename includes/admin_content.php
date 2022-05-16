<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Data Analyst
                            <small>Area</small>
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

<div class="row">
    <div class="col-lg-4 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-users fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $session->count; ?></div>
                        <div>Clicks</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                  <span class="pull-left">Total Link Clicks</span> 
               <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span> 
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

     <div class="col-lg-4 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-photo fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo Sectors::count_all(); ?></div>
                        <div>Sector(s)</div>
                    </div>
                </div>
            </div>
            <a href="manage_sectors.php">
                <div class="panel-footer">
                    <span class="pull-left">Sectors Stored on Database</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>


     <div class="col-lg-4 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo Data::count_all(); ?>

                        </div>

                        <div>Interaction(s)</div>
                    </div>
                </div>
            </div>
            <a href="managedata.php">
                <div class="panel-footer">
                    <span class="pull-left">Total Interactions</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>


</div> <!--First Row-->


<div class="row">
    <div class="col-12" id="piechart" style="width: 1000px; height: 1000px;"></div>
</div>






</div>
            <!-- /.container-fluid -->