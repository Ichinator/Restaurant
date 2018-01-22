<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_e31ffd44026dea2e53db25ae6b96d0ecced5d0751546cc4a536f13164256df5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_835d3585917d88a78e2f17d0cb712308298db6b861a08475eb6b7f7b1187cfd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_835d3585917d88a78e2f17d0cb712308298db6b861a08475eb6b7f7b1187cfd5->enter($__internal_835d3585917d88a78e2f17d0cb712308298db6b861a08475eb6b7f7b1187cfd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_abaa06751db2dd7b5ba0e4713872d22dfa3bb934cba9af6f66a155a686a6051b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abaa06751db2dd7b5ba0e4713872d22dfa3bb934cba9af6f66a155a686a6051b->enter($__internal_abaa06751db2dd7b5ba0e4713872d22dfa3bb934cba9af6f66a155a686a6051b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_835d3585917d88a78e2f17d0cb712308298db6b861a08475eb6b7f7b1187cfd5->leave($__internal_835d3585917d88a78e2f17d0cb712308298db6b861a08475eb6b7f7b1187cfd5_prof);

        
        $__internal_abaa06751db2dd7b5ba0e4713872d22dfa3bb934cba9af6f66a155a686a6051b->leave($__internal_abaa06751db2dd7b5ba0e4713872d22dfa3bb934cba9af6f66a155a686a6051b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c9a4ac5474bc7d7821e2fed55f452e1d5a57104c01537c2627c4df400d623f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c9a4ac5474bc7d7821e2fed55f452e1d5a57104c01537c2627c4df400d623f4->enter($__internal_5c9a4ac5474bc7d7821e2fed55f452e1d5a57104c01537c2627c4df400d623f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_18ef7c58bef1aa5bb66132c65a07f12886affa65428723e93d702c1cf96e74cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18ef7c58bef1aa5bb66132c65a07f12886affa65428723e93d702c1cf96e74cd->enter($__internal_18ef7c58bef1aa5bb66132c65a07f12886affa65428723e93d702c1cf96e74cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_18ef7c58bef1aa5bb66132c65a07f12886affa65428723e93d702c1cf96e74cd->leave($__internal_18ef7c58bef1aa5bb66132c65a07f12886affa65428723e93d702c1cf96e74cd_prof);

        
        $__internal_5c9a4ac5474bc7d7821e2fed55f452e1d5a57104c01537c2627c4df400d623f4->leave($__internal_5c9a4ac5474bc7d7821e2fed55f452e1d5a57104c01537c2627c4df400d623f4_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_13901df47a82b35e561661ffaee521c0c410abe5c5c1a95e5b89ce8606ce1c81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13901df47a82b35e561661ffaee521c0c410abe5c5c1a95e5b89ce8606ce1c81->enter($__internal_13901df47a82b35e561661ffaee521c0c410abe5c5c1a95e5b89ce8606ce1c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dddc0694931d04787a7f39329e26bdfee8d12e883c71953d4e0aa3b493075b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dddc0694931d04787a7f39329e26bdfee8d12e883c71953d4e0aa3b493075b0e->enter($__internal_dddc0694931d04787a7f39329e26bdfee8d12e883c71953d4e0aa3b493075b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_dddc0694931d04787a7f39329e26bdfee8d12e883c71953d4e0aa3b493075b0e->leave($__internal_dddc0694931d04787a7f39329e26bdfee8d12e883c71953d4e0aa3b493075b0e_prof);

        
        $__internal_13901df47a82b35e561661ffaee521c0c410abe5c5c1a95e5b89ce8606ce1c81->leave($__internal_13901df47a82b35e561661ffaee521c0c410abe5c5c1a95e5b89ce8606ce1c81_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e65aa516762be9b7f782101b511d87643d587c48c669ec57e10473d29af15fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e65aa516762be9b7f782101b511d87643d587c48c669ec57e10473d29af15fb->enter($__internal_3e65aa516762be9b7f782101b511d87643d587c48c669ec57e10473d29af15fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9a4c6101adbc951b6525f67eeb07598236f6ea7dbb30ff14462704cb420e1cd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a4c6101adbc951b6525f67eeb07598236f6ea7dbb30ff14462704cb420e1cd4->enter($__internal_9a4c6101adbc951b6525f67eeb07598236f6ea7dbb30ff14462704cb420e1cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9a4c6101adbc951b6525f67eeb07598236f6ea7dbb30ff14462704cb420e1cd4->leave($__internal_9a4c6101adbc951b6525f67eeb07598236f6ea7dbb30ff14462704cb420e1cd4_prof);

        
        $__internal_3e65aa516762be9b7f782101b511d87643d587c48c669ec57e10473d29af15fb->leave($__internal_3e65aa516762be9b7f782101b511d87643d587c48c669ec57e10473d29af15fb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
