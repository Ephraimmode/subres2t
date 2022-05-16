<?php 



class Data extends Db_object { 

	//class objects

	protected static $db_table = "interactions";
	protected static $db_table_fileds = array('sector_id','name','date'); // for the new method properties to loop through object property array data
	public $id;
	public $sector_id;
	public $name;
	public $date;

	




public function create_csv($file_name, $file_tmp){

	global $database;

if ($file_name) {
	$file = explode(".", $file_name);

	if ($file[1]=="csv") {

		$run_file = fopen($file_tmp, "r");


		while ($data = fgetcsv($run_file)) {


        	$sector_id = trim($data[0]);
        	$name = trim($data[1]);
        	$date = trim($data[2]);


        	$sql = "INSERT  INTO ". self::$db_table . "(sector_id, name, date) VALUES ('$sector_id', '$name', '$date')";

        	$database->query($sql);


        }
        fclose($run_file);
        redirect("../managedata.php");
		}

}


        
        
   
   
}






}


?>
