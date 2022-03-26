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

/* themes/bootstrap4/templates/content/ds-reset--node-vocable.html.twig */
class __TwigTemplate_4daffcc53af2b8e711acdded92ecc1f9811efae7bd7d34ce9cc045478c6cb1cf extends \Twig\Template
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
        $context["node_id"] = twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "id", [], "method", false, false, true, 1);
        // line 2
        echo "
<h2 class=\"card-title vocable-title\">";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 3, $this->source), "html", null, true);
        echo "</h2>

";
        // line 5
        $context["results"] = twig_length_filter($this->env, views_get_view_result("_entry_history_by_vocable", "block_1", $this->sandbox->ensureToStringAllowed(($context["node_id"] ?? null), 5, $this->source)));
        // line 6
        echo "
";
        // line 7
        if ((($context["results"] ?? null) > 0)) {
            // line 8
            echo "\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("_entry_history_by_vocable", "block_1", $this->sandbox->ensureToStringAllowed(($context["node_id"] ?? null), 8, $this->source)), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "themes/bootstrap4/templates/content/ds-reset--node-vocable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  51 => 6,  49 => 5,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bootstrap4/templates/content/ds-reset--node-vocable.html.twig", "C:\\Users\\agricola\\Projects\\OpenServer\\domains\\neolex\\themes\\bootstrap4\\templates\\content\\ds-reset--node-vocable.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 7);
        static $filters = array("escape" => 3, "length" => 5);
        static $functions = array("drupal_view_result" => 5, "drupal_view" => 8);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'length'],
                ['drupal_view_result', 'drupal_view']
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
