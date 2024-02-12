<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderProduct
 * 
 * @property int $order_product_id
 * @property int $order_id
 * @property string $name
 * @property int $product_id
 * @property int $quantity
 *
 * @package App\Models
 */
class OrderProduct extends Model
{
	protected $table = 'order_products';
	protected $primaryKey = 'order_product_id';
	public $timestamps = false;

	protected $casts = [
		'order_id' => 'int',
		'product_id' => 'int',
		'quantity' => 'int'
	];

	protected $fillable = [
		'order_id',
		'name',
		'product_id',
		'quantity'
	];
}
