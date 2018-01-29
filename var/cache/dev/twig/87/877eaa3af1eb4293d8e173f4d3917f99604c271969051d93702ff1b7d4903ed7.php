<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_b7e0b15b4c6bbd53a930ba9197d3ef3614fcb0095fa67a52fef6064a7580bf83 extends Twig_Template
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
        $__internal_2f1d1156e4a51ee3a255e2f8f5ec70624006be8f29ee26627c3f992c84627d48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f1d1156e4a51ee3a255e2f8f5ec70624006be8f29ee26627c3f992c84627d48->enter($__internal_2f1d1156e4a51ee3a255e2f8f5ec70624006be8f29ee26627c3f992c84627d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_29a0ab02272fbcfd83ff05da658412c3b651d856d3b507b3023e4e7d1cee7ac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29a0ab02272fbcfd83ff05da658412c3b651d856d3b507b3023e4e7d1cee7ac4->enter($__internal_29a0ab02272fbcfd83ff05da658412c3b651d856d3b507b3023e4e7d1cee7ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_2f1d1156e4a51ee3a255e2f8f5ec70624006be8f29ee26627c3f992c84627d48->leave($__internal_2f1d1156e4a51ee3a255e2f8f5ec70624006be8f29ee26627c3f992c84627d48_prof);

        
        $__internal_29a0ab02272fbcfd83ff05da658412c3b651d856d3b507b3023e4e7d1cee7ac4->leave($__internal_29a0ab02272fbcfd83ff05da658412c3b651d856d3b507b3023e4e7d1cee7ac4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
