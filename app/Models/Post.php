<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

//sintaxis laravel 10
    protected function name(): Attribute {
        return Attribute::make(
            set: fn ($value) => strtolower($value),
        );
    }

//sintaxis laravel 8
    protected function getSlugAttribute(): string {
        return Str::slug($this->name);
    }



}
