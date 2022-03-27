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

/* themes/bootstrap4/templates/content/ds-reset--node-entry-short-title-year.html.twig */
class __TwigTemplate_3d447d624ebf61b306eaf2d56c7b1ecbe4d1facf4402d69ad6a67d86783d36ed extends \Twig\Template
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
        $context["year"] = twig_trim_filter($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_year", [], "any", false, false, true, 1), 0, [], "any", false, false, true, 1)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#plain_text"] ?? null) : null), 1, $this->source));
        // line 2
        echo "
";
        // line 3
        $this->loadTemplate("ds-reset--node-entry-short-title.html.twig", "themes/bootstrap4/templates/content/ds-reset--node-entry-short-title-year.html.twig", 3)->display($context);
        // line 4
        echo "<sup>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["year"] ?? null), 4, $this->source), "html", null, true);
        echo "</sup>
";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap4/templates/content/ds-reset--node-entry-short-title-year.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 4,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bootstrap4/templates/content/ds-reset--node-entry-short-title-year.html.twig", "C:\\Users\\agricola\\Projects\\OpenServer\\domains\\neolex\\themes\\bootstrap4\\templates\\content\\ds-reset--node-entry-short-title-year.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "include" => 3);
        static $filters = array("trim" => 1, "escape" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include'],
                ['trim', 'escape'],
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
