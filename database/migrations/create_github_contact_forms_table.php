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
        Schema::create('github_contact_forms', function (Blueprint $table) {
            $table->id();
            $table->string('VisitorName');
            $table->string('VisitorEmail');
            /*unique()はカラムに重複した値を入れないようにするオプション*/
            $table->text('QuestionOrOpinion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('github_contact_forms');
    }
};
