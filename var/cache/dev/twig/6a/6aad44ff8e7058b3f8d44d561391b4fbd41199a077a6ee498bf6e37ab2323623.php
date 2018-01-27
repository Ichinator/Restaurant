<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_2f65fe92879cebf5dc63d8ed8ae66bb12c2e999d2f6e89b2352d40dcca3276a0 extends Twig_Template
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
        $__internal_1e51e7b77091bbc8627d1a4b6e5fcff6f919c7c9519e9a887959715db61c3c68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e51e7b77091bbc8627d1a4b6e5fcff6f919c7c9519e9a887959715db61c3c68->enter($__internal_1e51e7b77091bbc8627d1a4b6e5fcff6f919c7c9519e9a887959715db61c3c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_b7db6bf94477d6bd92e6b14b6444a4c50f3db3e8b91c7ea1a07ff89705220727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7db6bf94477d6bd92e6b14b6444a4c50f3db3e8b91c7ea1a07ff89705220727->enter($__internal_b7db6bf94477d6bd92e6b14b6444a4c50f3db3e8b91c7ea1a07ff89705220727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_1e51e7b77091bbc8627d1a4b6e5fcff6f919c7c9519e9a887959715db61c3c68->leave($__internal_1e51e7b77091bbc8627d1a4b6e5fcff6f919c7c9519e9a887959715db61c3c68_prof);

        
        $__internal_b7db6bf94477d6bd92e6b14b6444a4c50f3db3e8b91c7ea1a07ff89705220727->leave($__internal_b7db6bf94477d6bd92e6b14b6444a4c50f3db3e8b91c7ea1a07ff89705220727_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
