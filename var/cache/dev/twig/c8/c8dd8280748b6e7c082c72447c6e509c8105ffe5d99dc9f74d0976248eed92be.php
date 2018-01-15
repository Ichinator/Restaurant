<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_d883d9b407af0bc5600790425d24681a09eb68c0da3eb82082b4fb93c3865d93 extends Twig_Template
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
        $__internal_6a2eb4721bb8cb9181b15434c8fbea893d1499f32b58f58d649d6d86595af4cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a2eb4721bb8cb9181b15434c8fbea893d1499f32b58f58d649d6d86595af4cd->enter($__internal_6a2eb4721bb8cb9181b15434c8fbea893d1499f32b58f58d649d6d86595af4cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_3401fadd53cc5e9bc9eae35f1e45ccd3ee89cd9fc944d3d7e39f84c9281f28e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3401fadd53cc5e9bc9eae35f1e45ccd3ee89cd9fc944d3d7e39f84c9281f28e1->enter($__internal_3401fadd53cc5e9bc9eae35f1e45ccd3ee89cd9fc944d3d7e39f84c9281f28e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_6a2eb4721bb8cb9181b15434c8fbea893d1499f32b58f58d649d6d86595af4cd->leave($__internal_6a2eb4721bb8cb9181b15434c8fbea893d1499f32b58f58d649d6d86595af4cd_prof);

        
        $__internal_3401fadd53cc5e9bc9eae35f1e45ccd3ee89cd9fc944d3d7e39f84c9281f28e1->leave($__internal_3401fadd53cc5e9bc9eae35f1e45ccd3ee89cd9fc944d3d7e39f84c9281f28e1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc51cbcc84758d4043a6215a729fd09a4b3bc1da45096503af8288545f17212a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc51cbcc84758d4043a6215a729fd09a4b3bc1da45096503af8288545f17212a->enter($__internal_cc51cbcc84758d4043a6215a729fd09a4b3bc1da45096503af8288545f17212a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4a3d24868ea3c2b3919b38eaf3f394b70e170e30c60c1c0732ebc5c15448fbaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a3d24868ea3c2b3919b38eaf3f394b70e170e30c60c1c0732ebc5c15448fbaf->enter($__internal_4a3d24868ea3c2b3919b38eaf3f394b70e170e30c60c1c0732ebc5c15448fbaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4a3d24868ea3c2b3919b38eaf3f394b70e170e30c60c1c0732ebc5c15448fbaf->leave($__internal_4a3d24868ea3c2b3919b38eaf3f394b70e170e30c60c1c0732ebc5c15448fbaf_prof);

        
        $__internal_cc51cbcc84758d4043a6215a729fd09a4b3bc1da45096503af8288545f17212a->leave($__internal_cc51cbcc84758d4043a6215a729fd09a4b3bc1da45096503af8288545f17212a_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_cf790002bd17d2f7fdf9825c94e79a2176b48799752805d4b5a04eb6631a884f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf790002bd17d2f7fdf9825c94e79a2176b48799752805d4b5a04eb6631a884f->enter($__internal_cf790002bd17d2f7fdf9825c94e79a2176b48799752805d4b5a04eb6631a884f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_67cecc0471939b29fa2a119d185bb79264a4bf632330ab728da58028a0c5247e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67cecc0471939b29fa2a119d185bb79264a4bf632330ab728da58028a0c5247e->enter($__internal_67cecc0471939b29fa2a119d185bb79264a4bf632330ab728da58028a0c5247e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_67cecc0471939b29fa2a119d185bb79264a4bf632330ab728da58028a0c5247e->leave($__internal_67cecc0471939b29fa2a119d185bb79264a4bf632330ab728da58028a0c5247e_prof);

        
        $__internal_cf790002bd17d2f7fdf9825c94e79a2176b48799752805d4b5a04eb6631a884f->leave($__internal_cf790002bd17d2f7fdf9825c94e79a2176b48799752805d4b5a04eb6631a884f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_bdcc590302208c54509fdec70989fd89d744ebdc72b2a1e8b895394b2f55bb08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdcc590302208c54509fdec70989fd89d744ebdc72b2a1e8b895394b2f55bb08->enter($__internal_bdcc590302208c54509fdec70989fd89d744ebdc72b2a1e8b895394b2f55bb08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_44f59db654ccdeec114b06d25f4771459290223865517f8ca76c6455f9b2bfd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44f59db654ccdeec114b06d25f4771459290223865517f8ca76c6455f9b2bfd6->enter($__internal_44f59db654ccdeec114b06d25f4771459290223865517f8ca76c6455f9b2bfd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_44f59db654ccdeec114b06d25f4771459290223865517f8ca76c6455f9b2bfd6->leave($__internal_44f59db654ccdeec114b06d25f4771459290223865517f8ca76c6455f9b2bfd6_prof);

        
        $__internal_bdcc590302208c54509fdec70989fd89d744ebdc72b2a1e8b895394b2f55bb08->leave($__internal_bdcc590302208c54509fdec70989fd89d744ebdc72b2a1e8b895394b2f55bb08_prof);

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
