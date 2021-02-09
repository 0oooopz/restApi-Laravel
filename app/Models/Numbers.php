<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Numbers extends Model
{
    use HasFactory;

    protected $table = 'numbers';
    protected $fillable = [
    	'id',
	    'number',
    ];

	/**
	 * @return int
	 */
    public function randomNumber():int
    {
			return $randomNumber = mt_rand(0,2147483648);
    }
}
