<?php

declare(strict_types=1);

namespace Randock\Event\Manager;

use Randock\Event\Definition\DomainEvent;

/**
 * Interface EventManagerInterface.
 */
interface EventManagerInterface
{
    /**
     * @param DomainEvent $event
     *
     * @return mixed
     */
    public function execute(DomainEvent $event);
}
