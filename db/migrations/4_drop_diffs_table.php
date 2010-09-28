<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class DropDiffsTable extends Doctrine_Migration_Base
{
    public function up()
    {
		$this->dropTable('diffs');
    }

    public function down()
    {
		$this->createTable('diffs', array(
             'diff_id' => 
             array(
              'type' => 'integer',
              'primary' => true,
              'autoincrement' => true,
              'length' => 4,
             ),
             'userid' => 
             array(
              'type' => 'integer',
              'length' => 4,
             ),
             'text' => 
             array(
              'type' => 'string',
              'length' => 2147483647,
             ),
             'date' => 
             array(
              'type' => 'timestamp',
              'length' => 25,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'diff_id',
             ),
             ));
    }
}