<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/magazine_lite/templates/node.html.twig */
class __TwigTemplate_a3da8553714b7d878019855df26da164 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'node_side' => [$this, 'block_node_side'],
            'header_top' => [$this, 'block_header_top'],
            'title_area' => [$this, 'block_title_area'],
            'meta_area' => [$this, 'block_meta_area'],
            'content' => [$this, 'block_content'],
            'content_bottom' => [$this, 'block_content_bottom'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 72
($context["node"] ?? null), "bundle", [], "any", false, false, true, 72), 72, $this->source))), 2 => ((twig_get_attribute($this->env, $this->source,         // line 73
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 73)) ? ("node--promoted") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,         // line 74
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 74)) ? ("node--sticky") : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,         // line 75
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 75)) ? ("node--unpublished") : ("")), 5 => ((        // line 76
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 76, $this->source)))) : ("")), 6 => "clearfix"];
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("classy/node"), "html", null, true);
        echo "
";
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("magazine_lite/node"), "html", null, true);
        echo "
<article";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 82), 82, $this->source), "html", null, true);
        echo ">
  <div class=\"node__container\">
    ";
        // line 84
        $this->displayBlock('node_side', $context, $blocks);
        // line 86
        echo "    <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__main-content", 1 => "clearfix"], "method", false, false, true, 86), 86, $this->source), "html", null, true);
        echo ">
      ";
        // line 87
        $this->displayBlock('header_top', $context, $blocks);
        // line 89
        echo "      <header class=\"node__header\">
        ";
        // line 90
        $this->displayBlock('title_area', $context, $blocks);
        // line 103
        echo "        ";
        $this->displayBlock('meta_area', $context, $blocks);
        // line 119
        echo "      </header>
      ";
        // line 120
        $this->displayBlock('content', $context, $blocks);
        // line 123
        echo "      ";
        $this->displayBlock('content_bottom', $context, $blocks);
        // line 125
        echo "    </div>
  </div>
</article>
";
    }

    // line 84
    public function block_node_side($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
        echo "    ";
    }

    // line 87
    public function block_header_top($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "      ";
    }

    // line 90
    public function block_title_area($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        echo "          ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 91, $this->source), "html", null, true);
        echo "
          ";
        // line 92
        if ( !($context["page"] ?? null)) {
            // line 93
            echo "            <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "node__title"], "method", false, false, true, 93), 93, $this->source), "html", null, true);
            echo ">
              <a href=\"";
            // line 94
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 94, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 94, $this->source), "html", null, true);
            echo "</a>
            </h2>
          ";
        } else {
            // line 97
            echo "            <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "node__title title sr-only"], "method", false, false, true, 97), 97, $this->source), "html", null, true);
            echo ">
              ";
            // line 98
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 98, $this->source), "html", null, true);
            echo "
            </h2>
          ";
        }
        // line 101
        echo "          ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 101, $this->source), "html", null, true);
        echo "
        ";
    }

    // line 103
    public function block_meta_area($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 104
        echo "          ";
        if (($context["display_submitted"] ?? null)) {
            // line 105
            echo "            <div class=\"node__meta\">
              ";
            // line 106
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 106, $this->source), "html", null, true);
            echo "
              <span";
            // line 107
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["author_attributes"] ?? null), "addClass", [0 => "node__submitted-info"], "method", false, false, true, 107), 107, $this->source), "html", null, true);
            echo ">
                ";
            // line 108
            echo t("<span class=\"node__submitted-info-text\">By</span> @author_name on 
                  <span class=\"node__submitted-date\">
                    @date
                  </span>", array("@author_name" =>             // line 109
($context["author_name"] ?? null), "@date" =>             // line 111
($context["date"] ?? null), ));
            // line 114
            echo "              </span>
              ";
            // line 115
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 115, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 118
        echo "        ";
    }

    // line 120
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 121
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 121, $this->source), "html", null, true);
        echo "
      ";
    }

    // line 123
    public function block_content_bottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 124
        echo "      ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/magazine_lite/templates/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 124,  204 => 123,  197 => 121,  193 => 120,  189 => 118,  183 => 115,  180 => 114,  178 => 111,  177 => 109,  173 => 108,  169 => 107,  165 => 106,  162 => 105,  159 => 104,  155 => 103,  148 => 101,  142 => 98,  137 => 97,  129 => 94,  124 => 93,  122 => 92,  117 => 91,  113 => 90,  109 => 88,  105 => 87,  101 => 85,  97 => 84,  90 => 125,  87 => 123,  85 => 120,  82 => 119,  79 => 103,  77 => 90,  74 => 89,  72 => 87,  67 => 86,  65 => 84,  60 => 82,  56 => 81,  52 => 80,  50 => 76,  49 => 75,  48 => 74,  47 => 73,  46 => 72,  45 => 70,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/magazine_lite/templates/node.html.twig", "C:\\xampp\\htdocs\\rafaelnieves\\themes\\contrib\\magazine_lite\\templates\\node.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 70, "block" => 84, "if" => 92, "trans" => 108);
        static $filters = array("clean_class" => 72, "escape" => 80);
        static $functions = array("attach_library" => 80);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'trans'],
                ['clean_class', 'escape'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
