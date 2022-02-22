<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class contactus extends Sximo  {
	
	protected $table = 'contactus';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT contactus.* FROM contactus  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE contactus.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
