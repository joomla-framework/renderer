<?php

/**
 * @copyright  Copyright (C) 2005 - 2021 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla\Renderer\Tests\stubs;

use Joomla\Renderer\AbstractRenderer;

class TestAbstractRendererObject extends AbstractRenderer
{
    public function pathExists(string $path): bool
    {
        // TODO: Implement pathExists() method.
    }

    public function getRenderer()
    {
        // TODO: Implement getRenderer() method.
    }

    public function render(string $template, array $data = []): string
    {
        // TODO: Implement render() method.
    }
}
