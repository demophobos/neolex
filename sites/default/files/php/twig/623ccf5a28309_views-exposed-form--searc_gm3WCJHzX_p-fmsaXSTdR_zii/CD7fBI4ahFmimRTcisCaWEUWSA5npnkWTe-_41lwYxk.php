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

/* themes/bootstrap4/templates/views/views-exposed-form--search.html.twig */
class __TwigTemplate_d85029b1cf68c33b30796c6ec71c94c36b5793dce143205e57b09068fa0a0ee9 extends \Twig\Template
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
        if ( !twig_test_empty(($context["q"] ?? null))) {
            // line 2
            echo "\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["q"] ?? null), 2, $this->source), "html", null, true);
            echo "
";
        }
        // line 4
        echo "
<div class=\"card-search-filter\">
\t";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "
\t<div class=\"types\">
\t\t";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "field_type_target_id", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "
\t</div>
\t<div class=\"has-new-value alert border pb-0 pt-0\">
\t\t";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "field_has_new_value_value", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "
\t</div>
\t<div class=\"occasionalism alert border pb-0 pt-0\">
\t\t";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "field_is_occasionalism_value", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "
\t</div>
\t<div class=\"card\">
\t\t<div class=\"btn-dd-header pl-2 pr-0\" id=\"marks\">
\t\t\t<a class=\"btn btn-link btn-sm d-flex justify-content-between align-items-center text-dark pr-1 pb-0\" type=\"a\" data-toggle=\"collapse\" data-target=\"#collapseMarks\" aria-expanded=\"false\" aria-controls=\"collapseMarks\">
\t\t\t\t<span class=\"btn-dd-text\">- Пометы -</span>
\t\t\t\t<span class=\"btn-dd-shevron\">
\t\t\t\t\t<i class=\"fas fa-chevron-down\"></i>
\t\t\t\t</span>
\t\t\t</a>
\t\t</div>
\t\t<div id=\"collapseMarks\" class=\"collapse\" aria-labelledby=\"marks\">
\t\t\t<div class=\"card-body card-body-scroll\">
\t\t\t\t<div class=\"accordion\" id=\"marksAccordion\">
\t\t\t\t\t<div id=\"heading1 ml-0\">
\t\t\t\t\t\t<button class=\"btn btn-link btn-sm\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse1\" aria-expanded=\"true\" aria-controls=\"collapse1\">
\t\t\t\t\t\t\t- Грамматические -
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"collapse1\" class=\"collapse ml-3 mt-0\" aria-labelledby=\"heading1\" data-parent=\"#marksAccordion\">
\t\t\t\t\t\t";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "field_grammar_mark_value_target_id", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"heading2 ml-0\">
\t\t\t\t\t\t<button class=\"btn btn-link btn-sm\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse2\" aria-expanded=\"true\" aria-controls=\"collapse2\">
\t\t\t\t\t\t\t- Стилистические -
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"collapse2\" class=\"collapse ml-3 mt-0\" aria-labelledby=\"heading2\" data-parent=\"#marksAccordion\">
\t\t\t\t\t\t";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "field_stylistic_mark_value_target_id", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"heading3 ml-0\">
\t\t\t\t\t\t<button class=\"btn btn-link btn-sm\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse3\" aria-expanded=\"true\" aria-controls=\"collapse3\">
\t\t\t\t\t\t\t- Экспрессивные -
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"collapse3\" class=\"collapse ml-3 mt-0\" aria-labelledby=\"heading3\" data-parent=\"#marksAccordion\">
\t\t\t\t\t\t";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "field_expressive_mark_value_target_id", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"heading4 ml-0\">
\t\t\t\t\t\t<button class=\"btn btn-link btn-sm\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse4\" aria-expanded=\"true\" aria-controls=\"collapse4\">
\t\t\t\t\t\t\t- Функциональные -
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"collapse4\" class=\"collapse ml-3 mt-0\" aria-labelledby=\"heading4\" data-parent=\"#marksAccordion\">
\t\t\t\t\t\t";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "field_functional_mark_value_target_id", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"card mt-3\">
\t\t<div class=\"btn-dd-header pl-2 pr-0\" id=\"yearPeriod\">
\t\t\t<a class=\"btn btn-link btn-sm d-flex justify-content-between align-items-center text-dark pr-1 pb-0\" type=\"a\" data-toggle=\"collapse\" data-target=\"#collapseYear\" aria-expanded=\"false\" aria-controls=\"collapseYear\">
\t\t\t\t<span class=\"btn-dd-text\">- Год -</span>
\t\t\t\t<span class=\"btn-dd-shevron\">
\t\t\t\t\t<i class=\"fas fa-chevron-down\"></i>
\t\t\t\t</span>
\t\t\t</a>
\t\t</div>
\t\t<div id=\"collapseYear\" class=\"collapse\" aria-labelledby=\"yearPeriod\">
\t\t\t<div class=\"card-body pb-0 pt-0 card-body-scroll\">
\t\t\t\t";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "field_year_target_id", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"card mt-3\">
\t\t<div class=\"btn-dd-header pl-1 pr-0\" id=\"headingIdeorgaphic\">
\t\t\t<a class=\"btn btn-link btn-sm d-flex justify-content-between align-items-center text-dark pr-1 pb-0\" type=\"a\" data-toggle=\"collapse\" data-target=\"#collapseIdeorgaphic\" aria-expanded=\"false\" aria-controls=\"collapseIdeorgaphic\">
\t\t\t\t<span class=\"btn-dd-text\">- Тема -</span>
\t\t\t\t<span class=\"btn-dd-shevron\">
\t\t\t\t\t<i class=\"fas fa-chevron-down\"></i>
\t\t\t\t</span>
\t\t\t</a>
\t\t</div>
\t\t<div id=\"collapseIdeorgaphic\" class=\"collapse\" aria-labelledby=\"headingIdeorgaphic\">
\t\t\t<div class=\"card-body pb-0 pt-0 card-body-scroll\">
\t\t\t\t";
        // line 90
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "field_ideographic_terms_target_id", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 94
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title_op", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
        echo "
\t";
        // line 95
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "actions", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
        echo "
\t<button id=\"reset-search-filters\" type=\"reset\" class=\"btn btn-secondary btn-sm btn-reset-filters\">
\t\t<i class=\"bi bi-funnel\"></i>
\t\tОчистить фильтр</button>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap4/templates/views/views-exposed-form--search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 95,  169 => 94,  162 => 90,  144 => 75,  124 => 58,  113 => 50,  102 => 42,  91 => 34,  68 => 14,  62 => 11,  56 => 8,  51 => 6,  47 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bootstrap4/templates/views/views-exposed-form--search.html.twig", "C:\\Users\\agricola\\Projects\\OpenServer\\domains\\neolex\\themes\\bootstrap4\\templates\\views\\views-exposed-form--search.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1);
        static $filters = array("escape" => 2);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
