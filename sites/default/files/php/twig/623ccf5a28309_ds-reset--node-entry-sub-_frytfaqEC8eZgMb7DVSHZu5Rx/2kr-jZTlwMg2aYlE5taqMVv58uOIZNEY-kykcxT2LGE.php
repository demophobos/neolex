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

/* themes/bootstrap4/templates/content/ds-reset--node-entry-sub-entry.html.twig */
class __TwigTemplate_d352f57488e10411dca98fc9bef555465d1ab121f9d6a178189737f8bf6c0842 extends \Twig\Template
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
        $context["id"] = twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "any", false, false, true, 1);
        // line 2
        echo "
<div class=\"sub-entry pt-1\">
\t<a data-toggle=\"collapse\" href=\"#collapse_";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 4, $this->source), "html", null, true);
        echo "\" aria-expanded=\"false\" aria-controls=\"collapse_";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 4, $this->source), "html", null, true);
        echo "\">
\t\t<h5 class=\"sub-entry-title\">
\t\t\t";
        // line 6
        $this->loadTemplate("ds-reset--node-entry-short-title.html.twig", "themes/bootstrap4/templates/content/ds-reset--node-entry-sub-entry.html.twig", 6)->display($context);
        // line 7
        echo "\t\t</h5>
\t</a>
\t<div class=\"collapse show sub-entry-region\" id=\"collapse_";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 9, $this->source), "html", null, true);
        echo "\">
\t\t<div class=\"entry-definition-section\">
\t\t\t";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_senses", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "
\t\t\t";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_references", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap4/templates/content/ds-reset--node-entry-sub-entry.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 12,  63 => 11,  58 => 9,  54 => 7,  52 => 6,  45 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bootstrap4/templates/content/ds-reset--node-entry-sub-entry.html.twig", "C:\\Users\\agricola\\Projects\\OpenServer\\domains\\neolex\\themes\\bootstrap4\\templates\\content\\ds-reset--node-entry-sub-entry.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "include" => 6);
        static $filters = array("escape" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include'],
                ['escape'],
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
