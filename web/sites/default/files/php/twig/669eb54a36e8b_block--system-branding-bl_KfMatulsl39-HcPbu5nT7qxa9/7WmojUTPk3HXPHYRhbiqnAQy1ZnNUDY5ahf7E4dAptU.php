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

/* themes/custom/fd_drupal_radix/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_eb25642528360c9d748a3445fdca6e58 extends Template
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
        // line 16
        yield from         $this->loadTemplate("themes/custom/fd_drupal_radix/templates/block/block--system-branding-block.html.twig", "themes/custom/fd_drupal_radix/templates/block/block--system-branding-block.html.twig", 16, "504234505")->unwrap()->yield(CoreExtension::merge($context, ["block_utility_classes" => ["block--system-branding"]]));
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/fd_drupal_radix/templates/block/block--system-branding-block.html.twig";
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
        return array (  40 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/fd_drupal_radix/templates/block/block--system-branding-block.html.twig", "/app/web/themes/custom/fd_drupal_radix/templates/block/block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("embed" => 16);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['embed'],
                [],
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


/* themes/custom/fd_drupal_radix/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_eb25642528360c9d748a3445fdca6e58___504234505 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'block_content' => [$this, 'block_block_content'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        return "radix:block";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("radix:block", "themes/custom/fd_drupal_radix/templates/block/block--system-branding-block.html.twig", 16);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["site_name", "site_slogan", "site_logo", "elements"]);    }

    // line 22
    public function block_block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        yield "    ";
        // line 24
        yield from         $this->loadTemplate("radix:navbar-brand", "themes/custom/fd_drupal_radix/templates/block/block--system-branding-block.html.twig", 24)->unwrap()->yield(CoreExtension::merge($context, ["text" =>         // line 25
($context["site_name"] ?? null), "site_slogan" =>         // line 26
($context["site_slogan"] ?? null), "image" =>         // line 27
($context["site_logo"] ?? null), "width" => "40px", "height" => "auto", "path" => $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"), "alt" => ((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 31
($context["elements"] ?? null), "content", [], "any", false, false, true, 31), "site_name", [], "any", false, false, true, 31)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#markup"] ?? null) : null) . " logo"), "navbar_brand_utility_classes" => ["d-inline-flex", "align-items-center"]]));
        // line 38
        yield "  ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/fd_drupal_radix/templates/block/block--system-branding-block.html.twig";
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
        return array (  149 => 38,  147 => 31,  146 => 27,  145 => 26,  144 => 25,  143 => 24,  141 => 23,  137 => 22,  40 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/fd_drupal_radix/templates/block/block--system-branding-block.html.twig", "/app/web/themes/custom/fd_drupal_radix/templates/block/block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 24);
        static $filters = array();
        static $functions = array("path" => 30);

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                [],
                ['path'],
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
