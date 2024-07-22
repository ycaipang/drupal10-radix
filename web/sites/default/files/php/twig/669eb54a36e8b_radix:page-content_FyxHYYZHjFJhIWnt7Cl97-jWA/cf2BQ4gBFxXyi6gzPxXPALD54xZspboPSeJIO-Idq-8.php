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

/* radix:page-content */
class __TwigTemplate_e1f8544c879ed044b0d4bf10b6aa127f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_header' => [$this, 'block_page_header'],
            'page_inner_content' => [$this, 'block_page_inner_content'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.radix--page-content"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "radix:page-content"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "radix:page-content"));
        // line 18
        $context["page_header_container_attributes"] = ((($context["page_header_container_attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 19
        $context["page_content_container_attributes"] = ((($context["page_content_container_attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 20
        yield "
";
        // line 22
        $context["page_main_classes"] = Twig\Extension\CoreExtension::merge([], ((($context["page_main_utility_classes"] ?? null)) ?: ([])));
        // line 24
        yield "
";
        // line 25
        $context["header_container_class"] = "";
        // line 26
        if ((null === ($context["page_header_container_type"] ?? null))) {
            // line 27
            yield "  ";
            $context["header_container_class"] = "container";
        } elseif ( !Twig\Extension\CoreExtension::testEmpty(        // line 28
($context["page_header_container_type"] ?? null))) {
            // line 29
            yield "  ";
            $context["header_container_class"] = ("container-" . $this->sandbox->ensureToStringAllowed(($context["page_header_container_type"] ?? null), 29, $this->source));
        }
        // line 32
        $context["page_header_container_classes"] = Twig\Extension\CoreExtension::merge([        // line 33
($context["header_container_class"] ?? null)], ((        // line 34
($context["page_header_container_utility_classes"] ?? null)) ?: ([])));
        // line 36
        yield "
";
        // line 37
        $context["content_container_class"] = "";
        // line 38
        if ((null === ($context["page_content_container_type"] ?? null))) {
            // line 39
            yield "  ";
            $context["content_container_class"] = "container";
        } elseif ( !Twig\Extension\CoreExtension::testEmpty(        // line 40
($context["page_content_container_type"] ?? null))) {
            // line 41
            yield "  ";
            $context["content_container_class"] = ("container-" . $this->sandbox->ensureToStringAllowed(($context["page_content_container_type"] ?? null), 41, $this->source));
        }
        // line 44
        $context["page_content_container_classes"] = Twig\Extension\CoreExtension::merge([        // line 45
($context["content_container_class"] ?? null)], ((        // line 46
($context["page_content_container_utility_classes"] ?? null)) ?: ([])));
        // line 48
        yield "
<main";
        // line 49
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [($context["page_main_classes"] ?? null)], "method", false, false, true, 49), 49, $this->source), "html", null, true);
        yield ">
\t";
        // line 50
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 50)) {
            // line 51
            yield "\t\t<header class=\"page__header\">
\t\t\t<div ";
            // line 52
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page_header_container_attributes"] ?? null), "addClass", [($context["page_header_container_classes"] ?? null)], "method", false, false, true, 52), 52, $this->source), "html", null, true);
            yield ">
\t\t\t\t";
            // line 53
            yield from $this->unwrap()->yieldBlock('page_header', $context, $blocks);
            // line 56
            yield "\t\t\t</div>
\t\t</header>
\t";
        }
        // line 59
        yield "
\t";
        // line 60
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 60)) {
            // line 61
            yield "    <div class=\"page__content\" id=\"main-content\">
      <div ";
            // line 62
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page_content_container_attributes"] ?? null), "addClass", [($context["page_content_container_classes"] ?? null)], "method", false, false, true, 62), 62, $this->source), "html", null, true);
            yield ">
        ";
            // line 63
            yield from $this->unwrap()->yieldBlock('page_inner_content', $context, $blocks);
            // line 66
            yield "      </div>
    </div>
  ";
        }
        // line 69
        yield "</main>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page_main_utility_classes", "page_header_container_type", "page_header_container_utility_classes", "page_content_container_type", "page_content_container_utility_classes", "content_attributes", "page"]);        return; yield '';
    }

    // line 53
    public function block_page_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        yield "\t\t\t\t\t";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        yield "
\t\t\t\t";
        return; yield '';
    }

    // line 63
    public function block_page_inner_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        yield "          ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
        yield "
        ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "radix:page-content";
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
        return array (  160 => 64,  156 => 63,  148 => 54,  144 => 53,  137 => 69,  132 => 66,  130 => 63,  126 => 62,  123 => 61,  121 => 60,  118 => 59,  113 => 56,  111 => 53,  107 => 52,  104 => 51,  102 => 50,  98 => 49,  95 => 48,  93 => 46,  92 => 45,  91 => 44,  87 => 41,  85 => 40,  82 => 39,  80 => 38,  78 => 37,  75 => 36,  73 => 34,  72 => 33,  71 => 32,  67 => 29,  65 => 28,  62 => 27,  60 => 26,  58 => 25,  55 => 24,  53 => 22,  50 => 20,  48 => 19,  46 => 18,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "radix:page-content", "themes/contrib/radix/components/page-content/page-content.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 18, "if" => 26, "block" => 53);
        static $filters = array("merge" => 22, "escape" => 49);
        static $functions = array("create_attribute" => 18);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
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
