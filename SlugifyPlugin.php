<?php

namespace Craft;

/**
 * Slugify Plugin.
 *
 * Adds a slugify twig extension to create slugs in twig.
 *
 * @author    Bob Olde Hampsink <b.oldehampsink@itmundi.nl>
 * @copyright Copyright (c) 2015, Bob Olde Hampsink
 * @license   MIT
 *
 * @link      http://github.com/boboldehampsink
 */
class SlugifyPlugin extends BasePlugin
{
    /**
     * Get plugin name.
     *
     * @return string
     */
    public function getName()
    {
        return Craft::t('Slugify Twig Extension');
    }

    /**
     * Get plugin version.
     *
     * @return string
     */
    public function getVersion()
    {
        return '1.1';
    }

    /**
     * Get plugin developer.
     *
     * @return string
     */
    public function getDeveloper()
    {
        return 'Bob Olde Hampsink';
    }

    /**
     * Get plugin developer url.
     *
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'http://www.itmundi.nl';
    }

    /**
     * Import twig extension.
     *
     * @return SlugifyTwigExtension
     */
    public function addTwigExtension()
    {
        Craft::import('plugins.slugify.twigextensions.SlugifyTwigExtension');

        return new SlugifyTwigExtension();
    }
}
