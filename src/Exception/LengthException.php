<?php
/**
 * Genial Framework.
 *
 * @author    Nicholas English <https://github.com/Nenglish7>
 * @author    Genial Contributors <https://github.com/orgs/Genial-Framework/people>
 *
 * @link      <https://github.com/Genial-Framework/Core> For the canonical source repository.
 *
 * @copyright Copyright (c) 2017-2018 Genial Framework. <https://github.com/Genial-Framework>
 * @license   <https://github.com/Genial-Framework/Core/blob/master/LICENSE> New BSD License.
 */

namespace Genial\Core;

/**
 * Utils.
 */
class LengthException
{
    /**
     * getCoreParams().
     *
     * Get the currently set cookie params.
     *
     * @return array Return the currently set cookie params.
     */
    public static function getCoreParams()
    {
        return session_get_cookie_params();
    }
}
