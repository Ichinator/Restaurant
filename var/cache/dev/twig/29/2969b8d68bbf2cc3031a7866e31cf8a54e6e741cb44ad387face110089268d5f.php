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
        $__internal_039e2d3716d80e129dd16b7cec2d294459ea384ba572b7c19a5690d39a20323f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_039e2d3716d80e129dd16b7cec2d294459ea384ba572b7c19a5690d39a20323f->enter($__internal_039e2d3716d80e129dd16b7cec2d294459ea384ba572b7c19a5690d39a20323f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_4e11fc4ab066a935f096d0c9c99df6dacb13c97573e611e98c6aa6b946ccd163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e11fc4ab066a935f096d0c9c99df6dacb13c97573e611e98c6aa6b946ccd163->enter($__internal_4e11fc4ab066a935f096d0c9c99df6dacb13c97573e611e98c6aa6b946ccd163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_039e2d3716d80e129dd16b7cec2d294459ea384ba572b7c19a5690d39a20323f->leave($__internal_039e2d3716d80e129dd16b7cec2d294459ea384ba572b7c19a5690d39a20323f_prof);

        
        $__internal_4e11fc4ab066a935f096d0c9c99df6dacb13c97573e611e98c6aa6b946ccd163->leave($__internal_4e11fc4ab066a935f096d0c9c99df6dacb13c97573e611e98c6aa6b946ccd163_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_71a1dce28a4a11569424eac81a66d25534cf88ec5e15fa0da43381e107dcfd22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71a1dce28a4a11569424eac81a66d25534cf88ec5e15fa0da43381e107dcfd22->enter($__internal_71a1dce28a4a11569424eac81a66d25534cf88ec5e15fa0da43381e107dcfd22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_70602a5236c170317c8435d207ec669f66d2d2d7455e3ecab9883dbe58a413b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70602a5236c170317c8435d207ec669f66d2d2d7455e3ecab9883dbe58a413b7->enter($__internal_70602a5236c170317c8435d207ec669f66d2d2d7455e3ecab9883dbe58a413b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_70602a5236c170317c8435d207ec669f66d2d2d7455e3ecab9883dbe58a413b7->leave($__internal_70602a5236c170317c8435d207ec669f66d2d2d7455e3ecab9883dbe58a413b7_prof);

        
        $__internal_71a1dce28a4a11569424eac81a66d25534cf88ec5e15fa0da43381e107dcfd22->leave($__internal_71a1dce28a4a11569424eac81a66d25534cf88ec5e15fa0da43381e107dcfd22_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ede3f9e8d9a7168b21bd93688b55fd67b0b86537caa276c2f81bd874775d9a54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ede3f9e8d9a7168b21bd93688b55fd67b0b86537caa276c2f81bd874775d9a54->enter($__internal_ede3f9e8d9a7168b21bd93688b55fd67b0b86537caa276c2f81bd874775d9a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c42279e50b1dbf4635612027f66fb51860bfe33a07cd2a47d6d00bc160cb3518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c42279e50b1dbf4635612027f66fb51860bfe33a07cd2a47d6d00bc160cb3518->enter($__internal_c42279e50b1dbf4635612027f66fb51860bfe33a07cd2a47d6d00bc160cb3518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_c42279e50b1dbf4635612027f66fb51860bfe33a07cd2a47d6d00bc160cb3518->leave($__internal_c42279e50b1dbf4635612027f66fb51860bfe33a07cd2a47d6d00bc160cb3518_prof);

        
        $__internal_ede3f9e8d9a7168b21bd93688b55fd67b0b86537caa276c2f81bd874775d9a54->leave($__internal_ede3f9e8d9a7168b21bd93688b55fd67b0b86537caa276c2f81bd874775d9a54_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3888096aa4339469500d29ecc0cb3b416baf7100bd2ceb930932715a3360660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3888096aa4339469500d29ecc0cb3b416baf7100bd2ceb930932715a3360660->enter($__internal_a3888096aa4339469500d29ecc0cb3b416baf7100bd2ceb930932715a3360660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d1cdc80af99379f10e900dde3995cb2f71b6064f0951765ce8ed57a3040c5461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1cdc80af99379f10e900dde3995cb2f71b6064f0951765ce8ed57a3040c5461->enter($__internal_d1cdc80af99379f10e900dde3995cb2f71b6064f0951765ce8ed57a3040c5461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d1cdc80af99379f10e900dde3995cb2f71b6064f0951765ce8ed57a3040c5461->leave($__internal_d1cdc80af99379f10e900dde3995cb2f71b6064f0951765ce8ed57a3040c5461_prof);

        
        $__internal_a3888096aa4339469500d29ecc0cb3b416baf7100bd2ceb930932715a3360660->leave($__internal_a3888096aa4339469500d29ecc0cb3b416baf7100bd2ceb930932715a3360660_prof);

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
