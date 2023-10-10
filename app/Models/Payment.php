<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Payment
 *
 * @property $id
 * @property $roomid
 * @property $tenantid
 * @property $datepaid
 * @property $amountpaid
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Payment extends Model
{

  static $rules = [
    'roomid' => 'required',
    'tenantid' => 'required',
    'datepaid' => 'required',
    'amountpaid' => 'required',
  ];

  protected $perPage = 20;

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['roomid', 'tenantid', 'datepaid', 'amountpaid'];


  public function paymentRoomRelationship()
  {
    return $this->belongsTo(Room::class, 'roomid');
  }
  public function paymentTenantRelationship()
  {
    return $this->belongsTo(Tenant::class, 'tenantid');
  }
}
