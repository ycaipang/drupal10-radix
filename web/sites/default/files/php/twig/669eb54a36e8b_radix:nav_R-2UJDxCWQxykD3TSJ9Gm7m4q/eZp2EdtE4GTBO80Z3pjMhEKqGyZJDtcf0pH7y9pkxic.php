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

/* radix:nav */
class __TwigTemplate_f6894af3c033fa98a30d1851e290616b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'nav_items' => [$this, 'block_nav_items'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.radix--nav"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "radix:nav"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "radix:nav"));
        // line 15
        $___internal_parse_6_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 16
            yield "
";
            // line 17
            $macros["menus"] = $this->macros["menus"] = $this;
            // line 19
            $context["alignment_classes"] = ["right" => "justify-content-end", "center" => "justify-content-center", "vertical" => "flex-column", "left" => ""];
            // line 26
            yield "
";
            // line 27
            $context["alignment"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["alignment_classes"] ?? null), ($context["alignment"] ?? null), [], "array", true, true, true, 27) &&  !(null === (($__internal_compile_0 = ($context["alignment_classes"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["alignment"] ?? null)] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["alignment_classes"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["alignment"] ?? null)] ?? null) : null)) : (""));
            // line 28
            $context["dropdown_direction"] = (($context["dropdown_direction"]) ?? ("dropend"));
            // line 29
            $context["style"] = ((($context["style"] ?? null)) ? (("nav-" . $this->sandbox->ensureToStringAllowed(($context["style"] ?? null), 29, $this->source))) : (""));
            // line 30
            $context["fill"] = ((($context["fill"] ?? null)) ? (("nav-" . $this->sandbox->ensureToStringAllowed(($context["fill"] ?? null), 30, $this->source))) : (""));
            // line 31
            yield "
";
            // line 33
            $context["nav_classes"] = Twig\Extension\CoreExtension::merge(["nav",             // line 35
($context["style"] ?? null),             // line 36
($context["alignment"] ?? null),             // line 37
($context["fill"] ?? null)], ((            // line 38
($context["nav_utility_classes"] ?? null)) ?: ([])));
            // line 40
            yield "
";
            // line 41
            if (($context["items"] ?? null)) {
                // line 42
                yield "  <ul ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["nav_classes"] ?? null)], "method", false, false, true, 42), 42, $this->source), "html", null, true);
                yield ">
    ";
                // line 43
                yield from $this->unwrap()->yieldBlock('nav_items', $context, $blocks);
                // line 81
                yield "  </ul>
";
            }
            // line 83
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 15
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_6_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "nav_utility_classes", "items", "attributes", "nav_item_utility_classes", "nav_link_utility_classes"]);        return; yield '';
    }

    // line 43
    public function block_nav_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        yield "      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 45
            yield "        ";
            // line 46
            $context["nav_item_classes"] = Twig\Extension\CoreExtension::merge(["nav-item", ((CoreExtension::getAttribute($this->env, $this->source,             // line 48
$context["item"], "in_active_trail", [], "any", false, false, true, 48)) ? ("active") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,             // line 49
$context["item"], "is_expanded", [], "any", false, false, true, 49) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 49))) ? ("dropdown") : (""))], ((            // line 50
($context["nav_item_utility_classes"] ?? null)) ?: ([])));
            // line 52
            yield "        ";
            // line 53
            $context["nav_link_classes"] = Twig\Extension\CoreExtension::merge(["nav-link", ((CoreExtension::getAttribute($this->env, $this->source,             // line 55
$context["item"], "in_active_trail", [], "any", false, false, true, 55)) ? ("active") : (""))], ((            // line 56
($context["nav_link_utility_classes"] ?? null)) ?: ([])));
            // line 58
            yield "        ";
            if (is_iterable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 58), "options", [], "any", false, false, true, 58), "attributes", [], "any", false, false, true, 58), "class", [], "any", false, false, true, 58))) {
                // line 59
                yield "          ";
                $context["nav_link_classes"] = Twig\Extension\CoreExtension::merge($this->sandbox->ensureToStringAllowed(($context["nav_link_classes"] ?? null), 59, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 59), "options", [], "any", false, false, true, 59), "attributes", [], "any", false, false, true, 59), "class", [], "any", false, false, true, 59), 59, $this->source));
                // line 60
                yield "        ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 60), "options", [], "any", false, false, true, 60), "attributes", [], "any", false, false, true, 60), "class", [], "any", false, false, true, 60)) {
                // line 61
                yield "          ";
                $context["nav_link_classes"] = Twig\Extension\CoreExtension::merge($this->sandbox->ensureToStringAllowed(($context["nav_link_classes"] ?? null), 61, $this->source), [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 61), "options", [], "any", false, false, true, 61), "attributes", [], "any", false, false, true, 61), "class", [], "any", false, false, true, 61)]);
                // line 62
                yield "        ";
            }
            // line 63
            yield "        <li class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join($this->sandbox->ensureToStringAllowed(($context["nav_item_classes"] ?? null), 63, $this->source), " "), "html", null, true);
            yield "\">
          ";
            // line 64
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 64) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 64))) {
                // line 65
                yield "            <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
                yield "\" class=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::merge($this->sandbox->ensureToStringAllowed(($context["nav_link_classes"] ?? null), 65, $this->source), ["dropdown-toggle"]), " "), "html", null, true);
                yield "\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-expanded=\"false\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
                yield "</a>
            ";
                // line 66
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 66)) {
                    // line 67
                    yield "              ";
                    // line 68
                    yield from                     $this->loadTemplate("radix:dropdown-menu", "radix:nav", 68)->unwrap()->yield(CoreExtension::merge($context, ["items" => CoreExtension::getAttribute($this->env, $this->source,                     // line 69
$context["item"], "below", [], "any", false, false, true, 69)]));
                    // line 72
                    yield "            ";
                }
                // line 73
                yield "          ";
            } else {
                // line 74
                yield "            ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 74)) {
                    // line 75
                    yield "              ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 75), 75, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 75), 75, $this->source), ["class" => ($context["nav_link_classes"] ?? null)]), "html", null, true);
                    yield "
            ";
                }
                // line 77
                yield "          ";
            }
            // line 78
            yield "        </li>
      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        yield "    ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "radix:nav";
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
        return array (  207 => 80,  192 => 78,  189 => 77,  183 => 75,  180 => 74,  177 => 73,  174 => 72,  172 => 69,  171 => 68,  169 => 67,  167 => 66,  158 => 65,  156 => 64,  151 => 63,  148 => 62,  145 => 61,  142 => 60,  139 => 59,  136 => 58,  134 => 56,  133 => 55,  132 => 53,  130 => 52,  128 => 50,  127 => 49,  126 => 48,  125 => 46,  123 => 45,  105 => 44,  101 => 43,  95 => 15,  90 => 83,  86 => 81,  84 => 43,  79 => 42,  77 => 41,  74 => 40,  72 => 38,  71 => 37,  70 => 36,  69 => 35,  68 => 33,  65 => 31,  63 => 30,  61 => 29,  59 => 28,  57 => 27,  54 => 26,  52 => 19,  50 => 17,  47 => 16,  45 => 15,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "radix:nav", "themes/contrib/radix/components/nav/nav.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 15, "import" => 17, "set" => 19, "if" => 41, "block" => 43, "for" => 44, "include" => 68);
        static $filters = array("merge" => 38, "escape" => 42, "spaceless" => 15, "join" => 63);
        static $functions = array("link" => 75);

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'import', 'set', 'if', 'block', 'for', 'include'],
                ['merge', 'escape', 'spaceless', 'join'],
                ['link'],
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
