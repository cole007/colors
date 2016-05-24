<?php
/**
 * Colors plugin for Craft CMS
 *
 * Colors Variable
 *
 * --snip--
 * Craft allows plugins to provide their own template variables, accessible from the {{ craft }} global variable
 * (e.g. {{ craft.pluginName }}).
 *
 * https://craftcms.com/docs/plugins/variables
 * --snip--
 *
 * @author    @cole007
 * @copyright Copyright (c) 2016 @cole007
 * @link      http://ournameismud.co.uk/
 * @package   Colors
 * @since     0.0.1
 */

namespace Craft;

class ColorsVariable
{
    /**
     * Whatever you want to output to a Twig tempate can go into a Variable method. You can have as many variable
     * functions as you want.  From any Twig template, call it like this:
     *
     *     {{ craft.colors.exampleVariable }}
     *
     * Or, if your variable requires input from Twig:
     *
     *     {{ craft.colors.exampleVariable(twigValue) }}
     */
    public function exampleVariable($optional = null)
    {
        return "And away we go to the Twig template...";
    }
}