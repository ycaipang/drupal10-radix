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

/* themes/custom/fd_drupal_radix/templates/navigation/links.html.twig */
class __TwigTemplate_1c46b266bd91d11aa8c385c900bc3a85 extends Template
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
        // line 34
        if (($context["links"] ?? null)) {
            // line 36
            yield from             $this->loadTemplate("themes/custom/fd_drupal_radix/templates/navigation/links.html.twig", "themes/custom/fd_drupal_radix/templates/navigation/links.html.twig", 36, "990912674")->unwrap()->yield(CoreExtension::merge($context, ["items" =>             // line 37
($context["links"] ?? null)]));
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["links"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/fd_drupal_radix/templates/navigation/links.html.twig";
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
        return array (  43 => 37,  42 => 36,  40 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/fd_drupal_radix/templates/navigation/links.html.twig", "/app/web/themes/custom/fd_drupal_radix/templates/navigation/links.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 34, "embed" => 36);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'embed'],
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


/* themes/custom/fd_drupal_radix/templates/navigation/links.html.twig */
class __TwigTemplate_1c46b266bd91d11aa8c385c900bc3a85___990912674 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'nav_items' => [$this, 'block_nav_items'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 36
        return "radix:nav";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("radix:nav", "themes/custom/fd_drupal_radix/templates/navigation/links.html.twig", 36);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["links"]);    }

    // line 40
    public function block_nav_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        yield "      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 42
            yield "        <li";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 42), "addClass", ["nav-item"], "method", false, false, true, 42), 42, $this->source), "html", null, true);
            yield ">";
            // line 43
            if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 43)) {
                // line 44
                yield "<span";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 44), "text_attributes", [], "any", false, false, true, 44), "addClass", ["nav-link"], "method", false, false, true, 44), 44, $this->source), "html", null, true);
                yield ">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                yield "</span>";
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 45
$context["item"], "text_attributes", [], "any", false, false, true, 45)) {
                // line 46
                yield "<span";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text_attributes", [], "any", false, false, true, 46), "addClass", ["nav-link"], "method", false, false, true, 46), 46, $this->source), "html", null, true);
                yield ">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                yield "</span>";
            } else {
                // line 48
                yield "<span class=\"nav-link\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                yield "</span>";
            }
            // line 50
            yield "</li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "    ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/fd_drupal_radix/templates/navigation/links.html.twig";
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
        return array (  185 => 52,  178 => 50,  173 => 48,  166 => 46,  164 => 45,  158 => 44,  156 => 43,  152 => 42,  147 => 41,  143 => 40,  131 => 36,  43 => 37,  42 => 36,  40 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/fd_drupal_radix/templates/navigation/links.html.twig", "/app/web/themes/custom/fd_drupal_radix/templates/navigation/links.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 41, "if" => 43);
        static $filters = array("escape" => 42);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
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
