<?php

/* themes/coopernet/less/templates/menu--main.html.twig */
class __TwigTemplate_7dde64a0c90e4d71572eb289db886bd9208fbbf5fc260647af27a945c29c7380 extends Twig_Template
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
        $tags = array("import" => 27, "macro" => 34, "if" => 36, "for" => 42, "set" => 43);
        $filters = array();
        $functions = array("link" => 61);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'for', 'set'),
                array(),
                array('link')
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

        // line 18
        echo "    ";
        // line 19
        echo "<div class=\"navbar\">
    <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
        <div class=\"\">
            ";
        // line 27
        $context["menus"] = $this;
        // line 28
        echo "            ";
        // line 32
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), 0)));
        echo "

            ";
        // line 67
        echo "
        </div>
    </div>
</div>";
    }

    // line 34
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 35
            echo "            ";
            $context["menus"] = $this;
            // line 36
            echo "            ";
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 37
                echo "            ";
                if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                    // line 38
                    echo "            <ul class=\"nav navbar-nav menu\" role=\"menu\" aria-labelledby=\"dropdownMenu\">
                ";
                } else {
                    // line 40
                    echo "                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dLabel\">
                    ";
                }
                // line 42
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 43
                    echo "                        ";
                    $context["item_classes"] = array(0 => (($this->getAttribute(                    // line 44
$context["item"], "is_expanded", array())) ? ("expanded") : ("")), 1 => ((($this->getAttribute(                    // line 45
$context["item"], "is_expanded", array()) && ((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0))) ? ("dropdown") : ("")), 2 => (($this->getAttribute(                    // line 46
$context["item"], "in_active_trail", array())) ? ("active") : ("")));
                    // line 48
                    echo "                        ";
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 49
                        echo "                            ";
                        if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                            // line 50
                            echo "                                <li";
                            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => (isset($context["item_classes"]) ? $context["item_classes"] : null)), "method"), "html", null, true));
                            echo ">
                                    <a href=\"";
                            // line 51
                            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                            echo " <span class=\"caret\"></span></a>
                                    ";
                            // line 52
                            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), (isset($context["attributes"]) ? $context["attributes"] : null), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1))));
                            echo "
                                </li>
                            ";
                        } else {
                            // line 55
                            echo "                                <li class=\"dropdown-submenu\">
                                    <a href=\"";
                            // line 56
                            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                            echo "\">";
                            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                            echo "</a>
                                    ";
                            // line 57
                            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), (isset($context["attributes"]) ? $context["attributes"] : null), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1))));
                            echo "
                                </li>
                            ";
                        }
                        // line 60
                        echo "                        ";
                    } else {
                        // line 61
                        echo "                            <li ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true));
                        echo ">";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true));
                        echo "</li>
                        ";
                    }
                    // line 63
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "                </ul>
                ";
            }
            // line 66
            echo "                ";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/coopernet/less/templates/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 66,  169 => 64,  163 => 63,  155 => 61,  152 => 60,  146 => 57,  140 => 56,  137 => 55,  131 => 52,  125 => 51,  120 => 50,  117 => 49,  114 => 48,  112 => 46,  111 => 45,  110 => 44,  108 => 43,  103 => 42,  99 => 40,  95 => 38,  92 => 37,  89 => 36,  86 => 35,  72 => 34,  65 => 67,  59 => 32,  57 => 28,  55 => 27,  45 => 19,  43 => 18,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *
 * @ingroup templates
 */
#}
    {# All menu and submenu items #}
<div class=\"navbar\">
    <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
        <div class=\"\">
            {% import _self as menus %}
            {#
              We call a macro which calls itself to render the full tree.
              @see http://twig.sensiolabs.org/doc/tags/macro.html
            #}
            {{ menus.menu_links(items, attributes, 0) }}

            {% macro menu_links(items, attributes, menu_level) %}
            {% import _self as menus %}
            {% if items %}
            {% if menu_level == 0 %}
            <ul class=\"nav navbar-nav menu\" role=\"menu\" aria-labelledby=\"dropdownMenu\">
                {% else %}
                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dLabel\">
                    {% endif %}
                    {% for item in items %}
                        {% set item_classes = [
                        item.is_expanded? 'expanded',
                        item.is_expanded and menu_level == 0 ? 'dropdown',
                        item.in_active_trail ? 'active',
                        ] %}
                        {% if item.below %}
                            {% if menu_level == 0 %}
                                <li{{ item.attributes.addClass(item_classes) }}>
                                    <a href=\"{{ item.url }}\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ item.title }} <span class=\"caret\"></span></a>
                                    {{ menus.menu_links(item.below, attributes, menu_level + 1) }}
                                </li>
                            {% else %}
                                <li class=\"dropdown-submenu\">
                                    <a href=\"{{ item.url }}\">{{ item.title }}</a>
                                    {{ menus.menu_links(item.below, attributes, menu_level + 1) }}
                                </li>
                            {% endif %}
                        {% else %}
                            <li {{ item.attributes }}>{{ link(item.title, item.url) }}</li>
                        {% endif %}
                    {% endfor %}
                </ul>
                {% endif %}
                {% endmacro %}

        </div>
    </div>
</div>";
    }
}
