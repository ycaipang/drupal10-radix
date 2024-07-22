<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/YC_theme/templates/pages/page--products.html.twig */
class __TwigTemplate_a34e92417f77c5f8c939408b44433451 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'featured' => [$this, 'block_featured'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        $context["ynavclasses"] = ["navbar", "navbar-dark"];
        // line 76
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("YC_theme/product-list-filters"), "html", null, true);
        yield "

<div id=\"page-wrapper\">
  <div id=\"page\">
    <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 80
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        yield "\">
      ";
        // line 81
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 132
        yield "    </header>
    ";
        // line 133
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 133)) {
            // line 134
            yield "      <div class=\"highlighted\">
        <aside class=\"";
            // line 135
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 135, $this->source), "html", null, true);
            yield " section clearfix\" role=\"complementary\">
          ";
            // line 136
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
            yield "
        </aside>
      </div>
    ";
        }
        // line 140
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 140)) {
            // line 141
            yield "      ";
            yield from $this->unwrap()->yieldBlock('featured', $context, $blocks);
            // line 148
            yield "    ";
        }
        // line 149
        yield "    <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
      ";
        // line 150
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 177
        yield "    </div>
    ";
        // line 178
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 178) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 178)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 178))) {
            // line 179
            yield "      <div class=\"featured-bottom\">
        <aside class=\"";
            // line 180
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 180, $this->source), "html", null, true);
            yield " clearfix\" role=\"complementary\">
          ";
            // line 181
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 181), 181, $this->source), "html", null, true);
            yield "
          ";
            // line 182
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 182), 182, $this->source), "html", null, true);
            yield "
          ";
            // line 183
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 183), 183, $this->source), "html", null, true);
            yield "
        </aside>
      </div>
    ";
        }
        // line 187
        yield "    <footer class=\"site-footer\">
      ";
        // line 188
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 208
        yield "    </footer>
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "container", "navbar_top_attributes", "container_navbar", "navbar_attributes", "navbar_collapse_btn_data", "navbar_offcanvas", "sidebar_collapse", "content_attributes", "sidebar_first_attributes", "sidebar_second_attributes"]);        return; yield '';
    }

    // line 81
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        yield "        ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 82) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 82)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 82))) {
            // line 83
            yield "          <nav";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_top_attributes"] ?? null), 83, $this->source), "html", null, true);
            yield ">
          ";
            // line 84
            if (($context["container_navbar"] ?? null)) {
                // line 85
                yield "          <div class=\"container\">
          ";
            }
            // line 87
            yield "              ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
            yield "
              ";
            // line 88
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
            yield "
              ";
            // line 89
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 89)) {
                // line 90
                yield "                <div class=\"form-inline navbar-form ms-auto\">
                  ";
                // line 91
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
                yield "
                </div>
              ";
            }
            // line 94
            yield "          ";
            if (($context["container_navbar"] ?? null)) {
                // line 95
                yield "          </div>
          ";
            }
            // line 97
            yield "          </nav>
        ";
        }
        // line 99
        yield "        <nav";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_attributes"] ?? null), 99, $this->source), "html", null, true);
        yield ">
          ";
        // line 100
        if (($context["container_navbar"] ?? null)) {
            // line 101
            yield "          <div class=\"container\">
          ";
        }
        // line 103
        yield "            ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
        yield "
            ";
        // line 104
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 104) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 104))) {
            // line 105
            yield "              <button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_collapse_btn_data"] ?? null), 105, $this->source), "html", null, true);
            yield "\" data-bs-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
              <div class=\"navbar-collapse collapse\" id=\"CollapsingNavbar\">
                ";
            // line 107
            if (($context["navbar_offcanvas"] ?? null)) {
                // line 108
                yield "                  <div class=\"offcanvas-header\">
                    <button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
                  </div>
                  <div class=\"offcanvas-body\">
                ";
            }
            // line 113
            yield "                ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
            yield "
                ";
            // line 114
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 114)) {
                // line 115
                yield "                  <div class=\"form-inline navbar-form justify-content-end\">
                    ";
                // line 116
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
                yield "
                  </div>
                ";
            }
            // line 119
            yield "                ";
            if (($context["navbar_offcanvas"] ?? null)) {
                // line 120
                yield "                  </div>
                ";
            }
            // line 122
            yield "\t            </div>
            ";
        }
        // line 124
        yield "            ";
        if (($context["sidebar_collapse"] ?? null)) {
            // line 125
            yield "              <button class=\"navbar-toggler navbar-toggler-left collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
            ";
        }
        // line 127
        yield "          ";
        if (($context["container_navbar"] ?? null)) {
            // line 128
            yield "          </div>
          ";
        }
        // line 130
        yield "        </nav>
      ";
        return; yield '';
    }

    // line 141
    public function block_featured($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 142
        yield "        <div class=\"featured-top\">
          <aside class=\"featured-top__inner section clearfix\" role=\"complementary\">
            ";
        // line 144
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 144), 144, $this->source), "html", null, true);
        yield "
          </aside>
        </div>
      ";
        return; yield '';
    }

    // line 150
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 151
        yield "        <div id=\"main\" class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 151, $this->source), "html", null, true);
        yield "\">
        ";
        // line 152
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 152), 152, $this->source), "html", null, true);
        yield "
          <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
              <main";
        // line 154
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 154, $this->source), "html", null, true);
        yield ">
                <section class=\"section\">
                  <a id=\"main-content\" tabindex=\"-1\"></a>
                  ";
        // line 157
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 157), 157, $this->source), "html", null, true);
        yield "
                </section>
              </main>
            ";
        // line 160
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 160)) {
            // line 161
            yield "              <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_attributes"] ?? null), 161, $this->source), "html", null, true);
            yield ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 163
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
            yield "
                </aside>
              </div>
            ";
        }
        // line 167
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 167)) {
            // line 168
            yield "              <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_attributes"] ?? null), 168, $this->source), "html", null, true);
            yield ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 170
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 170), 170, $this->source), "html", null, true);
            yield "
                </aside>
              </div>
            ";
        }
        // line 174
        yield "          </div>
        </div>
      ";
        return; yield '';
    }

    // line 188
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 189
        yield "        ";
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 189) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 189)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 189)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 189))) {
            // line 190
            yield "          <div class=\"site-footer__top clearfix\">
            <div class=\"";
            // line 191
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 191, $this->source), "html", null, true);
            yield "\">
              ";
            // line 192
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 192), 192, $this->source), "html", null, true);
            yield "
              ";
            // line 193
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 193), 193, $this->source), "html", null, true);
            yield "
              ";
            // line 194
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 194), 194, $this->source), "html", null, true);
            yield "
              ";
            // line 195
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 195), 195, $this->source), "html", null, true);
            yield "
            </div>
          </div>
        ";
        }
        // line 199
        yield "
        ";
        // line 200
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 200)) {
            // line 201
            yield "          <div class=\"site-footer__bottom\">
            <div class=\"";
            // line 202
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 202, $this->source), "html", null, true);
            yield "\">
            ";
            // line 203
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 203), 203, $this->source), "html", null, true);
            yield "
            </div>
          </div>
        ";
        }
        // line 207
        yield "      ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/YC_theme/templates/pages/page--products.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  395 => 207,  388 => 203,  384 => 202,  381 => 201,  379 => 200,  376 => 199,  369 => 195,  365 => 194,  361 => 193,  357 => 192,  353 => 191,  350 => 190,  347 => 189,  343 => 188,  336 => 174,  329 => 170,  323 => 168,  320 => 167,  313 => 163,  307 => 161,  305 => 160,  299 => 157,  293 => 154,  288 => 152,  283 => 151,  279 => 150,  270 => 144,  266 => 142,  262 => 141,  256 => 130,  252 => 128,  249 => 127,  245 => 125,  242 => 124,  238 => 122,  234 => 120,  231 => 119,  225 => 116,  222 => 115,  220 => 114,  215 => 113,  208 => 108,  206 => 107,  200 => 105,  198 => 104,  193 => 103,  189 => 101,  187 => 100,  182 => 99,  178 => 97,  174 => 95,  171 => 94,  165 => 91,  162 => 90,  160 => 89,  156 => 88,  151 => 87,  147 => 85,  145 => 84,  140 => 83,  137 => 82,  133 => 81,  124 => 208,  122 => 188,  119 => 187,  112 => 183,  108 => 182,  104 => 181,  100 => 180,  97 => 179,  95 => 178,  92 => 177,  90 => 150,  87 => 149,  84 => 148,  81 => 141,  78 => 140,  71 => 136,  67 => 135,  64 => 134,  62 => 133,  59 => 132,  57 => 81,  53 => 80,  46 => 76,  44 => 71,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/YC_theme/templates/pages/page--products.html.twig", "/app/web/themes/custom/YC_theme/templates/pages/page--products.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 71, "block" => 81, "if" => 133);
        static $filters = array("escape" => 76, "t" => 80);
        static $functions = array("attach_library" => 76);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['escape', 't'],
                ['attach_library'],
                $this->source
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
