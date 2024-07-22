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

/* @better_exposed_filters/bef-nested-elements.html.twig */
class __TwigTemplate_8d2393c4d7babb3d8ce73e2ee4a083ed extends Template
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
        // line 15
        $___internal_parse_0_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 16
            yield "  ";
            $context["delta"] = abs((($context["current_nesting_level"] ?? null) - ($context["new_nesting_level"] ?? null)));
            // line 17
            yield "  ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["loop"] ?? null), "first", [], "any", false, false, true, 17)) {
                // line 18
                yield "    <ul>
  ";
            } else {
                // line 20
                yield "    ";
                if (($context["delta"] ?? null)) {
                    // line 21
                    yield "      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["delta"] ?? null)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 22
                        yield "        ";
                        if ((($context["new_nesting_level"] ?? null) > ($context["current_nesting_level"] ?? null))) {
                            // line 23
                            yield "          <ul>
        ";
                        } else {
                            // line 25
                            yield "          </ul>
        ";
                        }
                        // line 27
                        yield "      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 28
                    yield "    ";
                }
                // line 29
                yield "  ";
            }
            // line 30
            yield "
  <li>";
            // line 31
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["item"] ?? null), 31, $this->source), "html", null, true);
            yield "

  ";
            // line 33
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["loop"] ?? null), "last", [], "any", false, false, true, 33)) {
                // line 34
                yield "    ";
                // line 35
                yield "    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(($context["new_nesting_level"] ?? null), 0));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 36
                    yield "      </li></ul>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                yield "  ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 15
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_0_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["current_nesting_level", "new_nesting_level", "loop", "item"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@better_exposed_filters/bef-nested-elements.html.twig";
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
        return array (  112 => 15,  107 => 38,  100 => 36,  95 => 35,  93 => 34,  91 => 33,  86 => 31,  83 => 30,  80 => 29,  77 => 28,  71 => 27,  67 => 25,  63 => 23,  60 => 22,  55 => 21,  52 => 20,  48 => 18,  45 => 17,  42 => 16,  40 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "@better_exposed_filters/bef-nested-elements.html.twig", "/app/web/modules/contrib/better_exposed_filters/templates/bef-nested-elements.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 15, "set" => 16, "if" => 17, "for" => 21);
        static $filters = array("abs" => 16, "escape" => 31, "spaceless" => 15);
        static $functions = array("range" => 21);

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'set', 'if', 'for'],
                ['abs', 'escape', 'spaceless'],
                ['range'],
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
