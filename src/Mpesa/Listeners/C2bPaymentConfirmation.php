<?php
/**
 * Part of the Ignite Platform.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    pesa
 * @version    1.0.0
 * @author     Dervis Group  LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2018, Dervis Group LLC
 * @link       https://dervisgroup.com
 */

namespace DervisGroup\Pesa\Mpesa\Listeners;

use DervisGroup\Pesa\Mpesa\Database\Entities\MpesaStkRequest;
use DervisGroup\Pesa\Mpesa\Events\C2bConfirmationEvent;

/**
 * Class C2bPaymentConfirmation
 * @package DervisGroup\Pesa\Listeners
 */
class C2bPaymentConfirmation
{
    /**
     * Handle the event.
     *
     * @param C2bConfirmationEvent $event
     * @return void
     */
    public function handle(C2bConfirmationEvent $event)
    {
        $c2b = $event->transaction;
        //Try to check if this was from STK
        $request = MpesaStkRequest::whereReference($c2b->BillRefNumber)->first();
    }
}
