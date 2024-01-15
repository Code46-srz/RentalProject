<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Detail
 * 
 * @property int $detail_id
 * @property string|null $detail_num_bed
 * @property string|null $detail_num_bath
 * @property string|null $detail_sqft
 * @property string|null $detail_property_ad_type
 * @property string|null $detail_year_built
 * @property string|null $detail_ac_type
 * @property string|null $detail_num_carport
 * @property string|null $detail_overview
 * @property int|null $detail_property_id
 * @property string|null $detail_residence_type
 * @property string|null $detail_estimate
 * @property string|null $detail_hoa
 * 
 * @property Property|null $property
 *
 * @package App\Models
 */
class Detail extends Model
{
	protected $table = 'detail';
	protected $primaryKey = 'detail_id';
	public $timestamps = false;

	protected $casts = [
		'detail_property_id' => 'int'
	];

	protected $fillable = [
		'detail_num_bed',
		'detail_num_bath',
		'detail_sqft',
		'detail_property_ad_type',
		'detail_year_built',
		'detail_ac_type',
		'detail_num_carport',
		'detail_overview',
		'detail_property_id',
		'detail_residence_type',
		'detail_estimate',
		'detail_hoa'
	];

	public function property()
	{
		return $this->belongsTo(Property::class, 'detail_property_id');
	}
}
