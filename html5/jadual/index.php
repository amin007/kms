<?php
#------------------------------------------------------------------------------------------
function getFileList($dir)
{
	$retval = [];# array to hold return value

	# add trailing slash if missing
	if(substr($dir, -1) != "/") { $dir .= "/"; }

	# open pointer to directory and read list of files
	$d = @dir($dir) or die("getFileList: Failed opening directory {$dir} for reading");
	while(FALSE !== ($entry = $d->read()))
	{
		// skip hidden files
		if($entry{0} == ".") continue;
		if(is_dir("{$dir}{$entry}"))
		{
			$retval[] = [
				'name' => "{$dir}{$entry}/",
				'type' => filetype("{$dir}{$entry}"),
				'size' => 0,
				'lastmod' => filemtime("{$dir}{$entry}")
			];
		}
		elseif(is_readable("{$dir}{$entry}"))
		{
			$retval[] = [
			'name' => "{$dir}{$entry}",
			'type' => mime_content_type("{$dir}{$entry}"),
			'size' => filesize("{$dir}{$entry}"),
			'lastmod' => filemtime("{$dir}{$entry}")
			];
		}
	}
	$d->close();
	return $retval;
}
#------------------------------------------------------------------------------------------
function paparFail()
{
	diatas('Contoh Dalam HTML5');
	echo '<h1>Ini list fail automatik</h1>';
	echo "\n" . '<ul class="fa-ul">';
	foreach(getFileList('./') as $file):
		echo ($file['type'] != 'dir') ?
		"\n<li>" . pautan($file['name'], 'dir') . '</li>'
		: '';
	endforeach;
	foreach(getWebList() as $file):
		echo "\n<li>" . pautan($file['name'], 'web') . '</li>';
	endforeach;
	echo "\n</ul>\n";
	//echo '<pre>'; print_r(getWebList()); echo '</pre>';
	//echo '<pre>'; print_r(getFileList('./')); echo '</pre>';
	dibawah();
}
#------------------------------------------------------------------------------------------
function pautan($fail, $type)
{
	$icon = ($type == 'dir') ? '<i class="far fa-folder fa-spin"></i>'
	: '<i class="fas fa-globe-asia fa-spin"></i>';
	return '<span class="fa-li">' . $icon . '</span>'
	. '<a target="_blank" href="' . $fail . '">' . $fail . '</a>';
}
#------------------------------------------------------------------------------------------
function getWebList()
{
	//$web[]['name'] = 'index.html';
	$web[]['name'] = 'https://github.com';
	$web[]['name'] = 'http://www.maybank2u.com.my';
	$web[]['name'] = 'http://www.amin007.org';

	return $web;
}
#------------------------------------------------------------------------------------------
function diatas($p)
{
	?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title><?php echo $p ?></title>
<link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
}
#------------------------------------------------------------------------------------------
function dibawah()
{
	?>
<!-- khas untuk jquery dan js2 lain
================================================== -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script -->
</body>
</html>
<?php
}
#------------------------------------------------------------------------------------------
function jadual()
{
	echo '<table>';
	for($i = 1; $i <=100; $i++):
?>
<tr>
	<td><?php echo $i ?></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<?php
	endfor;
	echo '</table>';
}
#------------------------------------------------------------------------------------------

paparFail();