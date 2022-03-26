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

/* __string_template__fe1b70ff8f98633e68775273adf48f875a5710659a2d3c32aaf38ee0ff0a0781 */
class __TwigTemplate_31f8be46fc681f7afa6798c106d78bece71e8f0f8b02a7ac12528fdc16ca3997 extends \Twig\Template
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
        echo "destination=/search%3Ftitle%3D%25D0%25B3%25D0%25B5%25CC%2581%25D0%25B9%25D1%2582%25D1%2581%25D0%25BE%25D0%25B2%25D1%2581%25D0%25BA%25D0%25BE-%25D0%25B3%25D1%2580%25D0%25B5%25CC%2581%25D1%2584%25D0%25BE%25D0%25B2%25D1%2581%25D0%25BA%25D0%25B8%25D0%25B9%26field_type_target_id%3DAll";
    }

    public function getTemplateName()
    {
        return "__string_template__fe1b70ff8f98633e68775273adf48f875a5710659a2d3c32aaf38ee0ff0a0781";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__fe1b70ff8f98633e68775273adf48f875a5710659a2d3c32aaf38ee0ff0a0781", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
