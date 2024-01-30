<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class StoreInformationField extends Model
{
    use HasFactory;

    protected $appends = ['name', 'label'];
    public $timestamps = false;

    /**
     * Get the store that owns the Store Information Field
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function store(): BelongsTo
    {
        return $this->belongsTo(Store::class);
    }
    
    /**
     * Get the information field that owns the User Information Field
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function informationField(): BelongsTo
    {
        return $this->belongsTo(InformationField::class);
    }

    /**
     * Set the name field from Information Field model
     */
    public function getNameAttribute()
    {
        return $this->informationField->name;
    }

    /**
     * Set the label field from Information Field model
     */
    public function getLabelAttribute()
    {
        return $this->informationField->label;
    }
}
