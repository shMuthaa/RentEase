<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tenant
 *
 * @property $id
 * @property $fullname
 * @property $phonenumber
 * @property $email
 * @property $roomid
 * @property $rentdue
 * @property $rentpaid
 * @property $balance
 * @property $datemovedin
 * @property $datemovedout
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tenant extends Model
{

  static $rules = [
    'fullname' => 'required',
    'phonenumber' => 'required',
    'email' => 'required',
    'roomid' => 'required',
  ];

  protected $perPage = 20;

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['fullname', 'phonenumber', 'email', 'roomid', 'datemovedin', 'datemovedout'];

  public function tenantRoomsRelationship()
  {
    return $this->belongsTo(Room::class, 'roomid');
  }
  public function tenantsPaymentsRelationship()
  {
    return $this->hasMany(Payment::class, 'tenantid');
  }
  public function calculateAmount($tenant)
  {
    $amount = 0;

    foreach ($tenant->tenantsPaymentsRelationship as $payment) {
      $amount = $amount + intval($payment->amountpaid);
    }

    return $amount;
  }

  public function calculateBalance($tenant, $paidAmount)
  {
    $roomAmount = $tenant->tenantRoomsRelationship->rentpermonth;
    $dateEntered =  new DateTime($tenant->datemovedin);
    $today = new DateTime();

    $interval = $dateEntered->diff($today);
    $months = $interval->y * 12 + $interval->m;

    if ($months < 1) {
      $months = 1;
    }

    $rentDue = $roomAmount * $months;
    $balance = $rentDue - $paidAmount;

    return $balance;
  }
}
