<?php
namespace Aplikasi\Tanya; //echo __NAMESPACE__;
class Mukadepan_Tanya extends \Aplikasi\Kitab\Tanya
{
#=====================================================================================================
	public function __construct()
	{
		parent::__construct();
	}
#---------------------------------------------------------------------------------------------------#
	function data_contoh($pilih)
	{
		$data = array(
			'namaPendek' => 'james007',
			'namaPenuh' => 'Polan Bin Polan',
			'level' => 'pelawat'
		); # dapatkan medan terlibat
		$kira = 1; # kira jumlah data

		return ($pilih==1) ? $kira : $data; # pulangkan nilai
	}
#---------------------------------------------------------------------------------------------------#
	function jadualDaa()
	{
		$data[]['soalan'] = 'Saya rasa susah untuk bertenang';
		$data[]['soalan'] = 'Saya sedar mulut saya kering';
		$data[]['soalan'] = 'Saya seolah-oleh tidak dapat mengalami perasaan positif sama sekali';
		$data[]['soalan'] = 'Saya mengalami kesukaran bernafas (contohnya pernafasan yang laju, tercungap-cungap walaupun tidak melakukan senaman fizikal';
		$data[]['soalan'] = 'Saya sukar untuk mendapatkan semangat bagi melakukan sesuatu perkara';
		$data[]['soalan'] = 'Saya cenderung untuk bertindak keterlaluan dalam sesuatu keadaan';
		$data[]['soalan'] = 'Saya rasa menggeletar (contohnya pada tangan);
		$data[]['soalan'] = 'Saya';
		$data2 = 1; # kira jumlah data

		return $data; # pulangkan nilai
		
	}
#---------------------------------------------------------------------------------------------------#
#=====================================================================================================
}