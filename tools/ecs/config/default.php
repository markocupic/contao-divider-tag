<?php

declare(strict_types=1);

use Contao\EasyCodingStandard\Fixer\CommentLengthFixer;
use Contao\EasyCodingStandard\Set\SetList;
use PhpCsFixer\Fixer\Comment\HeaderCommentFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Option;

return ECSConfig::configure()
    ->withSets([
        SetList::CONTAO,
        \Markocupic\EasyCodingStandard\Set\SetList::MARKOCUPIC,
    ])
    ->withPaths([
        __DIR__.'/../../../contao',
        __DIR__.'/../../../src',
        __DIR__.'/../../../tests',
    ])
    ->withSkip([
        '*/contao/dca/*',
        CommentLengthFixer::class => ['*.php'],
    ])
    ->withRootFiles()
    ->withParallel()
    ->withSpacing(Option::INDENTATION_SPACES, "\n")
    ->withConfiguredRule(HeaderCommentFixer::class, [
        'header' => "This file is part of Contao Divider Tag.\n\n(c) Marko Cupic <m.cupic@gmx.ch>\n(c) Stefan Schulz-Lauterbach <https://clickpress.de> (original author)\n@license LGPL-3.0-or-later\nFor the full copyright and license information,\nplease view the LICENSE file that was distributed with this source code.\n@link https://github.com/markocupic/contao-divider-tag",
    ])
    ->withCache(sys_get_temp_dir().'/ecs/markocupic/contao-divider-tag')
;
