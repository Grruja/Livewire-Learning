<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'title',
        'content',
    ];

    public function archive(): void
    {
        $this->is_archived = true;
        $this->save();
    }
}
