<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class ourachivement extends Sximo  {
	
	protected $table = 'our_achivement';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT our_achivement.* FROM our_achivement  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE our_achivement.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
