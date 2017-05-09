<?php
declare(strict_types=1);

namespace Awsm3\Yii2Repository\Helpers;

/**
 * Class ArrayHelper
 * @package Awsm3\Yii2Repository\Helpers
 */
class ArrayHelper
{
    /**
     * Расчёт глубины массива
     *
     * @param array $array
     * @param int $maxDepth
     * @return int
     */
    public static function depth(array $array, int $maxDepth = 1)
    {
        foreach ($array as $value) {
            if (is_array($value)) {
                $depth = static::depth($value) + 1;

                if ($depth > $maxDepth) {
                    $maxDepth = $depth;
                }
            }
        }

        return $maxDepth;
    }
}