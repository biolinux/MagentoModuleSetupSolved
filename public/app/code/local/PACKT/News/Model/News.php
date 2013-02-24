<?php

/**
 * PACKT News Model
 *
 * @category   PACKT
 * @package    PACKT_News
 * @author     Nurul Ferdous <ferdous@dynamicguy.com>
 */
class PACKT_News_Model_News extends Mage_Core_Model_Abstract
{

    public function _construct()
    {
        parent::_construct();
        $this->_init('news/news');
    }

}