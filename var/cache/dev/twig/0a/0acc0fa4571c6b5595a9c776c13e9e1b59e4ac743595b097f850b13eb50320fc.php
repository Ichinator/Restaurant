<?php

/* @EasyAdmin/default/label_null.html.twig */
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
        $__internal_617508f59e533ca2bb7a12715e23703b0a7c2e478d428a8a9566227b570705f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_617508f59e533ca2bb7a12715e23703b0a7c2e478d428a8a9566227b570705f8->enter($__internal_617508f59e533ca2bb7a12715e23703b0a7c2e478d428a8a9566227b570705f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_null.html.twig"));

        $__internal_f4afe64aa1366dbd081df0a02d199a4d418f3eb8aa4a32861bca30411a87c17e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4afe64aa1366dbd081df0a02d199a4d418f3eb8aa4a32861bca30411a87c17e->enter($__internal_f4afe64aa1366dbd081df0a02d199a4d418f3eb8aa4a32861bca30411a87c17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_617508f59e533ca2bb7a12715e23703b0a7c2e478d428a8a9566227b570705f8->leave($__internal_617508f59e533ca2bb7a12715e23703b0a7c2e478d428a8a9566227b570705f8_prof);

        
        $__internal_f4afe64aa1366dbd081df0a02d199a4d418f3eb8aa4a32861bca30411a87c17e->leave($__internal_f4afe64aa1366dbd081df0a02d199a4d418f3eb8aa4a32861bca30411a87c17e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_null.html.twig";
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
", "@EasyAdmin/default/label_null.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/label_null.html.twig");
    }
}
