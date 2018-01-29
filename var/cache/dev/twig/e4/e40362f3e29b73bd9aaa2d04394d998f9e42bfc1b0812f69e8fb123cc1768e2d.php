<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_59b1b982fb10458c8806188e7d6f02afe18d9aa10f31818498e963372fa8692b extends Twig_Template
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
        $__internal_f6f659b10c4126feacead8776daf279300c6517cff535c46aecc25fcaf91fdaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6f659b10c4126feacead8776daf279300c6517cff535c46aecc25fcaf91fdaa->enter($__internal_f6f659b10c4126feacead8776daf279300c6517cff535c46aecc25fcaf91fdaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_5db51c51a6a1e479221d470e256f626e22188bbf68fe0a4584aafb56c3712fa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5db51c51a6a1e479221d470e256f626e22188bbf68fe0a4584aafb56c3712fa5->enter($__internal_5db51c51a6a1e479221d470e256f626e22188bbf68fe0a4584aafb56c3712fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f6f659b10c4126feacead8776daf279300c6517cff535c46aecc25fcaf91fdaa->leave($__internal_f6f659b10c4126feacead8776daf279300c6517cff535c46aecc25fcaf91fdaa_prof);

        
        $__internal_5db51c51a6a1e479221d470e256f626e22188bbf68fe0a4584aafb56c3712fa5->leave($__internal_5db51c51a6a1e479221d470e256f626e22188bbf68fe0a4584aafb56c3712fa5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
