<?php

class Migration_Create_users_table extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'user_id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
				),
			'username' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
				),
			'password' => array(
				'type' => 'VARCHAR',
				'constraint' => '128',
				),
			'email' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
				),
			'status' => array(
				'type' => 'INT',
				'constraint' => 2,
				),
			'verify' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
				),
			));
		$this->dbforge->add_key('user_id',TRUE);
		$this->dbforge->create_table('users');
	}

	public function down()
	{
		$this->dbforge->drop_table('users');
	}
}