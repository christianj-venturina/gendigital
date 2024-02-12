<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MobileSpec
 * 
 * @property int $product_id
 * @property string $operating_system
 * @property string $processor
 * @property string $memory
 * @property string $storage
 * @property string $rear_cam_mp
 * @property string $front_cam_mp
 * @property string $display
 * @property string $battery_capacity
 * @property string $charger
 * @property string $usb_interface
 * @property string $sim_slots
 * @property string $external_memory
 * @property string $color
 *
 * @package App\Models
 */
class MobileSpec extends Model
{
	protected $table = 'mobile_specs';
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
		'rear_cam_mp',
		'front_cam_mp',
		'display',
		'battery_capacity',
		'charger',
		'usb_interface',
		'sim_slots',
		'external_memory',
		'color'
	];
}
