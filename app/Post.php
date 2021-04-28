<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Cviebrock\EloquentSluggable\ServiceProvider;
use Cviebrock\EloquentSluggable\SluggableObserver;


class Post extends Model 
{
    //

    use Sluggable;
    use SluggableScopeHelpers;
   

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
   

    protected $fillable = [

        'user_id',
        'category_id',
        'photo_id',
        'title',
        'body',
        'slug',



    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate' => true,
            ]
        ];
    }        

    public function user(){

        return $this->belongsTo('App\User');

    }

    public function photo(){

        return $this->belongsTo('App\Photo');

    }

    public function category(){

        return $this->belongsTo('App\Category');

    }

    public function comments(){

        return $this->hasMany('App\Comment');

    }


}
