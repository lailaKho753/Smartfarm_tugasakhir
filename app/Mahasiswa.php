<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['nama','program_studi','tanggal_lahir','alamat', 'avatar','user_id'];

    public function getAvatar()
        {
            if(!$this->avatar){
                return asset('images/default.jpg');
        }
        return asset('images/' .$this->avatar);
    }

    public function matkul()
    {
        return $this->belongsToMany(Matkul::class);
    }
}
