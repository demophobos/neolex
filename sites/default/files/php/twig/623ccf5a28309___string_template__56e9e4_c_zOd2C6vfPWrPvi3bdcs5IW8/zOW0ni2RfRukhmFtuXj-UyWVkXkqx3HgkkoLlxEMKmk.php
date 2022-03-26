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

/* __string_template__56e9e45080eedb7187008aef6351268946598ade96cf2782b8e179a480926e61 */
class __TwigTemplate_be086ba6a03d5756a9e340f5f3cca5f8e6d043f79cd4527864e71aa23564a29e extends \Twig\Template
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
        echo "destination=/search%3Ftitle%3D%25D0%25BB%25D0%25B0%25CC%2581%25D0%25B2%25D0%25BE%25D1%2587%25D0%25BD%25D0%25BE-%25D0%25BC%25D0%25B0%25CC%2581%25D1%2581%25D0%25BE%25D1%2587%25D0%25BD%25D1%258B%25D0%25B9%26field_type_target_id%3DAll";
    }

    public function getTemplateName()
    {
        return "__string_template__56e9e45080eedb7187008aef6351268946598ade96cf2782b8e179a480926e61";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__56e9e45080eedb7187008aef6351268946598ade96cf2782b8e179a480926e61", "");
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
