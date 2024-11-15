<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Setting extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    public static function getByName($name, $default = null)
    {
        $setting = self::where('name', $name)->first();
        if (isset($setting)) {
            return $setting->value;
        }else{
            return $default;
        }
    }

}
