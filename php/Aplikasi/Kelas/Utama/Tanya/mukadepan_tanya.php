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
		# sumber dari https://www.ramlimusa.com/questionnaires/depression-anxiety-stress-scale-dass-21-bahasa-malaysia
		$data[]['soalan'] = 'Saya rasa susah untuk bertenang';
		$data[]['soalan'] = 'Saya sedar mulut saya kering';
		$data[]['soalan'] = 'Saya seolah-oleh tidak dapat mengalami perasaan positif sama sekali';
		$data[]['soalan'] = 'Saya mengalami kesukaran bernafas (contohnya pernafasan yang laju, tercungap-cungap walaupun tidak melakukan senaman fizikal';
		$data[]['soalan'] = 'Saya sukar untuk mendapatkan semangat bagi melakukan sesuatu perkara';
		$data[]['soalan'] = 'Saya cenderung untuk bertindak keterlaluan dalam sesuatu keadaan';
		$data[]['soalan'] = 'Saya rasa menggeletar (contohnya pada tangan)';
		$data[]['soalan'] = 'Saya rasa saya terlalu gelisah (menggunakan banyak tenaga dalam keadaan cemas)';
		$data[]['soalan'] = 'Saya bimbang keadaan di mana saya mungkin menjadi panik dan melakukan perkara yang membodohkan diri sendiri';
		$data[]['soalan'] = 'Saya rasa saya tidak mempunyai apa-apa untuk diharapkan';
		$data[]['soalan'] = 'Saya dapati diri saya semakin gelisah';
		$data[]['soalan'] = 'Saya rasa sukar untuk relaks';
		$data[]['soalan'] = 'Saya rasa sedih dan murung';
		$data[]['soalan'] = 'Saya tidak dapat menahan sabar dengan perkara yang menghalang saya meneruskan apa yang saya lakukan';
		$data[]['soalan'] = 'Saya rasa hampir-hampir menjadi panik/cemas';
		$data[]['soalan'] = 'Saya tidak bersemangat dengan apa jua yang saya lakukan';
		$data[]['soalan'] = 'Saya tidak begitu berharga sebagai seorang individu';
		$data[]['soalan'] = 'Saya mudah tersinggung (rasa yang saya mudah tersentuh)';
		$data[]['soalan'] = 'Saya sedar tindakbalas jantung saya walaupun tidak melakukan aktiviti fizikal (contohnya kadar denyutan jantung bertambah, atau denyutan jantung berkurangan';
		$data[]['soalan'] = 'Saya berasa takut tanpa sebab yang munasabah';
		$data[]['soalan'] = 'Saya rasa hidup ini tidak bermakna';
		$data2 = 1; # kira jumlah data

		return $data; # pulangkan nilai
	}
#---------------------------------------------------------------------------------------------------#
	function skorsaringan()
	{
		$data[]['Meaning (makna)'] = array(
			'Normal (normal)',
			'Mild (ringan)',
			'Moderate (sederhana)',
			'Severe (teruk)',
			'Extremely severe(sangat teruk)',
		);
		$data[]['Depression(Kemurungan)'] =	array('0-5','6-7','8-10','11-14','15+');
		$data[]['Anxiety(Keresahan)'] = array('0-4','5-6','7-8','9-10','11+');
		$data[]['Stress(Stres)'] = array('0-7','8-9','10-13','14-17','18+');
		$data2 = 1; # kira jumlah data

		return $data; # pulangkan nilai
	}
#---------------------------------------------------------------------------------------------------#
#=====================================================================================================
}