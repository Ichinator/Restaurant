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
        $__internal_d11b7edf4cc2a1b06f660f57fb3b171582cef0c456fd30252c686e62427e9afd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d11b7edf4cc2a1b06f660f57fb3b171582cef0c456fd30252c686e62427e9afd->enter($__internal_d11b7edf4cc2a1b06f660f57fb3b171582cef0c456fd30252c686e62427e9afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_2a613086dd3368a483e18ac4ca16d3797d95411ea8bf2f04761b636eabed0af9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a613086dd3368a483e18ac4ca16d3797d95411ea8bf2f04761b636eabed0af9->enter($__internal_2a613086dd3368a483e18ac4ca16d3797d95411ea8bf2f04761b636eabed0af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d11b7edf4cc2a1b06f660f57fb3b171582cef0c456fd30252c686e62427e9afd->leave($__internal_d11b7edf4cc2a1b06f660f57fb3b171582cef0c456fd30252c686e62427e9afd_prof);

        
        $__internal_2a613086dd3368a483e18ac4ca16d3797d95411ea8bf2f04761b636eabed0af9->leave($__internal_2a613086dd3368a483e18ac4ca16d3797d95411ea8bf2f04761b636eabed0af9_prof);

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
