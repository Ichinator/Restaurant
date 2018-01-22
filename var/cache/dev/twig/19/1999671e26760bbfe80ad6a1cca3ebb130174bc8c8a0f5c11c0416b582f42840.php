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
        $__internal_d572b36b290f318962a1e8f417b0316751696ad3ff0c648915d441d5edc8c5ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d572b36b290f318962a1e8f417b0316751696ad3ff0c648915d441d5edc8c5ed->enter($__internal_d572b36b290f318962a1e8f417b0316751696ad3ff0c648915d441d5edc8c5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_5f56166c715a170b63a0eaed4029519fd607e295ef06c05ebb199f146b749945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f56166c715a170b63a0eaed4029519fd607e295ef06c05ebb199f146b749945->enter($__internal_5f56166c715a170b63a0eaed4029519fd607e295ef06c05ebb199f146b749945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_d572b36b290f318962a1e8f417b0316751696ad3ff0c648915d441d5edc8c5ed->leave($__internal_d572b36b290f318962a1e8f417b0316751696ad3ff0c648915d441d5edc8c5ed_prof);

        
        $__internal_5f56166c715a170b63a0eaed4029519fd607e295ef06c05ebb199f146b749945->leave($__internal_5f56166c715a170b63a0eaed4029519fd607e295ef06c05ebb199f146b749945_prof);

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
