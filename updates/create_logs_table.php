<?php namespace Octobro\MailLog\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateLogsTable Migration
 */
class CreateLogsTable extends Migration
{
    public function up()
    {
        Schema::create('octobro_maillog_logs', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->text('to');
            $table->text('cc')->nullable();
            $table->text('bcc')->nullable();
            $table->string('subject')->nullable();
            $table->text('body')->nullable();
            $table->string('sender')->nullable();
            $table->string('reply_to')->nullable();
            $table->string('date')->nullable();
            $table->boolean('sent')->default(false);
            $table->string('hash')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('octobro_maillog_logs');
    }
}
