<?php
declare(strict_types=1);

namespace NadeemKhan\WeatherReport\Api\Data;

interface ReportSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get Report list.
     * @return \NadeemKhan\WeatherReport\Api\Data\ReportInterface[]
     */
    public function getItems();

    /**
     * Set id list.
     * @param \NadeemKhan\WeatherReport\Api\Data\ReportInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

