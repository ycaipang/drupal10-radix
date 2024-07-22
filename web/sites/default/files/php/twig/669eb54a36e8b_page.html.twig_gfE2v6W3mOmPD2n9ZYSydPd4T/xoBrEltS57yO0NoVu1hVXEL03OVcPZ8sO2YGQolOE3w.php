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

/* themes/custom/YC_theme/templates/pages/page.html.twig */
class __TwigTemplate_7f2123a9608936a73bc13c0d30761456 extends Template
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
        yield "
<div id=\"page-wrapper\">
  <div id=\"page\">
    <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 79
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        yield "\">
      ";
        // line 80
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 131
        yield "    </header>
    ";
        // line 132
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 132)) {
            // line 133
            yield "      <div class=\"highlighted\">
        <aside class=\"";
            // line 134
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 134, $this->source), "html", null, true);
            yield " section clearfix\" role=\"complementary\">
          ";
            // line 135
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
            yield "
        </aside>
      </div>
    ";
        }
        // line 139
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 139)) {
            // line 140
            yield "      ";
            yield from $this->unwrap()->yieldBlock('featured', $context, $blocks);
            // line 147
            yield "    ";
        }
        // line 148
        yield "    <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
      ";
        // line 149
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 176
        yield "    </div>
    ";
        // line 177
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 177) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 177)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 177))) {
            // line 178
            yield "      <div class=\"featured-bottom\">
        <aside class=\"";
            // line 179
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 179, $this->source), "html", null, true);
            yield " clearfix\" role=\"complementary\">
          ";
            // line 180
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 180), 180, $this->source), "html", null, true);
            yield "
          ";
            // line 181
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 181), 181, $this->source), "html", null, true);
            yield "
          ";
            // line 182
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 182), 182, $this->source), "html", null, true);
            yield "
        </aside>
      </div>
    ";
        }
        // line 186
        yield "    <footer class=\"site-footer\">
      ";
        // line 187
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 207
        yield "    </footer>
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "container", "navbar_top_attributes", "container_navbar", "navbar_attributes", "navbar_collapse_btn_data", "navbar_offcanvas", "sidebar_collapse", "content_attributes", "sidebar_first_attributes", "sidebar_second_attributes"]);        return; yield '';
    }

    // line 80
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        yield "        ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 81) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 81)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 81))) {
            // line 82
            yield "          <nav";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_top_attributes"] ?? null), 82, $this->source), "html", null, true);
            yield ">
          ";
            // line 83
            if (($context["container_navbar"] ?? null)) {
                // line 84
                yield "          <div class=\"container\">
          ";
            }
            // line 86
            yield "              ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
            yield "
              ";
            // line 87
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
            yield "
              ";
            // line 88
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 88)) {
                // line 89
                yield "                <div class=\"form-inline navbar-form ms-auto\">
                  ";
                // line 90
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
                yield "
                </div>
              ";
            }
            // line 93
            yield "          ";
            if (($context["container_navbar"] ?? null)) {
                // line 94
                yield "          </div>
          ";
            }
            // line 96
            yield "          </nav>
        ";
        }
        // line 98
        yield "        <nav";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_attributes"] ?? null), 98, $this->source), "html", null, true);
        yield ">
          ";
        // line 99
        if (($context["container_navbar"] ?? null)) {
            // line 100
            yield "          <div class=\"container\">
          ";
        }
        // line 102
        yield "            ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
        yield "
            ";
        // line 103
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 103) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 103))) {
            // line 104
            yield "              <button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_collapse_btn_data"] ?? null), 104, $this->source), "html", null, true);
            yield "\" data-bs-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
              <div class=\"navbar-collapse collapse\" id=\"CollapsingNavbar\">
                ";
            // line 106
            if (($context["navbar_offcanvas"] ?? null)) {
                // line 107
                yield "                  <div class=\"offcanvas-header\">
                    <button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
                  </div>
                  <div class=\"offcanvas-body\">
                ";
            }
            // line 112
            yield "                ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
            yield "
                ";
            // line 113
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 113)) {
                // line 114
                yield "                  <div class=\"form-inline navbar-form justify-content-end\">
                    ";
                // line 115
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
                yield "
                  </div>
                ";
            }
            // line 118
            yield "                ";
            if (($context["navbar_offcanvas"] ?? null)) {
                // line 119
                yield "                  </div>
                ";
            }
            // line 121
            yield "\t            </div>
            ";
        }
        // line 123
        yield "            ";
        if (($context["sidebar_collapse"] ?? null)) {
            // line 124
            yield "              <button class=\"navbar-toggler navbar-toggler-left collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
            ";
        }
        // line 126
        yield "          ";
        if (($context["container_navbar"] ?? null)) {
            // line 127
            yield "          </div>
          ";
        }
        // line 129
        yield "        </nav>
      ";
        return; yield '';
    }

    // line 140
    public function block_featured($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 141
        yield "        <div class=\"featured-top\">
          <aside class=\"featured-top__inner section ";
        // line 142
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 142, $this->source), "html", null, true);
        yield " clearfix\" role=\"complementary\">
            ";
        // line 143
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
        yield "
          </aside>
        </div>
      ";
        return; yield '';
    }

    // line 149
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 150
        yield "        <div id=\"main\" class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 150, $this->source), "html", null, true);
        yield "\">
        ";
        // line 151
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
        yield "
          <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
              <main";
        // line 153
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 153, $this->source), "html", null, true);
        yield ">
                <section class=\"section\">
                  <a id=\"main-content\" tabindex=\"-1\"></a>
                  ";
        // line 156
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 156), 156, $this->source), "html", null, true);
        yield "
                </section>
              </main>
            ";
        // line 159
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 159)) {
            // line 160
            yield "              <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_attributes"] ?? null), 160, $this->source), "html", null, true);
            yield ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 162
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
            yield "
                </aside>
              </div>
            ";
        }
        // line 166
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 166)) {
            // line 167
            yield "              <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_attributes"] ?? null), 167, $this->source), "html", null, true);
            yield ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 169
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 169), 169, $this->source), "html", null, true);
            yield "
                </aside>
              </div>
            ";
        }
        // line 173
        yield "          </div>
        </div>
      ";
        return; yield '';
    }

    // line 187
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 188
        yield "        ";
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 188) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 188)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 188)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 188))) {
            // line 189
            yield "          <div class=\"site-footer__top clearfix\">
            <div class=\"";
            // line 190
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 190, $this->source), "html", null, true);
            yield "\">
              ";
            // line 191
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 191), 191, $this->source), "html", null, true);
            yield "
              ";
            // line 192
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 192), 192, $this->source), "html", null, true);
            yield "
              ";
            // line 193
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 193), 193, $this->source), "html", null, true);
            yield "
              ";
            // line 194
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 194), 194, $this->source), "html", null, true);
            yield "
            </div>
          </div>
        ";
        }
        // line 198
        yield "
        ";
        // line 199
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 199)) {
            // line 200
            yield "          <div class=\"site-footer__bottom\">
            <div class=\"";
            // line 201
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 201, $this->source), "html", null, true);
            yield "\">
            ";
            // line 202
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 202), 202, $this->source), "html", null, true);
            yield "
            </div>
          </div>
        ";
        }
        // line 206
        yield "      ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/YC_theme/templates/pages/page.html.twig";
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
        return array (  396 => 206,  389 => 202,  385 => 201,  382 => 200,  380 => 199,  377 => 198,  370 => 194,  366 => 193,  362 => 192,  358 => 191,  354 => 190,  351 => 189,  348 => 188,  344 => 187,  337 => 173,  330 => 169,  324 => 167,  321 => 166,  314 => 162,  308 => 160,  306 => 159,  300 => 156,  294 => 153,  289 => 151,  284 => 150,  280 => 149,  271 => 143,  267 => 142,  264 => 141,  260 => 140,  254 => 129,  250 => 127,  247 => 126,  243 => 124,  240 => 123,  236 => 121,  232 => 119,  229 => 118,  223 => 115,  220 => 114,  218 => 113,  213 => 112,  206 => 107,  204 => 106,  198 => 104,  196 => 103,  191 => 102,  187 => 100,  185 => 99,  180 => 98,  176 => 96,  172 => 94,  169 => 93,  163 => 90,  160 => 89,  158 => 88,  154 => 87,  149 => 86,  145 => 84,  143 => 83,  138 => 82,  135 => 81,  131 => 80,  122 => 207,  120 => 187,  117 => 186,  110 => 182,  106 => 181,  102 => 180,  98 => 179,  95 => 178,  93 => 177,  90 => 176,  88 => 149,  85 => 148,  82 => 147,  79 => 140,  76 => 139,  69 => 135,  65 => 134,  62 => 133,  60 => 132,  57 => 131,  55 => 80,  51 => 79,  46 => 76,  44 => 71,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/YC_theme/templates/pages/page.html.twig", "/app/web/themes/custom/YC_theme/templates/pages/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 71, "block" => 80, "if" => 132);
        static $filters = array("t" => 79, "escape" => 134);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['t', 'escape'],
                [],
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
