<?php
	$link =mysqli_connect('localhost','root','','mysql');
	if (!$link) {
		echo "ket noi that bai; tra lai";
	}
	else{
		mysqli set charset=($link,UTF-8); // thiet lap font chu
		$sql="SELECT * FROM event";
		$result=mysql_query($link,$sql);
		while ($row=mysql_fetch_array($result)) {
			echo "<li>";
		}
		echo "string";
		mysqli_close($link);
	} 
 ?>