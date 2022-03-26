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

/* modules/ds/templates/ds-field-expert.html.twig */
class __TwigTemplate_685f46b4bd9421c238cd6e2fc07f7caf0e0ecb3340155daf6895c85a5866995f extends \Twig\Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["settings"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["prefix"] ?? null) : null), 16, $this->source));
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "ow", [], "any", false, false, true, 17)) {
            // line 18
            echo "  ";
            if ((($__internal_compile_1 = ($context["settings"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["ow-def-at"] ?? null) : null)) {
                // line 19
                echo "    <";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = ($context["settings"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["ow-el"] ?? null) : null), 19, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["wrapper_attributes"] ?? null), "mergeAttributes", [0 => ($context["attributes"] ?? null)], "method", false, false, true, 19), 19, $this->source), "html", null, true);
                echo ">
  ";
            } elseif ((($__internal_compile_3 =             // line 20
($context["settings"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["ow-def-cl"] ?? null) : null)) {
                // line 21
                echo "    <";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = ($context["settings"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["ow-el"] ?? null) : null), 21, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["wrapper_attributes"] ?? null), "mergeAttributes", [0 => twig_get_attribute($this->env, $this->source, ($context["attribute_classes"] ?? null), "offsetGet", [0 => "class"], "method", false, false, true, 21)], "method", false, false, true, 21), 21, $this->source), "html", null, true);
                echo ">
  ";
            } else {
                // line 23
                echo "    <";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_5 = ($context["settings"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["ow-el"] ?? null) : null), 23, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_attributes"] ?? null), 23, $this->source), "html", null, true);
                echo ">
  ";
            }
            // line 25
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["_self"], "macro_field", [($context["items"] ?? null), ($context["settings"] ?? null), ($context["label"] ?? null), ($context["content_attributes"] ?? null), ($context["field_item_wrapper_attributes"] ?? null), ($context["field_wrapper_attributes"] ?? null), ($context["label_attributes"] ?? null), ($context["label_hidden"] ?? null), ($context["element"] ?? null)], 25, $context, $this->getSourceContext()));
            echo "
    </";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_6 = ($context["settings"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["ow-el"] ?? null) : null), 26, $this->source), "html", null, true);
            echo ">
";
        } else {
            // line 28
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["_self"], "macro_field", [($context["items"] ?? null), ($context["settings"] ?? null), ($context["label"] ?? null), ($context["content_attributes"] ?? null), ($context["field_item_wrapper_attributes"] ?? null), ($context["field_wrapper_attributes"] ?? null), ($context["label_attributes"] ?? null), ($context["label_hidden"] ?? null), ($context["element"] ?? null)], 28, $context, $this->getSourceContext()));
            echo "
";
        }
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed((($__internal_compile_7 = ($context["settings"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["suffix"] ?? null) : null), 30, $this->source));
        // line 60
        echo "
";
    }

    // line 32
    public function macro_field($__items__ = null, $__settings__ = null, $__label__ = null, $__content_attributes__ = null, $__field_item_wrapper_attributes__ = null, $__field_wrapper_attributes__ = null, $__label_attributes__ = null, $__label_hidden__ = null, $__element__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "settings" => $__settings__,
            "label" => $__label__,
            "content_attributes" => $__content_attributes__,
            "field_item_wrapper_attributes" => $__field_item_wrapper_attributes__,
            "field_wrapper_attributes" => $__field_wrapper_attributes__,
            "label_attributes" => $__label_attributes__,
            "label_hidden" => $__label_hidden__,
            "element" => $__element__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 33
            echo "  ";
            if ( !($context["label_hidden"] ?? null)) {
                // line 34
                echo "    ";
                // line 35
                $context["title_classes"] = [0 => ("field-label-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed((($__internal_compile_8 =                 // line 36
($context["element"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#label_display"] ?? null) : null), 36, $this->source)))];
                // line 39
                if ((($__internal_compile_9 = ($context["settings"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["lbw-def-at"] ?? null) : null)) {
                    // line 40
                    echo "<";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "lbw-el", [], "array", true, true, true, 40)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed((($__internal_compile_10 = ($context["settings"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["lbw-el"] ?? null) : null), 40, $this->source), "div")) : ("div")), "html", null, true);
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["label_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 40), "mergeAttributes", [0 => ($context["title_attributes"] ?? null)], "method", false, false, true, 40), 40, $this->source), "html", null, true);
                    echo ">";
                } else {
                    // line 42
                    echo "<";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "lbw-el", [], "array", true, true, true, 42)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed((($__internal_compile_11 = ($context["settings"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["lbw-el"] ?? null) : null), 42, $this->source), "div")) : ("div")), "html", null, true);
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 42), 42, $this->source), "html", null, true);
                    echo ">";
                }
                // line 44
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 44, $this->source), "html", null, true);
                if ((($__internal_compile_12 = ($context["settings"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["lb-col"] ?? null) : null)) {
                    echo ":";
                }
                // line 45
                echo "</";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "lbw-el", [], "array", true, true, true, 45)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed((($__internal_compile_13 = ($context["settings"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["lbw-el"] ?? null) : null), 45, $this->source), "div")) : ("div")), "html", null, true);
                echo ">
  ";
            }
            // line 47
            echo "
  ";
            // line 48
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "fis", [], "any", false, false, true, 48)) {
                // line 49
                echo "    ";
                if ((($__internal_compile_14 = ($context["settings"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["fis-def-at"] ?? null) : null)) {
                    // line 50
                    echo "      <";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_15 = ($context["settings"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["fis-el"] ?? null) : null), 50, $this->source), "html", null, true);
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field_wrapper_attributes"] ?? null), "mergeAttributes", [0 => ($context["content_attributes"] ?? null)], "method", false, false, true, 50), 50, $this->source), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 52
                    echo "      <";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_16 = ($context["settings"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["fis-el"] ?? null) : null), 52, $this->source), "html", null, true);
                    echo " ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_wrapper_attributes"] ?? null), 52, $this->source), "html", null, true);
                    echo ">
    ";
                }
                // line 54
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["_self"], "macro_content", [($context["items"] ?? null), ($context["settings"] ?? null), ($context["field_item_wrapper_attributes"] ?? null), ($context["content_attributes"] ?? null)], 54, $context, $this->getSourceContext()));
                echo "
      </";
                // line 55
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_17 = ($context["settings"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["fis-el"] ?? null) : null), 55, $this->source), "html", null, true);
                echo ">
  ";
            } else {
                // line 57
                echo "    ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["_self"], "macro_content", [($context["items"] ?? null), ($context["settings"] ?? null), ($context["field_item_wrapper_attributes"] ?? null)], 57, $context, $this->getSourceContext()));
                echo "
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 61
    public function macro_content($__items__ = null, $__settings__ = null, $__field_item_wrapper_attributes__ = null, $__content_attributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "settings" => $__settings__,
            "field_item_wrapper_attributes" => $__field_item_wrapper_attributes__,
            "content_attributes" => $__content_attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 62
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 63
                echo "    ";
                if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "fi", [], "any", false, false, true, 63)) {
                    // line 64
                    echo "      ";
                    if ((($__internal_compile_18 = ($context["settings"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["fi-def-at"] ?? null) : null)) {
                        // line 65
                        echo "        <";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_19 = ($context["settings"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["fi-el"] ?? null) : null), 65, $this->source), "html", null, true);
                        echo " ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field_item_wrapper_attributes"] ?? null), "mergeAttributes", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 65)], "method", false, false, true, 65), 65, $this->source), "html", null, true);
                        echo " >
      ";
                    } else {
                        // line 67
                        echo "        <";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_20 = ($context["settings"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["fi-el"] ?? null) : null), 67, $this->source), "html", null, true);
                        echo " ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_item_wrapper_attributes"] ?? null), 67, $this->source), "html", null, true);
                        echo " >
      ";
                    }
                    // line 69
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
                    // line 70
                    echo "</";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_21 = ($context["settings"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["fi-el"] ?? null) : null), 70, $this->source), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 72
                    echo "      ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                    echo "
    ";
                }
                // line 74
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "modules/ds/templates/ds-field-expert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 74,  249 => 72,  243 => 70,  241 => 69,  233 => 67,  225 => 65,  222 => 64,  219 => 63,  214 => 62,  198 => 61,  185 => 57,  180 => 55,  175 => 54,  167 => 52,  159 => 50,  156 => 49,  154 => 48,  151 => 47,  145 => 45,  140 => 44,  133 => 42,  126 => 40,  124 => 39,  122 => 36,  121 => 35,  119 => 34,  116 => 33,  95 => 32,  90 => 60,  88 => 30,  82 => 28,  77 => 26,  72 => 25,  64 => 23,  56 => 21,  54 => 20,  47 => 19,  44 => 18,  42 => 17,  40 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/ds/templates/ds-field-expert.html.twig", "C:\\Users\\agricola\\Projects\\OpenServer\\domains\\neolex\\modules\\ds\\templates\\ds-field-expert.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 17, "macro" => 32, "set" => 35, "for" => 62);
        static $filters = array("raw" => 16, "escape" => 19, "clean_class" => 36, "default" => 40);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'macro', 'set', 'for', 'import'],
                ['raw', 'escape', 'clean_class', 'default'],
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
