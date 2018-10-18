<?php
include("config.php");  

if($_GET["olay"]=="page"){
	$page=mysql_real_escape_string($_POST['page']); 
	?>
	
	<table class="table table-striped">
	  <thead>
		<tr>
		  <th><?php echo $ton;?></th>
		  <th><?php echo $cins;?></th> 
		  <th><?php echo $yon;?></th>  
		  <th><?php echo $mt;?></th>   
		  <th><?php echo $tl;?></th>   
		</tr>
	  </thead>
	  <tbody> 
		 <?php
			$sorgu=mysql_query("select * from fiyatlar limit ".($page*10).",10 ");
			while($yaz=mysql_fetch_object($sorgu)){
				echo "<tr>
						<td>$yaz->ton Ton</td>
						<td>$yaz->cins</td>
						<td>$yaz->yon </td>
						<td>$yaz->yukseklik MT</td>
						<td>$yaz->fiyat</td>
					</tr>";
			}
		?>
	  </tbody>
	</table> 
	<?php 
		$a=1;
		$sorgu=mysql_query("select * from fiyatlar");
		$toplam=mysql_num_rows($sorgu);  
		for($i=0;$i<round($toplam/10);$i++){
			if($i==$page){ 
				echo " <button class='btn btn-info btn-sm'>".($i+1)."</button> "; 
			}else{
				echo " <button class='btn btn-primary btn-sm' onclick=page('$i')>".($i+1)."</button> "; 
			}
		}
	
	
	
}
?>