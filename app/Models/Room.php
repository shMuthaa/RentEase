<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Room
 *
 * @property $id
 * @property $roomnumber
 * @property $floor
 * @property $rentpermonth
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Room extends Model
{

  static $rules = [
    'roomnumber' => 'required',
    'floor' => 'required',
    'rentpermonth' => 'required',
  ];

  protected $perPage = 20;

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['roomnumber', 'floor', 'rentpermonth'];


  public function roomsTenatsRelationship()
  {
    return $this->hasMany(Tenant::class, 'roomid');
  }
  public function roomsPaymentsRelationship()
  {
    return $this->hasMany(Payment::class, 'roomid');
  }
}
