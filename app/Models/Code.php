<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Code extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'category_id',
        'price_type',
        'price',
        'thickness_id',
        'pic',
        'sub_codes',
        'min_height',
        'max_height',
        'min_width',
        'max_width',
        'fixed_width',
        'fixed_height'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function thickness()
    {
        return $this->belongsTo(Thickness::class);
    }

    public function extraCodes()
    {
        return $this->hasMany(ExtraCode::class);
    }

    // ارتباط چند به چند با ExtraCode (فرزند)
    public function extraCodesChildren()
    {
        return $this->belongsToMany(ExtraCode::class, 'code_extra_code', 'code_id', 'extra_code_id');
    }
}
