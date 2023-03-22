<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //他のテーブルと relation させるためには，カラム名を「モデル名小文字_id」とする必要がある．
            $table->foreignId('team_id')->after('id')->nullable()->constrained()->cascadeOnDelete();
        });
        
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('original_id');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropForeign(['team_id']);
            $table->dropColumn(['team_id']);
        });
    }
};
