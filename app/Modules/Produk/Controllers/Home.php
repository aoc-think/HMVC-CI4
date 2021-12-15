<?php
namespace App\Modules\Produk\Controllers;

class Home extends Bcon{
	protected $vw='../Modules/Produk/Views/';
	
	public function index(){
		$dt=[
			'jdlapp'=>'Halaman Modul Produk'
		];
		$dt['contents']=view($this->vw.'home',$dt);
		return view($this->vw.'tmp',$dt);
	}
}
