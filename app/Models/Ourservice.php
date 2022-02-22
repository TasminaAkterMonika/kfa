<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class ourservice extends Sximo  {
	
	protected $table = 'our_service';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT our_service.* FROM our_service  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE our_service.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
