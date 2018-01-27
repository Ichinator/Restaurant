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
        $__internal_94784bd70fac32532287ee6f23c2a896f496d354fec37075514d1adf3b767124 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94784bd70fac32532287ee6f23c2a896f496d354fec37075514d1adf3b767124->enter($__internal_94784bd70fac32532287ee6f23c2a896f496d354fec37075514d1adf3b767124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_72ab9b8ad8686f9c1fa2911e07fae886e99baf52e947699f0c285c3a11a09fb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72ab9b8ad8686f9c1fa2911e07fae886e99baf52e947699f0c285c3a11a09fb4->enter($__internal_72ab9b8ad8686f9c1fa2911e07fae886e99baf52e947699f0c285c3a11a09fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_94784bd70fac32532287ee6f23c2a896f496d354fec37075514d1adf3b767124->leave($__internal_94784bd70fac32532287ee6f23c2a896f496d354fec37075514d1adf3b767124_prof);

        
        $__internal_72ab9b8ad8686f9c1fa2911e07fae886e99baf52e947699f0c285c3a11a09fb4->leave($__internal_72ab9b8ad8686f9c1fa2911e07fae886e99baf52e947699f0c285c3a11a09fb4_prof);

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
