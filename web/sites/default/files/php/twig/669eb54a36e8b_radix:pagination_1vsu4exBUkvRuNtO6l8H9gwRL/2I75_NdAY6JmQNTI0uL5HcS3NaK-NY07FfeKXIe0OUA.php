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

/* radix:pagination */
class __TwigTemplate_496f5af8549deba08a3653226fdb6b5a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'pagination_previous' => [$this, 'block_pagination_previous'],
            'pagination_next' => [$this, 'block_pagination_next'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.radix--pagination"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "radix:pagination"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "radix:pagination"));
        // line 13
        $___internal_parse_7_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 14
            yield "
";
            // line 16
            $context["pagination_classes"] = Twig\Extension\CoreExtension::merge(["pagination-wrapper"], ((            // line 18
($context["pagination_utility_classes"] ?? null)) ?: ([])));
            // line 20
            yield "
";
            // line 21
            $context["pagination_attributes"] = ((($context["attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
            // line 22
            yield "
";
            // line 24
            $context["alignment_classes"] = ["end" => "justify-content-end", "center" => "justify-content-center", "vertical" => "flex-column", "start" => ""];
            // line 31
            yield "
";
            // line 32
            $context["alignment"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["alignment_classes"] ?? null), ($context["alignment"] ?? null), [], "array", true, true, true, 32) &&  !(null === (($__internal_compile_0 = ($context["alignment_classes"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["alignment"] ?? null)] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["alignment_classes"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["alignment"] ?? null)] ?? null) : null)) : (""));
            // line 33
            $context["show_last"] = (($context["show_last"]) ?? (true));
            // line 34
            $context["show_first"] = (($context["show_first"]) ?? (true));
            // line 35
            $context["show_ellipsis"] = (($context["show_ellipsis"]) ?? (true));
            // line 36
            yield "
";
            // line 37
            if (($context["items"] ?? null)) {
                // line 38
                yield "  <nav ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["pagination_attributes"] ?? null), "addClass", [($context["pagination_classes"] ?? null)], "method", false, false, true, 38), 38, $this->source), "html", null, true);
                yield " role=\"navigation\" aria-label=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
                yield "\">
    <ul
      class=\"pagination pager__items js-pager__items d-flex flex-wrap ";
                // line 40
                ((($context["size"] ?? null)) ? (yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ("pagination-" . ($context["size"] ?? null)), "html", null, true)) : (yield ""));
                yield " ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["alignment"] ?? null), 40, $this->source), "html", null, true);
                yield "\">
      ";
                // line 42
                yield "      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 42) && ($context["show_first"] ?? null))) {
                    // line 43
                    yield "        <li class=\"page-item pager__item pager__item--first\">
          <a href=\"";
                    // line 44
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 44), "href", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                    yield "\" title=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to first page"));
                    yield "\" ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 44), "attributes", [], "any", false, false, true, 44), 44, $this->source), "href", "title"), "html", null, true);
                    yield " class=\"page-link\">
            <span class=\"visually-hidden\">";
                    // line 45
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("First page"));
                    yield "</span>
            <span aria-hidden=\"true\">";
                    // line 46
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 46), "text", [], "any", true, true, true, 46)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 46), "text", [], "any", false, false, true, 46), 46, $this->source), t("« First"))) : (t("« First"))), "html", null, true);
                    yield "</span>
          </a>
        </li>
      ";
                }
                // line 50
                yield "
      ";
                // line 52
                yield "      ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 52)) {
                    // line 53
                    yield "        <li class=\"page-item pager__item pager__item--previous\">
          ";
                    // line 54
                    yield from $this->unwrap()->yieldBlock('pagination_previous', $context, $blocks);
                    // line 60
                    yield "        </li>
      ";
                }
                // line 62
                yield "
      ";
                // line 64
                yield "      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ellipses"] ?? null), "previous", [], "any", false, false, true, 64) && ($context["show_ellipsis"] ?? null))) {
                    // line 65
                    yield "        <li class=\"page-item pager__item pager__item--ellipsis disabled\" role=\"presentation\">
          <span class=\"page-link\">&hellip;</span>
        </li>
      ";
                }
                // line 69
                yield "
      ";
                // line 71
                yield "      ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 71));
                foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                    // line 72
                    yield "        <li class=\"page-item pager__item";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" is-active active") : ("")));
                    yield "\">
          ";
                    // line 73
                    if ((($context["current"] ?? null) == $context["key"])) {
                        // line 74
                        yield "            ";
                        $context["title"] = t("Current page");
                        // line 75
                        yield "          ";
                    } else {
                        // line 76
                        yield "            ";
                        $context["title"] = t("Go to page @key", ["@key" => $context["key"]]);
                        // line 77
                        yield "          ";
                    }
                    // line 78
                    yield "          <a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
                    yield "\" title=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 78, $this->source), "html", null, true);
                    yield "\" ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 78), 78, $this->source), "href", "title"), "html", null, true);
                    yield " class=\"page-link\">
            <span class=\"visually-hidden\">
              ";
                    // line 80
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (t("Current page")) : (t("Page"))));
                    yield "
            </span>";
                    // line 82
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 82, $this->source), "html", null, true);
                    // line 83
                    yield "</a>
        </li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                yield "
      ";
                // line 87
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "current", [], "any", false, false, true, 87) && (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 87) || CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 87)))) {
                    // line 88
                    yield "        <li class=\"page-item disabled\">
          <span class=\"page-link\">
            ";
                    // line 90
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (t("Page") . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "current", [], "any", false, false, true, 90), 90, $this->source)), "html", null, true);
                    yield "
          </span>
        </li>
      ";
                }
                // line 94
                yield "
      ";
                // line 96
                yield "      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ellipses"] ?? null), "next", [], "any", false, false, true, 96) && ($context["show_ellipsis"] ?? null))) {
                    // line 97
                    yield "        <li class=\"page-item pager__item pager__item--ellipsis disabled\" role=\"presentation\">
          <span class=\"page-link\">&hellip;</span>
        </li>
      ";
                }
                // line 101
                yield "
      ";
                // line 103
                yield "      ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 103)) {
                    // line 104
                    yield "        <li class=\"page-item pager__item pager__item--next\">
          ";
                    // line 105
                    yield from $this->unwrap()->yieldBlock('pagination_next', $context, $blocks);
                    // line 111
                    yield "        </li>
      ";
                }
                // line 113
                yield "
      ";
                // line 115
                yield "      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 115) && ($context["show_last"] ?? null))) {
                    // line 116
                    yield "        <li class=\"page-item pager__item pager__item--last\">
          <a href=\"";
                    // line 117
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 117), "href", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
                    yield "\" title=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to last page"));
                    yield "\" ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 117), "attributes", [], "any", false, false, true, 117), 117, $this->source), "href", "title"), "html", null, true);
                    yield " class=\"page-link\">
            <span class=\"visually-hidden\">";
                    // line 118
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last page"));
                    yield "</span>
            <span aria-hidden=\"true\">";
                    // line 119
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 119), "text", [], "any", true, true, true, 119)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 119), "text", [], "any", false, false, true, 119), 119, $this->source), t("Last »"))) : (t("Last »"))), "html", null, true);
                    yield "</span>
          </a>
        </li>
      ";
                }
                // line 123
                yield "    </ul>
  </nav>
";
            }
            // line 126
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 13
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_7_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["pagination_utility_classes", "attributes", "items", "size", "ellipses", "current"]);        return; yield '';
    }

    // line 54
    public function block_pagination_previous($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        yield "            <a href=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 55), "href", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
        yield "\" title=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
        yield "\" rel=\"prev\" ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 55), "attributes", [], "any", false, false, true, 55), 55, $this->source), "href", "title", "rel"), "html", null, true);
        yield " class=\"page-link\">
              <span class=\"visually-hidden\">";
        // line 56
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
        yield "</span>
              <span aria-hidden=\"true\">";
        // line 57
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 57), "text", [], "any", true, true, true, 57)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 57), "text", [], "any", false, false, true, 57), 57, $this->source), t("‹ Previous"))) : (t("‹ Previous"))), "html", null, true);
        yield "</span>
            </a>
          ";
        return; yield '';
    }

    // line 105
    public function block_pagination_next($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 106
        yield "            <a href=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 106), "href", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
        yield "\" title=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
        yield "\" rel=\"next\" ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 106), "attributes", [], "any", false, false, true, 106), 106, $this->source), "href", "title", "rel"), "html", null, true);
        yield " class=\"page-link\">
              <span class=\"visually-hidden\">";
        // line 107
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
        yield "</span>
              <span aria-hidden=\"true\">";
        // line 108
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 108), "text", [], "any", true, true, true, 108)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 108), "text", [], "any", false, false, true, 108), 108, $this->source), t("Next ›"))) : (t("Next ›"))), "html", null, true);
        yield "</span>
            </a>
          ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "radix:pagination";
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
        return array (  326 => 108,  322 => 107,  313 => 106,  309 => 105,  301 => 57,  297 => 56,  288 => 55,  284 => 54,  278 => 13,  273 => 126,  268 => 123,  261 => 119,  257 => 118,  249 => 117,  246 => 116,  243 => 115,  240 => 113,  236 => 111,  234 => 105,  231 => 104,  228 => 103,  225 => 101,  219 => 97,  216 => 96,  213 => 94,  206 => 90,  202 => 88,  200 => 87,  197 => 86,  189 => 83,  187 => 82,  183 => 80,  173 => 78,  170 => 77,  167 => 76,  164 => 75,  161 => 74,  159 => 73,  154 => 72,  149 => 71,  146 => 69,  140 => 65,  137 => 64,  134 => 62,  130 => 60,  128 => 54,  125 => 53,  122 => 52,  119 => 50,  112 => 46,  108 => 45,  100 => 44,  97 => 43,  94 => 42,  88 => 40,  80 => 38,  78 => 37,  75 => 36,  73 => 35,  71 => 34,  69 => 33,  67 => 32,  64 => 31,  62 => 24,  59 => 22,  57 => 21,  54 => 20,  52 => 18,  51 => 16,  48 => 14,  46 => 13,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "radix:pagination", "themes/contrib/radix/components/pagination/pagination.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 13, "set" => 16, "if" => 37, "block" => 54, "for" => 71);
        static $filters = array("merge" => 18, "escape" => 38, "t" => 38, "without" => 44, "default" => 46, "spaceless" => 13);
        static $functions = array("create_attribute" => 21);

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'set', 'if', 'block', 'for'],
                ['merge', 'escape', 't', 'without', 'default', 'spaceless'],
                ['create_attribute'],
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
