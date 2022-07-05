<?php

namespace JMS\Serializer\Tests\Fixtures;

use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\ReadOnlyProperty;

/**
 */

/**
 * @AccessType("public_method")
 * @ReadOnlyProperty
 */
class ExcludePublicAccessor
{
    /**
     * @Exclude
     *
     * @var mixed
     */
    private $iShallNotBeAccessed;

    /**
     * @var int
     */
    private $id = 1;

    public function getId()
    {
        return $this->id;
    }
}
