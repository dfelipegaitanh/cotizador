<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\QuoteItem
 *
 * @property int $id
 * @property string $reference
 * @property string $price
 * @property int $quote_id
 * @property int $product_id
 * @property int $product_type_id
 * @property int $brand_id
 * @property int $color_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|QuoteItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QuoteItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QuoteItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|QuoteItem whereBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuoteItem whereColorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuoteItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuoteItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuoteItem wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuoteItem whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuoteItem whereProductTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuoteItem whereQuoteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuoteItem whereReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuoteItem whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class QuoteItem extends Model
{
    use HasFactory;
}
