<?php

/* EasyAdminBundle:default:label_null.html.twig */
class __TwigTemplate_6c511de31d6d6f0c14bb0340a5be2541523ebef658db01e6c8e1404f517a99b9 extends Twig_Template
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
        $__internal_0d4e69fbcf27e7d0514d33ff013b2b92648e208f177957d6285261cb8da0ffa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d4e69fbcf27e7d0514d33ff013b2b92648e208f177957d6285261cb8da0ffa7->enter($__internal_0d4e69fbcf27e7d0514d33ff013b2b92648e208f177957d6285261cb8da0ffa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        $__internal_b1d48279b6016d246e52f4406a34421ad85ec19196e98130d3991441b7c0107b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1d48279b6016d246e52f4406a34421ad85ec19196e98130d3991441b7c0107b->enter($__internal_b1d48279b6016d246e52f4406a34421ad85ec19196e98130d3991441b7c0107b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_0d4e69fbcf27e7d0514d33ff013b2b92648e208f177957d6285261cb8da0ffa7->leave($__internal_0d4e69fbcf27e7d0514d33ff013b2b92648e208f177957d6285261cb8da0ffa7_prof);

        
        $__internal_b1d48279b6016d246e52f4406a34421ad85ec19196e98130d3991441b7c0107b->leave($__internal_b1d48279b6016d246e52f4406a34421ad85ec19196e98130d3991441b7c0107b_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_null.html.twig";
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
        return new Twig_Source("<span class=\"label\">{{ 'label.null'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:label_null.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/label_null.html.twig");
    }
}
