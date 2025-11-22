<?php

use App\Models\Company;
use App\Models\Generic;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Company::class)->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignIdFor(Generic::class)->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('name');
            $table->string('form')->nullable();
            $table->string('price')->nullable();
            $table->string('strength')->nullable();
            $table->string('packsize')->nullable();
            $table->unsignedInteger('order')->default(0);
            $table->index(['name', 'form', 'packsize']);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::dropIfExists('brands');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
};
