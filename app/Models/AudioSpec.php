<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AudioSpec
 * 
 * @property int $product_id
 * @property string $battery_life
 * @property string $microphone
 * @property string $noise_cancellation
 * @property string $add_features
 * @property string $color
 *
 * @package App\Models
 */
class AudioSpec extends Model
{
	protected $table = 'audio_specs';
	protected $primaryKey = 'product_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'product_id' => 'int'
	];

	protected $fillable = [
		'battery_life',
		'microphone',
		'noise_cancellation',
		'add_features',
		'color'
	];
}
