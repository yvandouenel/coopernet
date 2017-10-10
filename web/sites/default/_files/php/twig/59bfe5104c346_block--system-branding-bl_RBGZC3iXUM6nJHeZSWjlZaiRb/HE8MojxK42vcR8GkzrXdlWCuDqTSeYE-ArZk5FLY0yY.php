<?php

/* themes/coopernet/less/templates/block--system-branding-block.html.twig */
class __TwigTemplate_03fc8b5c902fcd07f49075c3ead58a64e2a8753063dc2426c33d61ea900ef02d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block--bare.html.twig", "themes/coopernet/less/templates/block--system-branding-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block--bare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 20);
        $filters = array("t" => 26);
        $functions = array("path" => 21);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array('path')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "    <div id=\"logo-and-baseline\">
        ";
        // line 20
        if ((isset($context["site_logo"]) ? $context["site_logo"] : null)) {
            // line 21
            echo "            <a class=\"logo navbar-btn\" href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
            echo "\" rel=\"home\">
                <img src=\"";
            // line 22
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_logo"]) ? $context["site_logo"] : null), "html", null, true));
            echo "\" alt=\"Logo coopernet - retour accueil\"/>
            </a>
        ";
        }
        // line 25
        echo "        ";
        if ((isset($context["site_name"]) ? $context["site_name"] : null)) {
            // line 26
            echo "            <a class=\"name navbar-brand\" href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\"
               rel=\"home\">";
            // line 27
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
            echo "</a>
        ";
        }
        // line 29
        echo "        ";
        if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
            // line 30
            echo "            <h1 id=\"baseline\"><span class=\"sr-only\">coopernet </span>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
            echo "</h1>
        ";
        }
        // line 32
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "themes/coopernet/less/templates/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 32,  89 => 30,  86 => 29,  81 => 27,  74 => 26,  71 => 25,  65 => 22,  60 => 21,  58 => 20,  55 => 19,  52 => 18,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"block--bare.html.twig\" %}
{#
/**
 * @file
 * Default theme implementation for a branding block.
 *
 * Each branding element variable (logo, name, slogan) is only available if
 * enabled in the block configuration.
 *
 * Available variables:
 * - site_logo: Logo for site as defined in Appearance or theme settings.
 * - site_name: Name for site as defined in Site information settings.
 * - site_slogan: Slogan for site as defined in Site information settings.
 *
 * @ingroup templates
 */
#}
{% block content %}
    <div id=\"logo-and-baseline\">
        {% if site_logo %}
            <a class=\"logo navbar-btn\" href=\"{{ path('<front>') }}\" rel=\"home\">
                <img src=\"{{ site_logo }}\" alt=\"Logo coopernet - retour accueil\"/>
            </a>
        {% endif %}
        {% if site_name %}
            <a class=\"name navbar-brand\" href=\"{{ path('<front>') }}\" title=\"{{ 'Home'|t }}\"
               rel=\"home\">{{ site_name }}</a>
        {% endif %}
        {% if site_slogan %}
            <h1 id=\"baseline\"><span class=\"sr-only\">coopernet </span>{{ site_slogan }}</h1>
        {% endif %}
    </div>
{% endblock %}
";
    }
}
