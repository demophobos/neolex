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

/* themes/bootstrap4/templates/content/ds-reset--node-entry.html.twig */
class __TwigTemplate_e68c1e821581294ef3f275e88058800ada6384156ff5417651d14b3164b8d197 extends \Twig\Template
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
        echo "<div class=\"card entry-card entry-status";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "isPublished", [], "method", false, false, true, 1), 1, $this->source), "html", null, true);
        echo "\">
\t<div class=\"card-header text-white\">
\t\t<h5 class=\"card-title\">
\t\t\t";
        // line 4
        $this->loadTemplate("ds-reset--node-entry-short-title.html.twig", "themes/bootstrap4/templates/content/ds-reset--node-entry.html.twig", 4)->display($context);
        // line 5
        echo "\t\t\t<span class=\"header-definition\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_headword_grammar_items", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</span>
\t\t</h5>
\t</div>
\t<div class=\"card-body\">
\t\t";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_senses", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "
\t\t";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_references", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "
\t</div>
\t<div class=\"card-footer\">
\t\t";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_sort_title", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "
\t\t";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_year", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "
\t</div>
\t";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content_moderation_control", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap4/templates/content/ds-reset--node-entry.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 16,  70 => 14,  66 => 13,  60 => 10,  56 => 9,  48 => 5,  46 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bootstrap4/templates/content/ds-reset--node-entry.html.twig", "C:\\Users\\agricola\\Projects\\OpenServer\\domains\\neolex\\themes\\bootstrap4\\templates\\content\\ds-reset--node-entry.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 4);
        static $filters = array("escape" => 1);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
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
