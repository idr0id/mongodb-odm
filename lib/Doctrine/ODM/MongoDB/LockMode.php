<?php

namespace Doctrine\ODM\MongoDB;

/**
 * Contains all MongoDB ODM LockModes
 *
 * @since       1.0
 */
class LockMode
{
    const NONE = 0;
    const OPTIMISTIC = 1;
    const PESSIMISTIC_READ = 2;
    const PESSIMISTIC_WRITE = 4;

    final private function __construct() { }
}
