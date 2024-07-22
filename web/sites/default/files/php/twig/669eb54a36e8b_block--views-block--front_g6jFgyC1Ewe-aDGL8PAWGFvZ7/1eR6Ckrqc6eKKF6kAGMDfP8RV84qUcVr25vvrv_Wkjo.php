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

/* themes/custom/YC_theme/templates/block/block--views-block--frontpage-slider-main-block-1.html.twig */
class __TwigTemplate_f45f80db82aad960e41567ea6b104b6b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("YC_theme/view-frontpage-slider-main"), "html", null, true);
        yield "
";
        // line 33
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("YC_theme/slick"), "html", null, true);
        yield "

";
        // line 36
        $context["classes"] = ["block", ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 38
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 38), 38, $this->source))), ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 39
($context["plugin_id"] ?? null), 39, $this->source)))];
        // line 42
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 42), 42, $this->source), "html", null, true);
        yield ">
  ";
        // line 43
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 43, $this->source), "html", null, true);
        yield "
  ";
        // line 44
        if (($context["label"] ?? null)) {
            // line 45
            yield "    <h2";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 45, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 45, $this->source), "html", null, true);
            yield "</h2>
  ";
        }
        // line 47
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 47, $this->source), "html", null, true);
        yield "
  ";
        // line 48
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 80
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["configuration", "plugin_id", "attributes", "title_prefix", "label", "title_attributes", "title_suffix", "content_attributes", "content"]);        return; yield '';
    }

    // line 48
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        yield "    <div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["content"], "method", false, false, true, 49), 49, $this->source), "html", null, true);
        yield ">
      <div class=\"slider-home container\">
          ";
        // line 51
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 51, $this->source), "html", null, true);
        yield "
      </div>

      <!-- <div class=\"client-testimonials-wrapper\">
        <h2>Client Testimonials</h2>
        <div class=\"client-testimonials\">
          <div class=\"angel-oysters\">
            <p>Looks great thank you, hopefully stands up ok with the wind we get here. Thank you!</p>
            <span>Kady Halman, ANGEL OYSTERS</span>
          </div>

          <div class=\"w-w-hyundai\">
            <p>Thoroughly pleased with the new flags, they look great, the service provided was great and the turnaround time from ordering was excellent!</p>
            <span>WILD WEST HYUNDAI</span>
          </div>

          <div class=\"eco-outdoor\">
            <p>Looks great thank you, hopefully stands up ok with the wind we get here. Thank you!</p>
            <span>Jen Fossilo, ECO OUTDOOR</span>
          </div>
        </div>
        <div class=\"contact-btn\">
          <a href=\"#\">Send us your thoughts!</a>
        </div>
      </div> -->
      

    </div>
  ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/YC_theme/templates/block/block--views-block--frontpage-slider-main-block-1.html.twig";
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
        return array (  97 => 51,  91 => 49,  87 => 48,  80 => 80,  78 => 48,  73 => 47,  65 => 45,  63 => 44,  59 => 43,  54 => 42,  52 => 39,  51 => 38,  50 => 36,  45 => 33,  41 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/YC_theme/templates/block/block--views-block--frontpage-slider-main-block-1.html.twig", "/app/web/themes/custom/YC_theme/templates/block/block--views-block--frontpage-slider-main-block-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 36, "if" => 44, "block" => 48);
        static $filters = array("escape" => 32, "clean_class" => 38);
        static $functions = array("attach_library" => 32);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
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
