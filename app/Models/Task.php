<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	use HasFactory;

	public function scopeFilter(Builder $query) : Builder
	{
		return $query->where('due_date', '>', now());
	}
}
