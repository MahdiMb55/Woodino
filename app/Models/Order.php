<?php

use App\Models\Color;
use App\Models\Edge;
use App\Models\Thickness;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'order_date',
        'customer_id',
        'delivery_date',
        'color_id',
        'model_id',
        'description',
        'thickness_id',
        'employer_id',
        'edge_model_id',
        'is_kasri',
        'main_order_id',
        'status'
    ];

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function employer()
    {
        return $this->belongsTo(User::class, 'employer_id');
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function model()
    {
        // return $this->belongsTo(ProductModel::class, 'model_id');
    }

    public function thickness()
    {
        return $this->belongsTo(Thickness::class);
    }

    public function edgeModel()
    {
        return $this->belongsTo(Edge::class, 'edge_model_id');
    }

    public function mainOrder()
    {
        return $this->belongsTo(Order::class, 'main_order_id');
    }
}
