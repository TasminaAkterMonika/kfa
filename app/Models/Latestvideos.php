<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class latestvideos extends Sximo  {
	
	protected $table = 'con_videos';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT con_videos.* FROM con_videos  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE con_videos.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
