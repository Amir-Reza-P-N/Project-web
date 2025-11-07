<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Product extends Model {
    protected $fillable=['name','sku','description','price','stock'];
    public function categories(): BelongsToMany{ return $this->belongsToMany(Category::class); }
    public function reviews(): HasMany{ return $this->hasMany(Review::class); }
    public function comments(): HasMany{ return $this->hasMany(Comment::class); }
}