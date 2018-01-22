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
        $__internal_b5fc1348e3a25d0f208489265017984d2e8120d1ee161cfdcbee8a55ca707c20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5fc1348e3a25d0f208489265017984d2e8120d1ee161cfdcbee8a55ca707c20->enter($__internal_b5fc1348e3a25d0f208489265017984d2e8120d1ee161cfdcbee8a55ca707c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3ac259e94b454cfaa281444a84f753ab0a9f8173e38b8966c5b64231990a2cab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ac259e94b454cfaa281444a84f753ab0a9f8173e38b8966c5b64231990a2cab->enter($__internal_3ac259e94b454cfaa281444a84f753ab0a9f8173e38b8966c5b64231990a2cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b5fc1348e3a25d0f208489265017984d2e8120d1ee161cfdcbee8a55ca707c20->leave($__internal_b5fc1348e3a25d0f208489265017984d2e8120d1ee161cfdcbee8a55ca707c20_prof);

        
        $__internal_3ac259e94b454cfaa281444a84f753ab0a9f8173e38b8966c5b64231990a2cab->leave($__internal_3ac259e94b454cfaa281444a84f753ab0a9f8173e38b8966c5b64231990a2cab_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_267a64d114e19afc6041c54e1441e78550a42636dc844da387ebc5e72d524e44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_267a64d114e19afc6041c54e1441e78550a42636dc844da387ebc5e72d524e44->enter($__internal_267a64d114e19afc6041c54e1441e78550a42636dc844da387ebc5e72d524e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c74faedce9cb07e2a015f8144dcfdd780eb937ec03b633bd82e33a8f2c38d96f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c74faedce9cb07e2a015f8144dcfdd780eb937ec03b633bd82e33a8f2c38d96f->enter($__internal_c74faedce9cb07e2a015f8144dcfdd780eb937ec03b633bd82e33a8f2c38d96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c74faedce9cb07e2a015f8144dcfdd780eb937ec03b633bd82e33a8f2c38d96f->leave($__internal_c74faedce9cb07e2a015f8144dcfdd780eb937ec03b633bd82e33a8f2c38d96f_prof);

        
        $__internal_267a64d114e19afc6041c54e1441e78550a42636dc844da387ebc5e72d524e44->leave($__internal_267a64d114e19afc6041c54e1441e78550a42636dc844da387ebc5e72d524e44_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dfe487bf43fd55b3dbfc4b6e74f48d3cd804a0c9f031489cc79b9f8e2ec927f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfe487bf43fd55b3dbfc4b6e74f48d3cd804a0c9f031489cc79b9f8e2ec927f7->enter($__internal_dfe487bf43fd55b3dbfc4b6e74f48d3cd804a0c9f031489cc79b9f8e2ec927f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b94cb66838a6ddbf979591ffaa3daf427c952861bc568173b658f0b71e0831ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b94cb66838a6ddbf979591ffaa3daf427c952861bc568173b658f0b71e0831ae->enter($__internal_b94cb66838a6ddbf979591ffaa3daf427c952861bc568173b658f0b71e0831ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
              integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    ";
        
        $__internal_b94cb66838a6ddbf979591ffaa3daf427c952861bc568173b658f0b71e0831ae->leave($__internal_b94cb66838a6ddbf979591ffaa3daf427c952861bc568173b658f0b71e0831ae_prof);

        
        $__internal_dfe487bf43fd55b3dbfc4b6e74f48d3cd804a0c9f031489cc79b9f8e2ec927f7->leave($__internal_dfe487bf43fd55b3dbfc4b6e74f48d3cd804a0c9f031489cc79b9f8e2ec927f7_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5f38eed9e84b0edd871663b368fe9204f20da8fc45969b9f67e46245c47df29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5f38eed9e84b0edd871663b368fe9204f20da8fc45969b9f67e46245c47df29->enter($__internal_b5f38eed9e84b0edd871663b368fe9204f20da8fc45969b9f67e46245c47df29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a09e3f4186919649e4758929774fc9e9dcc443de3f23417543f907d818da6d24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a09e3f4186919649e4758929774fc9e9dcc443de3f23417543f907d818da6d24->enter($__internal_a09e3f4186919649e4758929774fc9e9dcc443de3f23417543f907d818da6d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <li><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entrees");
        echo "\">Nos entrées</a></li>
                        <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plats");
        echo "\">Nos plats</a></li>
                        <li><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("desserts");
        echo "\">Nos desserts</a></li>
                        <li><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boissons");
        echo "\">Nos boissons</a></li>
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
                        <li><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boissons");
        echo "\">Nous contacter</a></li>
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
        
        $__internal_a09e3f4186919649e4758929774fc9e9dcc443de3f23417543f907d818da6d24->leave($__internal_a09e3f4186919649e4758929774fc9e9dcc443de3f23417543f907d818da6d24_prof);

        
        $__internal_b5f38eed9e84b0edd871663b368fe9204f20da8fc45969b9f67e46245c47df29->leave($__internal_b5f38eed9e84b0edd871663b368fe9204f20da8fc45969b9f67e46245c47df29_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_78aa267a541a9dac41d88eed003a8b51e2a49c4ae64c62d72324a4024446737c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78aa267a541a9dac41d88eed003a8b51e2a49c4ae64c62d72324a4024446737c->enter($__internal_78aa267a541a9dac41d88eed003a8b51e2a49c4ae64c62d72324a4024446737c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e8ef1420d5de74418c715c8b80f4a82fee305768b66b194a7d586a4a3842343e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8ef1420d5de74418c715c8b80f4a82fee305768b66b194a7d586a4a3842343e->enter($__internal_e8ef1420d5de74418c715c8b80f4a82fee305768b66b194a7d586a4a3842343e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "    <script
            src=\"https://code.jquery.com/jquery-3.2.1.js\"
            integrity=\"sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"
            integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
";
        
        $__internal_e8ef1420d5de74418c715c8b80f4a82fee305768b66b194a7d586a4a3842343e->leave($__internal_e8ef1420d5de74418c715c8b80f4a82fee305768b66b194a7d586a4a3842343e_prof);

        
        $__internal_78aa267a541a9dac41d88eed003a8b51e2a49c4ae64c62d72324a4024446737c->leave($__internal_78aa267a541a9dac41d88eed003a8b51e2a49c4ae64c62d72324a4024446737c_prof);

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
        return array (  196 => 50,  187 => 49,  177 => 47,  169 => 42,  165 => 41,  158 => 37,  154 => 36,  146 => 31,  139 => 27,  135 => 26,  131 => 25,  127 => 24,  117 => 17,  112 => 14,  103 => 13,  91 => 7,  82 => 6,  64 => 5,  52 => 57,  50 => 49,  48 => 13,  41 => 10,  39 => 6,  35 => 5,  29 => 1,);
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
                        <li><a href=\"{{ path ('entrees') }}\">Nos entrées</a></li>
                        <li><a href=\"{{ path ('plats') }}\">Nos plats</a></li>
                        <li><a href=\"{{ path ('desserts') }}\">Nos desserts</a></li>
                        <li><a href=\"{{ path ('boissons') }}\">Nos boissons</a></li>
                    </ul>
                </li>
                <li><a href=\"#\">Nos menus</a></li>
                <li><a href=\"{{ path ('employees') }}\">Nos employés</a></li>
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Contact et accès au site
                        <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"{{ path ('access') }}\">Accès au site</a></li>
                        <li><a href=\"{{ path ('boissons') }}\">Nous contacter</a></li>
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
