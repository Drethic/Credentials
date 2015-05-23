<?php

/*
 * This file is part of Laravel Credentials.
 *
 * (c) Graham Campbell <graham@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GrahamCampbell\Credentials\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * This is the credentials facade class.
 *
 * @author Graham Campbell <graham@cachethq.io>
 */
class Differ extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'differ';
    }
}
