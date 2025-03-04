<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{


    /**
     * Run the migrations.
     */
    //     public function up(): void
    //     {
    //         Schema::table('monster', function (Blueprint $table) {
    //             $table->integer('h');
    //         });
    //     }

    //     /**
    //      * Reverse the migrations.
    //      */
    //     public function down(): void
    //     {
    //         Schema::table('monster', function (Blueprint $table) {
    //             $table->dropColumn('h');
    //         });
    //     }
    // };
    public function up(): void
    {
        Schema::create('money', function (Blueprint $table) {
            $table->id(); // 自增主鍵
            $table->string('name'); // 狗的名字
            $table->integer('amount'); // 例如金額
            $table->timestamps(); // 自動管理 created_at 和 updated_at 欄位
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('money'); // 確保在回滾時刪除 'dogs' 資料表
    }
};