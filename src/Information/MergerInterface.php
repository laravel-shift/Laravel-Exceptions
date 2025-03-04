<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Exceptions.
 *
 * (c) Graham Campbell <hello@gjcampbell.co.uk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GrahamCampbell\Exceptions\Information;

use Throwable;

/**
 * This is the merger interface.
 *
 * @author Graham Campbell <hello@gjcampbell.co.uk>
 */
interface MergerInterface
{
    /**
     * Merge the exception information.
     *
     * @param array      $info
     * @param \Throwable $exception
     *
     * @return array
     */
    public function merge(array $info, Throwable $exception);
}
