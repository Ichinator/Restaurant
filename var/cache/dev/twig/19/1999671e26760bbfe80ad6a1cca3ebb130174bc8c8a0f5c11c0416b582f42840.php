<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_93102ecf2566ace64a81eb3205b659bb60c4b64b8115630875862ca1d1ffa977 extends Twig_Template
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
        $__internal_055189cf89dd01fe887f9c24d6617d52902751a9a3c70376b1064e0ed7a277cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_055189cf89dd01fe887f9c24d6617d52902751a9a3c70376b1064e0ed7a277cb->enter($__internal_055189cf89dd01fe887f9c24d6617d52902751a9a3c70376b1064e0ed7a277cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_65f5eaa8632bb80340e30afceeb389d5bf446fb3559572248f905363b88b6dc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65f5eaa8632bb80340e30afceeb389d5bf446fb3559572248f905363b88b6dc6->enter($__internal_65f5eaa8632bb80340e30afceeb389d5bf446fb3559572248f905363b88b6dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_055189cf89dd01fe887f9c24d6617d52902751a9a3c70376b1064e0ed7a277cb->leave($__internal_055189cf89dd01fe887f9c24d6617d52902751a9a3c70376b1064e0ed7a277cb_prof);

        
        $__internal_65f5eaa8632bb80340e30afceeb389d5bf446fb3559572248f905363b88b6dc6->leave($__internal_65f5eaa8632bb80340e30afceeb389d5bf446fb3559572248f905363b88b6dc6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
