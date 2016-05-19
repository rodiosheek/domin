<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Flats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->increments('flat_id');  //Автоикремент ИД
            $table->integer('flat_kind');   //Вид недвижимости=1-квартиры
            $table->integer('id');          //ИД
            $table->text('location');       //Нас.пункт
            $table->text('area');           //Р-н
            $table->text('street');         //Улица
            $table->text('landmark');       //Ориентир
            $table->text('build_type');     //Тип дома
            $table->integer('floor');       //Этаж
            $table->integer('floor_num');   //Этажность
            $table->integer('rooms');       //Кол. комнат
            $table->float('total_area');    //Обзая полщадь
            $table->float('living_area');   //Жилая площадь
            $table->float('kitchen_area');  //Кухня площадь
            $table->text('rooms_kind');     //Вид комнат
            $table->boolean('new_building');//Новострой
            $table->text('condition');      //Состояние
            $table->longText('description');//Описание
            $table->float('price');         //Цена
            $table->boolean('auction');     //Торг
            $table->text('filial');         //Филиал
            $table->text('images');         //Список фото
            $table->timestamp('created_at');//Дата создания
            $table->timestamp('updated_at');//Дата изманения
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
