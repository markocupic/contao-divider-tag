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

namespace Markocupic\ContaoDividerTag\Controller\ContentElement;

use Contao\ContentModel;
use Contao\CoreBundle\Controller\ContentElement\AbstractContentElementController;
use Contao\CoreBundle\DependencyInjection\Attribute\AsContentElement;
use Contao\CoreBundle\Twig\FragmentTemplate;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

#[AsContentElement(self::TYPE, category: 'texts')]
class DividerController extends AbstractContentElementController
{
    public const TYPE = 'divider';

    protected function getResponse(FragmentTemplate $template, ContentModel $model, Request $request): Response
    {
        return $template->getResponse();
    }
}
