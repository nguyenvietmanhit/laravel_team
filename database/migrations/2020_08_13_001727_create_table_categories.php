<?php
//php artisan make:migration create_table_categories --create=categories
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCategories extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('categories', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('name', 255);
      $table->string('avatar', 255)->nullable()->default('')->comment('Tên danh mục');
      $table->tinyInteger('type')->default(0)->comment('Loại danh mục');
      $table->tinyInteger('status')->default(1)->comment('Trạng thái danh mục');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('categories');
  }
}
