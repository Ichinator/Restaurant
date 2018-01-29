<?php

/* ::base.html.twig */
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
        $__internal_5f6e729a93ffc914a233383d42741b15f71fa70f194ed2b6d18fbd38892919fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f6e729a93ffc914a233383d42741b15f71fa70f194ed2b6d18fbd38892919fa->enter($__internal_5f6e729a93ffc914a233383d42741b15f71fa70f194ed2b6d18fbd38892919fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_8a622096773a6e8c37191daf870feb70a31d7d6fc80b32f074128d431b7ea96e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a622096773a6e8c37191daf870feb70a31d7d6fc80b32f074128d431b7ea96e->enter($__internal_8a622096773a6e8c37191daf870feb70a31d7d6fc80b32f074128d431b7ea96e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 11
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo "</body>
</html>
";
        
        $__internal_5f6e729a93ffc914a233383d42741b15f71fa70f194ed2b6d18fbd38892919fa->leave($__internal_5f6e729a93ffc914a233383d42741b15f71fa70f194ed2b6d18fbd38892919fa_prof);

        
        $__internal_8a622096773a6e8c37191daf870feb70a31d7d6fc80b32f074128d431b7ea96e->leave($__internal_8a622096773a6e8c37191daf870feb70a31d7d6fc80b32f074128d431b7ea96e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_92eaedd019db49610d9dfbb9dd0585e9ff02e57a56c95b49151e99f3dad3265d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92eaedd019db49610d9dfbb9dd0585e9ff02e57a56c95b49151e99f3dad3265d->enter($__internal_92eaedd019db49610d9dfbb9dd0585e9ff02e57a56c95b49151e99f3dad3265d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f28bd2039cd3584c59c0324663b8fe590602d1bca1eef6f8fb015b371a0e1e74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f28bd2039cd3584c59c0324663b8fe590602d1bca1eef6f8fb015b371a0e1e74->enter($__internal_f28bd2039cd3584c59c0324663b8fe590602d1bca1eef6f8fb015b371a0e1e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f28bd2039cd3584c59c0324663b8fe590602d1bca1eef6f8fb015b371a0e1e74->leave($__internal_f28bd2039cd3584c59c0324663b8fe590602d1bca1eef6f8fb015b371a0e1e74_prof);

        
        $__internal_92eaedd019db49610d9dfbb9dd0585e9ff02e57a56c95b49151e99f3dad3265d->leave($__internal_92eaedd019db49610d9dfbb9dd0585e9ff02e57a56c95b49151e99f3dad3265d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1e940b43b202358c295ac6c3800259b8a9db2cc8f0778f2fef3ac81dd1e76fef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e940b43b202358c295ac6c3800259b8a9db2cc8f0778f2fef3ac81dd1e76fef->enter($__internal_1e940b43b202358c295ac6c3800259b8a9db2cc8f0778f2fef3ac81dd1e76fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9b4703a1c5e886786c3ec530b7043b219f608c7b48fbf87860b9d9f2145927cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b4703a1c5e886786c3ec530b7043b219f608c7b48fbf87860b9d9f2145927cf->enter($__internal_9b4703a1c5e886786c3ec530b7043b219f608c7b48fbf87860b9d9f2145927cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
              integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

    ";
        
        $__internal_9b4703a1c5e886786c3ec530b7043b219f608c7b48fbf87860b9d9f2145927cf->leave($__internal_9b4703a1c5e886786c3ec530b7043b219f608c7b48fbf87860b9d9f2145927cf_prof);

        
        $__internal_1e940b43b202358c295ac6c3800259b8a9db2cc8f0778f2fef3ac81dd1e76fef->leave($__internal_1e940b43b202358c295ac6c3800259b8a9db2cc8f0778f2fef3ac81dd1e76fef_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a70a4f3302edf554452072c63addbea31055246db7255d2ddf933a08dc3157c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a70a4f3302edf554452072c63addbea31055246db7255d2ddf933a08dc3157c->enter($__internal_1a70a4f3302edf554452072c63addbea31055246db7255d2ddf933a08dc3157c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0590236220b41c25e42e20785c8f3b6195f805ddbdf090e62351a3e442c86cc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0590236220b41c25e42e20785c8f3b6195f805ddbdf090e62351a3e442c86cc5->enter($__internal_0590236220b41c25e42e20785c8f3b6195f805ddbdf090e62351a3e442c86cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "    <nav class=\"navbar navbar-inverse\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <a class=\"navbar-brand\" href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Accueil</a>
            </div>
            <ul class=\"nav navbar-nav\">
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Ce que nous vous proposons
                        <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entrees");
        echo "\">Nos entrées</a></li>
                        <li><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plats");
        echo "\">Nos plats</a></li>
                        <li><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("desserts");
        echo "\">Nos desserts</a></li>
                        <li><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boissons");
        echo "\">Nos boissons</a></li>
                    </ul>
                </li>
                <li><a href=\"#\">Nos menus</a></li>
                <li><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("employees");
        echo "\">Nos employés</a></li>
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Contact et accès au site
                        <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("access");
        echo "\">Accès au site</a></li>
                        <li><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boissons");
        echo "\">Nous contacter</a></li>
                    </ul>
            </ul>
            ";
        // line 41
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 42
            echo "                <ul class=\"nav navbar-nav navbar-right\">
                    <li><a href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">Mon compte</a></li>
                </ul>
            ";
        } else {
            // line 46
            echo "                <ul class=\"nav navbar-nav navbar-right\">
                    <li><a href=\"";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\"><span class=\"glyphicon glyphicon-user\"></span>S'inscrire</a></li>
                    <li><a href=\"";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\"><span class=\"glyphicon glyphicon-log-in\"></span>Se connecter</a></li>
                </ul>
            ";
        }
        // line 51
        echo "
        </div>
    </nav>

";
        
        $__internal_0590236220b41c25e42e20785c8f3b6195f805ddbdf090e62351a3e442c86cc5->leave($__internal_0590236220b41c25e42e20785c8f3b6195f805ddbdf090e62351a3e442c86cc5_prof);

        
        $__internal_1a70a4f3302edf554452072c63addbea31055246db7255d2ddf933a08dc3157c->leave($__internal_1a70a4f3302edf554452072c63addbea31055246db7255d2ddf933a08dc3157c_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0b3f1445c0ce9070a12c1a03472729120b987e65eb9efe37153d7b4f04dd91c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b3f1445c0ce9070a12c1a03472729120b987e65eb9efe37153d7b4f04dd91c2->enter($__internal_0b3f1445c0ce9070a12c1a03472729120b987e65eb9efe37153d7b4f04dd91c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_81a78895a165f7897fc718a81a515519f93fd36b8a307c5ee9081849f24468e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81a78895a165f7897fc718a81a515519f93fd36b8a307c5ee9081849f24468e7->enter($__internal_81a78895a165f7897fc718a81a515519f93fd36b8a307c5ee9081849f24468e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "    <script src=\"https://code.jquery.com/jquery-3.2.1.js\"
            integrity=\"sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=\"
            crossorigin=\"anonymous\"></script>

    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"
            integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
";
        
        $__internal_81a78895a165f7897fc718a81a515519f93fd36b8a307c5ee9081849f24468e7->leave($__internal_81a78895a165f7897fc718a81a515519f93fd36b8a307c5ee9081849f24468e7_prof);

        
        $__internal_0b3f1445c0ce9070a12c1a03472729120b987e65eb9efe37153d7b4f04dd91c2->leave($__internal_0b3f1445c0ce9070a12c1a03472729120b987e65eb9efe37153d7b4f04dd91c2_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 57,  203 => 56,  189 => 51,  183 => 48,  179 => 47,  176 => 46,  170 => 43,  167 => 42,  165 => 41,  159 => 38,  155 => 37,  147 => 32,  140 => 28,  136 => 27,  132 => 26,  128 => 25,  118 => 18,  113 => 15,  104 => 14,  91 => 7,  82 => 6,  64 => 5,  52 => 64,  50 => 56,  48 => 14,  41 => 11,  39 => 6,  35 => 5,  29 => 1,);
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
            {% if app.user %}
                <ul class=\"nav navbar-nav navbar-right\">
                    <li><a href=\"{{ path('fos_user_profile_show') }}\">Mon compte</a></li>
                </ul>
            {% else %}
                <ul class=\"nav navbar-nav navbar-right\">
                    <li><a href=\"{{ path ('fos_user_registration_register') }}\"><span class=\"glyphicon glyphicon-user\"></span>S'inscrire</a></li>
                    <li><a href=\"{{ path ('fos_user_security_login') }}\"><span class=\"glyphicon glyphicon-log-in\"></span>Se connecter</a></li>
                </ul>
            {% endif %}

        </div>
    </nav>

{% endblock %}
{% block javascripts %}
    <script src=\"https://code.jquery.com/jquery-3.2.1.js\"
            integrity=\"sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=\"
            crossorigin=\"anonymous\"></script>

    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"
            integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
{% endblock %}
</body>
</html>
", "::base.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/app/Resources/views/base.html.twig");
    }
}
