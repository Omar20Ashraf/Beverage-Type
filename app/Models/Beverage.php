<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Exceptions\UserCanBuyFiveBeverageException;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Beverage extends Model
{
    use HasFactory;

    protected $fillable = ['name','type'];


    public function buy()
    {
        # code...
        if(auth()->user()->canBuyBeverage()){
            return true;
        }

        throw new UserCanBuyFiveBeverageException;
    }
}
