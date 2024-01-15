<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Agent
 * 
 * @property int $agent_id
 * @property string|null $agent_firstname
 * @property string|null $agent_lastname
 * @property string|null $agent_trec#
 * @property string|null $agent_phonenumber
 * @property string|null $agent_company
 * @property string|null $agent_company_mls#
 * @property string|null $agent_image
 * 
 * @property Collection|Property[] $properties
 *
 * @package App\Models
 */
class Agent extends Model
{
	protected $table = 'agent';
	protected $primaryKey = 'agent_id';
	public $timestamps = false;

	protected $fillable = [
		'agent_firstname',
		'agent_lastname',
		'agent_trec#',
		'agent_phonenumber',
		'agent_company',
		'agent_company_mls#',
		'agent_image'
	];

	public function properties()
	{
		return $this->hasMany(Property::class, 'property_agent_id');
	}
}
