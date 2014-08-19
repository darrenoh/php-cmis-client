<?php
namespace Dkd\PhpCmis\Data;

/**
 * This file is part of php-cmis-lib.
 *
 * (c) Sascha Egerer <sascha.egerer@dkd.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Dkd\PhpCmis\Enum\ChangeType;

/**
 * Basic change event.
 */
interface ChangeEventInfoInterface extends ExtensionsDataInterface
{
    /**
     * Returns when the change took place.
     *
     * @return \DateTime the timespamp of the change, not null
     */
    public function getChangeTime();

    /**
     * Returns the change event type.
     *
     * @return ChangeType the change event type, not null
     */
    public function getChangeType();
}