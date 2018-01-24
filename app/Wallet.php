<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    //
    protected $fillable = ['filename'];

    public static function registerFile(string $filename) 
    {
    	$wallet = new Wallet();
    	$wallet->filename = $filename;
    	return $wallet->save();
    }
}
