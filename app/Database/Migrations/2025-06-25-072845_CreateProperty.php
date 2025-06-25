<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProperty extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'           => ['type' => 'INT', 'auto_increment' => true],
            'name'         => ['type' => 'VARCHAR', 'constraint' => 255],
            'type'         => ['type' => 'VARCHAR', 'constraint' => 100],
            'price'        => ['type' => 'DECIMAL', 'constraint' => '10,2'],
            'area_sqft'    => ['type' => 'DECIMAL', 'constraint' => '10,2'],
            'address'      => ['type' => 'TEXT'],
            'description'  => ['type' => 'TEXT'],
            'image_path'   => ['type' => 'VARCHAR', 'constraint' => 255],
            'created_at'   => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('properties');
    }

    public function down()
    {
        $this->forge->dropTable('properties');
    }
}
