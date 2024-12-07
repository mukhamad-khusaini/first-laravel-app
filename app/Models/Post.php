<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'author', 'tag', 'content'];

    protected $with = ['user', 'category'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id', 'id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function scopeFilters(Builder $query, array $filters): void
    {
        $query->when($filters['search'] ?? false, fn($query, $title) => $query->where('title', 'like', '%' . $title . '%'));

        $query->when($filters['category'] ?? false, fn($query, $category) => $query->whereHas('category', fn($query) => $query->where('name', 'like', $category)));

        $query->when($filters['author'] ?? false, fn($query, $author) => $query->whereHas('user', fn($query) => $query->where('name', 'like', $author)));
    }
}
