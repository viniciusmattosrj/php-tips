<?php

use Phinx\Migration\AbstractMigration;

class CreateUsers extends AbstractMigration
{
    public function up()
    {
        $tab = $this->table('users');
        $tab->addColumn('fist_name',     'string')
            ->addColumn('last_name',     'string')
            ->addColumn('genre',     'string', ['limit' => 10])
            ->addTimestamps()
            ->save();
    }

    public function down()
    {
        $this->dropTable('users');
    }
}
