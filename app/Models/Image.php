<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Image
 *
 * @property int $image_id
 * @property string|null $image_description
 * @property string|null $image_of_property
 * @property int|null $image_property_id
 * @property string|null $image_type
 *
 * @property Property|null $property
 *
 * @package App\Models
 */
class Image extends Model
{
    protected $table = 'image';
    protected $primaryKey = 'image_id';
    public $timestamps = false;

    protected $casts = [
        'image_property_id' => 'int'
    ];

    protected $fillable = [
        'image_description',
        'image_of_property',
        'image_property_id',
        'image_type'
    ];

    public function property()
    {
        return $this->belongsTo(Property::class, 'image_property_id');
    }

    public function getMainImage()
    {
        return $this->where('image_property_id', $this->property_id)->where('image_type', 'main')->first();
    }
}
