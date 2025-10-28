<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasUuids;
    use HasFactory;
    protected $primaryKey='id';
    protected $keyTybe='string';
    public $incremeting =false;
    protected $table='Comment';
    protected $fillable=['author','contant','post_id'];
    protected $guarded=['id'];
    public function post(){
        return $this->belongsTo(Post::class);
    }
}
