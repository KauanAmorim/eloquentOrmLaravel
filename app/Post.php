<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    Protected $table = "posts";
    Protected $primaryKey = "id";

    public $timestamps = true;
}
