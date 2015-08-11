<?php
/**
 * Data Model implementing the Address interface
 *
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Directory\Model\Data;
use Magento\Directory\Api\Data\CurrencyInformationInterface;
use Magento\Directory\Api\Data\ExchangeRateInterface;

/**
 * Class Exchange Rate
 *
 * @codeCoverageIgnore
 */
class ExchangeRate extends \Magento\Framework\Api\AbstractExtensibleObject implements
    \Magento\Directory\Api\Data\ExchangeRateInterface
{
    const KEY_RATE = 'rate';
    const KEY_CURRENCY_TO = 'currency_to';

    /**
     * @inheritDoc
     */
    public function getRate()
    {
        return $this->_get(self::KEY_RATE);
    }

    /**
     * @inheritDoc
     */
    public function setRate($rate)
    {
        return $this->setData(self::KEY_RATE, $rate);
    }

    /**
     * @inheritDoc
     */
    public function getCurrencyTo()
    {
        return $this->_get(self::KEY_CURRENCY_TO);
    }

    /**
     * @inheritDoc
     */
    public function setCurrencyTo($code)
    {
        return $this->setData(self::KEY_CURRENCY_TO, $code);
    }

    /**
     * @inheritDoc
     */
    public function getExchangeRates()
    {
        return $this->_get(self::KEY_EXCHANGE_RATES);
    }

    /**
     * @inheritDoc
     */
    public function setExchangeRates(array $exchangeRates = null)
    {
        return $this->setData(self::KEY_EXCHANGE_RATES, $exchangeRates);
    }

    /**
     * @inheritDoc
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * @inheritDoc
     */
    public function setExtensionAttributes(
        \Magento\Directory\Api\Data\ExchangeRateInterface $extensionAttributes
    ) {
        return $this->_setExtensionAttributes($extensionAttributes);
    }
}
