<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumLansia extends Model
{
    use HasFactory;
    public const ACTIVE = "aktif";

    protected $table = 'forum_lansia';
    protected $fillable = [
        'user_id','tanggal','jam','komentar'
    
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
        
}
