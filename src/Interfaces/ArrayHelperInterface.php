<?php
declare(strict_types=1);

namespace Awsm3\Yii2Repository\Interfaces;

/**
 * Interface ArrayHelperInterface
 * @package Awsm3\Yii2Repository\Interfaces
 */
interface ArrayHelperInterface
{
    /**
     * Calculate depth of array
     *
     * @param array $array
     * @param int $maxDepth
     * @return int
     */
    public static function depth(array $array, int $maxDepth = 1);
}