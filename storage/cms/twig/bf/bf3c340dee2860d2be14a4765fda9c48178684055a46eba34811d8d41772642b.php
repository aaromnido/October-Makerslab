<?php

/* /Applications/MAMP/htdocs/october-makerslab/themes/foundation-makerslab/layouts/fallback.htm */
class __TwigTemplate_48d5b3008d56812153a5f82953c424c979d56da8f59fcf4ffccc0104e7e09c7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo $this->env->getExtension('CMS')->pageFunction();
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/october-makerslab/themes/foundation-makerslab/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {% page %}*/
