<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('users', function (Blueprint $table) {
          $table->id();
          $table->string('name');
          $table->string('email')->nullable();
          $table->string('phone')->nullable();
          $table->string('password');
          $table->string('remember_token')->nullable();
          $table->string('avatar')->default('/storage/uploads/profiles/user.png');
          $table->integer('sponsor')->default(0);
          $table->integer('position')->default(0);
          $table->string('leg')->nullable();
          $table->string('register_ip')->nullable();
          $table->string('login_ip')->nullable();
          $table->string('ref_link')->nullable();
          $table->string('shop_link')->nullable();
          $table->integer('A')->default(0);
          $table->integer('B')->default(0);
          $table->integer('C')->default(0);
          $table->integer('D')->default(0);
          $table->integer('E')->default(0);
          $table->integer('total_a')->default(0);
          $table->integer('total_b')->default(0);
          $table->integer('total_c')->default(0);
          $table->integer('total_d')->default(0);
          $table->integer('total_e')->default(0);
          $table->integer('paid_a')->default(0);
          $table->integer('paid_b')->default(0);
          $table->integer('total_sponsored')->default(0);
          $table->decimal('bv')->default(0);
          $table->decimal('pv')->default(0);
          $table->decimal('total_a_pv')->default(0);
          $table->decimal('total_b_pv')->default(0);
          $table->decimal('total_c_pv')->default(0);
          $table->decimal('total_d_pv')->default(0);
          $table->decimal('total_e_pv')->default(0);
          $table->decimal('total_a_bv')->default(0);
          $table->decimal('total_b_bv')->default(0);
          $table->decimal('total_c_bv')->default(0);
          $table->decimal('total_d_bv')->default(0);
          $table->decimal('total_e_bv')->default(0);
          $table->integer('total_a_sponsored')->default(0);
          $table->integer('total_b_sponsored')->default(0);
          $table->integer('total_c_sponsored')->default(0);
          $table->integer('total_d_sponsored')->default(0);
          $table->integer('total_e_sponsored')->default(0);
          $table->decimal('total_a_matching_income')->default(0);
          $table->decimal('total_b_matching_income')->default(0);
          $table->decimal('paid_a_matching_income')->default(0);
          $table->decimal('paid_b_matching_income')->default(0);
          $table->enum('status', ["pending","temporary","active","suspended"])->default('pending');
          $table->decimal('topup')->default(0);
          $table->integer('epin')->nullable();
          $table->integer('joining_product')->nullable();
          $table->timestamp('topup_date')->nullable();
          $table->enum('topup_option', ["topup","joining","donation"])->default('topup');
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
        Schema::dropIfExists('users');
    }
}
