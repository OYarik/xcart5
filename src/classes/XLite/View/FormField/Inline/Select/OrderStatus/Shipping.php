<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\View\FormField\Inline\Select\OrderStatus;

/**
 * Shipping order status
 */
class Shipping extends \XLite\View\FormField\Inline\Select\OrderStatus\AOrderStatus
{
    /**
     * Define form field
     *
     * @return string
     */
    protected function defineFieldClass()
    {
        return 'XLite\View\FormField\Select\OrderStatus\Shipping';
    }
}
