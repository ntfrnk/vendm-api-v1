<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class UserInformationField extends Model
{
    use HasFactory;
    
    protected $appends = ['name', 'label'];
    public $timestamps = false;

    /**
     * Get the user that owns the UserInformationField
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the field that owns the StoreInformationField
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function informationField(): BelongsTo
    {
        return $this->belongsTo(InformationField::class);
    }

    /**
     * Set the name field from InformationField model
     */
    public function getNameAttribute()
    {
        return $this->informationField->name;
    }

    /**
     * Set the label field from InformationField model
     */
    public function getLabelAttribute()
    {
        return $this->informationField->label;
    }
}
