<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
    'name','kana','company','tel','email','postcode','address', 'memo']; 



    public function scopeSearchCustomers($query, $input = null)
    {
    if(!empty($input)){
    if(Customer::where('kana', 'like', $input . '%' )
    ->orWhere('tel', 'like', $input . '%')->exists())
    {
    return $query->where('kana', 'like', $input . '%' )
    ->orWhere('tel', 'like', $input . '%');
    }
    }
    }
}
