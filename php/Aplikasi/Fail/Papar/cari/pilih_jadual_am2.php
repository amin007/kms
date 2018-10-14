	<table border="1" class="excel" id="example">
	<?php echo '<h3>'. $tajukjadual . '</h3>';
	$ulangtajuk = array('&nbsp;','tidak pernah','jarang','kerap','sangat kerap');
	#-----------------------------------------------------------------
	for ($kira=0; $kira < count($row); $kira++)
	{
		?><thead><tr><th>#</th><?php
		foreach ( $ulangtajuk as $tajuk ) 
		{
			?><th><?php echo huruf('Besar_Depan',$tajuk) ?></th><?php
		}
		?></tr></thead>
	<?php
	# papar data $row ------------------------------------------------
	?><tbody><tr><td align="center"><?php echo $kira+1 ?></td><?php
		$html = new \Aplikasi\Kitab\Html_TD;
		foreach ( $row[$kira] as $key=>$data )
		{
			$html->paparURL($key, $data, $myTable, 
			$ca = null, $cb = null);
		}

		$ulangdata = array('0','1','2','3');
		foreach ( $ulangdata as $data2) 
		{
			?><td align="center"><?php echo $data2 ?></td><?php
		}		
		?></tr></tbody>
	<?php
	}#-----------------------------------------------------------------
	?>
	</table>
