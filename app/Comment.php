<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';


    protected $fillable = [
       
       'name',
       'email',
       'content',
       'updated_at',



    ];
    protected $guarded = ['id','created_at','post_id'];




public function post()
{
	return $this -> belongsTo('App\Post');

}


public function user()
{
	return $this -> belongsTo('App\User');
}


}
