<?php

namespace Tests\Unit;

use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductType;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_product()
    {
        $productType = ProductType::factory()->create();
        $brand = Brand::factory()->create();
        $category = ProductCategory::factory()->create();

        $productData = [
            'name' => 'Example Product',
            'product_type_id' => $productType->id,
            'brand_id' => $brand->id,
            'category_id' => $category->id,
            'price' => 99.99,
            'description' => 'Example description',
        ];

        $product = Product::create($productData);

        $this->assertDatabaseHas('products', $productData);
        $this->assertInstanceOf(Product::class, $product);
    }

    // Add other test methods for update, delete, and relationships.
}
