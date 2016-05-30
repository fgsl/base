<?php
/**
 * Expresso Base - a framework for groupware
 *
 * @author    Flávio Gomes da Silva Lisboa <flavio.lisboa@serpro.gov.br>
 * @link      https://git.serpro/27524001878/expresso-base for the canonical source repository
 * @copyright Copyright (c) 2016 SERPRO (http://www.serpro.gov.br)
 * @license   https://www.gnu.org/licenses/agpl.txt GNU AFFERO GENERAL PUBLIC LICENSE
 */
namespace Expresso\Base;

/**
 * 
 * @package    Expresso
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
