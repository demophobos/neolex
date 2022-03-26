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

/* __string_template__888eacb60dd9c8f3216bb79cf1507bafadd6bf91e0f27c975c8e8185561d10da */
class __TwigTemplate_b042d6a75b643cf68e9018ade157db3e4ec4dbfc669ac33d2f33f20b2548024a extends \Twig\Template
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
        echo "destination=/search%3Ftitle%3D%25D0%25B2%25D0%25B8%25D1%2580%25D1%2583%25D1%2581%25D0%25BC%25D0%25B0%25D0%25B6%25D0%25BE%25CC%2581%25D1%2580%25D0%25BD%25D1%258B%25D0%25B5%2520%25D0%25BE%25D0%25B1%25D1%2581%25D1%2582%25D0%25BE%25D1%258F%25CC%2581%25D1%2582%25D0%25B5%25D0%25BB%25D1%258C%25D1%2581%25D1%2582%25D0%25B2%25D0%25B0%26field_type_target_id%3DAll";
    }

    public function getTemplateName()
    {
        return "__string_template__888eacb60dd9c8f3216bb79cf1507bafadd6bf91e0f27c975c8e8185561d10da";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__888eacb60dd9c8f3216bb79cf1507bafadd6bf91e0f27c975c8e8185561d10da", "");
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
