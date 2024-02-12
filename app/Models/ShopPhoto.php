<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ShopPhoto
 * 
 * @property int $product_id
 * @property string|null $image
 *
 * @package App\Models
 */
class ShopPhoto extends Model
{
	protected $table = 'shop_photos';
	protected $primaryKey = 'product_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'product_id' => 'int'
	];

	protected $fillable = [
		'image'
	];
}
