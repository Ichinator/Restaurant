<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_d4cfe91d0e48a8438b0ec5c9a2d30adc8777a719ebfa99839d88e87351dbbfe4 extends Twig_Template
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
        $__internal_a35aeea041432812ff6d7a65a279e3da599fd8036941b6d264a36a8ad937996b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a35aeea041432812ff6d7a65a279e3da599fd8036941b6d264a36a8ad937996b->enter($__internal_a35aeea041432812ff6d7a65a279e3da599fd8036941b6d264a36a8ad937996b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_fa0cf1b8a52453fc99462a4310aa37c804ea6c65cb6ff49ac732bfcf982c5f03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa0cf1b8a52453fc99462a4310aa37c804ea6c65cb6ff49ac732bfcf982c5f03->enter($__internal_fa0cf1b8a52453fc99462a4310aa37c804ea6c65cb6ff49ac732bfcf982c5f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_a35aeea041432812ff6d7a65a279e3da599fd8036941b6d264a36a8ad937996b->leave($__internal_a35aeea041432812ff6d7a65a279e3da599fd8036941b6d264a36a8ad937996b_prof);

        
        $__internal_fa0cf1b8a52453fc99462a4310aa37c804ea6c65cb6ff49ac732bfcf982c5f03->leave($__internal_fa0cf1b8a52453fc99462a4310aa37c804ea6c65cb6ff49ac732bfcf982c5f03_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
