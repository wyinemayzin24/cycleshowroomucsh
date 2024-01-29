<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;
   
    public function blog(){
     return $this->BelongsTo(Blog::class);
    }

    public function author(){
   return $this->BelongsTo(User::class,'user_id');
    }

}
