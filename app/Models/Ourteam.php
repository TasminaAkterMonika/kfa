<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class ourteam extends Sximo  {
	
	protected $table = 'our_team';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT our_team.* FROM our_team  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE our_team.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
