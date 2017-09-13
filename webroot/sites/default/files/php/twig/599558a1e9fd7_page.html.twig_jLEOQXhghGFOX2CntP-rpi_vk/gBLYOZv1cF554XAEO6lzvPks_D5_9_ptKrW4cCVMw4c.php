<?php

/* themes/custom/onboard_kick/templates/core/page.html.twig */
class __TwigTemplate_f9ace3aa3ec13b164c63301a8dddcf02fda35729f7b07cc22ac3551b572b4ec7 extends Twig_Template
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
        $tags = array("if" => 57);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
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

        // line 45
        echo "<div class=\"layout-container\">

  <header role=\"banner\">
    ";
        // line 48
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
  </header>

  ";
        // line 51
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
        echo "
  ";
        // line 52
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_menu", array()), "html", null, true));
        echo "

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 56
        echo "
    ";
        // line 57
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 58
            echo "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 59
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
      </aside>
    ";
        }
        // line 62
        echo "
    <div class=\"layout-content\">
        ";
        // line 64
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
    </div>";
        // line 66
        echo "
    ";
        // line 67
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 68
            echo "      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        ";
            // line 69
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
      </aside>
    ";
        }
        // line 72
        echo "
  </main>
  <footer role=\"contentinfo\">
      ";
        // line 75
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_service", array())) {
            // line 76
            echo "          ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_service", array()), "html", null, true));
            echo "
      ";
        }
        // line 78
        echo "
      ";
        // line 79
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_menu", array())) {
            // line 80
            echo "          ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_menu", array()), "html", null, true));
            echo "
      ";
        }
        // line 82
        echo "
      ";
        // line 83
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_copyright", array())) {
            // line 84
            echo "          ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_copyright", array()), "html", null, true));
            echo "
      ";
        }
        // line 86
        echo "  </footer>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/onboard_kick/templates/core/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 86,  129 => 84,  127 => 83,  124 => 82,  118 => 80,  116 => 79,  113 => 78,  107 => 76,  105 => 75,  100 => 72,  94 => 69,  91 => 68,  89 => 67,  86 => 66,  82 => 64,  78 => 62,  72 => 59,  69 => 58,  67 => 57,  64 => 56,  58 => 52,  54 => 51,  48 => 48,  43 => 45,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override to display a single page.
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
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
<div class=\"layout-container\">

  <header role=\"banner\">
    {{ page.header }}
  </header>

  {{ page.primary_menu }}
  {{ page.secondary_menu }}

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}

    {% if page.sidebar_first %}
      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        {{ page.sidebar_first }}
      </aside>
    {% endif %}

    <div class=\"layout-content\">
        {{ page.content }}
    </div>{# /.layout-content #}

    {% if page.sidebar_second %}
      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        {{ page.sidebar_second }}
      </aside>
    {% endif %}

  </main>
  <footer role=\"contentinfo\">
      {% if page.footer_service %}
          {{ page.footer_service }}
      {% endif %}

      {% if page.footer_menu %}
          {{ page.footer_menu }}
      {% endif %}

      {% if page.footer_copyright %}
          {{ page.footer_copyright }}
      {% endif %}
  </footer>
</div>{# /.layout-container #}
";
    }
}
