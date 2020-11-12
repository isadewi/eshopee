<?php

namespace Database\Factories;

use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransaksiFactory extends Factory
{
   
    protected $model = Transaksi::class;

  
    public function definition()
    {
        return [
            'tanggal' =>$this->faker->dateTimeThisCentury()->format('Y-m-d'),
            'no_resi'=>$this->faker->numberBetween(1,1000),
        ];
    }
}
