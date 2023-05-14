<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProductTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'bigint', 'constraint' => 20, 'unsigned' => true, 'auto_increment' => true],
            'name' => ['type' => 'varchar', 'constraint' => 150],
            'price' => ['type' => 'bigint', 'constraint' => 20],
            'created_at'    => ['type' => 'DATETIME', 'null' => true],
            'updated_at'    => ['type' => 'DATETIME','null' => true]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('products');
    }

    public function down()
    {
        $this->forge->dropTable('products');
    }
}