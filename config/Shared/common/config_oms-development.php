<?php

use Spryker\Shared\DummyPayment\DummyPaymentConfig;
use Spryker\Shared\Kernel\KernelConstants;
use Spryker\Shared\Nopayment\NopaymentConfig;
use Spryker\Shared\Oms\OmsConstants;
use Spryker\Shared\Sales\SalesConstants;

// ----------------------------------------------------------------------------
// ------------------------------ OMS -----------------------------------------
// ----------------------------------------------------------------------------

$config[KernelConstants::DEPENDENCY_INJECTOR_YVES] = [
    'CheckoutPage' => [
        'DummyPayment',
        'Nopayment',
    ],
];
$config[KernelConstants::DEPENDENCY_INJECTOR_ZED] = [
    'Payment' => [
        'DummyPayment',
        'Nopayment',
    ],
    'Oms' => [
        'DummyPayment',
    ],
];

$config[OmsConstants::ACTIVE_PROCESSES] = array_merge([
    'DummyPayment01',
    'Nopayment01',
    // TODO-1: Add our newly created Order Management State Machine to the active processes
    // Hint-1: The name must match the file-name of the State Machine without file ending
], $config[OmsConstants::ACTIVE_PROCESSES]);

$config[SalesConstants::PAYMENT_METHOD_STATEMACHINE_MAPPING] = array_replace(
    $config[SalesConstants::PAYMENT_METHOD_STATEMACHINE_MAPPING],
    [
        // TODO-2: Replace the Order Management State Machine used for the invoice payment method with our newly created one
        // Hint-1: The key `DummyPaymentConfig::PAYMENT_METHOD_INVOICE` should contain a different string value after the change
        DummyPaymentConfig::PAYMENT_METHOD_INVOICE => 'DummyPayment01',
        DummyPaymentConfig::PAYMENT_METHOD_CREDIT_CARD => 'DummyPayment01',
        NopaymentConfig::PAYMENT_PROVIDER_NAME => 'Nopayment01',
    ],
);
