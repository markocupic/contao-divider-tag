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

namespace Markocupic\ContaoDividerTag\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Markocupic\ContaoDividerTag\MarkocupicContaoDividerTag;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(MarkocupicContaoDividerTag::class)
                ->setLoadAfter([ContaoCoreBundle::class])
                ->setReplace(['divider']),
        ];
    }
}
