<?php

namespace App\Services;

use App\Models\ClientData;

class ReadWriteService{

    /**
     * @return string
     */
    public function read(){
        return ClientData::first()['data'];
    }

    /**
     * @param string $text
     */
    public function write($text){
        ClientData::updateOrCreate(['id'=>1],['id'=>1,'data'=>$text]);
    }
}
