<?php

/* EasyAdminBundle:default:label_empty.html.twig */
class __TwigTemplate_ed47dadfaf3061e3bbd45b1e55cccda71c90dc3fe6f3a4b140ae517a0128546d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14ef37f4903b419bf3b984e681ace883979b0a130e16fb15d6f41e5d41a0addd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14ef37f4903b419bf3b984e681ace883979b0a130e16fb15d6f41e5d41a0addd->enter($__internal_14ef37f4903b419bf3b984e681ace883979b0a130e16fb15d6f41e5d41a0addd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        $__internal_c9c086c96d3a95d55f89934405d55abca5a633391098dde933b9de000763bc33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9c086c96d3a95d55f89934405d55abca5a633391098dde933b9de000763bc33->enter($__internal_c9c086c96d3a95d55f89934405d55abca5a633391098dde933b9de000763bc33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        // line 1
        echo "<span class=\"label label-empty\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_14ef37f4903b419bf3b984e681ace883979b0a130e16fb15d6f41e5d41a0addd->leave($__internal_14ef37f4903b419bf3b984e681ace883979b0a130e16fb15d6f41e5d41a0addd_prof);

        
        $__internal_c9c086c96d3a95d55f89934405d55abca5a633391098dde933b9de000763bc33->leave($__internal_c9c086c96d3a95d55f89934405d55abca5a633391098dde933b9de000763bc33_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_empty.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"label label-empty\">{{ 'label.empty'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:label_empty.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/label_empty.html.twig");
    }
}
