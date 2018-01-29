<?php

/* EasyAdminBundle:default:field_object.html.twig */
class __TwigTemplate_0a686140c91e4ca389f187a7c65349eb7b4c33bfb315552cc3f1ddaf3898993c extends Twig_Template
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
        $__internal_54fb0340461f2c2dc9fa1500533a7eec22da01d04d329acd72bc5893254f70f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54fb0340461f2c2dc9fa1500533a7eec22da01d04d329acd72bc5893254f70f2->enter($__internal_54fb0340461f2c2dc9fa1500533a7eec22da01d04d329acd72bc5893254f70f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        $__internal_8ae0c2a07553dcf6e6edd5e13a2d6de812074c2ecb11361dd8ab2398bcfa44e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ae0c2a07553dcf6e6edd5e13a2d6de812074c2ecb11361dd8ab2398bcfa44e2->enter($__internal_8ae0c2a07553dcf6e6edd5e13a2d6de812074c2ecb11361dd8ab2398bcfa44e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.object", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_54fb0340461f2c2dc9fa1500533a7eec22da01d04d329acd72bc5893254f70f2->leave($__internal_54fb0340461f2c2dc9fa1500533a7eec22da01d04d329acd72bc5893254f70f2_prof);

        
        $__internal_8ae0c2a07553dcf6e6edd5e13a2d6de812074c2ecb11361dd8ab2398bcfa44e2->leave($__internal_8ae0c2a07553dcf6e6edd5e13a2d6de812074c2ecb11361dd8ab2398bcfa44e2_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_object.html.twig";
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
        return new Twig_Source("<span class=\"label\">{{ 'label.object'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:field_object.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_object.html.twig");
    }
}
