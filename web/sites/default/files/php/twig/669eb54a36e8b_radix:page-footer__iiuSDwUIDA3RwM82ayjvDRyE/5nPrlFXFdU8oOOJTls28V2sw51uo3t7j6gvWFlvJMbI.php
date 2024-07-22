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

/* radix:page-footer */
class __TwigTemplate_4bbde9f9ce00b7b65bffd911fd14ef04 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_inner_footer' => [$this, 'block_page_inner_footer'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.radix--page-footer"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "radix:page-footer"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "radix:page-footer"));
        // line 7
        $___internal_parse_15_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 8
            yield "
";
            // line 9
            $context["footer_attributes"] = ((($context["footer_attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
            // line 11
            $context["footer_classes"] = Twig\Extension\CoreExtension::merge(["page__footer"], ((            // line 13
($context["footer_utility_classes"] ?? null)) ?: ([])));
            // line 15
            yield "
";
            // line 16
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 16)) {
                // line 17
                yield "  <footer ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["footer_attributes"] ?? null), "addClass", [($context["footer_classes"] ?? null)], "method", false, false, true, 17), 17, $this->source), "html", null, true);
                yield ">
    <div class=\"container\">
      <div class=\"d-flex flex-wrap justify-content-md-between align-items-md-center\">
        ";
                // line 20
                yield from $this->unwrap()->yieldBlock('page_inner_footer', $context, $blocks);
                // line 23
                yield "      </div>
    </div>
  </footer>
";
            }
            // line 27
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 7
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_15_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["footer_utility_classes", "page"]);        return; yield '';
    }

    // line 20
    public function block_page_inner_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        yield "          ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        yield "
        ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "radix:page-footer";
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
        return array (  90 => 21,  86 => 20,  80 => 7,  75 => 27,  69 => 23,  67 => 20,  60 => 17,  58 => 16,  55 => 15,  53 => 13,  52 => 11,  50 => 9,  47 => 8,  45 => 7,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "radix:page-footer", "themes/contrib/radix/components/page-footer/page-footer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 7, "set" => 9, "if" => 16, "block" => 20);
        static $filters = array("merge" => 13, "escape" => 17, "spaceless" => 7);
        static $functions = array("create_attribute" => 9);

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'set', 'if', 'block'],
                ['merge', 'escape', 'spaceless'],
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
