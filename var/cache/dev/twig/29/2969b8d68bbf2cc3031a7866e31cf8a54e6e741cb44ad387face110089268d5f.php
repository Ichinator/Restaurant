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
        $__internal_86de6cd5d8b76f96b61a6f72cc3c90e202e7d57b522253acb91586c885953370 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86de6cd5d8b76f96b61a6f72cc3c90e202e7d57b522253acb91586c885953370->enter($__internal_86de6cd5d8b76f96b61a6f72cc3c90e202e7d57b522253acb91586c885953370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_366a6db0cb38a7242630d643404ae85c52ab8e6f99b157bd3b9a36ce979f045d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_366a6db0cb38a7242630d643404ae85c52ab8e6f99b157bd3b9a36ce979f045d->enter($__internal_366a6db0cb38a7242630d643404ae85c52ab8e6f99b157bd3b9a36ce979f045d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_86de6cd5d8b76f96b61a6f72cc3c90e202e7d57b522253acb91586c885953370->leave($__internal_86de6cd5d8b76f96b61a6f72cc3c90e202e7d57b522253acb91586c885953370_prof);

        
        $__internal_366a6db0cb38a7242630d643404ae85c52ab8e6f99b157bd3b9a36ce979f045d->leave($__internal_366a6db0cb38a7242630d643404ae85c52ab8e6f99b157bd3b9a36ce979f045d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e4902a0aee3d96774b010f3a042c8853ef1c3b15d1ea257fcef91c8c8166e1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e4902a0aee3d96774b010f3a042c8853ef1c3b15d1ea257fcef91c8c8166e1e->enter($__internal_7e4902a0aee3d96774b010f3a042c8853ef1c3b15d1ea257fcef91c8c8166e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_930b88367aab5535779950be36baf8532257f6e712d6143e518c9b20da9de25d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_930b88367aab5535779950be36baf8532257f6e712d6143e518c9b20da9de25d->enter($__internal_930b88367aab5535779950be36baf8532257f6e712d6143e518c9b20da9de25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_930b88367aab5535779950be36baf8532257f6e712d6143e518c9b20da9de25d->leave($__internal_930b88367aab5535779950be36baf8532257f6e712d6143e518c9b20da9de25d_prof);

        
        $__internal_7e4902a0aee3d96774b010f3a042c8853ef1c3b15d1ea257fcef91c8c8166e1e->leave($__internal_7e4902a0aee3d96774b010f3a042c8853ef1c3b15d1ea257fcef91c8c8166e1e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3888aa3f18f384cf63a1a32d66c46ff96a82fa800de321484d0f151c8b74933d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3888aa3f18f384cf63a1a32d66c46ff96a82fa800de321484d0f151c8b74933d->enter($__internal_3888aa3f18f384cf63a1a32d66c46ff96a82fa800de321484d0f151c8b74933d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_aee1db8ba7e1f70ab2805daa2f438e4682e488f7dc3cd4ce42906986b2bb1850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aee1db8ba7e1f70ab2805daa2f438e4682e488f7dc3cd4ce42906986b2bb1850->enter($__internal_aee1db8ba7e1f70ab2805daa2f438e4682e488f7dc3cd4ce42906986b2bb1850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_aee1db8ba7e1f70ab2805daa2f438e4682e488f7dc3cd4ce42906986b2bb1850->leave($__internal_aee1db8ba7e1f70ab2805daa2f438e4682e488f7dc3cd4ce42906986b2bb1850_prof);

        
        $__internal_3888aa3f18f384cf63a1a32d66c46ff96a82fa800de321484d0f151c8b74933d->leave($__internal_3888aa3f18f384cf63a1a32d66c46ff96a82fa800de321484d0f151c8b74933d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0103d0e9ebbd2cac236938a84cfbd70d7ec9e4a5130024f83914ebe69111734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0103d0e9ebbd2cac236938a84cfbd70d7ec9e4a5130024f83914ebe69111734->enter($__internal_d0103d0e9ebbd2cac236938a84cfbd70d7ec9e4a5130024f83914ebe69111734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c2af4dd824d667e841a6c3eadb974cbcbcfc76d1cfc8a226d41622d7600b94b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2af4dd824d667e841a6c3eadb974cbcbcfc76d1cfc8a226d41622d7600b94b4->enter($__internal_c2af4dd824d667e841a6c3eadb974cbcbcfc76d1cfc8a226d41622d7600b94b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c2af4dd824d667e841a6c3eadb974cbcbcfc76d1cfc8a226d41622d7600b94b4->leave($__internal_c2af4dd824d667e841a6c3eadb974cbcbcfc76d1cfc8a226d41622d7600b94b4_prof);

        
        $__internal_d0103d0e9ebbd2cac236938a84cfbd70d7ec9e4a5130024f83914ebe69111734->leave($__internal_d0103d0e9ebbd2cac236938a84cfbd70d7ec9e4a5130024f83914ebe69111734_prof);

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
