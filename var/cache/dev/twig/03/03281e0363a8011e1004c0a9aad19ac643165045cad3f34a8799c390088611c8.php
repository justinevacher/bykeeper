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
        $__internal_7552ea19ecb119c76016a32181600d4c7086f3f6afc3a3d340615d607352f02c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7552ea19ecb119c76016a32181600d4c7086f3f6afc3a3d340615d607352f02c->enter($__internal_7552ea19ecb119c76016a32181600d4c7086f3f6afc3a3d340615d607352f02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7552ea19ecb119c76016a32181600d4c7086f3f6afc3a3d340615d607352f02c->leave($__internal_7552ea19ecb119c76016a32181600d4c7086f3f6afc3a3d340615d607352f02c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_49137df17e4c0078b39f1658080952bcae50ac4f6b3dbc8580d513ff6296fc6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49137df17e4c0078b39f1658080952bcae50ac4f6b3dbc8580d513ff6296fc6e->enter($__internal_49137df17e4c0078b39f1658080952bcae50ac4f6b3dbc8580d513ff6296fc6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_49137df17e4c0078b39f1658080952bcae50ac4f6b3dbc8580d513ff6296fc6e->leave($__internal_49137df17e4c0078b39f1658080952bcae50ac4f6b3dbc8580d513ff6296fc6e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6d73853ea298fc6b90f657f2eb1f380605fccbe12d6ff0fa09d7b8c37e760ed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d73853ea298fc6b90f657f2eb1f380605fccbe12d6ff0fa09d7b8c37e760ed1->enter($__internal_6d73853ea298fc6b90f657f2eb1f380605fccbe12d6ff0fa09d7b8c37e760ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6d73853ea298fc6b90f657f2eb1f380605fccbe12d6ff0fa09d7b8c37e760ed1->leave($__internal_6d73853ea298fc6b90f657f2eb1f380605fccbe12d6ff0fa09d7b8c37e760ed1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2501b07e65ba9046a3fb6147b4822dcfc4bd6f9b91945f9c9719e16b02985ba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2501b07e65ba9046a3fb6147b4822dcfc4bd6f9b91945f9c9719e16b02985ba9->enter($__internal_2501b07e65ba9046a3fb6147b4822dcfc4bd6f9b91945f9c9719e16b02985ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2501b07e65ba9046a3fb6147b4822dcfc4bd6f9b91945f9c9719e16b02985ba9->leave($__internal_2501b07e65ba9046a3fb6147b4822dcfc4bd6f9b91945f9c9719e16b02985ba9_prof);

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
