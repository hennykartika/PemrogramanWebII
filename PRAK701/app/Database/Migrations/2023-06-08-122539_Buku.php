<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Buku extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'judul'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'penulis'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'penerbit'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'tahun_terbit'      => [
				'type'           => 'YEAR',
				'null'           => true,
			],
		]);

		$this->forge->addKey('id', TRUE);

		$this->forge->createTable('buku', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('buku');
    }
}