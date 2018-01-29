<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_555ad1cc2314a9e17bd685ee547e85a0624ec87ad5608c0c416e84ed6938156e extends Twig_Template
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
        $__internal_bcf59d86fb56decd4029badc5a9ffb198e33e28914acabeebc1bb1e3a23fcbc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcf59d86fb56decd4029badc5a9ffb198e33e28914acabeebc1bb1e3a23fcbc4->enter($__internal_bcf59d86fb56decd4029badc5a9ffb198e33e28914acabeebc1bb1e3a23fcbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_8e4138c6a24f3f94de1e8c236bf01803fabcb4f11d2ef197b01460d892915834 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e4138c6a24f3f94de1e8c236bf01803fabcb4f11d2ef197b01460d892915834->enter($__internal_8e4138c6a24f3f94de1e8c236bf01803fabcb4f11d2ef197b01460d892915834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_bcf59d86fb56decd4029badc5a9ffb198e33e28914acabeebc1bb1e3a23fcbc4->leave($__internal_bcf59d86fb56decd4029badc5a9ffb198e33e28914acabeebc1bb1e3a23fcbc4_prof);

        
        $__internal_8e4138c6a24f3f94de1e8c236bf01803fabcb4f11d2ef197b01460d892915834->leave($__internal_8e4138c6a24f3f94de1e8c236bf01803fabcb4f11d2ef197b01460d892915834_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
