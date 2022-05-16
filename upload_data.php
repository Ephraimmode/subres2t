<?php include("includes/header.php"); 

$message = '';
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

    if (isset($_POST['create'])) {

        $user = new Users();

        $file_name = $_FILES['data_file']['name'];
        $file_tmp = $_FILES['data_file']['tmp_name'];
            
            $user->create_csv($file_name, $file_tmp);

           redirect("managedata.php?UploadStatus");

    }

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
                            Upload Data (Only .csv allowed)
                        </h1>
 <?php echo $message; ?>
<form action="" method="post" enctype="multipart/form-data">
<div class="col-md-6 col-md-offset-3">

	<div class="form-group">
       
    <label for="username">Add File</label>
		<input class="form-control" type="file" name="data_file">
	</div>

  <div class="form-group">
      <input class="btn btn-primary pull-right" type="submit" value="Upload Now" name="create">
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