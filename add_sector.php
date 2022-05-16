<?php include("includes/header.php"); 




	$sector = new Sectors();



	if (isset($_POST['submit'])) {
		if ($sector) {

			$sector->sector_id = $_POST['sector_id'];
			$sector->name = $_POST['name'];

            $sector->save();
		}
	}




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
                            Add Data
                        </h1>

<form action="" method="post">
<div class="col-md-6 col-md-offset-3">

	<div class="form-group">
    <label for="username">Sector ID</label>
		<input class="form-control" type="text" name="sector_id">
	</div>


	<div class="form-group">
		<label for="password">Name</label>
		<input class="form-control" type="Name" name="name">
	</div>


  <div class="form-group">
      <input class="btn btn-primary pull-right" type="submit" name="submit">
  </div>

</div>

</form>

                        






                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>