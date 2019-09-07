
<?php include "../../../../system/database-config.php" ?>
<?php include "../../../../class/".$database_type[0]."SRV_DataBase.php"; ?>
<?php
# set database-config
$sqlsrv_obj = new SQLSRV_DataBase($dbsql_set[1]['uid'],$dbsql_set[1]['pwd'],$dbsql_set[1]['dbname'],$dbsql_set[1]['host'],$dbsql_set[1]['port'],"");
$sqlsrv_obj->db_connect();

# untuk panggil sql
if($sqlsrv_obj->has_error()==false)
{
	$sqlsrv_obj->outputSQL=false;
	$sql=" SELECT * FROM [MUIP_DB].[dbo].[SW_PREMIS]";
	// masukkan semua data dalam $row
	$row=$sqlsrv_obj->get_results($sql,'array');
}
//echo '<pre>$sql::' . htmlentities($sql) . '</pre><br>';
//echo '<pre>$row::'; print_r($row); echo '</pre><br>';
?>

<table border="1">
<thead>
<tr><td colspan="6">
	<table>
		<tr>
			<th colspan="6"><img src="../../../../images/logo muip.png" alt="logo muip" width="26%" height="45" class="center" /></th>
		</tr>
		<tr>
			<td height="23" colspan="3" align="center">SISTEM PENGURUSAN MAKLUMAT BERSEPADU</td>
			<td width="10%">Muka Surat </td>
			<td width="10%">: <?php=$page?> daripada 10 </td>
		</tr>
		<tr>
			<td width="12%">&nbsp;</td>
			<td width="34%">&nbsp;</td>
			<td width="24%">&nbsp;</td>
			<td>Tarikh</td>
			<td>:</td>
		</tr>
		<tr>
			<td>Laporan Senarai Ahli</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>Laporan </td>
			<td>:</td>
		</tr>
		<tr>
			<td colspan="5">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="5">&nbsp;</td>
		</tr>
	</table>
</td></tr>
<tr>
	<th width="6%">No</th>
	<th width="6%">No IC</th>
	<th width="6%">DOB</th>
	<th>Name</th>
	<th>Address</th>
	<th width="10%">Phone Number</th></tr>
</thead>
<tbody>
<?php for($page=1;$page<=1;$page++){ ?>
<?php
for ($kira=0; $kira < count($result); $kira++)
{## papar data $row -----------------------------------------------------
	echo '<tr>' . "\r\t";
	foreach ( $result[$kira] as $key=>$data )
	{
		echo '<td>' . $data . '</td>';
	}
	echo '</tr>' . "\r";
}#----------------------------------------------------------------------
$result2['KODPREMIS'] = 123456;
?>
<tr>
	<td><?php=$a++?></td>
	<td><?php echo $result2['KODPREMIS']?></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<?php } ?>

</tbody>
</table>