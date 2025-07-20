<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            
            $table->string('flat_id')->primary();                // Flat ID (e.g., F101-A)
            $table->string('tenant_name');                      // Tenant name
            $table->string('tenant_phone');                     // Tenant phone number
            $table->decimal('rent', 10, 2);                     // Monthly rent
            $table->decimal('other_charges', 10, 2)->default(0); // Extra costs like maintenance
            $table->string('description')->nullable();
            $table->timestamps();                               // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
