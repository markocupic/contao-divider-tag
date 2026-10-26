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

namespace Markocupic\ContaoDividerTag\Widget;

use Contao\Widget;

/**
 * Form field that renders a horizontal rule. It has no input, so there is nothing
 * to validate or submit.
 */
class FormDivider extends Widget
{
    protected $strTemplate = 'form_divider';

    protected $strPrefix = 'widget widget-divider';

    public function validate(): void
    {
    }

    public function generate(): string
    {
        return '<hr>';
    }
}
