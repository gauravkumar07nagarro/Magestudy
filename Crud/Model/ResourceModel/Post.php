<?php

namespace Magestudy\Crud\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magestudy\Crud\Model\Post as Model;

class Post extends AbstractDb
{
    const MAIN_TABLE = 'crud_post';

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(self::MAIN_TABLE, Model::ID);
    }
}