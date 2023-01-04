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

/* themes/contrib/magazine_lite/templates/page.html.twig */
class __TwigTemplate_aae872fd78500b5f05043d504eaa3966 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideout", [], "any", false, false, true, 77)) {
            // line 78
            echo "  ";
            // line 79
            echo "  <div class=\"clearfix slideout ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slideout_background_color"] ?? null), 79, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["slideout_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["slideout_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
    ";
            // line 81
            echo "    <div class=\"clearfix slideout__container\">
      <div class=\"slideout__section\">
        ";
            // line 83
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideout", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
            echo "
      </div>
    </div>
    ";
            // line 87
            echo "  </div>
  ";
            // line 89
            echo "
  ";
            // line 91
            echo "  <button class=\"slideout-toggle slideout-toggle--fixed\"><i class=\"fa fa-align-justify\"></i></button>
  ";
        }
        // line 94
        echo "
";
        // line 96
        echo "<div class=\"page-container\">

  ";
        // line 98
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_header", [], "any", false, false, true, 98)) {
            // line 99
            echo "    ";
            // line 100
            echo "    <div class=\"clearfix pre-header ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pre_header_background_color"] ?? null), 100, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pre_header_separator"] ?? null), 100, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["pre_header_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["pre_header_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 101
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pre_header_layout_container"] ?? null), 101, $this->source), "html", null, true);
            echo "\">
        ";
            // line 103
            echo "        <div class=\"clearfix pre-header__container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix pre-header__section\">
                ";
            // line 107
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_header", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 113
            echo "      </div>
    </div>
    ";
            // line 116
            echo "  ";
        }
        // line 117
        echo "
  ";
        // line 118
        if (((((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 118) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 118)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 118)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 118)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 118)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 118)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 118))) {
            // line 119
            echo "    ";
            // line 120
            echo "    <div class=\"header-container\">

      ";
            // line 122
            if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 122) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 122))) {
                // line 123
                echo "        ";
                // line 124
                echo "        <div class=\"clearfix header-top-highlighted ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_background_color"] ?? null), 124, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 125
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_layout_container"] ?? null), 125, $this->source), "html", null, true);
                echo "\">
            ";
                // line 127
                echo "            <div class=\"clearfix header-top-highlighted__container";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["header_top_highlighted_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                echo "\"
              ";
                // line 128
                if ((($context["header_top_highlighted_animations"] ?? null) == "enabled")) {
                    // line 129
                    echo "                data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_animation_effect"] ?? null), 129, $this->source), "html", null, true);
                    echo "\"
              ";
                }
                // line 130
                echo ">
              <div class=\"row\">
                ";
                // line 132
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 132)) {
                    // line 133
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_first_grid_class"] ?? null), 133, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 135
                    echo "                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-first\">
                      ";
                    // line 136
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_first", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 139
                    echo "                  </div>
                ";
                }
                // line 141
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 141)) {
                    // line 142
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_second_grid_class"] ?? null), 142, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 144
                    echo "                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-second\">
                      ";
                    // line 145
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_highlighted_second", [], "any", false, false, true, 145), 145, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 148
                    echo "                  </div>
                ";
                }
                // line 150
                echo "              </div>
            </div>
            ";
                // line 153
                echo "          </div>
        </div>
        ";
                // line 156
                echo "      ";
            }
            // line 157
            echo "
      ";
            // line 158
            if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 158) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 158))) {
                // line 159
                echo "        ";
                // line 160
                echo "        <div class=\"clearfix header-top ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_background_color"] ?? null), 160, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 161
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_layout_container"] ?? null), 161, $this->source), "html", null, true);
                echo "\">
            ";
                // line 163
                echo "            <div class=\"clearfix header-top__container";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["header_top_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                echo "\"
              ";
                // line 164
                if ((($context["header_top_animations"] ?? null) == "enabled")) {
                    // line 165
                    echo "                data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_animation_effect"] ?? null), 165, $this->source), "html", null, true);
                    echo "\"
              ";
                }
                // line 166
                echo ">
              <div class=\"row\">
                ";
                // line 168
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 168)) {
                    // line 169
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_first_grid_class"] ?? null), 169, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 171
                    echo "                    <div class=\"clearfix header-top__section header-top-first\">
                      ";
                    // line 172
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 172), 172, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 175
                    echo "                  </div>
                ";
                }
                // line 177
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 177)) {
                    // line 178
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_second_grid_class"] ?? null), 178, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 180
                    echo "                    <div class=\"clearfix header-top__section header-top-second\">
                      ";
                    // line 181
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 181), 181, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 184
                    echo "                  </div>
                ";
                }
                // line 186
                echo "              </div>
            </div>
            ";
                // line 189
                echo "          </div>
        </div>
        ";
                // line 192
                echo "      ";
            }
            // line 193
            echo "
      ";
            // line 194
            if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 194) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 194)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 194))) {
                // line 195
                echo "        ";
                // line 196
                echo "        <header role=\"banner\" class=\"clearfix header ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_background_color"] ?? null), 196, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container_class"] ?? null), 196, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_columns_class"] ?? null), 196, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">

          ";
                // line 198
                if ((($context["mt_site_name"] ?? null) || ($context["mt_logo"] ?? null))) {
                    // line 199
                    echo "            <div class=\"onscroll-site-name-site-logo-container\">
              ";
                    // line 200
                    if (($context["mt_logo"] ?? null)) {
                        // line 201
                        echo "                <div class=\"onscroll-logo\">
                  <a href=\"";
                        // line 202
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
                        echo "\" title=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                        echo "\" rel=\"home\"><img class=\"img-responsive\" src=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mt_logo"] ?? null), 202, $this->source), "html", null, true);
                        echo "\" /></a>
                </div>
              ";
                    }
                    // line 205
                    echo "              ";
                    if (($context["mt_site_name"] ?? null)) {
                        // line 206
                        echo "                <div class=\"onscroll-site-name site-name\">
                  <a href=\"";
                        // line 207
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
                        echo "\" title=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                        echo "\" rel=\"home\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mt_site_name"] ?? null), 207, $this->source), "html", null, true);
                        echo "</a>
                </div>
              ";
                    }
                    // line 210
                    echo "            </div>
          ";
                }
                // line 212
                echo "
          <div class=\"";
                // line 213
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container"] ?? null), 213, $this->source), "html", null, true);
                echo "\">
            ";
                // line 215
                echo "            <div class=\"clearfix header__container\">
              <div class=\"row\">
                ";
                // line 217
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 217)) {
                    // line 218
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_third_grid_class"] ?? null), 218, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 220
                    echo "                    <div class=\"clearfix header__section header-third\">
                      ";
                    // line 221
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_third", [], "any", false, false, true, 221), 221, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 224
                    echo "                  </div>
                ";
                }
                // line 226
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 226)) {
                    // line 227
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_first_grid_class"] ?? null), 227, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 229
                    echo "                    <div class=\"clearfix header__section header-first\">
                      ";
                    // line 230
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_first", [], "any", false, false, true, 230), 230, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 233
                    echo "                  </div>
                ";
                }
                // line 235
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 235)) {
                    // line 236
                    echo "                  <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_second_grid_class"] ?? null), 236, $this->source), "html", null, true);
                    echo "\">
                    ";
                    // line 238
                    echo "                    <div class=\"clearfix header__section header-second\">
                      ";
                    // line 239
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 239), 239, $this->source), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 242
                    echo "                  </div>
                ";
                }
                // line 244
                echo "              </div>
            </div>
            ";
                // line 247
                echo "          </div>
        </header>
        ";
                // line 250
                echo "      ";
            }
            // line 251
            echo "
    </div>
    ";
            // line 254
            echo "  ";
        }
        // line 255
        echo "
  ";
        // line 256
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 256)) {
            // line 257
            echo "    ";
            // line 258
            echo "    <div class=\"clearfix banner ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_background_color"] ?? null), 258, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["banner_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["banner_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 259
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_layout_container"] ?? null), 259, $this->source), "html", null, true);
            echo "\">
        ";
            // line 261
            echo "        <div class=\"clearfix banner__container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"banner__section\">
                ";
            // line 265
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 265), 265, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 271
            echo "      </div>
    </div>
    ";
            // line 274
            echo "  ";
        }
        // line 275
        echo "
  ";
        // line 277
        echo "  <div id=\"page-start\" class=\"clearfix page-start\"></div>

  ";
        // line 279
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "system_messages", [], "any", false, false, true, 279)) {
            // line 280
            echo "    <div class=\"system-messages clearfix\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 284
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "system_messages", [], "any", false, false, true, 284), 284, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 290
        echo "
  ";
        // line 291
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_top", [], "any", false, false, true, 291)) {
            // line 292
            echo "    ";
            // line 293
            echo "    <div class=\"clearfix highlighted-top ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_background_color"] ?? null), 293, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_separator"] ?? null), 293, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 294
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_layout_container"] ?? null), 294, $this->source), "html", null, true);
            echo "\">
        ";
            // line 296
            echo "        <div class=\"clearfix highlighted-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["highlighted_top_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 297
            if ((($context["highlighted_top_animations"] ?? null) == "enabled")) {
                // line 298
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_animation_effect"] ?? null), 298, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 299
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix highlighted-top__section\">
                ";
            // line 303
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_top", [], "any", false, false, true, 303), 303, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 309
            echo "      </div>
    </div>
    ";
            // line 312
            echo "  ";
        }
        // line 313
        echo "
  ";
        // line 314
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 314)) {
            // line 315
            echo "    ";
            // line 316
            echo "    <div class=\"clearfix highlighted ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_background_color"] ?? null), 316, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_separator"] ?? null), 316, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 317
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_layout_container"] ?? null), 317, $this->source), "html", null, true);
            echo "\">
        ";
            // line 319
            echo "        <div class=\"clearfix highlighted__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["highlighted_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 320
            if ((($context["highlighted_animations"] ?? null) == "enabled")) {
                // line 321
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_animation_effect"] ?? null), 321, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 322
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix highlighted__section\">
                ";
            // line 326
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 326), 326, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 332
            echo "      </div>
    </div>
    ";
            // line 335
            echo "  ";
        }
        // line 336
        echo "
  ";
        // line 337
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 337)) {
            // line 338
            echo "    ";
            // line 339
            echo "    <div class=\"clearfix content-top ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_background_color"] ?? null), 339, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 340
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_layout_container"] ?? null), 340, $this->source), "html", null, true);
            echo "\">
        ";
            // line 342
            echo "        <div class=\"clearfix content-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["content_top_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 343
            if ((($context["content_top_animations"] ?? null) == "enabled")) {
                // line 344
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_animation_effect"] ?? null), 344, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 345
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"content-top__section\">
                ";
            // line 349
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 349), 349, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 355
            echo "      </div>
    </div>
    ";
            // line 358
            echo "  ";
        }
        // line 359
        echo "
  ";
        // line 360
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top_highlighted", [], "any", false, false, true, 360)) {
            // line 361
            echo "    ";
            // line 362
            echo "    <div class=\"clearfix content-top-highlighted ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_background_color"] ?? null), 362, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_separator"] ?? null), 362, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 363
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_layout_container"] ?? null), 363, $this->source), "html", null, true);
            echo "\">
        ";
            // line 365
            echo "        <div class=\"clearfix content-top-highlighted__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["content_top_highlighted_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 366
            if ((($context["content_top_highlighted_animations"] ?? null) == "enabled")) {
                // line 367
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_animation_effect"] ?? null), 367, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 368
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"content-top-highlighted__section\">
                ";
            // line 372
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top_highlighted", [], "any", false, false, true, 372), 372, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 378
            echo "      </div>
    </div>
    ";
            // line 381
            echo "  ";
        }
        // line 382
        echo "
  ";
        // line 383
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_content_first", [], "any", false, false, true, 383) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_content_second", [], "any", false, false, true, 383))) {
            // line 384
            echo "    ";
            // line 385
            echo "    <div class=\"clearfix pre-content ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pre_content_background_color"] ?? null), 385, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pre_content_separator"] ?? null), 385, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["pre_content_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["pre_content_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 386
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pre_content_layout_container"] ?? null), 386, $this->source), "html", null, true);
            echo "\">
        ";
            // line 388
            echo "        <div class=\"clearfix pre-content__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["pre_content_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 389
            if ((($context["pre_content_animations"] ?? null) == "enabled")) {
                // line 390
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pre_content_animation_effect"] ?? null), 390, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 391
            echo ">
          <div class=\"row\">
            ";
            // line 393
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_content_first", [], "any", false, false, true, 393)) {
                // line 394
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pre_content_first_grid_class"] ?? null), 394, $this->source), "html", null, true);
                echo "\">
                ";
                // line 396
                echo "                <div class=\"clearfix pre-content__section pre-content-first\">
                  ";
                // line 397
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_content_first", [], "any", false, false, true, 397), 397, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 400
                echo "              </div>
            ";
            }
            // line 402
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_content_second", [], "any", false, false, true, 402)) {
                // line 403
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pre_content_second_grid_class"] ?? null), 403, $this->source), "html", null, true);
                echo "\">
                ";
                // line 405
                echo "                <div class=\"clearfix pre-content__section pre-content-second\">
                  ";
                // line 406
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_content_second", [], "any", false, false, true, 406), 406, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 409
                echo "              </div>
            ";
            }
            // line 411
            echo "          </div>
        </div>
        ";
            // line 414
            echo "      </div>
    </div>
    ";
            // line 417
            echo "  ";
        }
        // line 418
        echo "
  ";
        // line 420
        echo "  <div class=\"clearfix main-content region--dark-typography region--white-background  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_separator"] ?? null), 420, $this->source), "html", null, true);
        echo "\">
    <div class=\"container\">
      <div class=\"clearfix main-content__container\">
        <div class=\"row\">
          <section class=\"";
        // line 424
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_grid_class"] ?? null), 424, $this->source), "html", null, true);
        echo "\">
            ";
        // line 426
        echo "            <div class=\"clearfix main-content__section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["main_content_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_content_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_content_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
        echo "\"
              ";
        // line 427
        if ((($context["main_content_animations"] ?? null) == "enabled")) {
            // line 428
            echo "                data-animate-effect=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_animation_effect"] ?? null), 428, $this->source), "html", null, true);
            echo "\"
              ";
        }
        // line 429
        echo ">
              ";
        // line 430
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 430)) {
            // line 431
            echo "                ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 431), 431, $this->source), "html", null, true);
            echo "
              ";
        }
        // line 433
        echo "            </div>
            ";
        // line 435
        echo "          </section>
          ";
        // line 436
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 436)) {
            // line 437
            echo "            <aside class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_grid_class"] ?? null), 437, $this->source), "html", null, true);
            echo "\">
              ";
            // line 439
            echo "              <section class=\"sidebar__section sidebar-first clearfix";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sidebar_first_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_first_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_first_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\"
                ";
            // line 440
            if ((($context["sidebar_first_animations"] ?? null) == "enabled")) {
                // line 441
                echo "                  data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_animation_effect"] ?? null), 441, $this->source), "html", null, true);
                echo "\"
                ";
            }
            // line 442
            echo ">
                ";
            // line 443
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 443), 443, $this->source), "html", null, true);
            echo "
              </section>
              ";
            // line 446
            echo "            </aside>
          ";
        }
        // line 448
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 448)) {
            // line 449
            echo "            <aside class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_grid_class"] ?? null), 449, $this->source), "html", null, true);
            echo "\">
              ";
            // line 451
            echo "              <section class=\"sidebar__section sidebar-second clearfix";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sidebar_second_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_second_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sidebar_second_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\"
                ";
            // line 452
            if ((($context["sidebar_second_animations"] ?? null) == "enabled")) {
                // line 453
                echo "                  data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_animation_effect"] ?? null), 453, $this->source), "html", null, true);
                echo "\"
                ";
            }
            // line 454
            echo ">
                ";
            // line 455
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 455), 455, $this->source), "html", null, true);
            echo "
              </section>
              ";
            // line 458
            echo "            </aside>
          ";
        }
        // line 460
        echo "        </div>
      </div>
    </div>
  </div>
  ";
        // line 465
        echo "
  ";
        // line 466
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_first", [], "any", false, false, true, 466) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_second", [], "any", false, false, true, 466))) {
            // line 467
            echo "    ";
            // line 468
            echo "    <div class=\"clearfix content-bottom ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_background_color"] ?? null), 468, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_separator"] ?? null), 468, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 469
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_layout_container"] ?? null), 469, $this->source), "html", null, true);
            echo "\">
        ";
            // line 471
            echo "        <div class=\"clearfix content-bottom__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["content_bottom_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 472
            if ((($context["content_bottom_animations"] ?? null) == "enabled")) {
                // line 473
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_animation_effect"] ?? null), 473, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 474
            echo ">
          <div class=\"row\">
            ";
            // line 476
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_first", [], "any", false, false, true, 476)) {
                // line 477
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_first_grid_class"] ?? null), 477, $this->source), "html", null, true);
                echo "\">
                ";
                // line 479
                echo "                <div class=\"clearfix content-bottom__section content-bottom-first\">
                  ";
                // line 480
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_first", [], "any", false, false, true, 480), 480, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 483
                echo "              </div>
            ";
            }
            // line 485
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_second", [], "any", false, false, true, 485)) {
                // line 486
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_second_grid_class"] ?? null), 486, $this->source), "html", null, true);
                echo "\">
                ";
                // line 488
                echo "                <div class=\"clearfix content-bottom__section content-bottom-second\">
                  ";
                // line 489
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom_second", [], "any", false, false, true, 489), 489, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 492
                echo "              </div>
            ";
            }
            // line 494
            echo "          </div>
        </div>
        ";
            // line 497
            echo "      </div>
    </div>
    ";
            // line 500
            echo "  ";
        }
        // line 501
        echo "
  ";
        // line 502
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 502)) {
            // line 503
            echo "    ";
            // line 504
            echo "    <div class=\"clearfix featured-top ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_background_color"] ?? null), 504, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_separator"] ?? null), 504, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 505
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_layout_container"] ?? null), 505, $this->source), "html", null, true);
            echo "\">
        ";
            // line 507
            echo "        <div class=\"clearfix featured-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["featured_top_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 508
            if ((($context["featured_top_animations"] ?? null) == "enabled")) {
                // line 509
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_animation_effect"] ?? null), 509, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 510
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured-top__section\">
                ";
            // line 514
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 514), 514, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 520
            echo "      </div>
    </div>
    ";
            // line 523
            echo "  ";
        }
        // line 524
        echo "
  ";
        // line 525
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 525)) {
            // line 526
            echo "    ";
            // line 527
            echo "    <div class=\"clearfix featured ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_background_color"] ?? null), 527, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_separator"] ?? null), 527, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 528
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_layout_container"] ?? null), 528, $this->source), "html", null, true);
            echo "\">
        ";
            // line 530
            echo "        <div class=\"clearfix featured__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["featured_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 531
            if ((($context["featured_animations"] ?? null) == "enabled")) {
                // line 532
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_animation_effect"] ?? null), 532, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 533
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured__section\">
                ";
            // line 537
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 537), 537, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 543
            echo "      </div>
    </div>
    ";
            // line 546
            echo "  ";
        }
        // line 547
        echo "
  ";
        // line 548
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 548)) {
            // line 549
            echo "    ";
            // line 550
            echo "    <div class=\"clearfix featured-bottom ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_background_color"] ?? null), 550, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_separator"] ?? null), 550, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["featured_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 551
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_layout_container"] ?? null), 551, $this->source), "html", null, true);
            echo "\">
        ";
            // line 553
            echo "        <div class=\"clearfix featured-bottom__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["featured_bottom_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 554
            if ((($context["featured_bottom_animations"] ?? null) == "enabled")) {
                // line 555
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_animation_effect"] ?? null), 555, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 556
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured-bottom__section\">
                ";
            // line 560
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 560), 560, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 566
            echo "      </div>
    </div>
    ";
            // line 569
            echo "  ";
        }
        // line 570
        echo "
  ";
        // line 571
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_featured", [], "any", false, false, true, 571)) {
            // line 572
            echo "    ";
            // line 573
            echo "    <div class=\"clearfix sub-featured ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_background_color"] ?? null), 573, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_separator"] ?? null), 573, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sub_featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["sub_featured_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 574
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_layout_container"] ?? null), 574, $this->source), "html", null, true);
            echo "\">
        ";
            // line 576
            echo "        <div class=\"clearfix sub-featured__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["sub_featured_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 577
            if ((($context["sub_featured_animations"] ?? null) == "enabled")) {
                // line 578
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_animation_effect"] ?? null), 578, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 579
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix sub-featured__section\">
                ";
            // line 583
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_featured", [], "any", false, false, true, 583), 583, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 589
            echo "      </div>
    </div>
    ";
            // line 592
            echo "  ";
        }
        // line 593
        echo "
  ";
        // line 594
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_first", [], "any", false, false, true, 594) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_second", [], "any", false, false, true, 594))) {
            // line 595
            echo "    ";
            // line 596
            echo "    <div class=\"clearfix footer-top ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_regions"] ?? null), 596, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_background_color"] ?? null), 596, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_separator"] ?? null), 596, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 597
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_layout_container"] ?? null), 597, $this->source), "html", null, true);
            echo "\">
        ";
            // line 599
            echo "        <div class=\"clearfix footer-top__container";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_top_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 600
            if ((($context["footer_top_animations"] ?? null) == "enabled")) {
                // line 601
                echo "            data-animate-effect=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_animation_effect"] ?? null), 601, $this->source), "html", null, true);
                echo "\"
          ";
            }
            // line 602
            echo ">
          <div class=\"row\">
            ";
            // line 604
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_first", [], "any", false, false, true, 604)) {
                // line 605
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_first_grid_class"] ?? null), 605, $this->source), "html", null, true);
                echo "\">
                ";
                // line 607
                echo "                <div class=\"clearfix footer-top__section footer-top-first\">
                  ";
                // line 608
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_first", [], "any", false, false, true, 608), 608, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 611
                echo "              </div>
            ";
            }
            // line 613
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_second", [], "any", false, false, true, 613)) {
                // line 614
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_second_grid_class"] ?? null), 614, $this->source), "html", null, true);
                echo "\">
                ";
                // line 616
                echo "                <div class=\"clearfix footer-top__section footer-top-second\">
                  ";
                // line 617
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_second", [], "any", false, false, true, 617), 617, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 620
                echo "              </div>
            ";
            }
            // line 622
            echo "          </div>
        </div>
        ";
            // line 625
            echo "      </div>
    </div>
    ";
            // line 628
            echo "  ";
        }
        // line 629
        echo "
  ";
        // line 630
        if (((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 630) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 630)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 630)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 630)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 630))) {
            // line 631
            echo "    ";
            // line 632
            echo "    <footer class=\"clearfix footer ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_background_color"] ?? null), 632, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_separator"] ?? null), 632, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scroll_to_top_region"] ?? null), 632, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      ";
            // line 633
            if ((($context["scroll_to_top_display"] ?? null) && (($context["scroll_to_top_region"] ?? null) == "footer-to-top-enabled"))) {
                // line 634
                echo "        <div class=\"to-top\"><i class=\"fa ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scroll_to_top_icon"] ?? null), 634, $this->source), "html", null, true);
                echo "\"></i></div>
      ";
            }
            // line 636
            echo "      <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_layout_container"] ?? null), 636, $this->source), "html", null, true);
            echo "\">
        <div class=\"clearfix footer__container\">
          <div class=\"row\">
            ";
            // line 639
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 639)) {
                // line 640
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_grid_class"] ?? null), 640, $this->source), "html", null, true);
                echo "\">
                ";
                // line 642
                echo "                <div class=\"clearfix footer__section footer-first";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                echo "\"
                  ";
                // line 643
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 644
                    echo "                    data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 644, $this->source), "html", null, true);
                    echo "\"
                  ";
                }
                // line 645
                echo ">
                  ";
                // line 646
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 646), 646, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 649
                echo "              </div>
            ";
            }
            // line 651
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 651)) {
                // line 652
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_second_grid_class"] ?? null), 652, $this->source), "html", null, true);
                echo "\">
                ";
                // line 654
                echo "                <div class=\"clearfix footer__section footer-second";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                echo "\"
                  ";
                // line 655
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 656
                    echo "                    data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 656, $this->source), "html", null, true);
                    echo "\"
                  ";
                }
                // line 657
                echo ">
                  ";
                // line 658
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 658), 658, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 661
                echo "              </div>
            ";
            }
            // line 663
            echo "            <div class=\"clearfix ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_4_columns_clearfix_first"] ?? null), 663, $this->source), "html", null, true);
            echo "\"></div>
            ";
            // line 664
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 664)) {
                // line 665
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_third_grid_class"] ?? null), 665, $this->source), "html", null, true);
                echo "\">
                ";
                // line 667
                echo "                <div class=\"clearfix footer__section footer-third";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                echo "\"
                  ";
                // line 668
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 669
                    echo "                    data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 669, $this->source), "html", null, true);
                    echo "\"
                  ";
                }
                // line 670
                echo ">
                  ";
                // line 671
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 671), 671, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 674
                echo "              </div>
            ";
            }
            // line 676
            echo "            <div class=\"clearfix ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_4_columns_clearfix_second"] ?? null), 676, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_5_columns_clearfix"] ?? null), 676, $this->source), "html", null, true);
            echo "\"></div>
            ";
            // line 677
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 677)) {
                // line 678
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_fourth_grid_class"] ?? null), 678, $this->source), "html", null, true);
                echo "\">
                ";
                // line 680
                echo "                <div class=\"clearfix footer__section footer-fourth";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                echo "\"
                  ";
                // line 681
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 682
                    echo "                    data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 682, $this->source), "html", null, true);
                    echo "\"
                  ";
                }
                // line 683
                echo ">
                  ";
                // line 684
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 684), 684, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 687
                echo "              </div>
            ";
            }
            // line 689
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 689)) {
                // line 690
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_fifth_grid_class"] ?? null), 690, $this->source), "html", null, true);
                echo "\">
                ";
                // line 692
                echo "                <div class=\"clearfix footer__section footer-fifth";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                echo "\"
                  ";
                // line 693
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 694
                    echo "                    data-animate-effect=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null), 694, $this->source), "html", null, true);
                    echo "\"
                  ";
                }
                // line 695
                echo ">
                  ";
                // line 696
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 696), 696, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 699
                echo "              </div>
            ";
            }
            // line 701
            echo "          </div>
        </div>
      </div>
    </footer>
    ";
            // line 706
            echo "  ";
        }
        // line 707
        echo "
  ";
        // line 708
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_first", [], "any", false, false, true, 708) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_second", [], "any", false, false, true, 708))) {
            // line 709
            echo "    ";
            // line 710
            echo "    <div class=\"clearfix footer-bottom ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_background_color"] ?? null), 710, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_separator"] ?? null), 710, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scroll_to_top_region"] ?? null), 710, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      ";
            // line 711
            if ((($context["scroll_to_top_display"] ?? null) && (($context["scroll_to_top_region"] ?? null) == "footer-bottom-to-top-enabled"))) {
                // line 712
                echo "        <div class=\"to-top\"><i class=\"fa ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scroll_to_top_icon"] ?? null), 712, $this->source), "html", null, true);
                echo "\"></i></div>
      ";
            }
            // line 714
            echo "      <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_layout_container"] ?? null), 714, $this->source), "html", null, true);
            echo "\">
        ";
            // line 716
            echo "        <div class=\"clearfix footer-bottom__container\">
          <div class=\"row\">
            ";
            // line 718
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_first", [], "any", false, false, true, 718)) {
                // line 719
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_first_grid_class"] ?? null), 719, $this->source), "html", null, true);
                echo "\">
                ";
                // line 721
                echo "                <div class=\"clearfix footer-bottom__section footer-bottom-first\">
                  ";
                // line 722
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_first", [], "any", false, false, true, 722), 722, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 725
                echo "              </div>
            ";
            }
            // line 727
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_second", [], "any", false, false, true, 727)) {
                // line 728
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_second_grid_class"] ?? null), 728, $this->source), "html", null, true);
                echo "\">
                ";
                // line 730
                echo "                <div class=\"clearfix footer-bottom__section footer-bottom-first\">
                  ";
                // line 731
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_second", [], "any", false, false, true, 731), 731, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 734
                echo "              </div>
            ";
            }
            // line 736
            echo "          </div>
        </div>
        ";
            // line 739
            echo "      </div>
    </div>
    ";
            // line 742
            echo "  ";
        }
        // line 743
        echo "
  ";
        // line 744
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_first", [], "any", false, false, true, 744) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 744))) {
            // line 745
            echo "    ";
            // line 746
            echo "    <div class=\"clearfix subfooter ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_background_color"] ?? null), 746, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_separator"] ?? null), 746, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scroll_to_top_region"] ?? null), 746, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["subfooter_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["subfooter_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      ";
            // line 747
            if ((($context["scroll_to_top_display"] ?? null) && (($context["scroll_to_top_region"] ?? null) == "subfooter-to-top-enabled"))) {
                // line 748
                echo "        <div class=\"to-top\"><i class=\"fa ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scroll_to_top_icon"] ?? null), 748, $this->source), "html", null, true);
                echo "\"></i></div>
      ";
            }
            // line 750
            echo "      <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_layout_container"] ?? null), 750, $this->source), "html", null, true);
            echo "\">
        ";
            // line 752
            echo "        <div class=\"clearfix subfooter__container\">
          <div class=\"row\">
            ";
            // line 754
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_first", [], "any", false, false, true, 754)) {
                // line 755
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_first_grid_class"] ?? null), 755, $this->source), "html", null, true);
                echo "\">
                ";
                // line 757
                echo "                <div class=\"clearfix subfooter__section subfooter-first\">
                  ";
                // line 758
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_first", [], "any", false, false, true, 758), 758, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 761
                echo "              </div>
            ";
            }
            // line 763
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 763)) {
                // line 764
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_second_grid_class"] ?? null), 764, $this->source), "html", null, true);
                echo "\">
                ";
                // line 766
                echo "                <div class=\"clearfix subfooter__section subfooter-second\">
                  ";
                // line 767
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 767), 767, $this->source), "html", null, true);
                echo "
                </div>
                ";
                // line 770
                echo "              </div>
            ";
            }
            // line 772
            echo "          </div>
        </div>
        ";
            // line 775
            echo "      </div>
    </div>
    ";
            // line 778
            echo "  ";
        }
        // line 779
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/magazine_lite/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1704 => 779,  1701 => 778,  1697 => 775,  1693 => 772,  1689 => 770,  1684 => 767,  1681 => 766,  1676 => 764,  1673 => 763,  1669 => 761,  1664 => 758,  1661 => 757,  1656 => 755,  1654 => 754,  1650 => 752,  1645 => 750,  1639 => 748,  1637 => 747,  1626 => 746,  1624 => 745,  1622 => 744,  1619 => 743,  1616 => 742,  1612 => 739,  1608 => 736,  1604 => 734,  1599 => 731,  1596 => 730,  1591 => 728,  1588 => 727,  1584 => 725,  1579 => 722,  1576 => 721,  1571 => 719,  1569 => 718,  1565 => 716,  1560 => 714,  1554 => 712,  1552 => 711,  1541 => 710,  1539 => 709,  1537 => 708,  1534 => 707,  1531 => 706,  1525 => 701,  1521 => 699,  1516 => 696,  1513 => 695,  1507 => 694,  1505 => 693,  1500 => 692,  1495 => 690,  1492 => 689,  1488 => 687,  1483 => 684,  1480 => 683,  1474 => 682,  1472 => 681,  1467 => 680,  1462 => 678,  1460 => 677,  1453 => 676,  1449 => 674,  1444 => 671,  1441 => 670,  1435 => 669,  1433 => 668,  1428 => 667,  1423 => 665,  1421 => 664,  1416 => 663,  1412 => 661,  1407 => 658,  1404 => 657,  1398 => 656,  1396 => 655,  1391 => 654,  1386 => 652,  1383 => 651,  1379 => 649,  1374 => 646,  1371 => 645,  1365 => 644,  1363 => 643,  1358 => 642,  1353 => 640,  1351 => 639,  1344 => 636,  1338 => 634,  1336 => 633,  1325 => 632,  1323 => 631,  1321 => 630,  1318 => 629,  1315 => 628,  1311 => 625,  1307 => 622,  1303 => 620,  1298 => 617,  1295 => 616,  1290 => 614,  1287 => 613,  1283 => 611,  1278 => 608,  1275 => 607,  1270 => 605,  1268 => 604,  1264 => 602,  1258 => 601,  1256 => 600,  1251 => 599,  1247 => 597,  1236 => 596,  1234 => 595,  1232 => 594,  1229 => 593,  1226 => 592,  1222 => 589,  1214 => 583,  1208 => 579,  1202 => 578,  1200 => 577,  1195 => 576,  1191 => 574,  1182 => 573,  1180 => 572,  1178 => 571,  1175 => 570,  1172 => 569,  1168 => 566,  1160 => 560,  1154 => 556,  1148 => 555,  1146 => 554,  1141 => 553,  1137 => 551,  1128 => 550,  1126 => 549,  1124 => 548,  1121 => 547,  1118 => 546,  1114 => 543,  1106 => 537,  1100 => 533,  1094 => 532,  1092 => 531,  1087 => 530,  1083 => 528,  1074 => 527,  1072 => 526,  1070 => 525,  1067 => 524,  1064 => 523,  1060 => 520,  1052 => 514,  1046 => 510,  1040 => 509,  1038 => 508,  1033 => 507,  1029 => 505,  1020 => 504,  1018 => 503,  1016 => 502,  1013 => 501,  1010 => 500,  1006 => 497,  1002 => 494,  998 => 492,  993 => 489,  990 => 488,  985 => 486,  982 => 485,  978 => 483,  973 => 480,  970 => 479,  965 => 477,  963 => 476,  959 => 474,  953 => 473,  951 => 472,  946 => 471,  942 => 469,  933 => 468,  931 => 467,  929 => 466,  926 => 465,  920 => 460,  916 => 458,  911 => 455,  908 => 454,  902 => 453,  900 => 452,  893 => 451,  888 => 449,  885 => 448,  881 => 446,  876 => 443,  873 => 442,  867 => 441,  865 => 440,  858 => 439,  853 => 437,  851 => 436,  848 => 435,  845 => 433,  839 => 431,  837 => 430,  834 => 429,  828 => 428,  826 => 427,  819 => 426,  815 => 424,  807 => 420,  804 => 418,  801 => 417,  797 => 414,  793 => 411,  789 => 409,  784 => 406,  781 => 405,  776 => 403,  773 => 402,  769 => 400,  764 => 397,  761 => 396,  756 => 394,  754 => 393,  750 => 391,  744 => 390,  742 => 389,  737 => 388,  733 => 386,  724 => 385,  722 => 384,  720 => 383,  717 => 382,  714 => 381,  710 => 378,  702 => 372,  696 => 368,  690 => 367,  688 => 366,  683 => 365,  679 => 363,  670 => 362,  668 => 361,  666 => 360,  663 => 359,  660 => 358,  656 => 355,  648 => 349,  642 => 345,  636 => 344,  634 => 343,  629 => 342,  625 => 340,  618 => 339,  616 => 338,  614 => 337,  611 => 336,  608 => 335,  604 => 332,  596 => 326,  590 => 322,  584 => 321,  582 => 320,  577 => 319,  573 => 317,  564 => 316,  562 => 315,  560 => 314,  557 => 313,  554 => 312,  550 => 309,  542 => 303,  536 => 299,  530 => 298,  528 => 297,  523 => 296,  519 => 294,  510 => 293,  508 => 292,  506 => 291,  503 => 290,  494 => 284,  488 => 280,  486 => 279,  482 => 277,  479 => 275,  476 => 274,  472 => 271,  464 => 265,  458 => 261,  454 => 259,  447 => 258,  445 => 257,  443 => 256,  440 => 255,  437 => 254,  433 => 251,  430 => 250,  426 => 247,  422 => 244,  418 => 242,  413 => 239,  410 => 238,  405 => 236,  402 => 235,  398 => 233,  393 => 230,  390 => 229,  385 => 227,  382 => 226,  378 => 224,  373 => 221,  370 => 220,  365 => 218,  363 => 217,  359 => 215,  355 => 213,  352 => 212,  348 => 210,  338 => 207,  335 => 206,  332 => 205,  322 => 202,  319 => 201,  317 => 200,  314 => 199,  312 => 198,  300 => 196,  298 => 195,  296 => 194,  293 => 193,  290 => 192,  286 => 189,  282 => 186,  278 => 184,  273 => 181,  270 => 180,  265 => 178,  262 => 177,  258 => 175,  253 => 172,  250 => 171,  245 => 169,  243 => 168,  239 => 166,  233 => 165,  231 => 164,  226 => 163,  222 => 161,  215 => 160,  213 => 159,  211 => 158,  208 => 157,  205 => 156,  201 => 153,  197 => 150,  193 => 148,  188 => 145,  185 => 144,  180 => 142,  177 => 141,  173 => 139,  168 => 136,  165 => 135,  160 => 133,  158 => 132,  154 => 130,  148 => 129,  146 => 128,  141 => 127,  137 => 125,  130 => 124,  128 => 123,  126 => 122,  122 => 120,  120 => 119,  118 => 118,  115 => 117,  112 => 116,  108 => 113,  100 => 107,  94 => 103,  90 => 101,  81 => 100,  79 => 99,  77 => 98,  73 => 96,  70 => 94,  66 => 91,  63 => 89,  60 => 87,  54 => 83,  50 => 81,  43 => 79,  41 => 78,  39 => 77,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/magazine_lite/templates/page.html.twig", "C:\\xampp\\htdocs\\rafaelnieves\\themes\\contrib\\magazine_lite\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 77);
        static $filters = array("escape" => 79, "t" => 202);
        static $functions = array("path" => 202);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                ['path']
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
