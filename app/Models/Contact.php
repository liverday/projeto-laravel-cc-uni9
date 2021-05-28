<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Contact extends Model {
    protected $keyType = 'string';
    protected $table = 'contacts';
    public $incrementing = false;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'city',
        'state',
        'country'
    ];

    protected static function booted()
    {
        static::creating(fn(Contact $contact) => $contact->id = (string) Uuid::uuid4());
    }
}
