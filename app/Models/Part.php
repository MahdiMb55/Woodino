<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Part extends Model

{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'height',
        'width',
        'count',
        'thickness_id',
        'description',
        'price_per_unit',
        'total_price',
        'square_meter',
        'category_id',
        'code_id',
        'uploaded_file',
        'pakh_type',
        'price_type',
    ];

    public function thickness()
    {
        return $this->belongsTo(Thickness::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function code()
    {
        return $this->belongsTo(Code::class);
    }
}
