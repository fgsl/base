<?php
/**
 * Base - a reduced framework base
 *
 * @author    Flávio Gomes da Silva Lisboa <flavio.lisboa@fgsl.eti.br>
 * @link      https://github.com/fgsl/base for the canonical source repository
 * @copyright Copyright (c) 2016 FGSL (http://www.fgsl.eti.br)
 * @license   https://www.gnu.org/licenses/agpl.txt GNU AFFERO GENERAL PUBLIC LICENSE
 */
namespace Fgsl\Test;

/**
 * 
 * @package    Fgsl
 * @subpackage Test
 */
class TestSuite
{
    /**
     * run all tests
     */
    public static function main()
    {
        PHPUnit_TextUI_TestRunner::run(self::suite());
    }

    /**
     * 
     * @return \PHPUnit_Framework_TestSuite
     */
    public static function suite()
    {
        $suite = new \PHPUnit_Framework_TestSuite('Fgsl\Test\Base\ApplicationTest');
        \PHPUnit_TextUI_TestRunner::run($suite);

        return $suite;
    }   
}