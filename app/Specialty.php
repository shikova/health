<?php

namespace App;

use Illuminate\Database\Eloquent\Model ;
use TCG\Voyager\Traits\Translatable;

class Specialty extends Model
{
    use Translatable;

    protected $translatable = ['name'];

    protected $table = 'specialties';

    protected $fillable = ['slug', 'name'];

//    public function posts()
//    {
//        return $this->hasMany(Voyager::modelClass('Post'))
//            ->published()
//            ->orderBy('created_at', 'DESC');
//    }

    public function parentId()
    {
        return $this->belongsTo(self::class);
    }
}
