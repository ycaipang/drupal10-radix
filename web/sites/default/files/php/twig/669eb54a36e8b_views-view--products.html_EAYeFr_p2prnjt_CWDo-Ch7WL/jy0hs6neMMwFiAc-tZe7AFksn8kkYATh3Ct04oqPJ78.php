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

/* themes/custom/YC_theme/templates/views/views-view--products.html.twig */
class __TwigTemplate_dabf414f97f906563c5e8ce75fdb27d6 extends Template
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
        // line 33
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("YC_theme/product-list-filters"), "html", null, true);
        yield "

";
        // line 36
        $context["classes"] = ["view", ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 38
($context["id"] ?? null), 38, $this->source))), ("view-id-" . $this->sandbox->ensureToStringAllowed(        // line 39
($context["id"] ?? null), 39, $this->source)), ("view-display-id-" . $this->sandbox->ensureToStringAllowed(        // line 40
($context["display_id"] ?? null), 40, $this->source)), ((        // line 41
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 41, $this->source))) : (""))];
        // line 44
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 44), 44, $this->source), "html", null, true);
        yield ">
  ";
        // line 45
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 45, $this->source), "html", null, true);
        yield "
  ";
        // line 46
        if (($context["title"] ?? null)) {
            // line 47
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 47, $this->source), "html", null, true);
            yield "
  ";
        }
        // line 49
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 49, $this->source), "html", null, true);
        yield "
  ";
        // line 50
        if (($context["header"] ?? null)) {
            // line 51
            yield "    <div class=\"view-header\">
      ";
            // line 52
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 52, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 55
        yield "  ";
        if (($context["exposed"] ?? null)) {
            // line 56
            yield "    <div class=\"view-filters\">
      ";
            // line 57
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 57, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 60
        yield "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 61
            yield "    <div class=\"attachment attachment-before\">
      ";
            // line 62
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 62, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 65
        yield "
  ";
        // line 66
        if (($context["rows"] ?? null)) {
            // line 67
            yield "    <div class=\"view-content row\">
      ";
            // line 68
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 68, $this->source), "html", null, true);
            yield "
    </div>
  ";
        } elseif (        // line 70
($context["empty"] ?? null)) {
            // line 71
            yield "    <div class=\"view-empty\">
      ";
            // line 72
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 72, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 75
        yield "
  ";
        // line 76
        if (($context["pager"] ?? null)) {
            // line 77
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 77, $this->source), "html", null, true);
            yield "
  ";
        }
        // line 79
        yield "  ";
        if (($context["attachment_after"] ?? null)) {
            // line 80
            yield "    <div class=\"attachment attachment-after\">
      ";
            // line 81
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 81, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 84
        yield "  ";
        if (($context["more"] ?? null)) {
            // line 85
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 85, $this->source), "html", null, true);
            yield "
  ";
        }
        // line 87
        yield "  ";
        if (($context["footer"] ?? null)) {
            // line 88
            yield "    <div class=\"view-footer\">
      ";
            // line 89
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 89, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 92
        yield "  ";
        if (($context["feed_icons"] ?? null)) {
            // line 93
            yield "    <div class=\"feed-icons\">
      ";
            // line 94
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 94, $this->source), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 97
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["id", "display_id", "dom_id", "attributes", "title_prefix", "title", "title_suffix", "header", "exposed", "attachment_before", "rows", "empty", "pager", "attachment_after", "more", "footer", "feed_icons"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/YC_theme/templates/views/views-view--products.html.twig";
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
        return array (  188 => 97,  182 => 94,  179 => 93,  176 => 92,  170 => 89,  167 => 88,  164 => 87,  158 => 85,  155 => 84,  149 => 81,  146 => 80,  143 => 79,  137 => 77,  135 => 76,  132 => 75,  126 => 72,  123 => 71,  121 => 70,  116 => 68,  113 => 67,  111 => 66,  108 => 65,  102 => 62,  99 => 61,  96 => 60,  90 => 57,  87 => 56,  84 => 55,  78 => 52,  75 => 51,  73 => 50,  68 => 49,  62 => 47,  60 => 46,  56 => 45,  51 => 44,  49 => 41,  48 => 40,  47 => 39,  46 => 38,  45 => 36,  40 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/YC_theme/templates/views/views-view--products.html.twig", "/app/web/themes/custom/YC_theme/templates/views/views-view--products.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 36, "if" => 46);
        static $filters = array("escape" => 33, "clean_class" => 38);
        static $functions = array("attach_library" => 33);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'clean_class'],
                ['attach_library'],
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
