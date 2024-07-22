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

/* radix:field */
class __TwigTemplate_bbdd26034651b65ca8e77877f37f9167 extends Template
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
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.radix--field"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "radix:field"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "radix:field"));
        // line 42
        $___internal_parse_4_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 43
            yield "
";
            // line 45
            $context["field_classes"] = Twig\Extension\CoreExtension::merge(["field", ("field--name-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 47
($context["field_name"] ?? null), 47, $this->source))), ("field--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 48
($context["field_type"] ?? null), 48, $this->source))), ("field--label-" . $this->sandbox->ensureToStringAllowed(            // line 49
($context["label_display"] ?? null), 49, $this->source)), (((            // line 50
($context["label_display"] ?? null) == "inline")) ? ("d-flex") : ("")), ((            // line 51
($context["multiple"] ?? null)) ? ("field--items") : ("field--item"))], ((            // line 52
($context["field_utility_classes"] ?? null)) ?: ([])));
            // line 54
            yield "
";
            // line 56
            $context["field_title_classes"] = Twig\Extension\CoreExtension::merge(["field__label", (((            // line 58
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))], ((            // line 59
($context["field_title_utility_classes"] ?? null)) ?: ([])));
            // line 61
            yield "
";
            // line 62
            if (($context["label_hidden"] ?? null)) {
                // line 63
                yield "  ";
                if (($context["multiple"] ?? null)) {
                    // line 64
                    yield "    <div ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["field_classes"] ?? null)], "method", false, false, true, 64), 64, $this->source), "html", null, true);
                    yield ">
      ";
                    // line 65
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 66
                        yield "        <div ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 66), "addClass", ["field__item"], "method", false, false, true, 66), 66, $this->source), "html", null, true);
                        yield ">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                        yield "</div>
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 68
                    yield "    </div>
  ";
                } else {
                    // line 70
                    yield "    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 71
                        yield "      <div ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["field_classes"] ?? null)], "method", false, false, true, 71), 71, $this->source), "html", null, true);
                        yield ">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
                        yield "</div>
    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 73
                    yield "  ";
                }
            } else {
                // line 75
                yield "  <div ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["field_classes"] ?? null)], "method", false, false, true, 75), 75, $this->source), "html", null, true);
                yield ">
    <div ";
                // line 76
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [($context["field_title_classes"] ?? null)], "method", false, false, true, 76), 76, $this->source), "html", null, true);
                yield ">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 76, $this->source), "html", null, true);
                yield "</div>
    ";
                // line 77
                if (($context["multiple"] ?? null)) {
                    // line 78
                    yield "      <div class=\"field__items\">
    ";
                }
                // line 80
                yield "
    ";
                // line 81
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 82
                    yield "      <div ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 82), "addClass", ["field__item"], "method", false, false, true, 82), 82, $this->source), "html", null, true);
                    yield ">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                    yield "</div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                yield "
    ";
                // line 85
                if (($context["multiple"] ?? null)) {
                    // line 86
                    yield "      </div>
    ";
                }
                // line 88
                yield "  </div>
";
            }
            // line 90
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 42
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_4_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["field_name", "field_type", "label_display", "multiple", "field_utility_classes", "field_title_utility_classes", "label_hidden", "attributes", "items", "title_attributes", "label"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "radix:field";
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
        return array (  169 => 42,  164 => 90,  160 => 88,  156 => 86,  154 => 85,  151 => 84,  140 => 82,  136 => 81,  133 => 80,  129 => 78,  127 => 77,  121 => 76,  116 => 75,  112 => 73,  101 => 71,  96 => 70,  92 => 68,  81 => 66,  77 => 65,  72 => 64,  69 => 63,  67 => 62,  64 => 61,  62 => 59,  61 => 58,  60 => 56,  57 => 54,  55 => 52,  54 => 51,  53 => 50,  52 => 49,  51 => 48,  50 => 47,  49 => 45,  46 => 43,  44 => 42,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "radix:field", "themes/contrib/radix/components/field/field.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 42, "set" => 45, "if" => 62, "for" => 65);
        static $filters = array("merge" => 52, "clean_class" => 47, "escape" => 64, "spaceless" => 42);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'set', 'if', 'for'],
                ['merge', 'clean_class', 'escape', 'spaceless'],
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
