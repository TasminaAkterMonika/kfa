<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class projectdetails extends Sximo  {
	
	protected $table = 'projectdetails';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT projectdetails.* FROM projectdetails  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE projectdetails.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
