<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BasePerms extends Doctrine_Record {
    public function setTableDefinition() {
        $this->setTableName('perms');
        $this->hasColumn('userid', 'integer', 2, array('type' => 'integer', 'unsigned' => '1', 'primary' => true, 'autoincrement' => true, 'length' => '2'));
        $this->hasColumn('status', 'string', 32, array('type' => 'string', 'length' => '32'));
    }
}
