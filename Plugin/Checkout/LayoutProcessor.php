<?php
/**
 * Created by Alexandr.
 * User: Alexandr
 * Date: 2020-08-05
 * Time: 15:45
 */

namespace LevelShoes\Test\Plugin\Checkout;

use Magento\Checkout\Block\Checkout\LayoutProcessor as Subject;

/**
 * Class LayoutProcessor
 * @package LevelShoes\Test\Plugin\Checkout
 */
class LayoutProcessor
{
    /**
     * @param Subject $subject
     * @param array $jsLayout
     *
     * @return array
     */
    public function afterProcess(
        Subject $subject,
        array $jsLayout
    ) {
        foreach (
            $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']
            ['children']['shippingAddress']['children']['shipping-address-fieldset']['children'] as &$children) {
            if (isset($children['label'])) {
                $children['label'] = strrev($children['label']);
            }
        }

        return $jsLayout;
    }
}
