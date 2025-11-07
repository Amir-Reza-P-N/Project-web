<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;
class User extends Authenticatable {
    use HasFactory;
    protected $fillable=['name','email','password'];
    protected $hidden=['password'];
    public function orders(): HasMany{ return $this->hasMany(Order::class); }
    public function addresses(): HasMany{ return $this->hasMany(Address::class); }
    public function reviews(): HasMany{ return $this->hasMany(Review::class); }
    public function carts(): HasMany{ return $this->hasMany(Cart::class); }
}