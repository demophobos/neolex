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

/* themes/bootstrap4/templates/paragraph/ds-reset--paragraph-see-reference.html.twig */
class __TwigTemplate_fc762d2ae33391b3c3d0cbc4b766049299f4428038675d3905f9d14ab2bf0052 extends \Twig\Template
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
        echo "<div class=\"see-references\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_see_reference_value", [], "any", false, false, true, 2));
        foreach ($context['_seq'] as $context["key"] => $context["items"]) {
            if ((twig_first($this->env, $context["key"]) != "#")) {
                // line 3
                echo "\t\t";
                $context["id"] = (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = $context["items"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#cache"] ?? null) : null), "keys", [], "any", false, false, true, 3)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[2] ?? null) : null);
                // line 4
                echo "\t\t<span class=\"badge border see-reference\">
\t\t\t<a href=\"/node/";
                // line 5
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 5, $this->source), "html", null, true);
                echo "\" class=\"use-ajax\" data-dialog-type=\"bootstrap4_modal\" data-dialog-options=\"{&quot;dialogClasses&quot;:&quot;modal-dialog-centered modal-dialog-scrollable modal-lg entry-modal relation-dialog&quot;,&quot;width&quot;:&quot;800&quot;,&quot;dialogShowHeader&quot;: false}\">
\t\t\t\t";
                // line 6
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_see_reference_value", [], "any", false, false, true, 6)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["key"]] ?? null) : null), 6, $this->source), "html", null, true);
                echo "
\t\t\t</a>
\t\t</span>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap4/templates/paragraph/ds-reset--paragraph-see-reference.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 10,  57 => 6,  53 => 5,  50 => 4,  47 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bootstrap4/templates/paragraph/ds-reset--paragraph-see-reference.html.twig", "C:\\Users\\agricola\\Projects\\OpenServer\\domains\\neolex\\themes\\bootstrap4\\templates\\paragraph\\ds-reset--paragraph-see-reference.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 2, "set" => 3);
        static $filters = array("first" => 2, "escape" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set'],
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
