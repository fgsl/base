<?php
/**
 * Expresso - a free and open software for enterprise group collaboration
 *
 * @author    Flávio Gomes da Silva Lisboa <flavio.lisboa@serpro.gov.br>
 * @link      https://gitlab.com/expresso_livre/expresso for the canonical source repository
 * @copyright Copyright (c) 2016 SERPRO (http://www.serpro.gov.br)
 * @license   https://www.gnu.org/licenses/agpl.txt GNU AFFERO GENERAL PUBLIC LICENSE
 */
namespace Expresso\Test\Base;

use Expresso\Base\Application;

/**
 * 
 * @package    Expresso
 * @subpackage Test
 */
class ApplicationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Base path of application
     * 
     * @var string
     */
    private static $basePath = NULL;

    /**
     * 
     * @param string $basePath
     */
    public static function setBasePath($basePath)
    {
        self::$basePath = $basePath;
    } 
    
    /**
     * ensures creation of container object
     */
    public function testSingleton()
    {
        $application = Application::getInstance();
        $this->assertEquals('Expresso\Base\Application',get_class($application));
    }
    
    /**
     * ensures that container is created with configuration injection
     */
    public function testInit()
    {
        $application = Application::init(self::$basePath . '/mock.config.php');
        $this->assertEquals('Expresso\Base\Application',get_class($application));
    }
}