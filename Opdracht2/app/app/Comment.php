<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function Post()
  {
      return $this->belongsTo('App\Article');
  }
  protected $fillable = [
    'id', 'name', 'comment',
  ];
}
