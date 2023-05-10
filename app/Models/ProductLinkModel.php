<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductLinkModel extends Model
{
    use HasFactory;

    protected $table = 'product_checkout';
    protected $primaryKey = 'product_id';

    protected $fillable = [
        'product_name',
        'product_price',
        'product_quantity',
        'product_image_path',
        'checkout_free_option_label',
        'checkout_free_option_Value',
        'checkout_express_option_label',
        'checkout_express_option_value',
        'checkout_taxes_value',
        'checkout_language',
    ];
}
