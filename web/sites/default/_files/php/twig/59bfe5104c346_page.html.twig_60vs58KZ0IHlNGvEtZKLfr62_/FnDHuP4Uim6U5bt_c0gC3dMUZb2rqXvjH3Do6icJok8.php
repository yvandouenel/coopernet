<?php

/* themes/coopernet/less/templates/page.html.twig */
class __TwigTemplate_cede4954da5eee14531a96dd10a7026c807b6401918f7562be38b27a855376f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'topmenu' => array($this, 'block_topmenu'),
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'action_links' => array($this, 'block_action_links'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 59, "if" => 61, "block" => 62);
        $filters = array("clean_class" => 66, "t" => 103);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 't'),
                array()
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

        // line 59
        $context["container"] = (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 61
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()))) {
            // line 62
            echo "    ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 123
        echo "<div id=\"highlight-custom\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 127
        echo "            ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 128
            echo "                ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
            ";
        }
        // line 130
        echo "        </div>
    </div>
</div>


";
        // line 136
        if (((isset($context["is_front"]) ? $context["is_front"] : null) != true)) {
            // line 137
            echo "
    ";
            // line 138
            $this->displayBlock('main', $context, $blocks);
        }
        // line 200
        echo "<div id=\"div-news-home\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 204
        echo "            ";
        if ((isset($context["is_front"]) ? $context["is_front"] : null)) {
            // line 205
            echo "                <div class=\"col-md-12\">
                    <h2 id=\"news-coopernet-home\">Les news de coopernet ! </h2>
                </div>
            ";
        }
        // line 209
        echo "            ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "col_first", array())) {
            // line 210
            echo "                <div class=\"col-md-4\">
                    ";
            // line 211
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "col_first", array()), "html", null, true));
            echo "
                </div>
            ";
        }
        // line 214
        echo "            ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "col_second", array())) {
            // line 215
            echo "                <div class=\"col-md-4\">
                    ";
            // line 216
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "col_second", array()), "html", null, true));
            echo "
                </div>
            ";
        }
        // line 219
        echo "            ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "col_third", array())) {
            // line 220
            echo "                <div class=\"col-md-4\">
                    ";
            // line 221
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "col_third", array()), "html", null, true));
            echo "
                </div>
            ";
        }
        // line 224
        echo "            ";
        if ((isset($context["is_front"]) ? $context["is_front"] : null)) {
            // line 225
            echo "                <div class=\"col-md-12\">
                    <h3><a class=\"link-home-all-news\" href=\"/news\">Voir toutes les actualités</a></h3>
                </div>
            ";
        }
        // line 229
        echo "        </div>
    </div>
</div>

<div class=\"under-clients\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 237
        echo "            ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "clients", array())) {
            // line 238
            echo "                ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "clients", array()), "html", null, true));
            echo "
            ";
        }
        // line 240
        echo "        </div>
    </div>
</div>

";
        // line 244
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 245
            echo "    ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 62
    public function block_navbar($context, array $blocks = array())
    {
        // line 63
        echo "        ";
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 65
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 66
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())))) : ((isset($context["container"]) ? $context["container"] : null))));
        // line 68
        echo "        <div class=\"top-menu\">
            <div class=\"";
        // line 69
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo "\">
                ";
        // line 71
        echo "                ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topmenu", array())) {
            // line 72
            echo "                    ";
            $this->displayBlock('topmenu', $context, $blocks);
            // line 77
            echo "                ";
        }
        // line 78
        echo "            </div>
        </div>
        ";
        // line 81
        echo "        <div class=\"container\" id=\"container-headband\">
            ";
        // line 83
        echo "            ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 84
            echo "                ";
            $this->displayBlock('header', $context, $blocks);
            // line 91
            echo "            ";
        }
        // line 92
        echo "        </div>
        <div class=\"\">
            <header class=\"navbar container container-coopernet-top navbar-collapse\" id=\"navbar\" role=\"banner\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"navbar-header\">
                            ";
        // line 98
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
                            ";
        // line 100
        echo "                            ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 101
            echo "                                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                                        data-target=\"#navbar-collapse\">
                                    <span class=\"sr-only\">";
            // line 103
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Toggle navigation")));
            echo "</span>
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                </button>
                            ";
        }
        // line 109
        echo "                        </div>

                        ";
        // line 112
        echo "                        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 113
            echo "                            <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
                                ";
            // line 114
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()), "html", null, true));
            echo "
                            </div>
                        ";
        }
        // line 117
        echo "                    </div>
                </div>
            </header>
        </div>
    ";
    }

    // line 72
    public function block_topmenu($context, array $blocks = array())
    {
        // line 73
        echo "                        <div class=\"col-md-6 col-md-offset-6\" role=\"heading\">
                            ";
        // line 74
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topmenu", array()), "html", null, true));
        echo "
                        </div>
                    ";
    }

    // line 84
    public function block_header($context, array $blocks = array())
    {
        // line 85
        echo "                    <div class=\"row\">
                        <div class=\"col-sm-12\" role=\"heading\">
                            ";
        // line 87
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
                        </div>
                    </div>
                ";
    }

    // line 138
    public function block_main($context, array $blocks = array())
    {
        // line 139
        echo "        <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo " js-quickedit-main-content\">
            <div class=\"row\">
                ";
        // line 142
        echo "                ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 143
            echo "                    ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 148
            echo "                ";
        }
        // line 149
        echo "
                ";
        // line 151
        echo "                ";
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 152
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 153
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 154
(isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 155
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 157
        echo "                <section";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
        echo ">


                    ";
        // line 161
        echo "                    ";
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 162
            echo "                        ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 165
            echo "                    ";
        }
        // line 166
        echo "
                    ";
        // line 168
        echo "                    ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 169
            echo "                        ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 172
            echo "                    ";
        }
        // line 173
        echo "
                    ";
        // line 175
        echo "                    ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 176
            echo "                        ";
            $this->displayBlock('help', $context, $blocks);
            // line 179
            echo "                    ";
        }
        // line 180
        echo "
                    ";
        // line 182
        echo "                    ";
        $this->displayBlock('content', $context, $blocks);
        // line 186
        echo "                </section>

                ";
        // line 189
        echo "                ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 190
            echo "                    ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 195
            echo "                ";
        }
        // line 196
        echo "            </div>
        </div>
    ";
    }

    // line 143
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 144
        echo "                        <aside class=\"col-sm-3\" role=\"complementary\">
                            ";
        // line 145
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
        echo "
                        </aside>
                    ";
    }

    // line 162
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 163
        echo "                            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
        echo "
                        ";
    }

    // line 169
    public function block_action_links($context, array $blocks = array())
    {
        // line 170
        echo "                            <ul class=\"action-links\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
        echo "</ul>
                        ";
    }

    // line 176
    public function block_help($context, array $blocks = array())
    {
        // line 177
        echo "                            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
                        ";
    }

    // line 182
    public function block_content($context, array $blocks = array())
    {
        // line 183
        echo "                        <a id=\"main-content\"></a>
                        ";
        // line 184
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
                    ";
    }

    // line 190
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 191
        echo "                        <aside class=\"col-sm-3\" role=\"complementary\">
                            ";
        // line 192
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
        echo "
                        </aside>
                    ";
    }

    // line 245
    public function block_footer($context, array $blocks = array())
    {
        // line 246
        echo "        <div class=\"under-footer\">
            <footer class=\"footer ";
        // line 247
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo "\" role=\"contentinfo\">
                ";
        // line 248
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
            </footer>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/coopernet/less/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  473 => 248,  469 => 247,  466 => 246,  463 => 245,  456 => 192,  453 => 191,  450 => 190,  444 => 184,  441 => 183,  438 => 182,  431 => 177,  428 => 176,  421 => 170,  418 => 169,  411 => 163,  408 => 162,  401 => 145,  398 => 144,  395 => 143,  389 => 196,  386 => 195,  383 => 190,  380 => 189,  376 => 186,  373 => 182,  370 => 180,  367 => 179,  364 => 176,  361 => 175,  358 => 173,  355 => 172,  352 => 169,  349 => 168,  346 => 166,  343 => 165,  340 => 162,  337 => 161,  330 => 157,  328 => 155,  327 => 154,  326 => 153,  325 => 152,  323 => 151,  320 => 149,  317 => 148,  314 => 143,  311 => 142,  305 => 139,  302 => 138,  294 => 87,  290 => 85,  287 => 84,  280 => 74,  277 => 73,  274 => 72,  266 => 117,  260 => 114,  257 => 113,  254 => 112,  250 => 109,  241 => 103,  237 => 101,  234 => 100,  230 => 98,  222 => 92,  219 => 91,  216 => 84,  213 => 83,  210 => 81,  206 => 78,  203 => 77,  200 => 72,  197 => 71,  193 => 69,  190 => 68,  188 => 66,  187 => 65,  185 => 63,  182 => 62,  176 => 245,  174 => 244,  168 => 240,  162 => 238,  159 => 237,  150 => 229,  144 => 225,  141 => 224,  135 => 221,  132 => 220,  129 => 219,  123 => 216,  120 => 215,  117 => 214,  111 => 211,  108 => 210,  105 => 209,  99 => 205,  96 => 204,  91 => 200,  88 => 138,  85 => 137,  83 => 136,  76 => 130,  70 => 128,  67 => 127,  62 => 123,  58 => 62,  56 => 61,  54 => 59,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Navigation:
 * - breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title: The page title, for use in the actual content.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - messages: Status and error messages. Should be displayed prominently.
 * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - action_links: Actions local to the page, such as \"Add menu\" on the menu
 *   administration interface.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the navigation region.
 * - page.navigation_collapsible: Items for the navigation (collapsible) region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 *
 * @ingroup templates
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
{% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}
{# Navbar #}
{% if page.navigation or page.navigation_collapsible %}
    {% block navbar %}
        {% set navbar_classes = [
        'navbar',
        theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',
        theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : container,
        ] %}
        <div class=\"top-menu\">
            <div class=\"{{ container }}\">
                {# TopMenu #}
                {% if page.topmenu %}
                    {% block topmenu %}
                        <div class=\"col-md-6 col-md-offset-6\" role=\"heading\">
                            {{ page.topmenu }}
                        </div>
                    {% endblock %}
                {% endif %}
            </div>
        </div>
        {# Top Bar #}
        <div class=\"container\" id=\"container-headband\">
            {# Header #}
            {% if page.header %}
                {% block header %}
                    <div class=\"row\">
                        <div class=\"col-sm-12\" role=\"heading\">
                            {{ page.header }}
                        </div>
                    </div>
                {% endblock %}
            {% endif %}
        </div>
        <div class=\"\">
            <header class=\"navbar container container-coopernet-top navbar-collapse\" id=\"navbar\" role=\"banner\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"navbar-header\">
                            {{ page.navigation }}
                            {# .btn-navbar is used as the toggle for collapsed navbar content #}
                            {% if page.navigation_collapsible %}
                                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                                        data-target=\"#navbar-collapse\">
                                    <span class=\"sr-only\">{{ 'Toggle navigation'|t }}</span>
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                </button>
                            {% endif %}
                        </div>

                        {# Navigation (collapsible) #}
                        {% if page.navigation_collapsible %}
                            <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
                                {{ page.navigation_collapsible }}
                            </div>
                        {% endif %}
                    </div>
                </div>
            </header>
        </div>
    {% endblock %}
{% endif %}
<div id=\"highlight-custom\">
    <div class=\"container\">
        <div class=\"row\">
            {# Highlighted #}
            {% if page.highlighted %}
                {{ page.highlighted }}
            {% endif %}
        </div>
    </div>
</div>


{# Main #}
{% if is_front != true %}

    {% block main %}
        <div role=\"main\" class=\"main-container {{ container }} js-quickedit-main-content\">
            <div class=\"row\">
                {# Sidebar First #}
                {% if page.sidebar_first %}
                    {% block sidebar_first %}
                        <aside class=\"col-sm-3\" role=\"complementary\">
                            {{ page.sidebar_first }}
                        </aside>
                    {% endblock %}
                {% endif %}

                {# Content #}
                {% set content_classes = [
                page.sidebar_first and page.sidebar_second ? 'col-sm-6',
                page.sidebar_first and page.sidebar_second is empty ? 'col-sm-9',
                page.sidebar_second and page.sidebar_first is empty ? 'col-sm-9',
                page.sidebar_first is empty and page.sidebar_second is empty ? 'col-sm-12'
                ] %}
                <section{{ content_attributes.addClass(content_classes) }}>


                    {# Breadcrumbs #}
                    {% if breadcrumb %}
                        {% block breadcrumb %}
                            {{ breadcrumb }}
                        {% endblock %}
                    {% endif %}

                    {# Action Links #}
                    {% if action_links %}
                        {% block action_links %}
                            <ul class=\"action-links\">{{ action_links }}</ul>
                        {% endblock %}
                    {% endif %}

                    {# Help #}
                    {% if page.help %}
                        {% block help %}
                            {{ page.help }}
                        {% endblock %}
                    {% endif %}

                    {# Content #}
                    {% block content %}
                        <a id=\"main-content\"></a>
                        {{ page.content }}
                    {% endblock %}
                </section>

                {# Sidebar Second #}
                {% if page.sidebar_second %}
                    {% block sidebar_second %}
                        <aside class=\"col-sm-3\" role=\"complementary\">
                            {{ page.sidebar_second }}
                        </aside>
                    {% endblock %}
                {% endif %}
            </div>
        </div>
    {% endblock %}
{% endif %}
<div id=\"div-news-home\">
    <div class=\"container\">
        <div class=\"row\">
            {# Actualités #}
            {% if is_front %}
                <div class=\"col-md-12\">
                    <h2 id=\"news-coopernet-home\">Les news de coopernet ! </h2>
                </div>
            {% endif %}
            {% if page.col_first %}
                <div class=\"col-md-4\">
                    {{ page.col_first }}
                </div>
            {% endif %}
            {% if page.col_second %}
                <div class=\"col-md-4\">
                    {{ page.col_second }}
                </div>
            {% endif %}
            {% if page.col_third %}
                <div class=\"col-md-4\">
                    {{ page.col_third }}
                </div>
            {% endif %}
            {% if is_front %}
                <div class=\"col-md-12\">
                    <h3><a class=\"link-home-all-news\" href=\"/news\">Voir toutes les actualités</a></h3>
                </div>
            {% endif %}
        </div>
    </div>
</div>

<div class=\"under-clients\">
    <div class=\"container\">
        <div class=\"row\">
            {# clients #}
            {% if page.clients %}
                {{ page.clients }}
            {% endif %}
        </div>
    </div>
</div>

{% if page.footer %}
    {% block footer %}
        <div class=\"under-footer\">
            <footer class=\"footer {{ container }}\" role=\"contentinfo\">
                {{ page.footer }}
            </footer>
        </div>
    {% endblock %}
{% endif %}
";
    }
}
