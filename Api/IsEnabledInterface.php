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
interface IsEnabledInterface
{
    /**
     * Return true if module is enabled
     * @return bool
     */
    public function execute(): bool;
}
