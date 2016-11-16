<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_27b11507a88022ddf6497772bb2fd95036c198d22774aa25cfa8daa9b54be376 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c196b77e45bd35981cfc988da21413af3ea246e3c3b437164cbd687032e19e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c196b77e45bd35981cfc988da21413af3ea246e3c3b437164cbd687032e19e0->enter($__internal_6c196b77e45bd35981cfc988da21413af3ea246e3c3b437164cbd687032e19e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c196b77e45bd35981cfc988da21413af3ea246e3c3b437164cbd687032e19e0->leave($__internal_6c196b77e45bd35981cfc988da21413af3ea246e3c3b437164cbd687032e19e0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9932b1a394d70a76038cccc0a9c93320a7ba80fef8a3e4e0096d06e369a15d5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9932b1a394d70a76038cccc0a9c93320a7ba80fef8a3e4e0096d06e369a15d5e->enter($__internal_9932b1a394d70a76038cccc0a9c93320a7ba80fef8a3e4e0096d06e369a15d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_9932b1a394d70a76038cccc0a9c93320a7ba80fef8a3e4e0096d06e369a15d5e->leave($__internal_9932b1a394d70a76038cccc0a9c93320a7ba80fef8a3e4e0096d06e369a15d5e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4276ced8131e46e6b985a9e3ed170dc78517d999821332d254fc4b7aa4eeff56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4276ced8131e46e6b985a9e3ed170dc78517d999821332d254fc4b7aa4eeff56->enter($__internal_4276ced8131e46e6b985a9e3ed170dc78517d999821332d254fc4b7aa4eeff56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4276ced8131e46e6b985a9e3ed170dc78517d999821332d254fc4b7aa4eeff56->leave($__internal_4276ced8131e46e6b985a9e3ed170dc78517d999821332d254fc4b7aa4eeff56_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_061e3f794a7c6bc6b1230db9e624f5f6647139c917f586d90e995d0601b28b6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_061e3f794a7c6bc6b1230db9e624f5f6647139c917f586d90e995d0601b28b6c->enter($__internal_061e3f794a7c6bc6b1230db9e624f5f6647139c917f586d90e995d0601b28b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_061e3f794a7c6bc6b1230db9e624f5f6647139c917f586d90e995d0601b28b6c->leave($__internal_061e3f794a7c6bc6b1230db9e624f5f6647139c917f586d90e995d0601b28b6c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/mnt/c/Users/Baptiste/Documents/Cours LP DAWIN/ByKeeper/Développement/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
