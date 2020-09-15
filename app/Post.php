<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
      "user_id",
      "title",
      "image_path",
      "content",
    ];

    // Methods
    // Method user
    // Many posts One user
    public function user() {
      return $this->belongsTo("App\User");
    }
}
