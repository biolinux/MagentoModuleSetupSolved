<?php
$installer = $this;
$installer->startSetup();
$table = $installer->getConnection()->newTable($installer->getTable('news/news'))
->addColumn('news_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
		'unsigned' => true,
		'nullable' => false,
		'primary'  => true,
		'identity' => true,
), 'News ID')
->addColumn('title', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
		'nullable' => false,
), 'News Title')
->addColumn('filename', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
		'nullable' => false,
), 'News Filename')
->addColumn('content', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
		'nullable' => true,
), 'News Content')
->addColumn('status', Varien_Db_Ddl_Table::TYPE_SMALLINT, null, array(
		'unsigned' => true,
), 'News Status')
->addColumn('created_time', Varien_Db_Ddl_Table::TYPE_DATETIME, null, array(
), 'News Created_Date')
->addColumn('update_time', Varien_Db_Ddl_Table::TYPE_DATETIME, null, array(
), 'News Upadate_Date')
->setComment('PACKT news/news entity table');
$installer->getConnection()->createTable($table);

$installer->endSetup();