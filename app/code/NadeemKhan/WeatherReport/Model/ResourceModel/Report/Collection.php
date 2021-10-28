<?php
declare(strict_types=1);

namespace NadeemKhan\WeatherReport\Model\ResourceModel\Report;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * @var string
     */
    protected $_idFieldName = 'report_id';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            \NadeemKhan\WeatherReport\Model\Report::class,
            \NadeemKhan\WeatherReport\Model\ResourceModel\Report::class
        );
    }
}

