<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_3cf20e532e0a069a9b4a846cde62b0973485dad937354d1d54f3ca0178c5c81d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_011ca948144dba6092284e0d273d90be5d7984baefbfa8fd79c155beb03ac2b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_011ca948144dba6092284e0d273d90be5d7984baefbfa8fd79c155beb03ac2b1->enter($__internal_011ca948144dba6092284e0d273d90be5d7984baefbfa8fd79c155beb03ac2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_011ca948144dba6092284e0d273d90be5d7984baefbfa8fd79c155beb03ac2b1->leave($__internal_011ca948144dba6092284e0d273d90be5d7984baefbfa8fd79c155beb03ac2b1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f41dd607fc563c4cf834bef3fea9c1a92b02f69ab0cb49818b47c9d372bb2600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f41dd607fc563c4cf834bef3fea9c1a92b02f69ab0cb49818b47c9d372bb2600->enter($__internal_f41dd607fc563c4cf834bef3fea9c1a92b02f69ab0cb49818b47c9d372bb2600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/exception.html.twig"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f41dd607fc563c4cf834bef3fea9c1a92b02f69ab0cb49818b47c9d372bb2600->leave($__internal_f41dd607fc563c4cf834bef3fea9c1a92b02f69ab0cb49818b47c9d372bb2600_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_28b1464dc499ca714af994b848e738009934c226666aa1af4abf4ecd214faeb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28b1464dc499ca714af994b848e738009934c226666aa1af4abf4ecd214faeb1->enter($__internal_28b1464dc499ca714af994b848e738009934c226666aa1af4abf4ecd214faeb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/exception.html.twig"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_28b1464dc499ca714af994b848e738009934c226666aa1af4abf4ecd214faeb1->leave($__internal_28b1464dc499ca714af994b848e738009934c226666aa1af4abf4ecd214faeb1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7c544bafdd02105541afac67c6d8c5859b39c637e6542cf7ea757e9f6e42d3cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c544bafdd02105541afac67c6d8c5859b39c637e6542cf7ea757e9f6e42d3cc->enter($__internal_7c544bafdd02105541afac67c6d8c5859b39c637e6542cf7ea757e9f6e42d3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/exception.html.twig"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_7c544bafdd02105541afac67c6d8c5859b39c637e6542cf7ea757e9f6e42d3cc->leave($__internal_7c544bafdd02105541afac67c6d8c5859b39c637e6542cf7ea757e9f6e42d3cc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/mnt/c/Users/Baptiste/Documents/Cours LP DAWIN/ByKeeper/Développement/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
