<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExtraCode extends Model
{
    /** @use HasFactory<\Database\Factories\ExtraCodeFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'code_id',
    ];

    public function code()
    {
        return $this->belongsTo(Code::class);
    }

    public function childcodes()
    {
        return $this->belongsToMany(Code::class, 'code_extra_code', 'extra_code_id', 'code_id');
    }
}
