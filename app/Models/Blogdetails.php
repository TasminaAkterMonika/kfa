<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class blogdetails extends Sximo  {
	
	protected $table = 'blogdetails';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT blogdetails.* FROM blogdetails  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE blogdetails.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
