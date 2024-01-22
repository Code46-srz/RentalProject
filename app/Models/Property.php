<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Property
 * 
 * @property int $property_id
 * @property string|null $property_address
 * @property string|null $property_price
 * @property int|null $property_featured
 * @property int|null $property_agent_id
 * @property int $property_status
 * 
 * @property Agent|null $agent
 * @property Detail $detail
 * @property Collection|Image[] $images
 *
 * @package App\Models
 */
class Property extends Model
{
	protected $table = 'property';
	protected $primaryKey = 'property_id';
	public $timestamps = false;

	protected $casts = [
		'property_featured' => 'int',
		'property_agent_id' => 'int',
		'property_status' => 'int'
	];

	protected $fillable = [
		'property_address',
		'property_price',
		'property_featured',
		'property_agent_id',
		'property_status'
	];

	public function agent()
	{
		return $this->belongsTo(Agent::class, 'property_agent_id');
	}

	public function detail()
	{
		return $this->hasOne(Detail::class, 'detail_property_id');
	}

	public function images()
	{
		return $this->hasMany(Image::class, 'image_property_id');
	}
}
