<?php

namespace App\Models;

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
		'rentdue' => 'required',
		'rentpaid' => 'required',
		'balance' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fullname','phonenumber','email','roomid','rentdue','rentpaid','balance','datemovedin','datemovedout'];



}
