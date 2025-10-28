<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    use HasFactory;
    use HasUuids;
    protected $primaryKey='id';
    protected $keyTybe='string';
    public $incremeting =false;
    protected $table='post';
    protected $fillable=['title','body','author','published'];
    protected $guarded=['id'];
    public function comments(){
        return $this->hasMany(comment::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
