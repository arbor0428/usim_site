<?
include "./module/class/class.DbCon.php";


//리스트
$row = sqlArray("select * from ks_member");
foreach($row as $v){
	echo $v['userid'].' / '.$v['name'].'<br>';
}



echo "<br><br>===============================<br><br>";



//단건
$row = sqlRow("select * from ks_member where userid='iweb'");
echo $row['userid'].' / '.$row['name'].'<br>';



echo "<br><br>===============================<br><br>";



//단건 특정 컬럼
$name = sqlRowOne("select name from ks_member where userid='iweb'");
echo $name.'<br>';

$tmpChk = sqlRowOne("select count(*) from ks_member where userid='iweb'");




//쿼리 실행
sqlExe("select * from ks_member");

if($_SERVER['REMOTE_ADDR'] == '106.246.92.237'){


		$query = "select * from ks_member;";
		$result = mysql_query($query);


		while( $row = mysql_fetch_array($result) ){

			for($i=0;$i<50;$i++){
				echo $row[$i].' / ';
			}

			echo ' <br> ';
			
		}
	}
?>