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

/* themes/custom/YC_theme/templates/pages/page--node--page.html.twig */
class __TwigTemplate_f6aa791ed50468f060694626d9bf7321 extends Template
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
";
        // line 77
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("YC_theme/basic-page"), "html", null, true);
        yield "

<div id=\"page-wrapper\">
  <div id=\"page\">
    <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 81
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        yield "\">
      ";
        // line 82
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 133
        yield "    </header>
    ";
        // line 134
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 134)) {
            // line 135
            yield "      <div class=\"highlighted\">
        <aside class=\"";
            // line 136
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 136, $this->source), "html", null, true);
            yield " section clearfix\" role=\"complementary\">
          ";
            // line 137
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
            yield "
        </aside>
      </div>
    ";
        }
        // line 141
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 141)) {
            // line 142
            yield "      ";
            yield from $this->unwrap()->yieldBlock('featured', $context, $blocks);
            // line 149
            yield "    ";
        }
        // line 150
        yield "    <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
      ";
        // line 151
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 178
        yield "    </div>
    ";
        // line 179
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 179) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 179)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 179))) {
            // line 180
            yield "      <div class=\"featured-bottom\">
        <aside class=\"";
            // line 181
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 181, $this->source), "html", null, true);
            yield " clearfix\" role=\"complementary\">
          ";
            // line 182
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 182), 182, $this->source), "html", null, true);
            yield "
          ";
            // line 183
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 183), 183, $this->source), "html", null, true);
            yield "
          ";
            // line 184
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 184), 184, $this->source), "html", null, true);
            yield "
        </aside>
      </div>
    ";
        }
        // line 188
        yield "    <footer class=\"site-footer\">
      ";
        // line 189
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 209
        yield "    </footer>
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "container", "navbar_top_attributes", "container_navbar", "navbar_attributes", "navbar_collapse_btn_data", "navbar_offcanvas", "sidebar_collapse", "content_attributes", "sidebar_first_attributes", "sidebar_second_attributes"]);        return; yield '';
    }

    // line 82
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 83
        yield "        ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 83) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 83)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 83))) {
            // line 84
            yield "          <nav";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_top_attributes"] ?? null), 84, $this->source), "html", null, true);
            yield ">
          ";
            // line 85
            if (($context["container_navbar"] ?? null)) {
                // line 86
                yield "          <div class=\"container\">
          ";
            }
            // line 88
            yield "              ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
            yield "
              ";
            // line 89
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
            yield "
              ";
            // line 90
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 90)) {
                // line 91
                yield "                <div class=\"form-inline navbar-form ms-auto\">
                  ";
                // line 92
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
                yield "
                </div>
              ";
            }
            // line 95
            yield "          ";
            if (($context["container_navbar"] ?? null)) {
                // line 96
                yield "          </div>
          ";
            }
            // line 98
            yield "          </nav>
        ";
        }
        // line 100
        yield "        <nav";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_attributes"] ?? null), 100, $this->source), "html", null, true);
        yield ">
          ";
        // line 101
        if (($context["container_navbar"] ?? null)) {
            // line 102
            yield "          <div class=\"container\">
          ";
        }
        // line 104
        yield "            ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
        yield "
            ";
        // line 105
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 105) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 105))) {
            // line 106
            yield "              <button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_collapse_btn_data"] ?? null), 106, $this->source), "html", null, true);
            yield "\" data-bs-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
              <div class=\"navbar-collapse collapse\" id=\"CollapsingNavbar\">
                ";
            // line 108
            if (($context["navbar_offcanvas"] ?? null)) {
                // line 109
                yield "                  <div class=\"offcanvas-header\">
                    <button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
                  </div>
                  <div class=\"offcanvas-body\">
                ";
            }
            // line 114
            yield "                ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
            yield "
                ";
            // line 115
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 115)) {
                // line 116
                yield "                  <div class=\"form-inline navbar-form justify-content-end\">
                    ";
                // line 117
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
                yield "
                  </div>
                ";
            }
            // line 120
            yield "                ";
            if (($context["navbar_offcanvas"] ?? null)) {
                // line 121
                yield "                  </div>
                ";
            }
            // line 123
            yield "\t            </div>
            ";
        }
        // line 125
        yield "            ";
        if (($context["sidebar_collapse"] ?? null)) {
            // line 126
            yield "              <button class=\"navbar-toggler navbar-toggler-left collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
            ";
        }
        // line 128
        yield "          ";
        if (($context["container_navbar"] ?? null)) {
            // line 129
            yield "          </div>
          ";
        }
        // line 131
        yield "        </nav>
      ";
        return; yield '';
    }

    // line 142
    public function block_featured($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 143
        yield "        <div class=\"featured-top\">
          <aside class=\"featured-top__inner section clearfix\" role=\"complementary\">
            ";
        // line 145
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 145), 145, $this->source), "html", null, true);
        yield "
          </aside>
        </div>
      ";
        return; yield '';
    }

    // line 151
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 152
        yield "        <div id=\"main\" class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 152, $this->source), "html", null, true);
        yield "\">
        ";
        // line 153
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
        yield "
          <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
              <main";
        // line 155
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 155, $this->source), "html", null, true);
        yield ">
                <section class=\"section\">
                  <a id=\"main-content\" tabindex=\"-1\"></a>
                  ";
        // line 158
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 158), 158, $this->source), "html", null, true);
        yield "
                </section>
              </main>
            ";
        // line 161
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 161)) {
            // line 162
            yield "              <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_attributes"] ?? null), 162, $this->source), "html", null, true);
            yield ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 164
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 164), 164, $this->source), "html", null, true);
            yield "
                </aside>
              </div>
            ";
        }
        // line 168
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 168)) {
            // line 169
            yield "              <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_attributes"] ?? null), 169, $this->source), "html", null, true);
            yield ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 171
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 171), 171, $this->source), "html", null, true);
            yield "
                </aside>
              </div>
            ";
        }
        // line 175
        yield "          </div>
        </div>
      ";
        return; yield '';
    }

    // line 189
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 190
        yield "        ";
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 190) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 190)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 190)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 190))) {
            // line 191
            yield "          <div class=\"site-footer__top clearfix\">
            <div class=\"";
            // line 192
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 192, $this->source), "html", null, true);
            yield "\">
              ";
            // line 193
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 193), 193, $this->source), "html", null, true);
            yield "
              ";
            // line 194
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 194), 194, $this->source), "html", null, true);
            yield "
              ";
            // line 195
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 195), 195, $this->source), "html", null, true);
            yield "
              ";
            // line 196
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 196), 196, $this->source), "html", null, true);
            yield "
            </div>
          </div>
        ";
        }
        // line 200
        yield "
        ";
        // line 201
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 201)) {
            // line 202
            yield "          <div class=\"site-footer__bottom\">
            <div class=\"";
            // line 203
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 203, $this->source), "html", null, true);
            yield "\">
            ";
            // line 204
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 204), 204, $this->source), "html", null, true);
            yield "
            </div>
          </div>
        ";
        }
        // line 208
        yield "      ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/YC_theme/templates/pages/page--node--page.html.twig";
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
        return array (  398 => 208,  391 => 204,  387 => 203,  384 => 202,  382 => 201,  379 => 200,  372 => 196,  368 => 195,  364 => 194,  360 => 193,  356 => 192,  353 => 191,  350 => 190,  346 => 189,  339 => 175,  332 => 171,  326 => 169,  323 => 168,  316 => 164,  310 => 162,  308 => 161,  302 => 158,  296 => 155,  291 => 153,  286 => 152,  282 => 151,  273 => 145,  269 => 143,  265 => 142,  259 => 131,  255 => 129,  252 => 128,  248 => 126,  245 => 125,  241 => 123,  237 => 121,  234 => 120,  228 => 117,  225 => 116,  223 => 115,  218 => 114,  211 => 109,  209 => 108,  203 => 106,  201 => 105,  196 => 104,  192 => 102,  190 => 101,  185 => 100,  181 => 98,  177 => 96,  174 => 95,  168 => 92,  165 => 91,  163 => 90,  159 => 89,  154 => 88,  150 => 86,  148 => 85,  143 => 84,  140 => 83,  136 => 82,  127 => 209,  125 => 189,  122 => 188,  115 => 184,  111 => 183,  107 => 182,  103 => 181,  100 => 180,  98 => 179,  95 => 178,  93 => 151,  90 => 150,  87 => 149,  84 => 142,  81 => 141,  74 => 137,  70 => 136,  67 => 135,  65 => 134,  62 => 133,  60 => 82,  56 => 81,  49 => 77,  46 => 76,  44 => 71,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/YC_theme/templates/pages/page--node--page.html.twig", "/app/web/themes/custom/YC_theme/templates/pages/page--node--page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 71, "block" => 82, "if" => 134);
        static $filters = array("escape" => 77, "t" => 81);
        static $functions = array("attach_library" => 77);

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
