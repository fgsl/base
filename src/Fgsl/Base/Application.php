<?php
/**
 * Base - a reduced framework base
 *
 * @author    Flávio Gomes da Silva Lisboa <flavio.lisboa@fgsl.eti.br>
 * @link      https://github.com/fgsl/base for the canonical source repository
 * @copyright Copyright (c) 2017 FGSL (http://www.fgsl.eti.br)
 * @license   https://www.gnu.org/licenses/agpl.txt GNU AFFERO GENERAL PUBLIC LICENSE
 */
namespace Fgsl\Base;

/**
 * 
 * @package    Fgsl
 * @subpackage Base
 */
class Application {
    /**
     *
     * @var array 
     */
    private static $config = array();
    
    /**
     *
     * @var Application
     */
    private static $instance;
    
    /**
     * Reads configuration from file
     * 
     * @param string $configFilePath
     */
    public static function init($configFilePath)
    {
        self::$config = require $configFilePath;
        return self::getInstance();
    }
    
    /**
     * Singleton pattern
     */
    private function __construct()
    {
        
    }
    
    /**
     * Singleton pattern
     * 
     * @return Application
     */
    public static function getInstance()
    {
        if (NULL == self::$instance){
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    /**
     * 
     */
    public function run()
    {
        throw new \Exception(__METHOD__ . ' must be implemented');
    }
}
