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

/* radix:page-title */
class __TwigTemplate_7eb9545e40e21d7b655ad1b8e05293cc extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.radix--page-title"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "radix:page-title"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "radix:page-title"));
        // line 23
        $___internal_parse_14_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 24
            yield "
";
            // line 26
            $context["page_title_classes"] = Twig\Extension\CoreExtension::merge(["title", "page-title"], ((            // line 29
($context["page_title_utility_classes"] ?? null)) ?: ([])));
            // line 31
            yield "
";
            // line 32
            $context["title_attributes"] = ((($context["title_attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
            // line 33
            yield "
";
            // line 34
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 34, $this->source), "html", null, true);
            yield "

";
            // line 36
            if (Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["title"] ?? null))))) {
                // line 37
                yield "  ";
                // line 38
                yield from                 $this->loadTemplate("radix:heading", "radix:page-title", 38)->unwrap()->yield(CoreExtension::toArray(["heading_html_tag" => "h1", "content" =>                 // line 40
($context["title"] ?? null), "display" => ((                // line 41
array_key_exists("display", $context)) ? (Twig\Extension\CoreExtension::default(($context["display"] ?? null), "")) : ("")), "heading_utility_classes" =>                 // line 42
($context["page_title_classes"] ?? null)]));
            }
            // line 46
            yield "
";
            // line 47
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 47, $this->source), "html", null, true);
            yield "

";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 23
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_14_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page_title_utility_classes", "title_prefix", "title", "display", "title_suffix"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "radix:page-title";
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
        return array (  85 => 23,  78 => 47,  75 => 46,  72 => 42,  71 => 41,  70 => 40,  69 => 38,  67 => 37,  65 => 36,  60 => 34,  57 => 33,  55 => 32,  52 => 31,  50 => 29,  49 => 26,  46 => 24,  44 => 23,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "radix:page-title", "themes/contrib/radix/components/page-title/page-title.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 23, "set" => 26, "if" => 36, "include" => 38);
        static $filters = array("merge" => 29, "escape" => 34, "trim" => 36, "striptags" => 36, "render" => 36, "default" => 41, "spaceless" => 23);
        static $functions = array("create_attribute" => 32);

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'set', 'if', 'include'],
                ['merge', 'escape', 'trim', 'striptags', 'render', 'default', 'spaceless'],
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
