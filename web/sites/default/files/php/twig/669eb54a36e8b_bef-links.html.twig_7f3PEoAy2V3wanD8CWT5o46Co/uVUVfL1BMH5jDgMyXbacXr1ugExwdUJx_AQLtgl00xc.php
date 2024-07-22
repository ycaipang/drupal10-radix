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

/* modules/contrib/better_exposed_filters/templates/bef-links.html.twig */
class __TwigTemplate_8ee10d3c75ef3085375299b53729bb33 extends Template
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
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["classes"] = ["bef-links", ((        // line 4
($context["is_nested"] ?? null)) ? ("bef-nested") : (""))];
        // line 7
        $context["is_nested"] = true;
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["hiddens"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["value"]) {
            // line 9
            yield "<input type=\"hidden\" name=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["name"], 9, $this->source), "html", null, true);
            yield "\" value=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 9, $this->source), "html", null, true);
            yield "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", ["form-select"], "method", false, false, true, 11), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 11), 11, $this->source), "html", null, true);
        yield ">
  ";
        // line 12
        $context["current_nesting_level"] = 0;
        // line 13
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["children"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 14
            yield "    ";
            $context["item"] = CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), $context["child"], [], "any", false, false, true, 14);
            // line 15
            yield "    ";
            if (CoreExtension::inFilter($context["child"], ($context["selected"] ?? null))) {
                // line 16
                yield "      ";
                $context["new_nesting_level"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["depth"] ?? null), $context["child"], [], "any", true, true, true, 16) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["depth"] ?? null), $context["child"], [], "any", false, false, true, 16)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["depth"] ?? null), $context["child"], [], "any", false, false, true, 16)) : (0));
                // line 17
                yield "    ";
            }
            // line 18
            yield "    ";
            $context["new_nesting_level"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["depth"] ?? null), $context["child"], [], "any", true, true, true, 18) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["depth"] ?? null), $context["child"], [], "any", false, false, true, 18)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["depth"] ?? null), $context["child"], [], "any", false, false, true, 18)) : (0));
            // line 19
            yield "    ";
            yield from             $this->loadTemplate("@better_exposed_filters/bef-nested-elements.html.twig", "modules/contrib/better_exposed_filters/templates/bef-links.html.twig", 19)->unwrap()->yield($context);
            // line 20
            yield "    ";
            $context["current_nesting_level"] = ($context["new_nesting_level"] ?? null);
            // line 21
            yield "  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["is_nested", "hiddens", "attributes", "children", "element", "selected", "depth"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/contrib/better_exposed_filters/templates/bef-links.html.twig";
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
        return array (  120 => 22,  106 => 21,  103 => 20,  100 => 19,  97 => 18,  94 => 17,  91 => 16,  88 => 15,  85 => 14,  67 => 13,  65 => 12,  60 => 11,  49 => 9,  45 => 8,  43 => 7,  41 => 4,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/better_exposed_filters/templates/bef-links.html.twig", "/app/web/modules/contrib/better_exposed_filters/templates/bef-links.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "for" => 8, "if" => 15, "include" => 19);
        static $filters = array("escape" => 9);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'include'],
                ['escape'],
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
