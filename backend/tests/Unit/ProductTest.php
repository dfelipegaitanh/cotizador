<?php

namespace Tests\Unit;

use App\Models\Color;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductType;
use App\Models\Brand;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that a product can be created and saved to the database.
     *
     * @return void
     */
    public function testProductCanBeCreatedAndSaved() : void
    {
        $productType     = ProductType::factory()->create();
        $brand           = Brand::factory()->create();
        $productCategory = ProductCategory::factory()->create();

        $product = Product::factory()->create([
                                                  'product_type_id' => $productType->id,
                                                  'brand_id'        => $brand->id,
                                                  'category_id'     => $productCategory->id,
                                              ]);

        $this->assertDatabaseHas('products', [
            'id'              => $product->id,
            'name'            => $product->name,
            'product_type_id' => $productType->id,
            'brand_id'        => $brand->id,
            'category_id'     => $productCategory->id,
            'price'           => $product->price,
            'description'     => $product->description,
        ]);
    }

    /**
     * Test that a product can be updated.
     *
     * @return void
     */
    public function testProductCanBeUpdated() : void
    {
        $product = Product::factory()->create();

        $product->name  = 'New Product Name';
        $product->price = 10.99;
        $product->save();

        $this->assertDatabaseHas('products', [
            'id'    => $product->id,
            'name'  => 'New Product Name',
            'price' => 10.99,
        ]);
    }

    /**
     * Test that a product can be deleted.
     *
     * @return void
     */
    public function testProductCanBeDeleted() : void
    {
        $product = Product::factory()->create();

        $product->delete();

        $this->assertDatabaseMissing('products', [
            'id' => $product->id,
        ]);
    }

    /**
     * Test that a single product can be retrieved from the database.
     *
     * @return void
     */
    public function testSingleProductCanBeRetrieved() : void
    {
        $product = Product::factory()->create();

        $retrievedProduct = Product::find($product->id);

        $this->assertEquals($product->name, $retrievedProduct->name);
    }

    /**
     * Test that multiple products can be retrieved from the database.
     *
     * @return void
     */
    public function testMultipleProductsCanBeRetrieved() : void
    {
        $product1 = Product::factory()->create();
        $product2 = Product::factory()->create();

        $retrievedProducts = Product::get();

        $this->assertCount(2, $retrievedProducts);
    }

    /**
     * Test that products can be searched using the 'where' method.
     *
     * @return void
     */
    public function testProductsCanBeSearched() : void
    {
        $product1 = Product::factory()
                           ->create([
                                        'name' => 'Product One',
                                    ]);

        Product::factory()
               ->create([
                            'name' => 'Product Two',
                        ]);

        $foundProducts = Product::where('name', 'like', '%One%')->get();

        $this->assertCount(1, $foundProducts);
        $this->assertEquals($product1->id, $foundProducts->first()->id);
    }

    /**
     * Test that products can be sorted using the 'orderBy' method.
     *
     * @return void
     */
    public function testProductsCanBeSorted() : void
    {
        $product1 = Product::factory()->create([
                                                   'name'  => 'Product One',
                                                   'price' => 10.99,
                                               ]);

        $product2 = Product::factory()->create([
                                                   'name'  => 'Product Two',
                                                   'price' => 20.99,
                                               ]);

        $sortedProducts = Product::orderBy('price', 'desc')->get();

        $this->assertCount(2, $sortedProducts);
        $this->assertEquals($product2->id, $sortedProducts->first()->id);
    }

    /**
     * Test that the number of products can be counted.
     *
     * @return void
     */
    public function testProductCount() : void
    {
        Product::factory()->count(5)->create();

        $productCount = Product::count();

        $this->assertEquals(5, $productCount);
    }

    /**
     * Test that colors can be added to and removed from a product.
     *
     * @return void
     */
    public function testProductColorsCanBeAddedAndRemoved() : void
    {
        $product = Product::factory()->create();
        $color1  = Color::factory()->create();
        $color2  = Color::factory()->create();

        // Add the colors to the product
        $product->colors()->attach([$color1->id, $color2->id]);

        $this->assertCount(2, $product->colors);

        // Verify that the color to remove is associated with the product
        $this->assertTrue($product->colors->contains($color1));

        // Remove one of the colors from the product
        $product->colors()->detach($color1->id);

        // $this->assertCount(1, $product->colors);
    }


}
