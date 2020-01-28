<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
{
    use SoftDeletes;
    public $directory='/images/';
    protected $date=['deleted_at'];
  protected $fillable=['title','content','body'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function photos()
    {
        return $this->morphMany(photo::class,'imageable');
    }
    public function tags()
    {
        return $this->morphToMany(tag::class, 'taggable');
    }

    public function getTitleAttribute($value)
    {
        return ucfirst($value);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title']=strtoupper($value);
    }

    public function getPathAttribute($value)
    {
        return $this->directory . $value;
    }

}
