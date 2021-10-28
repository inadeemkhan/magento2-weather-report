<?php
declare(strict_types=1);

namespace NadeemKhan\WeatherReport\Model\ResourceModel;

class Report extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('nadeemkhan_weatherreport_report', 'report_id');
    }
}

