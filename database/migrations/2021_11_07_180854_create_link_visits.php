<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinkVisits extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('link_visits', function (Blueprint $table) {
      $table->id();
      $table->timestamp('created_at');
      // $table->timestamps();
      $table->unsignedBigInteger('link_id');
      $table->foreign('link_id')->references('id')->on('links');
      $table->unsignedBigInteger('ip_address_id');
      $table->foreign('ip_address_id')->references('id')->on('ip_addresses');
      $table->unsignedBigInteger('user_agent_id');
      $table->foreign('user_agent_id')->references('id')->on('user_agents');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('link_visits');
  }
}
