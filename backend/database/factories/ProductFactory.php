<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductType;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition() : array
    {
        $productType = ProductType::factory()->create();
        $brand       = Brand::factory()->create();
        $category    = ProductCategory::factory()->create();

        return [
            'name'            => $this->faker->unique()->word(),
            'product_type_id' => $productType->id,
            'brand_id'        => $brand->id,
            'category_id'     => $category->id,
            'price'           => $this->faker->randomFloat(2, 1, 1000),
            'description'     => $this->faker->sentence(),
        ];
    }

    /*
    public function configure(): self
    {
        return $this->afterMaking(function (Product $product) {
            if (!in_array($product->product_type_id, [1, 2, 3])) {
                throw new \InvalidArgumentException('Invalid product type ID.');
            }
        })->afterCreating(function (Product $product) {
            // Add any additional logic after product creation.
        });
    }
    */
    
}
