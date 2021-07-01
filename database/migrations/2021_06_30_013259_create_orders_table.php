<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable()->comment('會員ID');
            $table->string('order_no')->comment('訂單編號');
            $table->string('name')->comment('姓名');
            $table->string('phone')->comment('電話');
            $table->string('email')->comment('信箱');
            $table->string('county')->comment('縣市');
            $table->string('district')->comment('區域');
            $table->string('zipcode')->comment('郵遞區號');
            $table->string('address')->comment('地址');
            $table->integer('price')->comment('價格');
            $table->string('pay_type')->comment('付款方式');
            $table->integer('is_paid')->default(0)->comment('判斷是否付錢0or1');
            $table->string('shipping')->comment('運送方式');
            $table->integer('shipping_fee')->comment('運費');
            $table->integer('shipping_status_id')->comment('運送狀態ID');
            $table->integer('order_status_id')->comment('訂單狀態ID');
            $table->longText('remark')->nullable()->comment('備註');
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
        Schema::dropIfExists('orders');
    }
}
