<?php include("includes/header.php"); 





	$user = new Users();
    $sectors = Sectors::find_all();



	if (isset($_POST['create'])) {
		if ($user) {

			$user->sector_id = $_POST['sector_id'];
			$user->name = $_POST['name'];
			$user->date = $_POST['date'];

            $user->save();
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
		<input class="form-control" type="text" name="sector_id" placeholder="Enter Sector ID">
	</div>


	<div class="form-group">
		<label for="password">Select Name</label>
        <select class="form-control" name="name">
            <?php foreach ($sectors as $sector) : ?>
                <option value="<?php echo $sector->name; ?>"><?php echo $sector->name; ?></option>
            <?php endforeach; ?>
        </select>
	</div>

	<div class="form-group">
		<label for="firstname">Date</label>
		<input class="form-control" type="date" name="date">
	</div>


  <div class="form-group">
      <input class="btn btn-primary pull-right" type="submit" name="create">
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