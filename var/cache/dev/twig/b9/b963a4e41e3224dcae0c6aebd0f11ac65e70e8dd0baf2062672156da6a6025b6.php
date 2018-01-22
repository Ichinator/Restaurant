<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_9daf8c3af69260cca8b25ca5c7eed403bd92746e54291a6a59ab5901d6e1e530 extends Twig_Template
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
        $__internal_cf51143cb32b227058a0a9bcd2847097d8598eb715b4e98d5d5ba7e2bdeeaf1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf51143cb32b227058a0a9bcd2847097d8598eb715b4e98d5d5ba7e2bdeeaf1c->enter($__internal_cf51143cb32b227058a0a9bcd2847097d8598eb715b4e98d5d5ba7e2bdeeaf1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_22cfb93ac8d701e4cf31656f9039f9b3ee33f59ffa378d0e86a32bf2e277b3fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22cfb93ac8d701e4cf31656f9039f9b3ee33f59ffa378d0e86a32bf2e277b3fd->enter($__internal_22cfb93ac8d701e4cf31656f9039f9b3ee33f59ffa378d0e86a32bf2e277b3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_cf51143cb32b227058a0a9bcd2847097d8598eb715b4e98d5d5ba7e2bdeeaf1c->leave($__internal_cf51143cb32b227058a0a9bcd2847097d8598eb715b4e98d5d5ba7e2bdeeaf1c_prof);

        
        $__internal_22cfb93ac8d701e4cf31656f9039f9b3ee33f59ffa378d0e86a32bf2e277b3fd->leave($__internal_22cfb93ac8d701e4cf31656f9039f9b3ee33f59ffa378d0e86a32bf2e277b3fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
