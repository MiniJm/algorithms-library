<?php

declare(strict_types=1);

namespace Lz\AlgorithmsLibrary;

/**
 * 算法中心库
 */
class Centre
{
    /**
     * 计算两个参数运算
     * @param int $a
     * @param int $b
     * @return int
     */
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }

    /**
     * 计算两个参数运算
     * @param int $a
     * @param int $b
     * @return int
     */
    public function sub(int $a, int $b): int
    {
        return $a - $b;
    }
}