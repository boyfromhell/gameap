<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDedicatedServersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dedicated_servers', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('enabled')->default(0);
            $table->string('name');
            $table->string('os')->default('linux');
            $table->string('location');
            $table->string('provider')->nullable();
            $table->text('ip');
            $table->string('ram')->nullable();
            $table->string('cpu')->nullable();
            $table->string('work_path');
            $table->string('steamcmd_path')->nullable();
            $table->string('gdaemon_host');
            $table->integer('gdaemon_port')->unsigned()->default(31717);
            $table->string('gdaemon_api_key');
            $table->char('gdaemon_api_token', 64)->nullable();
            $table->string('gdaemon_login')->nullable();
            $table->string('gdaemon_password')->nullable();
            $table->string('gdaemon_server_cert');
            $table->integer('client_certificate_id')->unsigned();
            $table->enum('prefer_install_method', ['auto', 'copy', 'download', 'script', 'steam', 'none'])->default('auto');
            $table->text('script_install')->nullable();
            $table->text('script_reinstall')->nullable();
            $table->text('script_update')->nullable();
            $table->text('script_start')->nullable();
            $table->text('script_pause')->nullable();
            $table->text('script_unpause')->nullable();
            $table->text('script_stop')->nullable();
            $table->text('script_kill')->nullable();
            $table->text('script_restart')->nullable();
            $table->text('script_status')->nullable();
            $table->text('script_stats')->nullable();
            $table->text('script_get_console')->nullable();
            $table->text('script_send_command')->nullable();
            $table->text('script_delete')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dedicated_servers');
    }
}
