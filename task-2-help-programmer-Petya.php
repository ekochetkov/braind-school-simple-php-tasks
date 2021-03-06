<?php

namespace BraindSchool;

/**
 * Task2 Решение задания 2. Помочь программисту Пете победить эрроры и ворнинги
 */
class Task2
{
    
    /**
     * getMinPathFromPoint Получение минимального количества шагов к позиции (0, 0)
     *
     * @param  integer $f количество ерроров
     * @param  integer $w количество ворнингов
     * @param  array $map хранение минимального количества шагов к позиции (0, 0) из заданной координаты
     * @return integer
     */
    static function getMinPathFromPoint($f, $w, &$map)
    {

        if ($f == 0 && $w == 0) {
            $map[$f][$w] = 0;
            return 0;
        }

        if (empty($map[$f][$w])) {

            $map[$f][$w] = 'Processing';

            $steps = [];

            if ($w - 1 >= 0 && $w + 2 <= 1000)
                $steps[] = self::getMinPathFromPoint($f,   $w + 1, $map); // -1W => +2W

            if ($w - 2 >= 0 && $f + 1 <= 1000)
                $steps[] = self::getMinPathFromPoint($f + 1, $w - 2, $map); // -2W => +1F

            if ($f - 2 >= 0)
                $steps[] = self::getMinPathFromPoint($f - 2, $w,   $map);  // -2F => 0

            if (!empty($steps))
                $map[$f][$w] = min($steps) + 1;
            else
                $map[$f][$w] = PHP_INT_MAX;
        } elseif ($map[$f][$w] == 'Processing')
            return PHP_INT_MAX;

        return $map[$f][$w];
    }

    /**
     * minCommits Поиск минимального числа коммитов методом динамического программирования
     *
     * @param  integer $f количество ерроров
     * @param  integer $w количество ворнингов
     * @return integer
     */
    static function minCommits($f, $w)
    {

        ini_set('memory_limit', '-1');

        $map = [];

        self::getMinPathFromPoint($f, $w, $map);

        return $map[$f][$w] >= PHP_INT_MAX ? -1 : $map[$f][$w];
    }
    
    /**
     * minCommitsV2 Арифметический поиск минимального числа коммитов
     *
     * @param  integer $f количество ерроров
     * @param  integer $w количество ворнингов
     * @return integer
     */
    static function minCommitsV2($f, $w)
    {

        if ($w == 0) {

            if ($f == 0)
                return 0;

            if ($f % 2 == 1)
                return -1;
            else
                return $f / 2;
        }

        $count = 0;

        if ($w % 2 == 1) {
            $count++;
            $w += 1;
        }

        $count += $w / 2;

        $f = $f + $w / 2;

        $count += intval($f / 2);

        if ($f % 2 == 1)
            $count += 4;

        return $count;
    }
}
