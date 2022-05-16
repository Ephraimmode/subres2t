<?php include("includes/header.php"); 



$datas = Data::find_all();

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
                            All Interactions
                        </h1>
                        <a class="btn btn-primary" href="add_data.php">Add Data</a> <a class="btn btn-primary" href="upload_data.php">Upload Data (.CSV)</a>
<div class="col-md-12">
    <table class="table table-hover">

        <tbody>

            <?php foreach ($datas as $data) : ?>

            <tr>
                <td><?php echo $data->sector_id; ?></td>
                
                <td><?php echo $data->name; ?> </td>
                <td><?php echo $data->date; ?></td>
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