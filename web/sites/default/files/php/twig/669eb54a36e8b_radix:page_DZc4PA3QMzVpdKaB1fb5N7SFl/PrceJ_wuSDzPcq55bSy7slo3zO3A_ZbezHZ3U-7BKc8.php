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

/* radix:page */
class __TwigTemplate_a2142ea48d1e0b2e125645e17e674152 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_navigation' => [$this, 'block_page_navigation'],
            'page_content' => [$this, 'block_page_content'],
            'page_footer' => [$this, 'block_page_footer'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.radix--page"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "radix:page"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "radix:page"));
        // line 7
        $context["page_attributes"] = ((($context["attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 8
        $context["page_classes"] = Twig\Extension\CoreExtension::merge(["page"], ((        // line 11
($context["page_utility_classes"] ?? null)) ?: ([])));
        // line 13
        yield "
<div ";
        // line 14
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page_attributes"] ?? null), "addClass", [($context["page_classes"] ?? null)], "method", false, false, true, 14), 14, $this->source), "html", null, true);
        yield ">
\t";
        // line 15
        yield from $this->unwrap()->yieldBlock('page_navigation', $context, $blocks);
        // line 18
        yield "
  ";
        // line 19
        yield from $this->unwrap()->yieldBlock('page_content', $context, $blocks);
        // line 25
        yield "
\t";
        // line 26
        yield from $this->unwrap()->yieldBlock('page_footer', $context, $blocks);
        // line 29
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "page_utility_classes"]);        return; yield '';
    }

    // line 15
    public function block_page_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        yield "\t\t";
        yield from         $this->loadTemplate("radix:page-navigation", "radix:page", 16)->unwrap()->yield($context);
        // line 17
        yield "\t";
        return; yield '';
    }

    // line 19
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        yield "    ";
        yield from         $this->loadTemplate("radix:page-content", "radix:page", 20)->unwrap()->yield(CoreExtension::merge($context, ["page_main_utility_classes" => ["py-5"], "page_header_container_utility_classes" => ["mb-3"]]));
        // line 24
        yield "  ";
        return; yield '';
    }

    // line 26
    public function block_page_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        yield "\t\t";
        yield from         $this->loadTemplate("radix:page-footer", "radix:page", 27)->unwrap()->yield($context);
        // line 28
        yield "\t";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "radix:page";
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
        return array (  109 => 28,  106 => 27,  102 => 26,  97 => 24,  94 => 20,  90 => 19,  85 => 17,  82 => 16,  78 => 15,  71 => 29,  69 => 26,  66 => 25,  64 => 19,  61 => 18,  59 => 15,  55 => 14,  52 => 13,  50 => 11,  49 => 8,  47 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "radix:page", "themes/contrib/radix/components/page/page.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "block" => 15, "include" => 16);
        static $filters = array("merge" => 11, "escape" => 14);
        static $functions = array("create_attribute" => 7);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'include'],
                ['merge', 'escape'],
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
