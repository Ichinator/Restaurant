<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_930096212031112d66ec8bc4d8de44f627e293834f6cf1df6ef1683ed8f4547f extends Twig_Template
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
        $__internal_8548739b27959737176783563f037e66d5ec1fcf584e7f859e390a98d18b02de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8548739b27959737176783563f037e66d5ec1fcf584e7f859e390a98d18b02de->enter($__internal_8548739b27959737176783563f037e66d5ec1fcf584e7f859e390a98d18b02de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_fd01e2c49a1795bcc80e32c76d0c0ade42f76779b126d82615572198325d1b6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd01e2c49a1795bcc80e32c76d0c0ade42f76779b126d82615572198325d1b6a->enter($__internal_fd01e2c49a1795bcc80e32c76d0c0ade42f76779b126d82615572198325d1b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8548739b27959737176783563f037e66d5ec1fcf584e7f859e390a98d18b02de->leave($__internal_8548739b27959737176783563f037e66d5ec1fcf584e7f859e390a98d18b02de_prof);

        
        $__internal_fd01e2c49a1795bcc80e32c76d0c0ade42f76779b126d82615572198325d1b6a->leave($__internal_fd01e2c49a1795bcc80e32c76d0c0ade42f76779b126d82615572198325d1b6a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
