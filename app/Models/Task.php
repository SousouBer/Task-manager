<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Task extends Model
{
	use HasFactory, HasTranslations;

	public $translatable = ['name', 'description'];

	protected $guarded = ['id'];

	public function scopeFilter(Builder $query) : Builder
	{
		return $query->where('due_date', '<', now());
	}
}
