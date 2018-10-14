<?php
namespace Aplikasi\Kitab; //echo __NAMESPACE__;
class Html_TD
{
#==========================================================================================
	function primaryKey($key, $data, $myTable = null, $ca = null, $cb = null)
	{# primary key
		$k0 = URL . 'senarai/ubah/' . $data;
		$k1 = $this->iconFA(1) . '<a target="_blank" href="' . $k0 . '">'
			. $data . '</a>&nbsp;';
		list($pengguna,$level,$birutua,$birumuda,$merah) = $this->setPencam();
		$btn = 'target="_blank" href="' . $k0 . '" class="' . $birumuda . '"';

		$a = '<i class="fa fa-pencil" aria-hidden="true"></i>Ubah1';
		$p = '<a '. $btn . '>' . $a . '</a><br>';

		return $p . $data;
	}
#==========================================================================================
	function buangKey($b, $myTable = null)
	{
		$d = explode('|', $b); // pecah data
		$data = $d[2]; $cacb = $d[0] . '/' . $d[1];
		list($pengguna,$level,$birutua,$birumuda,$merah) = $this->setPencam();

		$b = URL . "operasi/buangID/$cacb/$data";
		$p = '<a href="' . $b . '" class="' . $merah
		. '">Kosong</a><br>' . $cacb;

		return $p;
	}
#==========================================================================================
	function paparURL($key, $data, $myTable = null, $ca = null, $cb = null)
	{
		if ($key=='id')
		{# primary key
			$k1 = $this->primaryKey($key,$data,$myTable,$ca,$cb);
			?><td><?php echo $k1 ?></td><?php
		}
		elseif(in_array($key,array('batchAwal')))
		{
			$k1 = $this->buangKey($data,$myTable);
			?><td><?php echo $k1 ?></td><?php
		}
		elseif(in_array($key,array('batchX')))
		{
			$k0 = URL . 'operasi/batch/' . $data;
			$p1 = ($data==null) ? $data :
			'<a target="_blank" href="' . $k0 . '" class="' 
			. $this->butang('success') . '">' . $data . '</a>';
			?><td><?php echo $p1 ?></td><?php
		}
		elseif(in_array($key,array('posdaftar')))
		{
			list($k,$btn) = $this->posdaftar($data);
			$pautan = ($data==null) ? $data :
			'<a target="_blank" href="' . $k[3] . '" class="' 
			. $this->butang() . '">' . $data . '</a>';

			?><td><?php echo $pautan ?></td><?php
		}
		elseif(in_array($key,array('Mesej')))
		{
			?><td><?php echo nl2br($data) ?></td><?php
		}
		elseif(in_array($key,array('kp')))
		{
			?><td><?php echo nl2br($data) ?></td><?php
		}
		else
		{
			?><td><?php echo $data ?></td><?php
		}//*/
	}
#==========================================================================================
	public function dataBernombor($data)
	{
		$data = ($data == '0') ? '&nbsp;':$data;
		$data = ($data == null) ? 'Jumlah:':$data;

		return $data;
	}
#==========================================================================================
	public function setPencam()
	{
		# set pembolehubah Sesi
		$pengguna = \Aplikasi\Kitab\Sesi::get('namaPendek');
		$level = \Aplikasi\Kitab\Sesi::get('levelPengguna');
		//echo "<br> \$pengguna : $pengguna | \$level = $level";
		# butang 
		$birutua = 'btn btn-primary btn-mini';
		$birumuda = 'btn btn-info btn-mini';
		$merah = 'btn btn-danger btn-mini';

		return array($pengguna,$level,$birutua,$birumuda,$merah);
	}
#==========================================================================================
	public function butang($warna = 'info',$saiz = 'kecil')
	{ 
		$btnW['primary'] = 'btn btn-primary'; # birutua
		$btnW['info'] = 'btn btn-info'; # birumuda - utama
		$btnW['danger'] = 'btn btn-danger'; # merah
		$btnW['success'] = 'btn btn-success'; #hijau
		$btnS['kecil'] = ' btn-mini'; # - utama
		
		$btn = $btnW[$warna] . $btnS[$saiz];
		return $btn;
	}
#==========================================================================================
	public function iconFA($pilih)
	{# icon font awesome
		$a[0] = '<i class="fa fa-user-o" aria-hidden="true"></i>';
		$a[1] = '<i class="fa fa-pencil" aria-hidden="true"></i>';

		return $a[$pilih];
	}
#==========================================================================================
	public function pautanTD($target, $href, $class, $data)
	{
		if ($target == null) { $t = ''; }
		else { $t = ' target="' . $target . '"'; }
	
		?><a<?php echo $t ?> href="<?php echo $href ?>" class="<?php
		echo $class ?>"><?php echo $data ?></a><?php
	}
#==========================================================================================
}