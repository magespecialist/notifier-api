<?php
/**
 * Copyright © MageSpecialist - Skeeller srl. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace MSP\NotifierApi\Api;

/**
 * Interface SendMessageInterface
 * @package MSP\NotifierApi\Api
 * @api
 */
interface SendMessageInterface
{
    /**
     * Send a message, return true, Exception on failure
     * @param string $channelCode
     * @param string $message
     * @return bool
     * @throws \InvalidArgumentException
     */
    public function execute(string $channelCode, string $message): bool;
}
