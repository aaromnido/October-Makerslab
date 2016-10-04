<?php

/* /Applications/MAMP/htdocs/october-makerslab/themes/foundation-makerslab/layouts/default.htm */
class __TwigTemplate_0cbc0cb5930e6dd6b499d172a92094f20634f427222dd04594552a9e509cb20d extends Twig_Template
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
        echo "<!doctype html>
<html class=\"no-js\" lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        ";
        // line 8
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 9
        echo "        <link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/app.css"));
        // line 11
        echo "\" rel=\"stylesheet\">
    </head>
    <body class=\"page-";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()), "html", null, true);
        echo "\">
    <div class=\"row\">
        <div class=\"large-12 columns\">

            ";
        // line 17
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 18
        echo "
            ";
        // line 19
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 20
        echo "
            ";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "        </div>
    </div>

        <script src=\"";
        // line 25
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/js/vendor/jquery.min.js", 1 => "assets/js/vendor/what-input.min.js", 2 => "assets/js/vendor/foundation.min.js", 3 => "@framework", 4 => "@framework.extras", 5 => "assets/js/app.js"));
        // line 33
        echo "\"></script>

        ";
        // line 35
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 36
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/october-makerslab/themes/foundation-makerslab/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 36,  75 => 35,  71 => 33,  69 => 25,  64 => 22,  60 => 21,  57 => 20,  55 => 19,  52 => 18,  48 => 17,  41 => 13,  37 => 11,  34 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }
}
/* <!doctype html>*/
/* <html class="no-js" lang="en">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="x-ua-compatible" content="ie=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <title>{{ this.page.title }}</title>*/
/*         {% styles %}*/
/*         <link href="{{ [*/
/*             'assets/css/app.css'*/
/*         ]|theme }}" rel="stylesheet">*/
/*     </head>*/
/*     <body class="page-{{ this.page.id }}">*/
/*     <div class="row">*/
/*         <div class="large-12 columns">*/
/* */
/*             {% partial 'header' %}*/
/* */
/*             {% page %}*/
/* */
/*             {% partial 'footer' %}*/
/*         </div>*/
/*     </div>*/
/* */
/*         <script src="{{ [*/
/*             'assets/js/vendor/jquery.min.js',*/
/*             'assets/js/vendor/what-input.min.js',*/
/*             'assets/js/vendor/foundation.min.js',*/
/* */
/*             '@framework',*/
/*             '@framework.extras',*/
/* */
/*             'assets/js/app.js']|theme }}"></script>*/
/* */
/*         {% scripts %}*/
/*     </body>*/
/* </html>*/
