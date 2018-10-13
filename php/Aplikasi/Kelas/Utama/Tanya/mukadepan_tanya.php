<?php
namespace Aplikasi\Tanya; //echo __NAMESPACE__;
class Index_Tanya extends \Aplikasi\Kitab\Tanya
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
		$kira = 0;
		$data[$kira][] = 'Saya rasa susah untuk bertenang';
		$data[$kira][] = 'Saya sedar mulut saya kering';
		$data[$kira][] = 'Saya seolah-oleh tidak dapat mengalami perasaan positif sama sekali';
		$data[$kira][] = 'Saya';
		$data2 = 1; # kira jumlah data

		return ($pilih==1) ? $data2 : $data; # pulangkan nilai
		
	}
#---------------------------------------------------------------------------------------------------#
#=====================================================================================================
}