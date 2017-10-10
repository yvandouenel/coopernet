<?php

/* themes/coopernet/less/templates/node--formation--full.html.twig */
class __TwigTemplate_fc0e627404f7acd59a4458cf1173156478da3eaf7a994bd6380b04687a47b87c extends Twig_Template
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
        $tags = array("set" => 68, "if" => 79, "trans" => 90);
        $filters = array("clean_class" => 69);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'trans'),
                array('clean_class'),
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

        // line 68
        $context["classes"] = array(0 => \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 69
(isset($context["node"]) ? $context["node"] : null), "bundle", array())), 1 => (($this->getAttribute(        // line 70
(isset($context["node"]) ? $context["node"] : null), "isPromoted", array(), "method")) ? ("is-promoted") : ("")), 2 => (($this->getAttribute(        // line 71
(isset($context["node"]) ? $context["node"] : null), "isSticky", array(), "method")) ? ("is-sticky") : ("")), 3 => (( !$this->getAttribute(        // line 72
(isset($context["node"]) ? $context["node"] : null), "isPublished", array(), "method")) ? ("is-unpublished") : ("")), 4 => ((        // line 73
(isset($context["view_mode"]) ? $context["view_mode"] : null)) ? (\Drupal\Component\Utility\Html::getClass((isset($context["view_mode"]) ? $context["view_mode"] : null))) : ("")), 5 => "clearfix");
        // line 76
        echo "<div>

    ";
        // line 78
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
    ";
        // line 79
        if ( !(isset($context["page"]) ? $context["page"] : null)) {
            // line 80
            echo "        <h2";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true));
            echo ">
            <a href=\"";
            // line 81
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</a>
        </h2>
    ";
        }
        // line 84
        echo "    ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "

    ";
        // line 86
        if ((isset($context["display_submitted"]) ? $context["display_submitted"] : null)) {
            // line 87
            echo "        <footer>
            ";
            // line 88
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["author_picture"]) ? $context["author_picture"] : null), "html", null, true));
            echo "
            <div";
            // line 89
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["author_attributes"]) ? $context["author_attributes"] : null), "addClass", array(0 => "author"), "method"), "html", null, true));
            echo ">
                ";
            // line 90
            echo t("Submitted by @author_name on @date", array("@author_name" => (isset($context["author_name"]) ? $context["author_name"] : null), "@date" => (isset($context["date"]) ? $context["date"] : null), ));
            // line 91
            echo "                ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["metadata"]) ? $context["metadata"] : null), "html", null, true));
            echo "
            </div>
        </footer>
    ";
        }
        // line 95
        echo "    <div class=\"row row-eq-height\">
        <div class=\"col-md-3\">
            <div class=\"panel panel-default\">
            <h3>Coût</h3>
            <p>";
        // line 99
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_training_price", array()), "html", null, true));
        echo "</p>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"panel panel-default\">
            <h3>Lieu</h3>
            <p>";
        // line 105
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_training_place", array()), "html", null, true));
        echo "</p>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"panel panel-default\">
                <h3>Prochaine session</h3>
                <p>";
        // line 111
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_training_next_session", array()), "html", null, true));
        echo "</p>
            </div>
        </div>
        <div class=\"col-md-2\">
            <div class=\"panel panel-default\">
                <h3>Durée</h3>
                <p>";
        // line 117
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_training_duration", array()), "html", null, true));
        echo "</p>
            </div>
        </div>
    </div>
    <div class=\"row row-two-cols\">
        <div class=\"col-md-7\">
            ";
        // line 123
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_training_summary", array()), "html", null, true));
        echo "
            ";
        // line 124
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "body", array()), "html", null, true));
        echo "

        </div>
        <div class=\"col-md-5\">
            <div class=\"contour-gris col-right formateur\">
                <h3>Formateur</h3>
                <h4><a href=\"/equipe/yvan-douenel\">Yvan Douënel</a></h4>
                <p class=\"clear-after\"><a href=\"/equipe/yvan-douenel\"><img id=\"img-formateur\" src=\"/themes/coopernet/less/images/yvan.jpg\"
                        alt=\"Yvan Douënel formateur web\"></a>Intervient depuis 2001 en entreprise et depuis 2009 au sein du
                    master II \"Communication et Technologie Numérique\" (Ecole des Mines / CELSA).</p>

            </div>
            <div class=\"contour-gris col-right\">
                <h3 class=\"icon-mail\">Contact</h3>

                <a style=\"font-size: 1.2em;\"
                   href=\"mailto:contact@coopernet.fr\">contact@coopernet.fr</a><br/>
                <a style=\"font-size: 1.4em;\" href=\"tel:0661464334\">06 61 46 43 34</a>
                <h4 class=\"h4-contact\">Formulaire </h4>
                <div class=\"form-contact-fields\">
                    ";
        // line 144
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_contact", array()), "html", null, true));
        echo "
                </div>
            </div>
        </div>
    </div>
    <div class=\"galerie-image\">
        ";
        // line 150
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_gallerie_images", array()), "html", null, true));
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/coopernet/less/templates/node--formation--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 150,  171 => 144,  148 => 124,  144 => 123,  135 => 117,  126 => 111,  117 => 105,  108 => 99,  102 => 95,  94 => 91,  92 => 90,  88 => 89,  84 => 88,  81 => 87,  79 => 86,  73 => 84,  65 => 81,  60 => 80,  58 => 79,  54 => 78,  50 => 76,  48 => 73,  47 => 72,  46 => 71,  45 => 70,  44 => 69,  43 => 68,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
     Only \"getter\" methods (method names starting with \"get\", \"has\", or \"is\")
     and a few common methods such as \"id\" and \"label\" are available. Calling
     other methods (such as node.delete) will result in an exception.
 * - label: The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: Themed creation date field.
 * - author_name: Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @ingroup templates
 *
 * @see template_preprocess_node()
 *
 * @todo Remove the id attribute (or make it a class), because if that gets
 *   rendered twice on a page this is invalid CSS for example: two lists
 *   in different view modes.
 */
#}
{% set classes = [
node.bundle|clean_class,
node.isPromoted() ? 'is-promoted',
node.isSticky() ? 'is-sticky',
not node.isPublished() ? 'is-unpublished',
view_mode ? view_mode|clean_class,
'clearfix',
] %}
<div>

    {{ title_prefix }}
    {% if not page %}
        <h2{{ title_attributes }}>
            <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
        </h2>
    {% endif %}
    {{ title_suffix }}

    {% if display_submitted %}
        <footer>
            {{ author_picture }}
            <div{{ author_attributes.addClass('author') }}>
                {% trans %}Submitted by {{ author_name }} on {{ date }}{% endtrans %}
                {{ metadata }}
            </div>
        </footer>
    {% endif %}
    <div class=\"row row-eq-height\">
        <div class=\"col-md-3\">
            <div class=\"panel panel-default\">
            <h3>Coût</h3>
            <p>{{ content.field_training_price }}</p>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"panel panel-default\">
            <h3>Lieu</h3>
            <p>{{ content.field_training_place }}</p>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"panel panel-default\">
                <h3>Prochaine session</h3>
                <p>{{ content.field_training_next_session }}</p>
            </div>
        </div>
        <div class=\"col-md-2\">
            <div class=\"panel panel-default\">
                <h3>Durée</h3>
                <p>{{ content.field_training_duration }}</p>
            </div>
        </div>
    </div>
    <div class=\"row row-two-cols\">
        <div class=\"col-md-7\">
            {{ content.field_training_summary }}
            {{ content.body }}

        </div>
        <div class=\"col-md-5\">
            <div class=\"contour-gris col-right formateur\">
                <h3>Formateur</h3>
                <h4><a href=\"/equipe/yvan-douenel\">Yvan Douënel</a></h4>
                <p class=\"clear-after\"><a href=\"/equipe/yvan-douenel\"><img id=\"img-formateur\" src=\"/themes/coopernet/less/images/yvan.jpg\"
                        alt=\"Yvan Douënel formateur web\"></a>Intervient depuis 2001 en entreprise et depuis 2009 au sein du
                    master II \"Communication et Technologie Numérique\" (Ecole des Mines / CELSA).</p>

            </div>
            <div class=\"contour-gris col-right\">
                <h3 class=\"icon-mail\">Contact</h3>

                <a style=\"font-size: 1.2em;\"
                   href=\"mailto:contact@coopernet.fr\">contact@coopernet.fr</a><br/>
                <a style=\"font-size: 1.4em;\" href=\"tel:0661464334\">06 61 46 43 34</a>
                <h4 class=\"h4-contact\">Formulaire </h4>
                <div class=\"form-contact-fields\">
                    {{ content.field_contact }}
                </div>
            </div>
        </div>
    </div>
    <div class=\"galerie-image\">
        {{ content.field_gallerie_images }}
    </div>
</div>
";
    }
}
