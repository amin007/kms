<?php
namespace Aplikasi\Kitab; //echo __NAMESPACE__;
class Kawal
{
#==========================================================================================
	function __construct()
	{
		//echo '<br>class Kawal';
		$this->papar = new \Aplikasi\Kitab\Papar();
	}
#==========================================================================================
	public function jemaahTaskil($nama)
	{
		$tanyaNama = '\\Aplikasi\Tanya\\' . huruf('Besar', $nama) . '_Tanya';
		//echo '<br>$tanyaNama->' . $tanyaNama . '<br>';

		$this->tanya = new $tanyaNama();

		//if (class_exists($tanyaNama)) echo '<br>class ' . $tanyaNama . ' wujud<br>';
		//else echo '<br>class ' . $tanyaNama . ' tak wujud<br>';
		//*/
	}
#==========================================================================================
}