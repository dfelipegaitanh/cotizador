<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\GeneralQuote
 *
 * @property int $id
 * @property string|null $total
 * @property int $quote_id
 * @property int $client_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralQuote newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralQuote newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralQuote query()
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralQuote whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralQuote whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralQuote whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralQuote whereQuoteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralQuote whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GeneralQuote whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class GeneralQuote extends Model
{
    use HasFactory;
}
