<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
class Article extends Model implements SluggableInterface
{
  use SluggableTrait;
    protected $sluggable = [
        'build_from' => 'title',
        'save_to'    => 'slug',
    ];
     protected $table = "articles";
    
     protected $fillable = ['title','content', 'user_id', 'category_id', 'path', 'tags', 'slug'];

     public function setPathAttribute($path){

        if(!empty($path)){
          $nombre = $path->getClientOriginalName();
          $this->attributes['path'] = $nombre;
          \Storage::disk('local')->put($nombre, \File::get($path));
        }

     }



     public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}


