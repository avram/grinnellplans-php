<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseLocation extends Doctrine_Record {
    public function setTableDefinition() {
        $this->setTableName('location');
        $this->hasColumn('user_id', 'integer', 11, array('type' => 'integer', 'unsigned' => '1', 'primary' => true, 'length' => '11'));
        $this->hasColumn('country', 'string', 2, array('type' => 'string', 'length' => '2'));
        $this->hasColumn('region', 'string', 64, array('type' => 'string', 'length' => '64'));
        $this->hasColumn('city', 'string', 64, array('type' => 'string', 'length' => '64'));
        $this->hasColumn('latitude', 'string', 64, array('type' => 'string', 'length' => '64'));
        $this->hasColumn('longitude', 'string', 64, array('type' => 'string', 'length' => '64'));
    }
    public function setUp() {
        $this->hasMany('Accounts', array('local' => 'user_id', 'foreign' => 'userid'));
    }
}
