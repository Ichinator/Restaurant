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
        $__internal_7d382efa733047af4fd558d37d1c0d58e506f20a7d537eaa3bde49bbd1bdf648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d382efa733047af4fd558d37d1c0d58e506f20a7d537eaa3bde49bbd1bdf648->enter($__internal_7d382efa733047af4fd558d37d1c0d58e506f20a7d537eaa3bde49bbd1bdf648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_d5837a2f82387729a21f5d848fac0093bdba16be4294b279e096db65dcffc693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5837a2f82387729a21f5d848fac0093bdba16be4294b279e096db65dcffc693->enter($__internal_d5837a2f82387729a21f5d848fac0093bdba16be4294b279e096db65dcffc693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_7d382efa733047af4fd558d37d1c0d58e506f20a7d537eaa3bde49bbd1bdf648->leave($__internal_7d382efa733047af4fd558d37d1c0d58e506f20a7d537eaa3bde49bbd1bdf648_prof);

        
        $__internal_d5837a2f82387729a21f5d848fac0093bdba16be4294b279e096db65dcffc693->leave($__internal_d5837a2f82387729a21f5d848fac0093bdba16be4294b279e096db65dcffc693_prof);

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
