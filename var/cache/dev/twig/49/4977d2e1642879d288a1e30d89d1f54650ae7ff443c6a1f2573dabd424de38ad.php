<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_df503f73a65f1ebe7b486910824ade2317820c769a039c4749f664e4497ea501 extends Twig_Template
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
        $__internal_e37dbf95605a10adf50876e2adc99c6f6e392c1da537a0803279ebbdbea03168 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e37dbf95605a10adf50876e2adc99c6f6e392c1da537a0803279ebbdbea03168->enter($__internal_e37dbf95605a10adf50876e2adc99c6f6e392c1da537a0803279ebbdbea03168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_2fe51dde1087c04116e5490c1ae1bfd16751e4cb195a4bf7f46afffa0a637b85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fe51dde1087c04116e5490c1ae1bfd16751e4cb195a4bf7f46afffa0a637b85->enter($__internal_2fe51dde1087c04116e5490c1ae1bfd16751e4cb195a4bf7f46afffa0a637b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e37dbf95605a10adf50876e2adc99c6f6e392c1da537a0803279ebbdbea03168->leave($__internal_e37dbf95605a10adf50876e2adc99c6f6e392c1da537a0803279ebbdbea03168_prof);

        
        $__internal_2fe51dde1087c04116e5490c1ae1bfd16751e4cb195a4bf7f46afffa0a637b85->leave($__internal_2fe51dde1087c04116e5490c1ae1bfd16751e4cb195a4bf7f46afffa0a637b85_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
