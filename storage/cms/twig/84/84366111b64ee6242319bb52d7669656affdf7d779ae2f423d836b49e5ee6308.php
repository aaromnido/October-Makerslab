<?php

/* /Applications/MAMP/htdocs/october-makerslab/themes/foundation-makerslab/partials/header.htm */
class __TwigTemplate_ed8be9a01261493092cae17994ba6c5be9559ac2250cf8f817dd60e8d18f7c71 extends Twig_Template
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
        echo "<header class=\"header\">

    <nav class=\"nav navbar-nav text-right\">
        <a href=\"";
        // line 4
        echo $this->env->getExtension('CMS')->pageFilter("inicio");
        echo "\" class=\"";
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "inicio")) {
            echo "active";
        }
        echo "\">Inicio</a> | 
        <a href=\"";
        // line 5
        echo $this->env->getExtension('CMS')->pageFilter("actividades");
        echo "\" class=\"";
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "actividades")) {
            echo "active";
        }
        echo "\">Actividades</a> | 
        <a href=\"";
        // line 6
        echo $this->env->getExtension('CMS')->pageFilter("somos");
        echo "\" class=\"";
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "somos")) {
            echo "active";
        }
        echo "\">Somos</a> | 
        <a href=\"";
        // line 7
        echo $this->env->getExtension('CMS')->pageFilter("donde-estamos");
        echo "\" class=\"";
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "donde-estamos")) {
            echo "active";
        }
        echo "\">Donde estamos</a>
    </nav>

    <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</h2>

    <hr>
</header>


<!--<img src=\"";
        // line 16
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/theme-preview.png");
        echo "\">-->";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/october-makerslab/themes/foundation-makerslab/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 16,  58 => 10,  48 => 7,  40 => 6,  32 => 5,  24 => 4,  19 => 1,);
    }
}
/* <header class="header">*/
/* */
/*     <nav class="nav navbar-nav text-right">*/
/*         <a href="{{ 'inicio'|page }}" class="{% if this.page.id == 'inicio' %}active{% endif %}">Inicio</a> | */
/*         <a href="{{ 'actividades'|page }}" class="{% if this.page.id == 'actividades' %}active{% endif %}">Actividades</a> | */
/*         <a href="{{ 'somos'|page }}" class="{% if this.page.id == 'somos' %}active{% endif %}">Somos</a> | */
/*         <a href="{{ 'donde-estamos'|page }}" class="{% if this.page.id == 'donde-estamos' %}active{% endif %}">Donde estamos</a>*/
/*     </nav>*/
/* */
/*     <h2>{{ this.page.title }}</h2>*/
/* */
/*     <hr>*/
/* </header>*/
/* */
/* */
/* <!--<img src="{{ 'assets/images/theme-preview.png'|theme }}">-->*/
