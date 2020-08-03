<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
	public function run()
	{
		$data = [
			'email' => 'deneme@deneme.com',
			'password'    => '4badaee57fed5610012a296273158f5f'
		];

                // Using Query Builder
		$this->db->table('admin')->insert($data);
	}
}
