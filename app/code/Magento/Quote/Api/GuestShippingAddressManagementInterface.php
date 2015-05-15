<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Quote\Api;

/**
 * Shipping address management interface for guest carts.
 * @api
 */
interface GuestShippingAddressManagementInterface
{
    /**
     * Assigns a specified shipping address to a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param \Magento\Quote\Api\Data\AddressInterface $address The shipping address data.
     * @return int Address ID.
     * @throws \Magento\Framework\Exception\NoSuchEntityException The specified cart does not exist.
     * @throws \Magento\Framework\Exception\InputException The specified cart ID or address data is not valid.
     */
    public function assign($cartId, \Magento\Quote\Api\Data\AddressInterface $address);

    /**
     * Returns the shipping address for a specified quote.
     *
     * @param string $cartId The cart ID.
     * @return \Magento\Quote\Api\Data\AddressInterface Shipping address object.
     * @throws \Magento\Framework\Exception\NoSuchEntityException The specified cart does not exist.
     */
    public function get($cartId);
}
