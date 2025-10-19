<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// USER STORY 7: Database Model
// USER STORY 9: ORM (Eloquent ORM)
class Video extends Model
{
    protected $fillable = ['title', 'author', 'note', 'youtube_link', 'order'];
}
