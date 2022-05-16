<?php include("includes/header.php"); 


$sectors = Sectors::find_all();

?>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>


            <!-- Top Menu Items -->
            <?php 

                include("includes/top_nav.php");

            ?>


            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <?php 

                include("includes/side_nav.php");


            ?>
            <!-- /.navbar-collapse -->
        </nav>






        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            All Sectors
                        </h1>
                        <a class="btn btn-primary" href="add_sector.php">Add Sector</a> 
<div class="col-md-12">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Sector ID</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($sectors as $sector) : ?>

            <tr>
                <td><?php echo $sector->sector_id; ?></td>
                
                <td><?php echo $sector->name; ?> </td>

                <td>
                    <div class="action_links">

                        <a class="btn btn-danger" href="#">Delete User</a>
                        <a class="btn btn-primary" href="#">Edit User</a>

                    </div>
                </td>
            </tr>

        <?php endforeach; ?>
        </tbody> <!-- end of table -->
    </table>
</div>
                        






                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>