<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi_detail extends Model
{
    use HasFactory;
    protected $table = "transaksi_detail";
    public $timestamps = false;

    public function transaksis(){
        return $this->belongsTo('App\Models\Transaksi');
    public function barangs(){
        return $this->belongsTo('App\Models\Barang');
}
