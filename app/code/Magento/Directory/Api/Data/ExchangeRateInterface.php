<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Directory\Api\Data;

/**
 * Exchange Rate interface.
 *
 * @api
 */
interface ExchangeRateInterface
{
    /**
     * Get the exchange rate for the associated currency and the store's base currency.
     *
     * @return float
     */
    public function getRate();

    /**
     * Set the exchange rate for the associated currency and the store's base currency.
     *
     * @param float $rate
     * @return $this
     */
    public function setRate($rate);

    /**
     * Get the currency code associated with the exchange rate.
     *
     * @return string
     */
    public function getCurrencyTo();

    /**
     * Set the currency code associated with the exchange rate.
     *
     * @param string $code
     * @return $this
     */
    public function setCurrencyTo($code);

    /**
     * Retrieve existing extension attributes object or create a new one.
     *
     * @return \Magento\Directory\Api\Data\ExchangeRateInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object.
     *
     * @param \Magento\Directory\Api\Data\ExchangeRateInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \Magento\Directory\Api\Data\ExchangeRateInterface $extensionAttributes
    );
}
