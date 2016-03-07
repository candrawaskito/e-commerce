<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
	protected $guarder = [];
	
	public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function detail_invoice()
    {
    	return $this->hasMany(DetailInvoice::class);
    }
}