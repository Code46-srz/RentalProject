<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Customer
 *
 * @property int $customer_id
 * @property string|null $cusomer_name
 * @property string|null $customer_lastname
 * @property string|null $customer_phone
 * @property string|null $customer_address
 * @property string|null $customer_cardinfo
 *
 * @package App\Models
 */
class Customer extends Model
{
    use HasFactory;
    protected $table = 'customer';
    protected $primaryKey = 'customer_id';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'customer_id' => 'int'
    ];

    protected $fillable = [
        'cusomer_name',
        'customer_lastname',
        'customer_phone',
        'customer_address',
        'customer_cardinfo'
    ];
}
