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

namespace Markocupic\ContaoDividerTag\Tests\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\DelegatingParser;
use Markocupic\ContaoDividerTag\ContaoManager\Plugin;
use Markocupic\ContaoDividerTag\MarkocupicContaoDividerTag;
use PHPUnit\Framework\TestCase;

class PluginTest extends TestCase
{
    public function testReturnsTheBundle(): void
    {
        $bundles = (new Plugin())->getBundles(new DelegatingParser());

        $this->assertCount(1, $bundles);
        $this->assertInstanceOf(BundleConfig::class, $bundles[0]);
        $this->assertSame(MarkocupicContaoDividerTag::class, $bundles[0]->getName());
        $this->assertSame([ContaoCoreBundle::class], $bundles[0]->getLoadAfter());
        $this->assertSame(['divider'], $bundles[0]->getReplace());
    }
}
