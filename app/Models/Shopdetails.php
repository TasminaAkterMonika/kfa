<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class shopdetails extends Sximo  {
	
	protected $table = 'shopdetails';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT shopdetails.* FROM shopdetails  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE shopdetails.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
