<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model 
{
	public $timestamps = false;

	/**
	 * Get all of the users for the Role
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function users(): HasMany
	{
		return $this->hasMany(User::class);
	}
}