<?php

namespace App\Models\Testprep;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Testprep\Pagemeta;

class CmsPage extends Model
{
    use HasFactory;

    protected $table = 'cms_page';

    protected $connection = 'mysql_testprep';

    public function Pagemeta()
    {
        //$this->hasOne('App\Models\Testprep\Pagmeta','page_id','id');
       return $this->hasOne(Pagemeta::class,'id','page_id');

    }

    public  function getPagetabs($type){

		return   $this->select('atitle','slug')
                    ->leftJoin('pagemeta','cms_page.page_id','=','pagemeta.id')
                    ->where('pagemeta.active',1)
                    ->where('cms_page.type',$type)
                    ->orderBy('cms_page.displayorder','asc')
                    ->get();

	}

    public function  getPageInfo( $palias='underconstruction',$active=1)
    {
        // $q="SELECT * FROM cms_page as p
		// LEFT JOIN pagemeta as pm ON (p.page_id=pm.id)
		// where p.active=$status and slug='".$palias."'";

        return   $this->leftJoin('pagemeta','cms_page.page_id','=','pagemeta.id')
                    ->where('pagemeta.slug',$palias)
                    ->where('cms_page.active',$active)
                    ->orderBy('cms_page.displayorder','desc')
                    ->first();

    }

}
