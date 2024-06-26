<?php
declare(strict_types=1);

namespace Vindi\Payment\Api\Data;

/**
 * Interface VindiPlanInterface
 * @package Vindi\Payment\Api\Data

 */
interface VindiPlanInterface
{
    const ENTITY_ID             = 'entity_id';

    const VINDI_ID              = 'vindi_id';
    const NAME                  = 'name';
    const INTERVAL              = 'interval';
    const INTERVAL_COUNT        = 'interval_count';
    const BILLING_TRIGGER_TYPE  = 'billing_trigger_type';
    const BILLING_TRIGGER_DAY   = 'billing_trigger_day';
    const BILLING_CYCLES        = 'billing_cycles';
    const CODE                  = 'code';
    const DESCRIPTION           = 'description';
    const INSTALLMENTS          = 'installments';
    const INVOICE_SPLIT         = 'invoice_split';
    const STATUS                = 'status';
    const METADATA              = 'metadata';
    const DURATION = 'duration';
    const BILLING_TRIGGER_DAY_TYPE_ON_PERIOD = 'billing_trigger_day_type_on_period';
    const BILLING_TRIGGER_DAY_BASED_ON_PERIOD = 'billing_trigger_day_based_on_period';

    public function getId();
    public function setId($entityId);
    public function getVindiId();
    public function setVindiId($entityId);
    public function getName();
    public function setName($name);
    public function getInterval();
    public function setInterval($interval);
    public function getIntervalCount();
    public function setIntervalCount($intervalCount);
    public function getBillingTriggerType();
    public function setBillingTriggerType($billingTriggerType);
    public function getBillingTriggerDay();
    public function setBillingTriggerDay($billingTriggerDay);
    public function getBillingCycles();
    public function setBillingCycles($billingCycles);
    public function getCode();
    public function setCode($code);
    public function getDescription();
    public function setDescription($description);
    public function getInstallments();
    public function setInstallments($installments);
    public function getInvoiceSplit();
    public function setInvoiceSplit($invoiceSplit);
    public function getStatus();
    public function setStatus($status);
    public function getMetadata();
    public function setMetadata($metadata);

    public function getDuration();
    public function setDuration($duration);

    public function getBillingTriggerDayTypeOnPeriod();
    public function setBillingTriggerDayTypeOnPeriod($billingTriggerDayTypeOnPeriod);

    public function getBillingTriggerDayBasedOnPeriod();
    public function setBillingTriggerDayBasedOnPeriod($billingTriggerDayBasedOnPeriod);
}
