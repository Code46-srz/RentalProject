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
 * @property string|null $image_relation_num
 * @property int|null $image_property_id
 * @property string|null $image_location
 * @property string|null $image_type
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
		'image_relation_num',
		'image_property_id',
		'image_location',
		'image_type'
	];
}
