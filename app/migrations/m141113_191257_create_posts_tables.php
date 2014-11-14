<?php

class m141113_191257_create_posts_tables extends CDbMigration
{
	public function up()
	{
        
        $this->execute("CREATE TABLE IF NOT EXISTS `post` (
            `id` int(10) unsigned NOT NULL,
              `title` varchar(255) NOT NULL,
              `content` text NOT NULL
            ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;");
        
        $this->execute("CREATE TABLE IF NOT EXISTS `post_comments` (
            `id` int(10) unsigned NOT NULL,
              `user_id` int(10) unsigned NOT NULL,
              `post_id` int(10) unsigned NOT NULL,
              `content` text NOT NULL
            ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1");
	}

	public function down()
	{
		echo "m141113_191257_create_posts_and_users does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}