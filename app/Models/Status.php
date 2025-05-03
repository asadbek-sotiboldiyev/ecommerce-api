<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\LaravelPackageTools\Concerns\Package\HasTranslations;

class Status extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ['name', 'for', 'code'];

    protected array $translatable = ['name'];

    protected $casts = [
        'name' => 'array',
    ];
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
