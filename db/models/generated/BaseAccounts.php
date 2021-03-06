<?php
/**
 * BaseAccounts
 *
 * This class has been auto-generated by the Doctrine ORM Framework
 *
 * @property integer $userid
 * @property string $username
 * @property timestamp $created
 * @property string $password
 * @property string $email
 * @property string $pseudo
 * @property timestamp $login
 * @property timestamp $changed
 * @property integer $poll
 * @property string $group_bit
 * @property string $spec_message
 * @property string $grad_year
 * @property integer $edit_cols
 * @property integer $edit_rows
 * @property string $webview
 * @property string $notes_asc
 * @property string $user_type
 * @property integer $show_images
 * @property string $guest_password
 * @property integer $is_admin
 */
abstract class BaseAccounts extends Doctrine_Record {
    public function setTableDefinition() {
        $this->setTableName('accounts');
        $this->hasColumn('userid', 'integer', 2, array('type' => 'integer', 'length' => 2, 'unsigned' => 1, 'primary' => true, 'autoincrement' => true,));
        $this->hasColumn('username', 'string', 16, array('type' => 'string', 'length' => 16, 'fixed' => false, 'primary' => false, 'default' => '', 'notnull' => true, 'autoincrement' => false,));
        $this->hasColumn('created', 'timestamp', null, array('type' => 'timestamp', 'primary' => false, 'notnull' => false, 'autoincrement' => false,));
        $this->hasColumn('password', 'string', 128, array('type' => 'string', 'length' => 128, 'fixed' => false, 'primary' => false, 'notnull' => false, 'autoincrement' => false,));
        $this->hasColumn('email', 'string', 255, array('type' => 'string', 'length' => 255, 'fixed' => false, 'primary' => false, 'notnull' => false, 'autoincrement' => false,));
        $this->hasColumn('pseudo', 'string', 64, array('type' => 'string', 'length' => 64, 'fixed' => false, 'primary' => false, 'notnull' => false, 'autoincrement' => false,));
        $this->hasColumn('login', 'timestamp', null, array('type' => 'timestamp', 'primary' => false, 'notnull' => false, 'autoincrement' => false,));
        $this->hasColumn('changed', 'timestamp', null, array('type' => 'timestamp', 'primary' => false, 'notnull' => false, 'autoincrement' => false,));
        $this->hasColumn('poll', 'integer', 1, array('type' => 'integer', 'length' => 1, 'unsigned' => 1, 'primary' => false, 'notnull' => false, 'autoincrement' => false,));
        $this->hasColumn('group_bit', 'string', 1, array('type' => 'string', 'length' => 1, 'fixed' => true, 'primary' => false, 'notnull' => false, 'autoincrement' => false,));
        $this->hasColumn('spec_message', 'string', 255, array('type' => 'string', 'length' => 255, 'fixed' => false, 'primary' => false, 'notnull' => false, 'autoincrement' => false,));
        $this->hasColumn('grad_year', 'string', 4, array('type' => 'string', 'length' => 4, 'fixed' => false, 'primary' => false, 'notnull' => false, 'autoincrement' => false,));
        $this->hasColumn('edit_cols', 'integer', 1, array('type' => 'integer', 'length' => 1, 'unsigned' => 1, 'primary' => false, 'notnull' => false, 'autoincrement' => false,));
        $this->hasColumn('edit_rows', 'integer', 1, array('type' => 'integer', 'length' => 1, 'unsigned' => 1, 'primary' => false, 'notnull' => false, 'autoincrement' => false,));
        $this->hasColumn('webview', 'string', 1, array('type' => 'string', 'length' => 1, 'fixed' => true, 'primary' => false, 'default' => '0', 'notnull' => false, 'autoincrement' => false,));
        $this->hasColumn('notes_asc', 'string', 1, array('type' => 'string', 'length' => 1, 'fixed' => true, 'primary' => false, 'notnull' => false, 'autoincrement' => false,));
        $this->hasColumn('user_type', 'string', 128, array('type' => 'string', 'length' => 128, 'fixed' => false, 'primary' => false, 'notnull' => false, 'autoincrement' => false,));
        $this->hasColumn('show_images', 'integer', 1, array('type' => 'integer', 'length' => 1, 'unsigned' => 0, 'primary' => false, 'default' => '0', 'notnull' => true, 'autoincrement' => false,));
        $this->hasColumn('guest_password', 'string', 30, array('type' => 'string', 'length' => 30, 'fixed' => false, 'primary' => false, 'notnull' => false, 'autoincrement' => false,));
        $this->hasColumn('is_admin', 'integer', 1, array('type' => 'integer', 'length' => 1, 'unsigned' => 0, 'primary' => false, 'default' => '0', 'notnull' => false, 'autoincrement' => false,));
    }
}
