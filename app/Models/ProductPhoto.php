<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductPhoto
 * 
 * @property int $product_id
 * @property string|null $image
 *
 * @package App\Models
 */
class ProductPhoto extends Model
{
	protected $table = 'product_photos';
	protected $primaryKey = 'product_id';
	public $timestamps = false;

	protected $fillable = [
		'image'
	];
}
