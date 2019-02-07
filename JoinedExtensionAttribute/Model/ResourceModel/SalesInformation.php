<?php

namespace Magestudy\JoinedExtensionAttribute\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magestudy\JoinedExtensionAttribute\Api\Data\SalesInformationInterface;

class SalesInformation extends AbstractDb
{
    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init('sales_information', SalesInformationInterface::KEY_ID);
    }
}