<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/bootstrap4/templates/paragraph/ds-reset--paragraph-spelling-reference.html.twig */
class __TwigTemplate_cffd45343abdbb4ae327c5f160c4c9963dbde7908340e84b0d1fd9ac6161648e extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"spelling-references\">
\t<span data-toggle=\"tooltip\" data-placement=\"left\" title=\"Орфографический вариант\" class=\"term-tooltip\">
\t\t<img src=\"/themes/images/o-circle.png\" class=\"term-image\">
\t</span>
\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_spelling_reference_value", [], "any", false, false, true, 5));
        foreach ($context['_seq'] as $context["key"] => $context["items"]) {
            if ((twig_first($this->env, $context["key"]) != "#")) {
                // line 6
                echo "\t\t<span class=\"badge border spelling-reference\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_spelling_reference_value", [], "any", false, false, true, 6)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["key"]] ?? null) : null), 6, $this->source), "html", null, true);
                echo "</span>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap4/templates/paragraph/ds-reset--paragraph-spelling-reference.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 8,  50 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bootstrap4/templates/paragraph/ds-reset--paragraph-spelling-reference.html.twig", "C:\\Users\\agricola\\Projects\\OpenServer\\domains\\neolex\\themes\\bootstrap4\\templates\\paragraph\\ds-reset--paragraph-spelling-reference.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 5);
        static $filters = array("first" => 5, "escape" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['first', 'escape'],
                []
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
