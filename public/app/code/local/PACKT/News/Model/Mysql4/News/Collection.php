<?php

/**
 * PACKT News Collection Model specialized for MySQL4
 *
 * @category   PACKT
 * @package    PACKT_News
 * @author     Nurul Ferdous <ferdous@dynamicguy.com>
 */
class PACKT_News_Model_Mysql4_News_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{

    public function _construct()
    {
        parent::_construct();
        $this->_init('news/news');
    }

}