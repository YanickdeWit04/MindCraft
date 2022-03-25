<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bankstatement extends Model
{
    use HasFactory;
    protected $fillable = ['amount', 'name', 'category_id', 'type', 'date'];

    public static function select(string $string)
    {
    }
    public function category(){
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
