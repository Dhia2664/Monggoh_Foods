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
        // Tabel Restaurants (Restoran)
        Schema::create('about_restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('address');
            $table->string('phone', 15);
            $table->string('logo')->nullable();
            $table->decimal('rating', 2, 1)->default(0);
            $table->timestamps();
        });

        // Tabel Menus (Menu Makanan/Minuman)
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('restaurant_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2);
            $table->string('image')->nullable();
            $table->boolean('is_available')->default(true);
            $table->timestamps();
        });

        // Tabel Orders (Pesanan)
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Customer ID
            $table->foreignId('restaurant_id')->constrained()->onDelete('cascade');
            $table->foreignId('driver_id')->nullable()->constrained('users')->onDelete('set null'); // Driver ID
            $table->string('order_number')->unique();
            $table->decimal('total_price', 10, 2);
            $table->enum('status', ['pending', 'on_delivery', 'canceled'])->default('pending');
            $table->timestamp('delivery_time')->nullable();
            $table->string('delivery_address');
            $table->timestamps();
        });

        // Tabel Order Details (Detail Item Pesanan)
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->onDelete('cascade');
            $table->foreignId('menu_id')->constrained()->onDelete('cascade');
            $table->integer('quantity');
            $table->decimal('price', 10, 2);
            $table->timestamps();
        });

        // Tabel Drivers (Pengemudi)
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('vehicle_type');
            $table->string('vehicle_number');
            $table->decimal('rating', 2, 1)->default(0);
            $table->timestamps();
        });

        // Tabel Payments (Pembayaran)
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->onDelete('cascade');
            $table->enum('method', ['cash_on_delivery', 'QRIS']);
            $table->decimal('amount', 10, 2);
            $table->string('status')->default('pending');
            $table->timestamp('paid_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
        Schema::dropIfExists('drivers');
        Schema::dropIfExists('order_details');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('menus');
        Schema::dropIfExists('restaurants');
    }
};
