<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralQuotesTable extends Migration
{
    public function up()
    {
        Schema::create('general_quotes', function (Blueprint $table) {
            $table->id();
            $table->decimal('total', 10, 2)->nullable();

            $table->foreignId('quote_id')->constrained()->onDelete('cascade');
            $table->foreignId('client_id')->constrained()->onDelete('cascade');

            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('general_quotes');
    }
}
