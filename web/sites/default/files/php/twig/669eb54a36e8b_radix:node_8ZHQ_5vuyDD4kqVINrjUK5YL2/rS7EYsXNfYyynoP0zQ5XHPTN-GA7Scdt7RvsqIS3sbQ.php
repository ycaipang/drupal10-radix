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

/* radix:node */
class __TwigTemplate_56a325097d8d86ab795314199c2025bd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'node_title' => [$this, 'block_node_title'],
            'node_metadata' => [$this, 'block_node_metadata'],
            'node_content' => [$this, 'block_node_content'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.radix--node"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "radix:node"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "radix:node"));
        // line 33
        $___internal_parse_2_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 34
            yield "
";
            // line 36
            $context["node_classes"] = Twig\Extension\CoreExtension::merge(["node", ((CoreExtension::getAttribute($this->env, $this->source,             // line 38
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 38)) ? ("node--promoted") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,             // line 39
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 39)) ? ("node--sticky") : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,             // line 40
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 40)) ? ("node--unpublished") : ("")), \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,             // line 41
($context["node"] ?? null), "bundle", [], "any", false, false, true, 41), 41, $this->source)), ((\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,             // line 42
($context["node"] ?? null), "bundle", [], "any", false, false, true, 42), 42, $this->source)) . "--") . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 42, $this->source))), ((("node--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,             // line 43
($context["node"] ?? null), "bundle", [], "any", false, false, true, 43), 43, $this->source))) . "--") . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 43, $this->source))), ("view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 44
($context["view_mode"] ?? null), 44, $this->source)))], ((            // line 45
($context["node_utility_classes"] ?? null)) ?: ([])));
            // line 47
            yield "
";
            // line 49
            $context["author_classes"] = Twig\Extension\CoreExtension::merge(["author"], ((            // line 51
($context["author_utility_classes"] ?? null)) ?: ([])));
            // line 53
            yield "
";
            // line 55
            $context["node_content_classes"] = Twig\Extension\CoreExtension::merge(["node-content"], ((            // line 57
($context["node_content_utility_classes"] ?? null)) ?: ([])));
            // line 59
            yield "
";
            // line 60
            $context["node_attributes"] = ((($context["attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
            // line 61
            yield "
<article ";
            // line 62
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["node_attributes"] ?? null), "addClass", [($context["node_classes"] ?? null)], "method", false, false, true, 62), 62, $this->source), "html", null, true);
            yield ">
  ";
            // line 63
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 63, $this->source), "html", null, true);
            yield "

  ";
            // line 65
            yield from $this->unwrap()->yieldBlock('node_title', $context, $blocks);
            // line 76
            yield "
  ";
            // line 77
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 77, $this->source), "html", null, true);
            yield "

  ";
            // line 79
            yield from $this->unwrap()->yieldBlock('node_metadata', $context, $blocks);
            // line 92
            yield "
  <div ";
            // line 93
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [($context["node_content_classes"] ?? null)], "method", false, false, true, 93), 93, $this->source), "html", null, true);
            yield ">
    ";
            // line 94
            yield from $this->unwrap()->yieldBlock('node_content', $context, $blocks);
            // line 97
            yield "  </div>
</article>

";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 33
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_2_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "node_utility_classes", "author_utility_classes", "node_content_utility_classes", "attributes", "title_prefix", "title_suffix", "content_attributes", "page", "label", "url", "display_submitted", "author_picture", "author_attributes", "author_name", "date", "metadata", "content"]);        return; yield '';
    }

    // line 65
    public function block_node_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        yield "    ";
        if ( !($context["page"] ?? null)) {
            // line 67
            yield "      ";
            // line 68
            yield from             $this->loadTemplate("radix:heading", "radix:node", 68)->unwrap()->yield(CoreExtension::merge($context, ["content" => ((            // line 69
array_key_exists("label", $context)) ? (Twig\Extension\CoreExtension::default(($context["label"] ?? null), "")) : ("")), "heading_html_tag" => "h2", "title_link" =>             // line 71
($context["url"] ?? null)]));
            // line 74
            yield "    ";
        }
        // line 75
        yield "  ";
        return; yield '';
    }

    // line 79
    public function block_node_metadata($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 80
        yield "    ";
        if (($context["display_submitted"] ?? null)) {
            // line 81
            yield "      <footer>
        ";
            // line 82
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 82, $this->source), "html", null, true);
            yield "
        <div ";
            // line 83
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["author_attributes"] ?? null), "addClass", [($context["author_classes"] ?? null)], "method", false, false, true, 83), 83, $this->source), "html", null, true);
            yield ">
          ";
            // line 84
            yield t("Submitted by @author_name on @date", array("@author_name" =>             // line 85
($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
            // line 87
            yield "          ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 87, $this->source), "html", null, true);
            yield "
        </div>
      </footer>
    ";
        }
        // line 91
        yield "  ";
        return; yield '';
    }

    // line 94
    public function block_node_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 95
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 95, $this->source), "html", null, true);
        yield "
    ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "radix:node";
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
        return array (  184 => 95,  180 => 94,  175 => 91,  167 => 87,  165 => 85,  164 => 84,  160 => 83,  156 => 82,  153 => 81,  150 => 80,  146 => 79,  141 => 75,  138 => 74,  136 => 71,  135 => 69,  134 => 68,  132 => 67,  129 => 66,  125 => 65,  119 => 33,  112 => 97,  110 => 94,  106 => 93,  103 => 92,  101 => 79,  96 => 77,  93 => 76,  91 => 65,  86 => 63,  82 => 62,  79 => 61,  77 => 60,  74 => 59,  72 => 57,  71 => 55,  68 => 53,  66 => 51,  65 => 49,  62 => 47,  60 => 45,  59 => 44,  58 => 43,  57 => 42,  56 => 41,  55 => 40,  54 => 39,  53 => 38,  52 => 36,  49 => 34,  47 => 33,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "radix:node", "themes/contrib/radix/components/node/node.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 33, "set" => 36, "block" => 65, "if" => 66, "include" => 68, "trans" => 84);
        static $filters = array("merge" => 45, "clean_class" => 41, "escape" => 62, "spaceless" => 33, "default" => 69);
        static $functions = array("create_attribute" => 60);

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'set', 'block', 'if', 'include', 'trans'],
                ['merge', 'clean_class', 'escape', 'spaceless', 'default'],
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
