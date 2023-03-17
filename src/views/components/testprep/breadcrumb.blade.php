@if($pagemeta->atitle == 'Overview')
      @php $atitle = 'ielts'; @endphp
  @else
@php $atitle = $pagemeta->atitle; @endphp
  @endif
 

@php
//Breadcrumb Start

$breadcrumb=$_SERVER['REQUEST_URI'];


$breadcrumb=str_replace('/testprep','',$breadcrumb); 
$breadcrumb=str_replace('/tags','',$breadcrumb);  //remove tags from breadcrumb
$breadcrumb=str_replace('/category','',$breadcrumb); //remove category from breadcrumb

$breadcrumb=explode('/',$breadcrumb);
// $breadcrumb=explode('/',$_SERVER['SCRIPT_URL']);




$breadcrumb[0]="Home";

// echo end($breadcrumb);

$burl=url::to('/testprep').'/';
//echo $burl;
foreach($breadcrumb as $key=>$v):
     //print_r($breadcrumb);
    //   echo $v.'--'.$slug."<br/>";
    // echo $slug;
    if(end($breadcrumb)!=$v):
        if($v=='Home'){ //exit;
        $breadcrumb[$key]='<li class="breadcrumb-item"><a href="/testprep">'.$v.'</a></li>';
        }
        else{
        $burl.=$v.'/';
        $breadcrumb[$key]='<li class="breadcrumb-item"><a href="'.$burl.'">'.str_replace('-',' ',$v).'</a></li>';
        }
    else:
        // $breadcrumb[$key]='<li class="breadcrumb-item">'.$v.'</li>';
        $breadcrumb[$key]='<li class="breadcrumb-item">'.$atitle.'</li>';
    
    endif;
    
    
endforeach;



//   print_r($breadcrumb);
$breadcrumbData ='<nav aria-label="breadcrumb"><ol class="breadcrumb">';
// $breadcrumbData.='<li class="breadcrumb-item"><a href="/">Home</a></li>';
    /*<li class="breadcrumb-item active" aria-current="page">Library</li>*/
$breadcrumbData.=implode('',$breadcrumb); 
  
$breadcrumbData.='</ol>
</nav>';

// echo $breadcrumbData;
$breadcrumb=$breadcrumbData;

// $breadcrumb=implode('/',$breadcrumb);
// print_r($breadcrumb);
// echo $slug;

//Breadcrumb End
@endphp
<div class="col-lg-12 col-md-12">

    <ul class="breadcrumb cp-breadcrumb">
      {!! $breadcrumb !!}
      <!--li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">IELTS</li-->
    </ul>
  </div>