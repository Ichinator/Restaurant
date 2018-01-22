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
        $__internal_e6d26901afeec789b5be9204b7ac28905d315fb8bc0c4ad02d85db810b17a259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6d26901afeec789b5be9204b7ac28905d315fb8bc0c4ad02d85db810b17a259->enter($__internal_e6d26901afeec789b5be9204b7ac28905d315fb8bc0c4ad02d85db810b17a259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_039cacd1b52acf468beedc602d7ac938fc337a1f8c7bda3f842333cf5ad9b614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_039cacd1b52acf468beedc602d7ac938fc337a1f8c7bda3f842333cf5ad9b614->enter($__internal_039cacd1b52acf468beedc602d7ac938fc337a1f8c7bda3f842333cf5ad9b614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e6d26901afeec789b5be9204b7ac28905d315fb8bc0c4ad02d85db810b17a259->leave($__internal_e6d26901afeec789b5be9204b7ac28905d315fb8bc0c4ad02d85db810b17a259_prof);

        
        $__internal_039cacd1b52acf468beedc602d7ac938fc337a1f8c7bda3f842333cf5ad9b614->leave($__internal_039cacd1b52acf468beedc602d7ac938fc337a1f8c7bda3f842333cf5ad9b614_prof);

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
