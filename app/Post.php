<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Tabel naam aanpassen
    protected $table = 'Posts';

    //Primary key aanpassen
    public $primaryKey = 'id';
}
