<?php

/* /Applications/MAMP/htdocs/october-makerslab/themes/foundation-makerslab/pages/home.htm */
class __TwigTemplate_fc647ebdc36ed41aa121b684509cde500001513517c1aabedeeae7ba80c76d4c extends Twig_Template
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
        echo "<div class=\"small-12 columns text-center\">
    <img src=\"";
        // line 2
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/theme-preview.png");
        echo "\">
    <h1>Home</h1>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/october-makerslab/themes/foundation-makerslab/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* <div class="small-12 columns text-center">*/
/*     <img src="{{ 'assets/images/theme-preview.png'|theme }}">*/
/*     <h1>Home</h1>*/
/* </div>*/
