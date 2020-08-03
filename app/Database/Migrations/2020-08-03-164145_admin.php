<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admin extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'email'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '500',
				"null"			=> true,
			],
			'password' => [
				'type'           => 'VARCHAR',
				"constraint"	=> "500",
				'null'           => true,
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('admin');
	}

	public function down()
	{
		$this->forge->dropTable('admin');
	}
}
