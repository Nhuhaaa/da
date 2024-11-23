<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('service', function (Blueprint $table) {
            $table->id(); // Cột id tự động tăng
            $table->string('service_name'); // Cột tên dịch vụ
            $table->text('description'); // Cột mô tả dịch vụ
            $table->decimal('price', 10, 2); // Cột giá dịch vụ, 10 số và 2 số thập phân
            $table->string('image'); // Cột đường dẫn hình ảnh
            $table->unsignedBigInteger('category_id_sv'); // Cột khóa ngoại từ bảng category_service

            // Thiết lập khóa ngoại cho category_id_sv
            $table->foreign('category_id_sv')->references('id')->on('category_service')->onDelete('cascade');

            $table->timestamps(); // Cột created_at và updated_at tự động
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service');
    }
};
