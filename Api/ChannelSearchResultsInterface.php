<?php
/**
 * Automatically created by MageSpecialist CodeMonkey
 * https://github.com/magespecialist/m2-MSP_CodeMonkey
 */

declare(strict_types=1);

namespace MSP\NotifierApi\Api;

interface ChannelSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{
    /**
     * Get an array of objects
     * @return \MSP\NotifierApi\Api\Data\ChannelInterface[]
     */
    public function getItems();

    /**
     * Set objects list
     * @param \MSP\NotifierApi\Api\Data\ChannelInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
