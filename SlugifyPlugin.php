<?php
namespace Craft;

class SlugifyPlugin extends BasePlugin
{
    public function getName()
    {
        return Craft::t('Slugify Twig Extension');
    }
    
    public function getVersion()
    {
        return '1.1';
    }
    
    public function getDeveloper()
    {
        return 'Bob Olde Hampsink';
    }
    
    public function getDeveloperUrl()
    {
        return 'http://www.itmundi.nl';
    }
    
    public function addTwigExtension()
    {
        Craft::import('plugins.slugify.twigextensions.SlugifyTwigExtension');
        
        return new SlugifyTwigExtension();
    }
}