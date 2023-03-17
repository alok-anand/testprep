<?php

namespace App\Models\Testprep;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

use App\Models\Testprep\CmsPage;

class Pagemeta extends Model
{
    use HasFactory;

    protected $table = 'pagemeta';

    protected $connection = 'mysql_testprep';

    public $timestamps = false;

    public function Cmspage()
    {
        $this->belongsTo(Cms::class);
    }
    

    public function getpagemeta($slug){ 
        return   $this->where('pagemeta.slug',$slug)->first();
    
    }
}
