<?php
/**
 * Genial Framework.
 *
 * @author    Nicholas English <https://github.com/Nenglish7>
 * @author    Genial Contributors <https://github.com/orgs/Genial-Framework/people>
 *
 * @link      <https://github.com/Genial-Framework/Core> For the canonical source repository.
 * @copyright Copyright (c) 2017-2018 Genial Framework. <https://github.com/Genial-Framework>
 * @license   <https://github.com/Genial-Framework/Core/blob/master/LICENSE> New BSD License.
 */

namespace Genial\Core\Configuration;

/**
 * ConfigurationInterface.
 */
interface ConfigurationInterface
{
    /**
     * Get and set the configuration.
     *
     * @throws BadFunctionCallException If the `env()` function does not exist.
     *
     * @return bool|true Returns true if the configuration was set correctly.
     */
    function __construct();
    /**
     * Run the configuration.
     *
     * @return bool|true Returns true if the configuration ran successfully.
     */
    public function run();
}
