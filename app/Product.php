<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //karas gres karas che, tablei anuny konkret nshelu hamara
    protected  $table = 'products';
    //karas gres karas chgres
    protected $primaryKey = 'id';
    //ete ches uzum vor lini autoincrement dnum es false, ete uzum es dnum es TRUE
    public $incrementing = FALSE;
    //ete ches uzum vor migrationy sarqci jamayin dashtery dnum es FALSE, hakarak depqum TRUE
    public $timestamps = FALSE;
    //en toxery voronc mej tuyl enq talis ban gren
    protected $fillable = ['*'];
    //bolor  toxery argelvac e grel inch vor ban
//    protected $guarded = ['*'];
}
