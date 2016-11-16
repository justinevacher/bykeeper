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
        $__internal_4c269811c154b213236d94d8703d189b0cf2fb29d27dcc1aebe4bc885e4c4ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c269811c154b213236d94d8703d189b0cf2fb29d27dcc1aebe4bc885e4c4ef4->enter($__internal_4c269811c154b213236d94d8703d189b0cf2fb29d27dcc1aebe4bc885e4c4ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_4c269811c154b213236d94d8703d189b0cf2fb29d27dcc1aebe4bc885e4c4ef4->leave($__internal_4c269811c154b213236d94d8703d189b0cf2fb29d27dcc1aebe4bc885e4c4ef4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d6efcbd23299d57fe8850ecef6a154f1e52eca98b3a6fb9eca2de8775f8a4f9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6efcbd23299d57fe8850ecef6a154f1e52eca98b3a6fb9eca2de8775f8a4f9c->enter($__internal_d6efcbd23299d57fe8850ecef6a154f1e52eca98b3a6fb9eca2de8775f8a4f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_d6efcbd23299d57fe8850ecef6a154f1e52eca98b3a6fb9eca2de8775f8a4f9c->leave($__internal_d6efcbd23299d57fe8850ecef6a154f1e52eca98b3a6fb9eca2de8775f8a4f9c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ae6cd4e5290bd0be65ea3be3475a4d31d2f4c305b820ccafe9d4879fc4a777a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae6cd4e5290bd0be65ea3be3475a4d31d2f4c305b820ccafe9d4879fc4a777a7->enter($__internal_ae6cd4e5290bd0be65ea3be3475a4d31d2f4c305b820ccafe9d4879fc4a777a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_ae6cd4e5290bd0be65ea3be3475a4d31d2f4c305b820ccafe9d4879fc4a777a7->leave($__internal_ae6cd4e5290bd0be65ea3be3475a4d31d2f4c305b820ccafe9d4879fc4a777a7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_87888815cdedce34adbd524e6fbd96991d94bb60ab3603668e46cc02cc6fb72e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87888815cdedce34adbd524e6fbd96991d94bb60ab3603668e46cc02cc6fb72e->enter($__internal_87888815cdedce34adbd524e6fbd96991d94bb60ab3603668e46cc02cc6fb72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_87888815cdedce34adbd524e6fbd96991d94bb60ab3603668e46cc02cc6fb72e->leave($__internal_87888815cdedce34adbd524e6fbd96991d94bb60ab3603668e46cc02cc6fb72e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4dd4c995639ac38e9ac50332d26231a51e260a2a298fe3ac5cdc59650985400b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dd4c995639ac38e9ac50332d26231a51e260a2a298fe3ac5cdc59650985400b->enter($__internal_4dd4c995639ac38e9ac50332d26231a51e260a2a298fe3ac5cdc59650985400b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_4dd4c995639ac38e9ac50332d26231a51e260a2a298fe3ac5cdc59650985400b->leave($__internal_4dd4c995639ac38e9ac50332d26231a51e260a2a298fe3ac5cdc59650985400b_prof);

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
