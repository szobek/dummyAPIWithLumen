<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class settings extends Model
{
    protected $fillable = [
        'nav_items', 'user_id', 'invoices_limit', 'dummy_url', 'dummy_pdf_url', 'created_at', 'updated_at',
    ];

    
}
