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

/* ds-reset--node-entry-short-title.html.twig */
class __TwigTemplate_ea63876f9b8633480ddb15c4f9c68321721772eacb2c42378ad84beee7222310 extends \Twig\Template
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
        $context["entryType"] = twig_trim_filter($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_type", [], "any", false, false, true, 1), 0, [], "any", false, false, true, 1)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#plain_text"] ?? null) : null), 1, $this->source));
        // line 2
        $context["index"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_index", [], "any", false, false, true, 2), 0, [], "any", false, false, true, 2);
        // line 3
        $context["newValue"] = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_has_new_value", [], "any", false, false, true, 3), 0, [], "any", false, false, true, 3)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#markup"] ?? null) : null);
        // line 4
        echo "
";
        // line 5
        if ((($context["entryType"] ?? null) == "44")) {
            // line 6
            echo "\t";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_hyphen_position", [], "any", false, false, true, 6), 0, [], "any", false, false, true, 6)) {
                // line 7
                echo "\t\t";
                $context["hp"] = twig_trim_filter($this->sandbox->ensureToStringAllowed((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_hyphen_position", [], "any", false, false, true, 7), 0, [], "any", false, false, true, 7)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#markup"] ?? null) : null), 7, $this->source));
                // line 8
                echo "\t\t";
                if ((($context["hp"] ?? null) == "right")) {
                    // line 9
                    echo "\t\t\t";
                    $context["entryTitle"] = ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 9), 9, $this->source) . "-");
                    // line 10
                    echo "\t\t";
                } elseif ((($context["hp"] ?? null) == "left")) {
                    // line 11
                    echo "\t\t\t";
                    $context["entryTitle"] = ("-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 11), 11, $this->source));
                    // line 12
                    echo "\t\t";
                } else {
                    // line 13
                    echo "\t\t\t";
                    $context["entryTitle"] = (("-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 13), 13, $this->source)) . "-");
                    // line 14
                    echo "\t\t";
                }
                // line 15
                echo "\t";
            }
        } else {
            // line 17
            echo "\t";
            $context["entryTitle"] = ($context["title"] ?? null);
        }
        // line 19
        echo "<span class=\"headword-type-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["entryType"] ?? null), 19, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["entryTitle"] ?? null), 19, $this->source), "html", null, true);
        echo "</span>
<sup>";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["index"] ?? null), 20, $this->source), "html", null, true);
        echo "</sup>
<span class=\"government\">";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_government", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "ds-reset--node-entry-short-title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 21,  92 => 20,  85 => 19,  81 => 17,  77 => 15,  74 => 14,  71 => 13,  68 => 12,  65 => 11,  62 => 10,  59 => 9,  56 => 8,  53 => 7,  50 => 6,  48 => 5,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ds-reset--node-entry-short-title.html.twig", "themes/bootstrap4/templates/content/ds-reset--node-entry-short-title.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 5);
        static $filters = array("trim" => 1, "escape" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
