<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;
use Spatie\Translatable\HasTranslations;

class Task extends Model
{
	use HasFactory, HasTranslations;

	public $translatable = ['name', 'description'];

	protected $guarded = ['id'];

	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}

	public function scopeFilter(Builder $query): Builder
	{
		return $query->where('due_date', '<', now());
	}

	public function scopeSort(Builder $query, string $column, string $direction): Builder
	{
		return $query->orderBy($column, $direction);
	}

	public function scopeOldTasks(Builder $query): Builder
	{
		return $query->user()->where('due_date', '<', now());
	}
}
