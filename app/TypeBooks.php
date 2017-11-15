<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeBooks extends Model
{
    protected $table = 'typebooks'; //กําหนดชือตารางให้ตรงกับฐานข้อมูล

    public function books() {
        return $this->hasMany(Books::class); //กําหนดความสัมพันธ์รูปแบบ One To Many ไปยังตาราง books
    }
}
