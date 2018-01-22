<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_26829aa753c6d0f883d163236c6cf3aa217d4c999ba6944b3abec1a5aa5b50c9 extends Twig_Template
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
        $__internal_2f1f77bcaf6e2b0c8396085c768ee24c945f2129c3634329274649f61ad3a880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f1f77bcaf6e2b0c8396085c768ee24c945f2129c3634329274649f61ad3a880->enter($__internal_2f1f77bcaf6e2b0c8396085c768ee24c945f2129c3634329274649f61ad3a880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_919f49f5fd8f4c7010f6dcf9af61cc4f85cfbe220d41530a98a2cde4e4ab5672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_919f49f5fd8f4c7010f6dcf9af61cc4f85cfbe220d41530a98a2cde4e4ab5672->enter($__internal_919f49f5fd8f4c7010f6dcf9af61cc4f85cfbe220d41530a98a2cde4e4ab5672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_2f1f77bcaf6e2b0c8396085c768ee24c945f2129c3634329274649f61ad3a880->leave($__internal_2f1f77bcaf6e2b0c8396085c768ee24c945f2129c3634329274649f61ad3a880_prof);

        
        $__internal_919f49f5fd8f4c7010f6dcf9af61cc4f85cfbe220d41530a98a2cde4e4ab5672->leave($__internal_919f49f5fd8f4c7010f6dcf9af61cc4f85cfbe220d41530a98a2cde4e4ab5672_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
