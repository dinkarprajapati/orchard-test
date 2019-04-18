<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/nexus/templates/layout/page.html.twig */
class __TwigTemplate_4e83540488a2bea10c119342a0e48ce075a176914fead673ae51c25c19a3f48f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 54, "set" => 166];
        $filters = ["striptags" => 80, "t" => 84];
        $functions = ["attach_library" => 72];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['striptags', 't'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/nexus/templates/layout/page.html.twig"));

        // line 51
        echo "<div id=\"page\">
  <header id=\"masthead\" class=\"site-header container\" role=\"banner\">
    <div class=\"row\">
      ";
        // line 54
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 55
            echo "        <div id=\"logo\" class=\"site-branding col-sm-6\">
          ";
            // line 56
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 59
        echo "      <div class=\"col-sm-6 mainmenu\">
        <div class=\"mobilenavi\"></div>
        <nav id=\"navigation\" role=\"navigation\">
          <div id=\"main-menu\">
            ";
        // line 63
        if ($this->getAttribute(($context["page"] ?? null), "main_navigation", [])) {
            // line 64
            echo "                ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_navigation", [])), "html", null, true);
            echo "
            ";
        }
        // line 66
        echo "          </div>
        </nav>
      </div>
    </div>
  </header>
  ";
        // line 71
        if (($context["is_front"] ?? null)) {
            // line 72
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("nexus/slider-js"), "html", null, true);
            echo "
    ";
            // line 73
            if (($context["slideshow_display"] ?? null)) {
                // line 74
                echo "      <div id=\"slidebox\" class=\"flexslider\">
        <ul class=\"slides\">
          <li>
            <img src=\"";
                // line 77
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slide1_image"] ?? null)), "html", null, true);
                echo "\"/>
            ";
                // line 78
                if ((($context["slide1_head"] ?? null) || ($context["slide1_desc"] ?? null))) {
                    // line 79
                    echo "              ";
                    if (($context["slide1_head"] ?? null)) {
                        // line 80
                        echo "                ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["slide1_head"] ?? null))), "html", null, true);
                        echo "
              ";
                    }
                    // line 82
                    echo "              <div class=\"flex-caption\">
                <h2>";
                    // line 83
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["slide1_head"] ?? null))), "html", null, true);
                    echo "</h2>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["slide1_desc"] ?? null))), "html", null, true);
                    echo "
                <a class=\"frmore\" href=\"";
                    // line 84
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["slide1_url"] ?? null))), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Read More"));
                    echo "</a>
              </div>
            ";
                }
                // line 87
                echo "          </li>
          <li>
            <img src=\"";
                // line 89
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slide2_image"] ?? null)), "html", null, true);
                echo "\"/>
            ";
                // line 90
                if ((($context["slide2_head"] ?? null) || ($context["slide2_desc"] ?? null))) {
                    // line 91
                    echo "              ";
                    if (($context["slide2_head"] ?? null)) {
                        // line 92
                        echo "                ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["slide2_head"] ?? null))), "html", null, true);
                        echo "
              ";
                    }
                    // line 94
                    echo "              <div class=\"flex-caption\">
                <h2>";
                    // line 95
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["slide2_head"] ?? null))), "html", null, true);
                    echo "</h2>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["slide2_desc"] ?? null))), "html", null, true);
                    echo "
                <a class=\"frmore\" href=\"";
                    // line 96
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["slide2_url"] ?? null))), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Read More"));
                    echo "</a>
              </div>
            ";
                }
                // line 99
                echo "          </li>
          <li>
            <img src=\"";
                // line 101
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slide3_image"] ?? null)), "html", null, true);
                echo "\"/>
            ";
                // line 102
                if ((($context["slide3_head"] ?? null) || ($context["slide3_desc"] ?? null))) {
                    // line 103
                    echo "              ";
                    if (($context["slide3_head"] ?? null)) {
                        // line 104
                        echo "                ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["slide3_head"] ?? null))), "html", null, true);
                        echo "
              ";
                    }
                    // line 106
                    echo "              <div class=\"flex-caption\">
                <h2>";
                    // line 107
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["slide3_head"] ?? null))), "html", null, true);
                    echo "</h2>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["slide3_desc"] ?? null))), "html", null, true);
                    echo "
                <a class=\"frmore\" href=\"";
                    // line 108
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(($context["slide3_url"] ?? null))), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Read More"));
                    echo "</a>
              </div>
            ";
                }
                // line 111
                echo "          </li>
        </ul><!-- /slides -->
        <div class=\"doverlay\"></div>
      </div>
    ";
            }
            // line 116
            echo "  ";
        }
        // line 117
        echo "
  ";
        // line 118
        if ((($this->getAttribute(($context["page"] ?? null), "preface_first", []) || $this->getAttribute(($context["page"] ?? null), "preface_second", [])) || $this->getAttribute(($context["page"] ?? null), "preface_third", []))) {
            // line 119
            echo "    <div id=\"preface-area\">
      <div class=\"container\">
        <div class=\"row\">
          ";
            // line 122
            if ($this->getAttribute(($context["page"] ?? null), "preface_first", [])) {
                // line 123
                echo "            <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("preface-block col-sm-" . $this->sandbox->ensureToStringAllowed(($context["preface_col"] ?? null))), "html", null, true);
                echo "\">
              ";
                // line 124
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "preface_first", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 127
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "preface_second", [])) {
                // line 128
                echo "            <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("preface-block col-sm-" . $this->sandbox->ensureToStringAllowed(($context["preface_col"] ?? null))), "html", null, true);
                echo "\">
              ";
                // line 129
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "preface_second", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 132
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "preface_third", [])) {
                // line 133
                echo "            <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("preface-block col-sm-" . $this->sandbox->ensureToStringAllowed(($context["preface_col"] ?? null))), "html", null, true);
                echo "\">
              ";
                // line 134
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "preface_third", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 137
            echo "        </div>
      </div>
    </div>
  ";
        }
        // line 141
        echo "
  ";
        // line 142
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 143
            echo "    <div id=\"highlighted-block\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            ";
            // line 147
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 153
        echo "
  <div id=\"main-content\">
    <div class=\"container\">
      ";
        // line 156
        if ((($context["is_front"] ?? null) != 1)) {
            // line 157
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "banner", [])) {
                // line 158
                echo "          ";
                if ( !twig_test_empty(($context["banner_chooser"] ?? null))) {
                    // line 159
                    echo "            <div class=\"banner\" style=\"height: 400px;\"><img src=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_chooser"] ?? null)), "html", null, true);
                    echo "\"/></div>
            ";
                    // line 161
                    echo "          ";
                }
                // line 162
                echo "        ";
            }
            // line 163
            echo "      ";
        }
        // line 164
        echo "      <div class=\"row\">
        ";
        // line 165
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 166
            echo "          ";
            $context["primary_col"] = 8;
            // line 167
            echo "        ";
        } else {
            // line 168
            echo "          ";
            $context["primary_col"] = 12;
            // line 169
            echo "        ";
        }
        // line 170
        echo "        <div id=\"primary\" class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("content-area col-sm-" . $this->sandbox->ensureToStringAllowed(($context["primary_col"] ?? null))), "html", null, true);
        echo "\">
          <section id=\"content\" role=\"main\" class=\"clearfix\">
            ";
        // line 172
        if (($context["show_breadcrumbs"] ?? null)) {
            // line 173
            echo "              ";
            if (($context["breadcrumb"] ?? null)) {
                // line 174
                echo "                <div id=\"breadcrumbs\">
                  ";
                // line 175
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null)), "html", null, true);
                echo "
                </div>
              ";
            }
            // line 178
            echo "            ";
        }
        // line 179
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null)), "html", null, true);
        echo "
            ";
        // line 180
        if ($this->getAttribute(($context["page"] ?? null), "content_top", [])) {
            // line 181
            echo "              <div id=\"content_top\">
                ";
            // line 182
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top", [])), "html", null, true);
            echo "
              </div>
            ";
        }
        // line 185
        echo "            <div id=\"content-wrap\">
              ";
        // line 186
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
              ";
        // line 187
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
            </div>
          </section>
        </div>
        ";
        // line 191
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 192
            echo "          <aside id=\"sidebar\" class=\"col-sm-4\" role=\"complementary\">
           ";
            // line 193
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
          </aside>
        ";
        }
        // line 196
        echo "      </div>
    </div>
  </div>

  ";
        // line 200
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 201
            echo "    <div id=\"footer-block\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            ";
            // line 205
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 211
        echo "
  ";
        // line 212
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", []))) {
            // line 213
            echo "    <div id=\"bottom\">
      <div class=\"container\">
        <div class=\"row\">
          ";
            // line 216
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 217
                echo "            <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("footer-block col-sm-" . $this->sandbox->ensureToStringAllowed(($context["footer_col"] ?? null))), "html", null, true);
                echo "\">
              ";
                // line 218
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 221
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 222
                echo "            <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("footer-block col-sm-" . $this->sandbox->ensureToStringAllowed(($context["footer_col"] ?? null))), "html", null, true);
                echo "\">
              ";
                // line 223
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 226
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 227
                echo "            <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("footer-block col-sm-" . $this->sandbox->ensureToStringAllowed(($context["footer_col"] ?? null))), "html", null, true);
                echo "\">
              ";
                // line 228
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 231
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])) {
                // line 232
                echo "            <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("footer-block col-sm-" . $this->sandbox->ensureToStringAllowed(($context["footer_col"] ?? null))), "html", null, true);
                echo "\">
              ";
                // line 233
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 236
            echo "        </div>
      </div>
    </div>
  ";
        }
        // line 240
        echo "
  <footer id=\"colophon\" class=\"site-footer\" role=\"contentinfo\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"fcred col-sm-12\">
          ";
        // line 245
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Copyright"));
        echo " &copy; ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["this_year"] ?? null)), "html", null, true);
        echo ", <a href=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
        echo "</a>. ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Theme by"));
        echo " <a href=\"http://www.devsaran.com\" target=\"_blank\">Devsaran</a>.
        </div>
      </div>
    </div>
  </footer>
</div>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/nexus/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  509 => 245,  502 => 240,  496 => 236,  490 => 233,  485 => 232,  482 => 231,  476 => 228,  471 => 227,  468 => 226,  462 => 223,  457 => 222,  454 => 221,  448 => 218,  443 => 217,  441 => 216,  436 => 213,  434 => 212,  431 => 211,  422 => 205,  416 => 201,  414 => 200,  408 => 196,  402 => 193,  399 => 192,  397 => 191,  390 => 187,  386 => 186,  383 => 185,  377 => 182,  374 => 181,  372 => 180,  367 => 179,  364 => 178,  358 => 175,  355 => 174,  352 => 173,  350 => 172,  344 => 170,  341 => 169,  338 => 168,  335 => 167,  332 => 166,  330 => 165,  327 => 164,  324 => 163,  321 => 162,  318 => 161,  313 => 159,  310 => 158,  307 => 157,  305 => 156,  300 => 153,  291 => 147,  285 => 143,  283 => 142,  280 => 141,  274 => 137,  268 => 134,  263 => 133,  260 => 132,  254 => 129,  249 => 128,  246 => 127,  240 => 124,  235 => 123,  233 => 122,  228 => 119,  226 => 118,  223 => 117,  220 => 116,  213 => 111,  205 => 108,  199 => 107,  196 => 106,  190 => 104,  187 => 103,  185 => 102,  181 => 101,  177 => 99,  169 => 96,  163 => 95,  160 => 94,  154 => 92,  151 => 91,  149 => 90,  145 => 89,  141 => 87,  133 => 84,  127 => 83,  124 => 82,  118 => 80,  115 => 79,  113 => 78,  109 => 77,  104 => 74,  102 => 73,  97 => 72,  95 => 71,  88 => 66,  82 => 64,  80 => 63,  74 => 59,  68 => 56,  65 => 55,  63 => 54,  58 => 51,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/nexus/templates/layout/page.html.twig", "/var/www/html/orchard/themes/nexus/templates/layout/page.html.twig");
    }
}
