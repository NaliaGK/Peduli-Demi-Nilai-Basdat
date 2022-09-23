<?php


public function up()
{
    Schema::create('user', function (Blueprint $table) {
        $table->id('IdUser');
        $table->string('Nama');
        $table->integer('nomor_tlp');
        $table->string('alamat');
        $table->string('e-mail');
        $table->integer('NIK');
    })
}