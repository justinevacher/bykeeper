<?php

/* base.html.twig */
class __TwigTemplate_be7d45d40aeaaa34903a24d8801035a799221ccd83cfc345ad6e3f76d15b2068 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3269653bdbb9296789d3ca3354c46775e50fe768474445397982315b58fbbaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3269653bdbb9296789d3ca3354c46775e50fe768474445397982315b58fbbaf->enter($__internal_a3269653bdbb9296789d3ca3354c46775e50fe768474445397982315b58fbbaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a3269653bdbb9296789d3ca3354c46775e50fe768474445397982315b58fbbaf->leave($__internal_a3269653bdbb9296789d3ca3354c46775e50fe768474445397982315b58fbbaf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc61ade87d6b69562e5a62df5b5350127bd001d13771cb727b2eb4303a191dd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc61ade87d6b69562e5a62df5b5350127bd001d13771cb727b2eb4303a191dd3->enter($__internal_bc61ade87d6b69562e5a62df5b5350127bd001d13771cb727b2eb4303a191dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_bc61ade87d6b69562e5a62df5b5350127bd001d13771cb727b2eb4303a191dd3->leave($__internal_bc61ade87d6b69562e5a62df5b5350127bd001d13771cb727b2eb4303a191dd3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ad429fe268beb337d7141f7aa48f132f149bf9ef7fef103e0b631699de7d8406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad429fe268beb337d7141f7aa48f132f149bf9ef7fef103e0b631699de7d8406->enter($__internal_ad429fe268beb337d7141f7aa48f132f149bf9ef7fef103e0b631699de7d8406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_ad429fe268beb337d7141f7aa48f132f149bf9ef7fef103e0b631699de7d8406->leave($__internal_ad429fe268beb337d7141f7aa48f132f149bf9ef7fef103e0b631699de7d8406_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_751d90595c7672bd6664cdd2f9a33071bd14eb1be654814b12034430470c101e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_751d90595c7672bd6664cdd2f9a33071bd14eb1be654814b12034430470c101e->enter($__internal_751d90595c7672bd6664cdd2f9a33071bd14eb1be654814b12034430470c101e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_751d90595c7672bd6664cdd2f9a33071bd14eb1be654814b12034430470c101e->leave($__internal_751d90595c7672bd6664cdd2f9a33071bd14eb1be654814b12034430470c101e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d99349db7c271395bbb2281df4b108e1cdde7bbae7a6b1f623c9597021429ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d99349db7c271395bbb2281df4b108e1cdde7bbae7a6b1f623c9597021429ce7->enter($__internal_d99349db7c271395bbb2281df4b108e1cdde7bbae7a6b1f623c9597021429ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_d99349db7c271395bbb2281df4b108e1cdde7bbae7a6b1f623c9597021429ce7->leave($__internal_d99349db7c271395bbb2281df4b108e1cdde7bbae7a6b1f623c9597021429ce7_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/mnt/c/Users/Baptiste/Documents/Cours LP DAWIN/ByKeeper/Développement/app/Resources/views/base.html.twig");
    }
}
