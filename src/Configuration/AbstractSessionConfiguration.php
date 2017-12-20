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
 
namespace Genial\Configuration;

use Genial\Core\Exception;

/**
 * AbstractSessionConfiguration.
 */
abstract class AbstractSessionConfiguration implements ConfigurationInterface, SessionConfigurationInterface
{
    /**
     * @var array|[] $configuration The session configuration array. 
     */
    protected $configuration = [];
    /**
     * Get and set the configuration.
     *
     * @throws RuntimeException         If the `SYSTEM_ROOT` constant does not exist.
     * @throws BadFunctionCallException If the `env()` function does not exist.
     *
     * @return bool|true Returns true if the configuration was set correctly.
     */
    function __construct()
    {
        if (!defined('SYSTEM_ROOT'))
        {
            throw new Exception\RuntimeException(sprintf(
                '`%s` The `SYSTEM_ROOT` constant does not exist.',
                __METHOD__
            ));
        } 
        if (!function_exists('env'))
        {
            throw new Exception\BadFunctionCallException(sprintf(
                '`%s` The `env()` function does not exist.',
                __METHOD__
            ));
        }
        $this->configuration = env('session');
        return true;
    }
    /**
     * Run the configuration.
     *
     * @return bool|true Returns true if the configuration ran successfully.
     */
    public function run()
    {
        return true;
    }
 
}
