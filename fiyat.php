<?php 
include("config.php");
?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>
<script type="text/javascript" src="<?php echo Site_url;?>/js/datatables.min.js"></script>
<script type="text/javascript" charset="utf-8">$(document).ready(function() {$('#example').DataTable();} );</script>
<div class="container">
	<table id="example" class="display" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>KALDIRMA KAPASİTESİ / TON</th>
				<th>CİNSİ</th>
				<th>YÖN</th>
				<th>KAL. YÜKSEKLİĞİ MT.</th>
				<th>FİYAT TL</th>
			</tr>
		</thead>
		<tbody> 
			 <?php
					$sorgu=mysql_query("select * from fiyatlar order by ton asc ");
					while($yaz=mysql_fetch_object($sorgu)){
						echo "<tr>
								<td>$yaz->ton</td>
								<td>$yaz->cins</td>
								<td>$yaz->yon </td>
								<td>$yaz->yukseklik MT</td>
								<td>$yaz->fiyat</td>
							</tr>";
					}
				?>
		</tbody>
	</table> 
</div>
<script type="text/javascript">$('#example').removeClass( 'display' ).addClass('table table-striped table-bordered');</script> 