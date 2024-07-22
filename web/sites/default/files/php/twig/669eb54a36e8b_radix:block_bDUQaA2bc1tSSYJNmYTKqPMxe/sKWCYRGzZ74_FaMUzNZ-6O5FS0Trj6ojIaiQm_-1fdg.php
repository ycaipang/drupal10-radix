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

/* radix:block */
class __TwigTemplate_9db3a0f5e45d387897afcc949363974b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'block_label' => [$this, 'block_block_label'],
            'block_content' => [$this, 'block_block_content'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.radix--block"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "radix:block"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "radix:block"));
        // line 33
        $___internal_parse_11_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 34
            yield "
";
            // line 35
            $context["block_attributes"] = ((($context["attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
            // line 36
            $context["block_html_tag"] = (($context["block_html_tag"]) ?? ("div"));
            // line 37
            yield "
";
            // line 39
            $context["block_classes"] = Twig\Extension\CoreExtension::merge(["block", ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,             // line 41
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 41), 41, $this->source))), ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 42
($context["plugin_id"] ?? null), 42, $this->source))), ((            // line 43
($context["layout"] ?? null)) ? (("layout--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["layout"] ?? null), 43, $this->source)))) : ("")), ((            // line 44
($context["bundle"] ?? null)) ? (("block--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["bundle"] ?? null), 44, $this->source)))) : ("")), ((            // line 45
($context["id"] ?? null)) ? (("block--" . \Drupal\Component\Utility\Html::getClass(Twig\Extension\CoreExtension::replace($this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 45, $this->source), ["_" => "-"])))) : (""))], ((            // line 46
($context["block_utility_classes"] ?? null)) ?: ([])));
            // line 48
            yield "
";
            // line 50
            $context["block_content_classes"] = Twig\Extension\CoreExtension::merge(["block__content"], ((            // line 52
($context["block_content_utility_classes"] ?? null)) ?: ([])));
            // line 54
            yield "
";
            // line 55
            if (($context["block_html_tag"] ?? null)) {
                // line 56
                yield "<";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_html_tag"] ?? null), 56, $this->source), "html", null, true);
                yield " ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["block_attributes"] ?? null), 56, $this->source), "id"), "addClass", [($context["block_classes"] ?? null)], "method", false, false, true, 56), 56, $this->source), "html", null, true);
                yield ">
";
            }
            // line 58
            yield "
  ";
            // line 59
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 59, $this->source), "html", null, true);
            yield "
  ";
            // line 60
            yield from $this->unwrap()->yieldBlock('block_label', $context, $blocks);
            // line 72
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 72, $this->source), "html", null, true);
            yield "

  ";
            // line 74
            yield from $this->unwrap()->yieldBlock('block_content', $context, $blocks);
            // line 81
            yield "
";
            // line 82
            if (($context["block_html_tag"] ?? null)) {
                // line 83
                yield "</";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_html_tag"] ?? null), 83, $this->source), "html", null, true);
                yield ">
";
            }
            // line 85
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 33
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_11_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "configuration", "plugin_id", "layout", "bundle", "id", "block_utility_classes", "block_content_utility_classes", "title_prefix", "title_suffix", "label", "title_attributes", "content", "content_attributes"]);        return; yield '';
    }

    // line 60
    public function block_block_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        yield "    ";
        if (($context["label"] ?? null)) {
            // line 62
            yield "      ";
            // line 63
            yield from             $this->loadTemplate("radix:heading", "radix:block", 63)->unwrap()->yield(CoreExtension::merge($context, ["heading_html_tag" => "h2", "content" =>             // line 65
($context["label"] ?? null), "heading_attributes" =>             // line 66
($context["title_attributes"] ?? null), "heading_utility_classes" => ["block__title"]]));
            // line 70
            yield "    ";
        }
        // line 71
        yield "  ";
        return; yield '';
    }

    // line 74
    public function block_block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        yield "    ";
        if (($context["content"] ?? null)) {
            // line 76
            yield "      <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [($context["block_content_classes"] ?? null)], "method", false, false, true, 76), 76, $this->source), "html", null, true);
            yield ">
        ";
            // line 77
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 77, $this->source), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 80
        yield "  ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "radix:block";
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
        return array (  163 => 80,  157 => 77,  152 => 76,  149 => 75,  145 => 74,  140 => 71,  137 => 70,  135 => 66,  134 => 65,  133 => 63,  131 => 62,  128 => 61,  124 => 60,  118 => 33,  113 => 85,  107 => 83,  105 => 82,  102 => 81,  100 => 74,  94 => 72,  92 => 60,  88 => 59,  85 => 58,  77 => 56,  75 => 55,  72 => 54,  70 => 52,  69 => 50,  66 => 48,  64 => 46,  63 => 45,  62 => 44,  61 => 43,  60 => 42,  59 => 41,  58 => 39,  55 => 37,  53 => 36,  51 => 35,  48 => 34,  46 => 33,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "radix:block", "themes/contrib/radix/components/block/block.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 33, "set" => 35, "if" => 55, "block" => 60, "include" => 63);
        static $filters = array("merge" => 46, "clean_class" => 41, "replace" => 45, "escape" => 56, "without" => 56, "spaceless" => 33);
        static $functions = array("create_attribute" => 35);

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'set', 'if', 'block', 'include'],
                ['merge', 'clean_class', 'replace', 'escape', 'without', 'spaceless'],
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
