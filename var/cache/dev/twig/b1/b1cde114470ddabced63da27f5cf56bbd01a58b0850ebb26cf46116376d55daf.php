<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_d4186ab72ce9dae966b2f4a9eddc641099bda19d9b05efee34b6c37afaac3dc7 extends Twig_Template
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
        $__internal_cb90762e2472b0dcae018ad528716dd38804f7dfe17eb3e2d3cebcfeb378c6dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb90762e2472b0dcae018ad528716dd38804f7dfe17eb3e2d3cebcfeb378c6dc->enter($__internal_cb90762e2472b0dcae018ad528716dd38804f7dfe17eb3e2d3cebcfeb378c6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_1611177fb56cc85756737c6153d75695c7f6b139fb28e96cac0599c3d0c858f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1611177fb56cc85756737c6153d75695c7f6b139fb28e96cac0599c3d0c858f7->enter($__internal_1611177fb56cc85756737c6153d75695c7f6b139fb28e96cac0599c3d0c858f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_cb90762e2472b0dcae018ad528716dd38804f7dfe17eb3e2d3cebcfeb378c6dc->leave($__internal_cb90762e2472b0dcae018ad528716dd38804f7dfe17eb3e2d3cebcfeb378c6dc_prof);

        
        $__internal_1611177fb56cc85756737c6153d75695c7f6b139fb28e96cac0599c3d0c858f7->leave($__internal_1611177fb56cc85756737c6153d75695c7f6b139fb28e96cac0599c3d0c858f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
