<?php

declare(strict_types=1);

/*
 * This file is part of Contao Divider Tag.
 *
 * (c) Marko Cupic <m.cupic@gmx.ch>
 * (c) Stefan Schulz-Lauterbach <https://clickpress.de> (original author)
 * @license LGPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/markocupic/contao-divider-tag
 */

namespace Markocupic\ContaoDividerTag\Tests;

use Markocupic\ContaoDividerTag\Controller\ContentElement\DividerController;
use Markocupic\ContaoDividerTag\MarkocupicContaoDividerTag;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class MarkocupicContaoDividerTagTest extends TestCase
{
    public function testRegistersTheContentElementController(): void
    {
        $container = new ContainerBuilder();
        $container->setParameter('kernel.environment', 'test');
        $container->setParameter('kernel.build_dir', sys_get_temp_dir());

        $bundle = new MarkocupicContaoDividerTag();
        $bundle->getContainerExtension()->load([], $container);

        $this->assertTrue($container->hasDefinition(DividerController::class));
        $this->assertSame(\dirname(__DIR__), $bundle->getPath());
    }
}
