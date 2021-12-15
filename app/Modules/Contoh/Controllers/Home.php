<?php
namespace App\Modules\Contoh\Controllers;

class Home extends Bcon{
	protected $vw='../Modules/Contoh/Views/';
	
	public function index(){
		$dt=[
			'jdlapp'=>'Halaman Modul Contoh'
		];
		$dt['contents']=view($this->vw.'home',$dt);
		return view($this->vw.'tmp',$dt);
	}
}
