<?php

use Illuminate\Database\Seeder;

class Livros extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('livros')->insert([
            'titulo'=>'sql',
            'descricao' => 'curso pratico',
            'editoras_id' => 1,
            'created_at' => '2020-08-07 11:00:00',
            'updated_at' => '2020-08-07 11:00:00'
        ]);
        DB::table('livros')->insert([
            'titulo'=>'Introducao',
            'descricao' => 'ao MongoDB',
            'editoras_id' => 1,
            'created_at' => '2020-08-07 11:00:00',
            'updated_at' => '2020-08-07 11:00:00'
        ]);
        DB::table('livros')->insert([
            'titulo'=>'Big Data',
            'descricao' => 'No Trabalho',
            'editoras_id' => 1,
            'created_at' => '2020-08-07 11:00:00',
            'updated_at' => '2020-08-07 11:00:00'
        ]);
        DB::table('livros')->insert([
            'titulo'=>'big data',
            'descricao' => '5 valores',
            'editoras_id' => 1,
            'created_at' => '2020-08-07 11:00:00',
            'updated_at' => '2020-08-07 11:00:00'
        ]);        
    }
}
