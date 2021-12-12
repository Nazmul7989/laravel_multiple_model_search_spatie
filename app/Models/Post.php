<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\SearchResult;

class Post extends Model implements \Spatie\Searchable\Searchable
{
    use HasFactory;

    protected $fillable = ['name','description'];

    public function getSearchResult(): SearchResult
    {
        $url = route('post.show', $this->id);

        return new SearchResult(
            $this,
            $this->name,
            $url
        );
    }
}
