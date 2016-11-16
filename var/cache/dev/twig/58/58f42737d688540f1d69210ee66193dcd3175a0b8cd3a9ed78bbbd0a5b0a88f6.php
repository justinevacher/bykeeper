<?php

/* KeeperBundle:Default:index.html.twig */
class __TwigTemplate_47907095ee779bd5593db5c0f4194197c97ff4ba4a7c381a73b392288faf0d3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10c41033e018990f232b1e5ffc0846990458c0bb9b4a3145f75f7047cf9111f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10c41033e018990f232b1e5ffc0846990458c0bb9b4a3145f75f7047cf9111f3->enter($__internal_10c41033e018990f232b1e5ffc0846990458c0bb9b4a3145f75f7047cf9111f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KeeperBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_10c41033e018990f232b1e5ffc0846990458c0bb9b4a3145f75f7047cf9111f3->leave($__internal_10c41033e018990f232b1e5ffc0846990458c0bb9b4a3145f75f7047cf9111f3_prof);

    }

    public function getTemplateName()
    {
        return "KeeperBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "KeeperBundle:Default:index.html.twig", "/mnt/c/Users/Baptiste/Documents/Cours LP DAWIN/ByKeeper/Développement/src/KeeperBundle/Resources/views/Default/index.html.twig");
    }
}
