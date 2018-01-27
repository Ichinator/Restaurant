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
        $__internal_d52fccea2d07dc75c62cd4dc1d5e353f0ae39cf7dcd210b2c148243242c77b16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d52fccea2d07dc75c62cd4dc1d5e353f0ae39cf7dcd210b2c148243242c77b16->enter($__internal_d52fccea2d07dc75c62cd4dc1d5e353f0ae39cf7dcd210b2c148243242c77b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_4798a6b2ba7b882f489838325357fc0b704e6fbfabdab21709c515747bea8eda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4798a6b2ba7b882f489838325357fc0b704e6fbfabdab21709c515747bea8eda->enter($__internal_4798a6b2ba7b882f489838325357fc0b704e6fbfabdab21709c515747bea8eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_d52fccea2d07dc75c62cd4dc1d5e353f0ae39cf7dcd210b2c148243242c77b16->leave($__internal_d52fccea2d07dc75c62cd4dc1d5e353f0ae39cf7dcd210b2c148243242c77b16_prof);

        
        $__internal_4798a6b2ba7b882f489838325357fc0b704e6fbfabdab21709c515747bea8eda->leave($__internal_4798a6b2ba7b882f489838325357fc0b704e6fbfabdab21709c515747bea8eda_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_90e7f2561c1e340173bcb15751013c089d9869dda52b7537ce73540111349019 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90e7f2561c1e340173bcb15751013c089d9869dda52b7537ce73540111349019->enter($__internal_90e7f2561c1e340173bcb15751013c089d9869dda52b7537ce73540111349019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_263aee4ca4ffd22c86c5d23894b5417c85cf130064c25db94f739f496a9add95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_263aee4ca4ffd22c86c5d23894b5417c85cf130064c25db94f739f496a9add95->enter($__internal_263aee4ca4ffd22c86c5d23894b5417c85cf130064c25db94f739f496a9add95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_263aee4ca4ffd22c86c5d23894b5417c85cf130064c25db94f739f496a9add95->leave($__internal_263aee4ca4ffd22c86c5d23894b5417c85cf130064c25db94f739f496a9add95_prof);

        
        $__internal_90e7f2561c1e340173bcb15751013c089d9869dda52b7537ce73540111349019->leave($__internal_90e7f2561c1e340173bcb15751013c089d9869dda52b7537ce73540111349019_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d63174403aa9744b343abd6453f29a474600f746eebb5d4b864e277e03afab15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d63174403aa9744b343abd6453f29a474600f746eebb5d4b864e277e03afab15->enter($__internal_d63174403aa9744b343abd6453f29a474600f746eebb5d4b864e277e03afab15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_17c181ab189ca9e67d4de6c925ae31b1b3c97848c9535df6141a94931152af65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17c181ab189ca9e67d4de6c925ae31b1b3c97848c9535df6141a94931152af65->enter($__internal_17c181ab189ca9e67d4de6c925ae31b1b3c97848c9535df6141a94931152af65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
              integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

    ";
        
        $__internal_17c181ab189ca9e67d4de6c925ae31b1b3c97848c9535df6141a94931152af65->leave($__internal_17c181ab189ca9e67d4de6c925ae31b1b3c97848c9535df6141a94931152af65_prof);

        
        $__internal_d63174403aa9744b343abd6453f29a474600f746eebb5d4b864e277e03afab15->leave($__internal_d63174403aa9744b343abd6453f29a474600f746eebb5d4b864e277e03afab15_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfee4b9b8271e7cd8de0b7a0faa8f166b70e7768a7c1a2dbe98942aa3bc924de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfee4b9b8271e7cd8de0b7a0faa8f166b70e7768a7c1a2dbe98942aa3bc924de->enter($__internal_dfee4b9b8271e7cd8de0b7a0faa8f166b70e7768a7c1a2dbe98942aa3bc924de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6e54e4a3f1334d1d59ef71e26c909558142a42ce6d46b5e786422d2bc280470c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e54e4a3f1334d1d59ef71e26c909558142a42ce6d46b5e786422d2bc280470c->enter($__internal_6e54e4a3f1334d1d59ef71e26c909558142a42ce6d46b5e786422d2bc280470c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6e54e4a3f1334d1d59ef71e26c909558142a42ce6d46b5e786422d2bc280470c->leave($__internal_6e54e4a3f1334d1d59ef71e26c909558142a42ce6d46b5e786422d2bc280470c_prof);

        
        $__internal_dfee4b9b8271e7cd8de0b7a0faa8f166b70e7768a7c1a2dbe98942aa3bc924de->leave($__internal_dfee4b9b8271e7cd8de0b7a0faa8f166b70e7768a7c1a2dbe98942aa3bc924de_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b5397cabb7a7340bfd6f87f7d38ca2f80edce87887c96aa32ad4bb011da6d90f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5397cabb7a7340bfd6f87f7d38ca2f80edce87887c96aa32ad4bb011da6d90f->enter($__internal_b5397cabb7a7340bfd6f87f7d38ca2f80edce87887c96aa32ad4bb011da6d90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3135b8fb5b1e2915109e33009c7f696a3f3947bc6e44070473331dcd106bc526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3135b8fb5b1e2915109e33009c7f696a3f3947bc6e44070473331dcd106bc526->enter($__internal_3135b8fb5b1e2915109e33009c7f696a3f3947bc6e44070473331dcd106bc526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "    <script src=\"https://code.jquery.com/jquery-3.2.1.js\"
            integrity=\"sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=\"
            crossorigin=\"anonymous\"></script>

    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"
            integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
";
        
        $__internal_3135b8fb5b1e2915109e33009c7f696a3f3947bc6e44070473331dcd106bc526->leave($__internal_3135b8fb5b1e2915109e33009c7f696a3f3947bc6e44070473331dcd106bc526_prof);

        
        $__internal_b5397cabb7a7340bfd6f87f7d38ca2f80edce87887c96aa32ad4bb011da6d90f->leave($__internal_b5397cabb7a7340bfd6f87f7d38ca2f80edce87887c96aa32ad4bb011da6d90f_prof);

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
