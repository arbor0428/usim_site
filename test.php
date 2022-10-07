<?
	include "./module/class/class.DbCon.php";
	include "./module/class/class.Util.php";

	if($_SERVER['REMOTE_ADDR'] == '106.246.92.237'){

		$query = "show databases;";

		$result = mysqli_query($dbc,$query);


		while( $row = mysqli_fetch_array($result) ){

			for($i=0;$i<50;$i++){
				echo $row[$i].' / ';
			}

			echo ' <br> ';
			
		}
	}
?>