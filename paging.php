<style type="text/css">
.pageno{padding:5px; margin-left:5px;border:1px solid gray;}
.pageno a{text-decoration:none;}
.activepage {
  background: #A02589 none repeat scroll 0 0;
  border-radius: 10px;
  padding: 6px;
  margin-left: 7px;
  color:white;
}

.page{
		
		margin: 10px 0px 0px 212px;
		width: 300px;
		height:50px;
		border:px solid red;
}
.pageno:hover{color:white;background:#A02589;}
.pageno a{color:black;}
.pageno a:hover{color:white;}
.next{margin-left:5px;border:2px dotted green;padding:5px;background:#A02589}
.prev{margin-left:5px;border:2px dotted green;padding:5px;background:#A02589}
.next a{text-decoration:none;color:white;}
.prev a{text-decoration:none;color:white;}
</style>

<?php 
	/* mysql_connect("localhost","root","");
	mysql_select_db('megamall_24');
	
	if(isset($_GET['page'])){
		$cp = $_GET['page'];
	}else{
		$cp = 1;
	}
	
	
	$prevp = $cp-1;
	$nextp = $cp+1;
	
	$perpage = 2;
	$start =($cp - 1) * $perpage;
	
	$res=mysql_query("select SQL_CALC_FOUND_ROWS * from product limit ".$start.",".$perpage);
	$rows_res = mysql_query("select FOUND_ROWS() as rows");
	$rows = mysql_fetch_array($rows_res);
	$totalrows = $rows['rows'];
	
	$lastpage = ceil($totalrows / $perpage);
	
	while($row=mysql_fetch_array($res))
	{
	echo $row['head_line']." ".$row['categories'];
	echo "<br />";
	} */
	
	
?>
<div class="page">
<?php 
if($cp == 1){
	echo 'Prev';

}else{
	echo '<span class="prev"><a href="?page='.$prevp.'">Prev</a></span>';
}
?>

<?php 
	for($i=$cp-2; $i<=$cp+2; $i++){
	
	if($i > 0 && $i <= $lastpage){
		if($cp != $i){
		
			echo '<span class="pageno">
			<a href="?page='.$i.'">'.$i.'</a></span>';
			
		}else{
			echo '<span class="activepage">'.$i.'</span>';
		}
		}
	}
?>
<?php 
if($cp == $lastpage){
	echo 'Next';

}else{
	echo '<span class="next"><a href="?page='.$nextp.'">Next</a></span>';
}
?>
</div>