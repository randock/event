<?php

declare(strict_types=1);

namespace Randock\Event\Definition;

/**
 * Interface DomainEvent.
 */
interface DomainEvent
{
    /**
     * @return \DateTime
     */
    public function occurredOn(): \DateTime;
}
