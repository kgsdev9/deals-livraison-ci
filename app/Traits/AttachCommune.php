<?php

declare(strict_types=1);

namespace App\Traits;

use App\Models\Commune;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

trait AttachCatagory
{
    /**
     * @param int[] $communes
     */
    public function synCommune(array $communes): void
    {
        $this->save();
        $this->tags()->sync($communes);
        $this->unsetRelation('communes');
    }

    public function removeTags(): void
    {
        $this->tags()->detach();
        $this->unsetRelation('communes');
    }

    public function scopeForTag(Builder $query, string $tag): Builder
    {
        return $query->whereHas('commune', function ($query) use ($tag): void {
            $query->where('communes.slug', $tag);
        });
    }

    public function communes(): MorphToMany
    {
        return $this->morphToMany(Commune::class, 'commune');
    }


    public ?string $tag = null;

    public string $sortBy = 'recent';

    public function toggleTag(string $tag): void
    {
        $this->tag = $this->tag !== $tag && $this->tagExists($tag) ? $tag : null;
    }

    public function sortBy(string $sort): void
    {
        $this->sortBy = $this->validSort($sort) ? $sort : 'recent';
    }

    public function tagExists(string $tag): bool
    {
        return Commune::where('slug', $tag)->exists();
    }
}
