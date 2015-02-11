<?php
namespace Craft;

class SlugifyTwigExtension extends \Twig_Extension
{
    protected $env;

    public function getName()
    {
        return 'Slugify Twig Extension';
    }

    public function getFilters()
    {
        return array('slugify' => new \Twig_Filter_Method($this, 'slugify'));
    }

    public function getFunctions()
    {
        return array('slugify' => new \Twig_Function_Method($this, 'slugify'));
    }

    public function initRuntime(\Twig_Environment $env)
    {
        $this->env = $env;
    }

    public function slugify($slug)
    {
        return ElementHelper::createSlug($slug);
    }
}
