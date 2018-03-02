<?php
/**
 * Copyright © MageSpecialist - Skeeller srl. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace MSP\NotifierApi\Api;

/**
 * Interface AdapterInterface
 * @package MSP\NotifierApi\Api
 * @api
 */
interface AdapterInterface
{
    /**
     * Get adapter code
     * @return string
     */
    public function getCode(): string;

    /**
     * Get adapter description
     * @return string
     */
    public function getDescription(): string;

    /**
     * Validate message without sending it. Return true on success, throws exception on failure.
     * @param string $message
     * @return bool
     * @throws \InvalidArgumentException
     */
    public function validateMessage(string $message): bool;

    /**
     * Validate message without sending it. Return true on success, throws exception on failure.
     * @param array $params
     * @return bool
     * @throws \InvalidArgumentException
     */
    public function validateParams(array $params = []): bool;

    /**
     * Send message to adapter. Return true on success, throws exception on failure.
     * @param string $message
     * @param array $params
     * @return bool
     * @throws \InvalidArgumentException
     */
    public function sendMessage(string $message, array $params = []): bool;
}
