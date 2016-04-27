<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';//

    protected $fillable = [
       'title',
       'sub_title',
       'content',
       'is_feature',
       'page_view',
       'updated_at',



    ];
      protected $guarded=['id','created_at'];



//實際範例

public function comments()
{
	return $this -> hasMany('App\Comment');
}



public function user()
{
	return $this -> belongsTo('App\User');
}











}
