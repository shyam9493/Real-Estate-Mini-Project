<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Bookings extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => ['type' => 'INT', 'auto_increment' => true],
            'property_id' => ['type' => 'INT', 'unsigned' => true],
            'name'        => ['type' => 'VARCHAR', 'constraint' => 255],
            'email'       => ['type' => 'VARCHAR', 'constraint' => 255],
            'phone'       => ['type' => 'VARCHAR', 'constraint' => 20],
            'datetime'    => ['type' => 'DATETIME'],
            'created_at'  => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('property_id', 'properties', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('bookings');
    }

    public function down()
    {
        $this->forge->dropTable('bookings');
    }
}
