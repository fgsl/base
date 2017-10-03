<?php
use Fgsl\Test\Base\ApplicationTest;
/**
 * Base - a reduced framework base
 *
 * @author    Flávio Gomes da Silva Lisboa <flavio.lisboa@fgsl.eti.br>
 * @link      https://github.com/fgsl/base for the canonical source repository
 * @copyright Copyright (c) 2016 FGSL (http://www.fgsl.eti.br)
 * @license   https://www.gnu.org/licenses/agpl.txt GNU AFFERO GENERAL PUBLIC LICENSE
 */
require __DIR__ . '/Psr4AutoloaderClass.php';
$psr4 = new \Psr4AutoloaderClass();
$psr4->addNamespace('Fgsl', __DIR__ . '/Fgsl');
$psr4->addNamespace('Fgsl', __DIR__ . '/../src/Fgsl');
$psr4->register();

ApplicationTest::setBasePath(__DIR__);