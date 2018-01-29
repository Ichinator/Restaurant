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
        $__internal_8ef1976acf957b3518fe85eeb4b48293954fb3f9177167dc99b98935765c68c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ef1976acf957b3518fe85eeb4b48293954fb3f9177167dc99b98935765c68c9->enter($__internal_8ef1976acf957b3518fe85eeb4b48293954fb3f9177167dc99b98935765c68c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_7210df7ede7f8a6d9c150d4580573b39f174c5e918f851709ef14498fac3d957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7210df7ede7f8a6d9c150d4580573b39f174c5e918f851709ef14498fac3d957->enter($__internal_7210df7ede7f8a6d9c150d4580573b39f174c5e918f851709ef14498fac3d957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_8ef1976acf957b3518fe85eeb4b48293954fb3f9177167dc99b98935765c68c9->leave($__internal_8ef1976acf957b3518fe85eeb4b48293954fb3f9177167dc99b98935765c68c9_prof);

        
        $__internal_7210df7ede7f8a6d9c150d4580573b39f174c5e918f851709ef14498fac3d957->leave($__internal_7210df7ede7f8a6d9c150d4580573b39f174c5e918f851709ef14498fac3d957_prof);

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
