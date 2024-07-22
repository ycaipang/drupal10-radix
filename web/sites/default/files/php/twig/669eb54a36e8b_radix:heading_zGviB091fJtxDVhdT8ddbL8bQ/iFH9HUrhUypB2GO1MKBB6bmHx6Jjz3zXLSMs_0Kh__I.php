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

/* radix:heading */
class __TwigTemplate_302b478e3f940859195240d6cac857c1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'heading_content' => [$this, 'block_heading_content'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.radix--heading"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "radix:heading"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "radix:heading"));
        // line 24
        $___internal_parse_3_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 25
            yield "
";
            // line 26
            $context["heading_html_tag"] = ((array_key_exists("heading_html_tag", $context)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(($context["heading_html_tag"] ?? null), 26, $this->source), "h2")) : ("h2"));
            // line 27
            $context["display"] = (((true &&  !(null === [($context["display"] ?? null)]))) ? ([($context["display"] ?? null)]) : ([]));
            // line 28
            $context["heading_attributes"] = ((($context["heading_attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
            // line 29
            $context["heading_classes"] = Twig\Extension\CoreExtension::merge($this->sandbox->ensureToStringAllowed(($context["display"] ?? null), 29, $this->source), ((($context["heading_utility_classes"] ?? null)) ?: ([])));
            // line 30
            yield "
";
            // line 31
            if (($context["title_link"] ?? null)) {
                // line 32
                yield "  ";
                $context["heading_link_attributes"] = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(), "setAttribute", ["href", ($context["title_link"] ?? null)], "method", false, false, true, 32);
                // line 33
                yield "  ";
                $context["heading_link_classes"] = ((($context["heading_link_utility_classes"] ?? null)) ?: ([]));
            }
            // line 35
            yield "
";
            // line 36
            if (($context["content"] ?? null)) {
                // line 37
                yield "  <";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_html_tag"] ?? null), 37, $this->source), "html", null, true);
                yield " ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["heading_attributes"] ?? null), "addClass", [($context["heading_classes"] ?? null)], "method", false, false, true, 37), 37, $this->source), "html", null, true);
                yield ">
    ";
                // line 38
                yield from $this->unwrap()->yieldBlock('heading_content', $context, $blocks);
                // line 47
                yield "  </";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_html_tag"] ?? null), 47, $this->source), "html", null, true);
                yield ">
";
            }
            // line 49
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 24
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_3_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["heading_utility_classes", "title_link", "heading_link_utility_classes", "content"]);        return; yield '';
    }

    // line 38
    public function block_heading_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        yield "      ";
        if (($context["title_link"] ?? null)) {
            // line 40
            yield "        <a ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["heading_link_attributes"] ?? null), "addClass", [($context["heading_link_classes"] ?? null)], "method", false, false, true, 40), 40, $this->source), "html", null, true);
            yield ">
          ";
            // line 41
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 41, $this->source), "html", null, true);
            yield "
        </a>
      ";
        } else {
            // line 44
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 44, $this->source), "html", null, true);
            yield "
      ";
        }
        // line 46
        yield "    ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "radix:heading";
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
        return array (  125 => 46,  119 => 44,  113 => 41,  108 => 40,  105 => 39,  101 => 38,  95 => 24,  90 => 49,  84 => 47,  82 => 38,  75 => 37,  73 => 36,  70 => 35,  66 => 33,  63 => 32,  61 => 31,  58 => 30,  56 => 29,  54 => 28,  52 => 27,  50 => 26,  47 => 25,  45 => 24,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "radix:heading", "themes/contrib/radix/components/heading/heading.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 24, "set" => 26, "if" => 31, "block" => 38);
        static $filters = array("default" => 26, "merge" => 29, "escape" => 37, "spaceless" => 24);
        static $functions = array("create_attribute" => 28);

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'set', 'if', 'block'],
                ['default', 'merge', 'escape', 'spaceless'],
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
