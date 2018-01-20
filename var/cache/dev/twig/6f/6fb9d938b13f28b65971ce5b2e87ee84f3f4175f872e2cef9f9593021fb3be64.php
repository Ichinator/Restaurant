<?php

/* base.html.twig */
class __TwigTemplate_1df14d89abd540517c57aaefe7094d5f98cde5e700e625cb6b76d84ecc86084a extends Twig_Template
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
        $__internal_840cde55d5f3b2992d0a9061a0585db54be526d56d6e35625630c99c73cc3226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_840cde55d5f3b2992d0a9061a0585db54be526d56d6e35625630c99c73cc3226->enter($__internal_840cde55d5f3b2992d0a9061a0585db54be526d56d6e35625630c99c73cc3226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_1f2072a1a82627033c3ea7558baecaece046c55a2127f596bbf26dc6d16049da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f2072a1a82627033c3ea7558baecaece046c55a2127f596bbf26dc6d16049da->enter($__internal_1f2072a1a82627033c3ea7558baecaece046c55a2127f596bbf26dc6d16049da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 10
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "</body>
</html>
";
        
        $__internal_840cde55d5f3b2992d0a9061a0585db54be526d56d6e35625630c99c73cc3226->leave($__internal_840cde55d5f3b2992d0a9061a0585db54be526d56d6e35625630c99c73cc3226_prof);

        
        $__internal_1f2072a1a82627033c3ea7558baecaece046c55a2127f596bbf26dc6d16049da->leave($__internal_1f2072a1a82627033c3ea7558baecaece046c55a2127f596bbf26dc6d16049da_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_292250d6fbe960bb2fe71ae506ec0a29f46a3e1f87f57fd82c0dcc738d6935d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_292250d6fbe960bb2fe71ae506ec0a29f46a3e1f87f57fd82c0dcc738d6935d9->enter($__internal_292250d6fbe960bb2fe71ae506ec0a29f46a3e1f87f57fd82c0dcc738d6935d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_876ca92f81750b5706a356c91c259a20672f97356a8059b4020f04a9f1eb197b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_876ca92f81750b5706a356c91c259a20672f97356a8059b4020f04a9f1eb197b->enter($__internal_876ca92f81750b5706a356c91c259a20672f97356a8059b4020f04a9f1eb197b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_876ca92f81750b5706a356c91c259a20672f97356a8059b4020f04a9f1eb197b->leave($__internal_876ca92f81750b5706a356c91c259a20672f97356a8059b4020f04a9f1eb197b_prof);

        
        $__internal_292250d6fbe960bb2fe71ae506ec0a29f46a3e1f87f57fd82c0dcc738d6935d9->leave($__internal_292250d6fbe960bb2fe71ae506ec0a29f46a3e1f87f57fd82c0dcc738d6935d9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e8148b7b2496b6f871058e98f9d38aa808199f691c27c8ffca54e1f585cb8e2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8148b7b2496b6f871058e98f9d38aa808199f691c27c8ffca54e1f585cb8e2a->enter($__internal_e8148b7b2496b6f871058e98f9d38aa808199f691c27c8ffca54e1f585cb8e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e54ed8eb02f241357508716adb73ea5ede6d94e3ed03d6b35b5f5aeafdff1274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e54ed8eb02f241357508716adb73ea5ede6d94e3ed03d6b35b5f5aeafdff1274->enter($__internal_e54ed8eb02f241357508716adb73ea5ede6d94e3ed03d6b35b5f5aeafdff1274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
              integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    ";
        
        $__internal_e54ed8eb02f241357508716adb73ea5ede6d94e3ed03d6b35b5f5aeafdff1274->leave($__internal_e54ed8eb02f241357508716adb73ea5ede6d94e3ed03d6b35b5f5aeafdff1274_prof);

        
        $__internal_e8148b7b2496b6f871058e98f9d38aa808199f691c27c8ffca54e1f585cb8e2a->leave($__internal_e8148b7b2496b6f871058e98f9d38aa808199f691c27c8ffca54e1f585cb8e2a_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_3acbc52506497a0e79c75acd099328d652c40ab18ba4b89a218bb5a8ae6659fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3acbc52506497a0e79c75acd099328d652c40ab18ba4b89a218bb5a8ae6659fd->enter($__internal_3acbc52506497a0e79c75acd099328d652c40ab18ba4b89a218bb5a8ae6659fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad6ed4e080f48e2b3f3373856473cf31dd907ca6bab0c6c73d4d6e1bbf52328c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad6ed4e080f48e2b3f3373856473cf31dd907ca6bab0c6c73d4d6e1bbf52328c->enter($__internal_ad6ed4e080f48e2b3f3373856473cf31dd907ca6bab0c6c73d4d6e1bbf52328c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    <nav class=\"navbar navbar-inverse\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <a class=\"navbar-brand\" href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Accueil</a>
            </div>
            <ul class=\"nav navbar-nav\">
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Ce que nous vous proposons
                        <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Nos entrées</a></li>
                        <li><a href=\"#\">Nos plats</a></li>
                        <li><a href=\"#\">Nos desserts</a></li>
                        <li><a href=\"#\">Nos boissons</a></li>
                    </ul>
                </li>
                <li><a href=\"#\">Nos menus</a></li>
                <li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("employees");
        echo "\">Nos employés</a></li>
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Contact et accès au site
                        <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("access");
        echo "\">Accès au site</a></li>
                        <li><a href=\"#\">Nous contacter</a></li>
                    </ul>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\"><span class=\"glyphicon glyphicon-user\"></span>S'inscrire</a></li>
                <li><a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\"><span class=\"glyphicon glyphicon-log-in\"></span>Se connecter</a></li>
            </ul
        </div>
    </nav>

";
        // line 47
        $this->loadTemplate("FOSCommentBundle:Thread:async.html.twig", "base.html.twig", 47)->display(array_merge($context, array("id" => "foo")));
        
        $__internal_ad6ed4e080f48e2b3f3373856473cf31dd907ca6bab0c6c73d4d6e1bbf52328c->leave($__internal_ad6ed4e080f48e2b3f3373856473cf31dd907ca6bab0c6c73d4d6e1bbf52328c_prof);

        
        $__internal_3acbc52506497a0e79c75acd099328d652c40ab18ba4b89a218bb5a8ae6659fd->leave($__internal_3acbc52506497a0e79c75acd099328d652c40ab18ba4b89a218bb5a8ae6659fd_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a4cc02f3e20db7c4ff4a22fdeaec4957659e0aee85e700fa0a677d34c5e87b0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4cc02f3e20db7c4ff4a22fdeaec4957659e0aee85e700fa0a677d34c5e87b0e->enter($__internal_a4cc02f3e20db7c4ff4a22fdeaec4957659e0aee85e700fa0a677d34c5e87b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_77fd21444173cbc0d0976dd5e438da9e75b2e3c82210fdc90072e16df0130884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77fd21444173cbc0d0976dd5e438da9e75b2e3c82210fdc90072e16df0130884->enter($__internal_77fd21444173cbc0d0976dd5e438da9e75b2e3c82210fdc90072e16df0130884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "    <script
            src=\"https://code.jquery.com/jquery-3.2.1.js\"
            integrity=\"sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"
            integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
";
        
        $__internal_77fd21444173cbc0d0976dd5e438da9e75b2e3c82210fdc90072e16df0130884->leave($__internal_77fd21444173cbc0d0976dd5e438da9e75b2e3c82210fdc90072e16df0130884_prof);

        
        $__internal_a4cc02f3e20db7c4ff4a22fdeaec4957659e0aee85e700fa0a677d34c5e87b0e->leave($__internal_a4cc02f3e20db7c4ff4a22fdeaec4957659e0aee85e700fa0a677d34c5e87b0e_prof);

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
        return array (  181 => 50,  172 => 49,  162 => 47,  154 => 42,  150 => 41,  142 => 36,  134 => 31,  117 => 17,  112 => 14,  103 => 13,  91 => 7,  82 => 6,  64 => 5,  52 => 57,  50 => 49,  48 => 13,  41 => 10,  39 => 6,  35 => 5,  29 => 1,);
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
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
              integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>
{% block body %}
    <nav class=\"navbar navbar-inverse\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">Accueil</a>
            </div>
            <ul class=\"nav navbar-nav\">
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Ce que nous vous proposons
                        <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Nos entrées</a></li>
                        <li><a href=\"#\">Nos plats</a></li>
                        <li><a href=\"#\">Nos desserts</a></li>
                        <li><a href=\"#\">Nos boissons</a></li>
                    </ul>
                </li>
                <li><a href=\"#\">Nos menus</a></li>
                <li><a href=\"{{ path ('employees') }}\">Nos employés</a></li>
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Contact et accès au site
                        <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"{{ path ('access') }}\">Accès au site</a></li>
                        <li><a href=\"#\">Nous contacter</a></li>
                    </ul>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"{{ path ('fos_user_security_login') }}\"><span class=\"glyphicon glyphicon-user\"></span>S'inscrire</a></li>
                <li><a href=\"{{ path ('fos_user_security_login') }}\"><span class=\"glyphicon glyphicon-log-in\"></span>Se connecter</a></li>
            </ul
        </div>
    </nav>

{% include 'FOSCommentBundle:Thread:async.html.twig' with {'id': 'foo'} %}
{% endblock %}
{% block javascripts %}
    <script
            src=\"https://code.jquery.com/jquery-3.2.1.js\"
            integrity=\"sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"
            integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
{% endblock %}
</body>
</html>
", "base.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/app/Resources/views/base.html.twig");
    }
}
