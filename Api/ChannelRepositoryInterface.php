<?php
/**
 * Automatically created by MageSpecialist CodeMonkey
 * https://github.com/magespecialist/m2-MSP_CodeMonkey
 */

declare(strict_types=1);

namespace MSP\NotifierApi\Api;

/**
 * @SuppressWarnings(PHPMD.ShortVariable)
 */
interface ChannelRepositoryInterface
{
    /**
     * Save Channel
     * @param \MSP\NotifierApi\Api\Data\ChannelInterface $channel
     * @return int
     */
    public function save(\MSP\NotifierApi\Api\Data\ChannelInterface $channel): int;

    /**
     * Get Channel by id
     * @param int $channelIid
     * @return \MSP\NotifierApi\Api\Data\ChannelInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function get(int $channelIid): \MSP\NotifierApi\Api\Data\ChannelInterface;

    /**
     * Get Channel by code
     * @param string $code
     * @return \MSP\NotifierApi\Api\Data\ChannelInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getByCode(string $code): \MSP\NotifierApi\Api\Data\ChannelInterface;

    /**
     * Delete Channel
     * @param int $channelIid
     * @return void
     */
    public function deleteById(int $channelIid);

    /**
     * Get a list of Channel
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \MSP\NotifierApi\Api\ChannelSearchResultsInterface
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria = null
    ): \MSP\NotifierApi\Api\ChannelSearchResultsInterface;
}
