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

/* radix:navbar-brand */
class __TwigTemplate_11287dfb42d329d43e7007719b5e37c8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'logo' => [$this, 'block_logo'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.radix--navbar-brand"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "radix:navbar-brand"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "radix:navbar-brand"));
        // line 17
        $___internal_parse_12_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 18
            yield "
";
            // line 19
            $macros["navbar_brand"] = $this->macros["navbar_brand"] = $this;
            // line 20
            $context["navbar_brand_utility_classes"] = Twig\Extension\CoreExtension::join($this->sandbox->ensureToStringAllowed(($context["navbar_brand_utility_classes"] ?? null), 20, $this->source), " ");
            // line 21
            yield "
";
            // line 22
            if (($context["path"] ?? null)) {
                // line 23
                yield "  <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["path"] ?? null), 23, $this->source), "html", null, true);
                yield "\" class=\"navbar-brand ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_brand_utility_classes"] ?? null), 23, $this->source), "html", null, true);
                yield "\" ";
                if ((array_key_exists("text", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["text"] ?? null)))) {
                    yield "aria-label=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 23, $this->source), "html", null, true);
                    yield "\"";
                }
                yield ">
    ";
                // line 24
                yield from $this->unwrap()->yieldBlock('logo', $context, $blocks);
                // line 43
                yield "  </a>
";
            } else {
                // line 45
                yield "  <span class=\"navbar-brand h1 mb-0 ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_brand_utility_classes"] ?? null), 45, $this->source), "html", null, true);
                yield "\" ";
                if ((array_key_exists("text", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["text"] ?? null)))) {
                    yield "aria-label=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 45, $this->source), "html", null, true);
                    yield "\"";
                }
                yield ">
    ";
                // line 46
                if (($context["image"] ?? null)) {
                    // line 47
                    yield "      ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["navbar_brand"], "macro_image", [($context["image"] ?? null), ($context["width"] ?? null), ($context["height"] ?? null), ($context["alt"] ?? null)], 47, $context, $this->getSourceContext()));
                    yield "
    ";
                }
                // line 49
                yield "
    ";
                // line 50
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 50, $this->source), "html", null, true);
                yield "
  </span>
";
            }
            // line 53
            yield "
";
            // line 58
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 17
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_12_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "path", "text", "image", "width", "height", "alt", "site_slogan", "src"]);        return; yield '';
    }

    // line 24
    public function block_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        yield "      <div class=\"navbar-brand__logo\">
        ";
        // line 26
        if (($context["image"] ?? null)) {
            // line 27
            yield "          ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["navbar_brand"], "macro_image", [($context["image"] ?? null), ($context["width"] ?? null), ($context["height"] ?? null), ($context["alt"] ?? null)], 27, $context, $this->getSourceContext()));
            yield "
        ";
        }
        // line 29
        yield "      </div>

      ";
        // line 31
        if ((($context["text"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 32
            yield "        <div class=\"navbar-brand__text d-flex flex-column\">
          ";
            // line 33
            if (($context["text"] ?? null)) {
                // line 34
                yield "            <span>";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 34, $this->source), "html", null, true);
                yield "</span>
          ";
            }
            // line 36
            yield "
          ";
            // line 37
            if (($context["site_slogan"] ?? null)) {
                // line 38
                yield "            <span class=\"small text-muted\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 38, $this->source), "html", null, true);
                yield "</span>
          ";
            }
            // line 40
            yield "        </div>
      ";
        }
        // line 42
        yield "    ";
        return; yield '';
    }

    // line 54
    public function macro_image($__src__ = null, $__width__ = null, $__height__ = null, $__alt__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "src" => $__src__,
            "width" => $__width__,
            "height" => $__height__,
            "alt" => $__alt__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 55
            yield "  ";
            $context["height_attribute"] = (((($context["height"] ?? null) != "auto")) ? ((("height=\"" . $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 55, $this->source)) . "\"")) : (""));
            // line 56
            yield "  <img src=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["src"] ?? null), 56, $this->source), "html", null, true);
            yield "\" width=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("width", $context)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 56, $this->source), 140)) : (140)), "html", null, true);
            yield "\" ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height_attribute"] ?? null), 56, $this->source), "html", null, true);
            yield " alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("alt", $context)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(($context["alt"] ?? null), 56, $this->source), "")) : ("")), "html", null, true);
            yield "\" />
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "radix:navbar-brand";
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
        return array (  190 => 56,  187 => 55,  172 => 54,  167 => 42,  163 => 40,  157 => 38,  155 => 37,  152 => 36,  146 => 34,  144 => 33,  141 => 32,  139 => 31,  135 => 29,  129 => 27,  127 => 26,  124 => 25,  120 => 24,  114 => 17,  109 => 58,  106 => 53,  100 => 50,  97 => 49,  91 => 47,  89 => 46,  78 => 45,  74 => 43,  72 => 24,  59 => 23,  57 => 22,  54 => 21,  52 => 20,  50 => 19,  47 => 18,  45 => 17,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "radix:navbar-brand", "themes/contrib/radix/components/navbar-brand/navbar-brand.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 17, "import" => 19, "set" => 20, "if" => 22, "block" => 24, "macro" => 54);
        static $filters = array("join" => 20, "escape" => 23, "spaceless" => 17, "default" => 56);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'import', 'set', 'if', 'block', 'macro'],
                ['join', 'escape', 'spaceless', 'default'],
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
