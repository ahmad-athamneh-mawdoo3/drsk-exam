<?php

namespace mawdoo3\drsk\exam\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SavedResult extends Model
{
        use SoftDeletes;
    protected $fillable = ['title','description','link','comment'];

}
