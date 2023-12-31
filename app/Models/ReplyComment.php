<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReplyComment extends Model
{
    use HasFactory;

    

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function artical()
    {

        return $this->belongsTo(Artical::class);
    }
    public function comment()
    {

        return $this->belongsTo(Comment::class);
    }
}
