<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_4c66c53d2be20c7b443c4088830cdf96654be48cf0ca6c367b1353375a414a1c extends Twig_Template
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
        $__internal_64748a90220aa82a36f2bb4f9984df911e9a0438db44da8272955c4bd95a65a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64748a90220aa82a36f2bb4f9984df911e9a0438db44da8272955c4bd95a65a3->enter($__internal_64748a90220aa82a36f2bb4f9984df911e9a0438db44da8272955c4bd95a65a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_59f9df27066daf3f5ce02c12983db071ff7ef6404f4c148b4f7fc17ecdd3c892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59f9df27066daf3f5ce02c12983db071ff7ef6404f4c148b4f7fc17ecdd3c892->enter($__internal_59f9df27066daf3f5ce02c12983db071ff7ef6404f4c148b4f7fc17ecdd3c892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_64748a90220aa82a36f2bb4f9984df911e9a0438db44da8272955c4bd95a65a3->leave($__internal_64748a90220aa82a36f2bb4f9984df911e9a0438db44da8272955c4bd95a65a3_prof);

        
        $__internal_59f9df27066daf3f5ce02c12983db071ff7ef6404f4c148b4f7fc17ecdd3c892->leave($__internal_59f9df27066daf3f5ce02c12983db071ff7ef6404f4c148b4f7fc17ecdd3c892_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
