<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fee;

class Feestable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        
        $feesData = [
            ['class' => '1', 'status' => '0', 'amount' => 100],
            ['class' => '2', 'status' => '0', 'amount' => 100],
            ['class' => '3', 'status' => '0', 'amount' => 100],
            ['class' => '4', 'status' => '0', 'amount' => 100],
            ['class' => '5', 'status' => '1', 'amount' => 100],
            ['class' => '6', 'status' => '1', 'amount' => 100],
            ['class' => '7', 'status' => '1', 'amount' => 100],
            ['class' => '8', 'status' => '1', 'amount' => 100],
            ['class' => '9', 'status' => '1', 'amount' => 100],
            ['class' => '10', 'status' => '1', 'amount' => 100],
            ['class' => '11', 'status' => '1', 'amount' => 100],
            ['class' => '12', 'status' => '1', 'amount' => 100],
            ['class' => 'others', 'status' => '1', 'amount' => 100],
            // Add more records as needed
        ];
        
        // Insert the data into the 'fees' table
        foreach ($feesData as $fee) {
            Fee::create($fee);
        }
    }
}
