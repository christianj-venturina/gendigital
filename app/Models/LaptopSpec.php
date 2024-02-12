<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LaptopSpec
 * 
 * @property int $product_id
 * @property string $operating_system
 * @property string $processor
 * @property string $memory
 * @property string $storage
 * @property string $display
 * @property string $graphics
 * @property string $usb_ports
 * @property string $hdmi
 * @property string $ram_slots
 * @property string $color
 *
 * @package App\Models
 */
class LaptopSpec extends Model
{
	protected $table = 'laptop_specs';
	protected $primaryKey = 'product_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'product_id' => 'int'
	];

	protected $fillable = [
		'operating_system',
		'processor',
		'memory',
		'storage',
		'display',
		'graphics',
		'usb_ports',
		'hdmi',
		'ram_slots',
		'color'
	];
}
