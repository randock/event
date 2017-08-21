<?php

declare(strict_types=1);

namespace Randock\Event;

use Randock\Event\Definition\DomainEvent;

/**
 * Class AbstractDomainEvent.
 */
abstract class AbstractDomainEvent implements DomainEvent
{
    /**
     * @var \DateTime
     */
    protected $occurredOn;

    /**
     * AbstractDomainEvent constructor.
     *
     * @param \DateTime|null $occuredOn
     */
    public function __construct(\DateTime $occuredOn = null)
    {
        $this->occurredOn = $occuredOn ?? new \DateTime();
    }

    /**
     * @return \DateTime
     */
    public function occurredOn(): \DateTime
    {
        return $this->occurredOn;
    }
}
