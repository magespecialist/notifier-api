<?php
/**
 * Automatically created by MageSpecialist CodeMonkey
 * https://github.com/magespecialist/m2-MSP_CodeMonkey
 */

declare(strict_types=1);

namespace MSP\NotifierApi\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface ChannelInterface extends ExtensibleDataInterface
{
    const ID = 'channel_id';
    const NAME = 'name';
    const ADAPTER_CODE = 'adapter_code';
    const CODE = 'code';
    const ENABLED = 'enabled';
    const CONFIGURATION_JSON = 'configuration_json';

    /**
     * Get value for channel_id
     * @return int
     */
    public function getId();

    /**
     * Set value for channel_id
     * @param int $value
     * @return void
     */
    public function setId($value);

    /**
     * Get value for name
     * @return string
     */
    public function getName();

    /**
     * Set value for name
     * @param string $value
     * @return void
     */
    public function setName($value);

    /**
     * Get value for code
     * @return string
     */
    public function getCode();

    /**
     * Set value for code
     * @param string $value
     * @return void
     */
    public function setCode($value);

    /**
     * Get value for adapter_code
     * @return string
     */
    public function getAdapterCode();

    /**
     * Set value for adapter_code
     * @param string $value
     * @return void
     */
    public function setAdapterCode($value);

    /**
     * Get value for enabled
     * @return bool
     */
    public function getEnabled();

    /**
     * Set value for enabled
     * @param bool $value
     * @return void
     */
    public function setEnabled($value);

    /**
     * Get value for configuration_json
     * @return string
     */
    public function getConfigurationJson();

    /**
     * Set value for configuration_json
     * @param string $value
     * @return void
     */
    public function setConfigurationJson($value);

    /**
     * Retrieve existing extension attributes object or create a new one
     * @return \MSP\NotifierApi\Api\Data\ChannelExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object
     * @param \MSP\NotifierApi\Api\Data\ChannelExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \MSP\NotifierApi\Api\Data\ChannelExtensionInterface $extensionAttributes
    );
}
