<?php
	include 'connect.php';
	$user_ip=$_SERVER['REMOTE_ADDR'];
	function ip_exists($user_ip){
		$query="SELECT ip FROM hit_ip WHERE ip='$user_ip'";
		$no_rows=mysql_num_rows(mysql_query($query));
		if($no_rows==0){ return false;}
		else if($no_rows>=1){ return true;}
	}
	function add_ip($ip){
		$query="INSERT INTO hit_ip VALUES('','$ip')";
		mysql_query($query);
	}
	function update_count(){
		$query="SELECT count from hit_count";
		@$query_run=mysql_query($query);
		$in_count=mysql_result($query_run,0,'count');
		$new_count=$in_count+1;
		$query="UPDATE hit_count SET count='$new_count'";
		$query_run=mysql_query($query);
		return $new_count;
	}
	function current_count(){
		$query="SELECT count from hit_count";
		@$query_run=mysql_query($query);
		$in_count=mysql_result($query_run,0,'count');
		return $in_count;
	}
	if(!ip_exists($user_ip)){
		add_ip($user_ip);
		$count=update_count();
		echo $count;
	}
	else
		echo current_count();
?>