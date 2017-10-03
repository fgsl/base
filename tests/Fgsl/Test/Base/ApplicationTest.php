<?php
/**
 * Base - a reduced framework base
 *
 * @author    Flávio Gomes da Silva Lisboa <flavio.lisboa@fgsl.eti.br>
 * @link      https://github.com/fgsl/base for the canonical source repository
 * @copyright Copyright (c) 2016 FGSL (http://www.fgsl.eti.br)
 * @license   https://www.gnu.org/licenses/agpl.txt GNU AFFERO GENERAL PUBLIC LICENSE
 */
namespace Fgsl\Test\Base;

use Fgsl\Base\Application;

/**
 * 
 * @package    Fgsl
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
        $this->assertEquals('Fgsl\Base\Application',get_class($application));
    }
    
    /**
     * ensures that container is created with configuration injection
     */
    public function testInit()
    {
        $application = Application::init(self::$basePath . '/mock.config.php');
        $this->assertEquals('Fgsl\Base\Application',get_class($application));
    }
}