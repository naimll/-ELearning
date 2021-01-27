<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class home extends Model
{
    use HasFactory;
public function getV(){
    $content=array(
        array("Computer Science","Lorem ipsum sit dolar amet"),
        array("Economy","Lorem ipsum sit dolar amet"),
        array("Medicine","Lorem ipsum sit dolar amet")
    );
    return $content;
}

}
