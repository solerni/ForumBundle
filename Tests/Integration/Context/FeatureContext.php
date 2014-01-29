<?php

/*
 * This file is part of the Claroline Connect package.
 *
 * (c) Claroline Consortium <consortium@claroline.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Claroline\ForumBundle\Tests\Integration\Context;

use Claroline\CoreBundle\Tests\Integration\Context\FeatureContext as CoreContext;

/**
 * Feature context.
 */
class FeatureContext extends CoreContext
{
    /**
     * @Given /^I open resource "([^"]*)"$/
     */
    public function iOpenResource($name)
    {
        $script = "(function () { $('div.node-name:contains(\"{$name}\")').prev().click(); })();";
        $this->getSession()->evaluateScript($script);
        $this->getSession()->wait(500);
    }

    /**
     * @Given /^I create a resource of type "([^"]*)"$/
     */
    public function iCreateResourceOfType($type)
    {
        $script = "(function () { $('.resource-manager ul.create a:contains(\"$type\")').click(); })();";
        $this->getSession()->evaluateScript($script);
        $this->getSession()->wait(500);
    }

    /**
     * @Given /^I wait (\d+) second(?:|s)$/
     */
    public function iWaitSeconds($seconds)
    {
        $this->getSession()->wait(1000 * $seconds);
    }
}
