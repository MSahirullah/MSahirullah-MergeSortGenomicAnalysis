<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmsLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'requested_system', 
        'requested_by', 
        'campaign_id',
        'contact_no',
        'type',
        'text',
        'is_sent',
    ];
}
