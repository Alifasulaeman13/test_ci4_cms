<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CMS extends Migration
{
    public function up()
    {
        // 1. User Table
        $this->forge->addField([
            'user_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('user_id', true);
        $this->forge->createTable('user');

        // 2. Product Table
        $this->forge->addField([
            'product_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'product_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'qty_in_stock' => [
                'type'       => 'INT',
                'constraint' => 11,
                'default'    => 0,
            ],
            'price' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
        ]);
        $this->forge->addKey('product_id', true);
        $this->forge->createTable('product');

        // 3. Transaction Table
        $this->forge->addField([
            'transaction_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'user_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'product_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'payment_method' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'qty' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
        ]);
        $this->forge->addKey('transaction_id', true);
        // Note: SQLite foreign keys require PRAGMA foreign_keys = ON;
        // In simple CMS we can just create the table.
        $this->forge->createTable('transaction');

        // Insert some dummy data for user
        $this->db->table('user')->insert([
            'name' => 'John Doe'
        ]);
    }

    public function down()
    {
        $this->forge->dropTable('transaction');
        $this->forge->dropTable('product');
        $this->forge->dropTable('user');
    }
}
