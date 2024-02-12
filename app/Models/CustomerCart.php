<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomerCart
 * 
 * @property int $cart_product_id
 * @property int $user_id
 * @property string $name
 * @property int $product_id
 *
 * @package App\Models
 */
class CustomerCart extends Model
{
	protected $table = 'customer_carts';
	protected $primaryKey = 'cart_product_id';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'product_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'name',
		'product_id'
	];
}
