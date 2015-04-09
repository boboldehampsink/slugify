<?php

namespace Craft;

/**
 * Slugify Twig Extension.
 *
 * Twig extension to create slugs in twig.
 *
 * @author    Bob Olde Hampsink <b.oldehampsink@itmundi.nl>
 * @copyright Copyright (c) 2015, Bob Olde Hampsink
 * @license   MIT
 *
 * @link      http://github.com/boboldehampsink
 */
class SlugifyTwigExtension extends \Twig_Extension
{
    /**
     * Environment runtime.
     */
    protected $env;

    /**
     * Get extension name.
     *
     * @return string
     */
    public function getName()
    {
        return 'Slugify Twig Extension';
    }

    /**
     * Get extension filters.
     *
     * @return string
     */
    public function getFilters()
    {
        return array('slugify' => new \Twig_Filter_Method($this, 'slugify'));
    }

    /**
     * Get extension functions.
     *
     * @return string
     */
    public function getFunctions()
    {
        return array('slugify' => new \Twig_Function_Method($this, 'slugify'));
    }

    /**
     * Init runtime.
     *
     * @param \Twig_Environment $env
     */
    public function initRuntime(\Twig_Environment $env)
    {
        $this->env = $env;
    }

    /**
     * Slugify function.
     *
     * @param string $slug
     *
     * @return string
     */
    public function slugify($slug)
    {
        return ElementHelper::createSlug($slug);
    }
}
