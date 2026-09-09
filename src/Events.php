<?php
/**
 * @copyright 2014-present Hostnet B.V.
 */
declare(strict_types=1);

namespace Hostnet\Component\EntityTracker;

final class Events
{
    //@codingStandardsIgnoreStart
    /**
     * @deprecated use Events::ENTITY_CHANGED instead.
     */
    const entityChanged = self::ENTITY_CHANGED;
    //@codingStandardsIgnoreEnd

    /**
     * Thrown when the Tracked attribute (or a derived attribute) is found on the entity
     *
     * @var string
     */
    public const ENTITY_CHANGED = 'entityChanged';
}
