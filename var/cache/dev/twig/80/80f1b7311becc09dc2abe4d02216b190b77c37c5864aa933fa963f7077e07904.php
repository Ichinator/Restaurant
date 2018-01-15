<?php

/* base.html.twig */
class __TwigTemplate_6314a3be68cd78dc6de392f8d264a37d83fcccf89cca8150cf65e92898484f8d extends Twig_Template
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
        $__internal_a25fde5083fe481d00325fbdd29cb538a0bbdb7a5b00c2f74f386a7cfbfd6c10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a25fde5083fe481d00325fbdd29cb538a0bbdb7a5b00c2f74f386a7cfbfd6c10->enter($__internal_a25fde5083fe481d00325fbdd29cb538a0bbdb7a5b00c2f74f386a7cfbfd6c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f632110ed147564ce76060d32a102c61ad2e81d98279a5dddc3cc036c6bacaa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f632110ed147564ce76060d32a102c61ad2e81d98279a5dddc3cc036c6bacaa0->enter($__internal_f632110ed147564ce76060d32a102c61ad2e81d98279a5dddc3cc036c6bacaa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_a25fde5083fe481d00325fbdd29cb538a0bbdb7a5b00c2f74f386a7cfbfd6c10->leave($__internal_a25fde5083fe481d00325fbdd29cb538a0bbdb7a5b00c2f74f386a7cfbfd6c10_prof);

        
        $__internal_f632110ed147564ce76060d32a102c61ad2e81d98279a5dddc3cc036c6bacaa0->leave($__internal_f632110ed147564ce76060d32a102c61ad2e81d98279a5dddc3cc036c6bacaa0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc27480a2e1a75af757454f02a5e4f43eb52c3b13533110c4de1340fdd16fd3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc27480a2e1a75af757454f02a5e4f43eb52c3b13533110c4de1340fdd16fd3e->enter($__internal_cc27480a2e1a75af757454f02a5e4f43eb52c3b13533110c4de1340fdd16fd3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_166474cb2275e0dbbf39f3b97e29f4c2ec5fa50420db8ddd77f3e67e3427ad83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_166474cb2275e0dbbf39f3b97e29f4c2ec5fa50420db8ddd77f3e67e3427ad83->enter($__internal_166474cb2275e0dbbf39f3b97e29f4c2ec5fa50420db8ddd77f3e67e3427ad83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_166474cb2275e0dbbf39f3b97e29f4c2ec5fa50420db8ddd77f3e67e3427ad83->leave($__internal_166474cb2275e0dbbf39f3b97e29f4c2ec5fa50420db8ddd77f3e67e3427ad83_prof);

        
        $__internal_cc27480a2e1a75af757454f02a5e4f43eb52c3b13533110c4de1340fdd16fd3e->leave($__internal_cc27480a2e1a75af757454f02a5e4f43eb52c3b13533110c4de1340fdd16fd3e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_780e3d85a7c185811d854022503cd49b87298b8c01c15c1182a43efeedd46651 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_780e3d85a7c185811d854022503cd49b87298b8c01c15c1182a43efeedd46651->enter($__internal_780e3d85a7c185811d854022503cd49b87298b8c01c15c1182a43efeedd46651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_45cd7977665790f2a41b213afe01924abd4c1a52fd588e6c440e122f5f1b6fea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45cd7977665790f2a41b213afe01924abd4c1a52fd588e6c440e122f5f1b6fea->enter($__internal_45cd7977665790f2a41b213afe01924abd4c1a52fd588e6c440e122f5f1b6fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_45cd7977665790f2a41b213afe01924abd4c1a52fd588e6c440e122f5f1b6fea->leave($__internal_45cd7977665790f2a41b213afe01924abd4c1a52fd588e6c440e122f5f1b6fea_prof);

        
        $__internal_780e3d85a7c185811d854022503cd49b87298b8c01c15c1182a43efeedd46651->leave($__internal_780e3d85a7c185811d854022503cd49b87298b8c01c15c1182a43efeedd46651_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c88f592f56232cc47d3fbfc31e227b57f091877abade5aeab0d6d41c27cfd3e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c88f592f56232cc47d3fbfc31e227b57f091877abade5aeab0d6d41c27cfd3e2->enter($__internal_c88f592f56232cc47d3fbfc31e227b57f091877abade5aeab0d6d41c27cfd3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dd388d6581ac488b17018fd511ea923c7dace0c980041fca58ad2d95c1c39f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd388d6581ac488b17018fd511ea923c7dace0c980041fca58ad2d95c1c39f53->enter($__internal_dd388d6581ac488b17018fd511ea923c7dace0c980041fca58ad2d95c1c39f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dd388d6581ac488b17018fd511ea923c7dace0c980041fca58ad2d95c1c39f53->leave($__internal_dd388d6581ac488b17018fd511ea923c7dace0c980041fca58ad2d95c1c39f53_prof);

        
        $__internal_c88f592f56232cc47d3fbfc31e227b57f091877abade5aeab0d6d41c27cfd3e2->leave($__internal_c88f592f56232cc47d3fbfc31e227b57f091877abade5aeab0d6d41c27cfd3e2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_73b59cc1938ed9f4c6375f838b58d78f8b2a37b9a9833e607d950a5b45d5a1d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73b59cc1938ed9f4c6375f838b58d78f8b2a37b9a9833e607d950a5b45d5a1d7->enter($__internal_73b59cc1938ed9f4c6375f838b58d78f8b2a37b9a9833e607d950a5b45d5a1d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e0d7ef4a14974d7e650f5baee61777eeb67d1ed7b5ab2410c539a3654eef786d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0d7ef4a14974d7e650f5baee61777eeb67d1ed7b5ab2410c539a3654eef786d->enter($__internal_e0d7ef4a14974d7e650f5baee61777eeb67d1ed7b5ab2410c539a3654eef786d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e0d7ef4a14974d7e650f5baee61777eeb67d1ed7b5ab2410c539a3654eef786d->leave($__internal_e0d7ef4a14974d7e650f5baee61777eeb67d1ed7b5ab2410c539a3654eef786d_prof);

        
        $__internal_73b59cc1938ed9f4c6375f838b58d78f8b2a37b9a9833e607d950a5b45d5a1d7->leave($__internal_73b59cc1938ed9f4c6375f838b58d78f8b2a37b9a9833e607d950a5b45d5a1d7_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
", "base.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/app/Resources/views/base.html.twig");
    }
}
