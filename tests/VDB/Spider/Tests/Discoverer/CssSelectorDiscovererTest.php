<?php

/*
 * This file is part of the Spider package.
 *
 * (c) Matthijs van den Bos <matthijs@vandenbos.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace VDB\Spider\Tests\Discoverer;

use VDB\Spider\Discoverer\CssSelectorDiscoverer;

/**
 *
 */
class CssSelectorDiscovererTest extends DiscovererTestCase
{
    /**
     * @covers VDB\Spider\Discoverer\CssSelectorDiscoverer<extended>
     */
    public function testDiscover()
    {
        $discoverer = new CssSelectorDiscoverer("a");
        $this->executeDiscoverer($discoverer);
    }
}
