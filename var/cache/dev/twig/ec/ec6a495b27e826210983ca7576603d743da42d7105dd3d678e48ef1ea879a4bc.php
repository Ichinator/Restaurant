<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_26829aa753c6d0f883d163236c6cf3aa217d4c999ba6944b3abec1a5aa5b50c9 extends Twig_Template
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
        $__internal_563e96dfb6fd998c4e2cf5cd9736196b5769ac8fce695788c7aa28ca09c6c4df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_563e96dfb6fd998c4e2cf5cd9736196b5769ac8fce695788c7aa28ca09c6c4df->enter($__internal_563e96dfb6fd998c4e2cf5cd9736196b5769ac8fce695788c7aa28ca09c6c4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_b05357e9c3332b1d1f95342b73798e034b9799d36543a08436c9670b05ff39ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b05357e9c3332b1d1f95342b73798e034b9799d36543a08436c9670b05ff39ac->enter($__internal_b05357e9c3332b1d1f95342b73798e034b9799d36543a08436c9670b05ff39ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_563e96dfb6fd998c4e2cf5cd9736196b5769ac8fce695788c7aa28ca09c6c4df->leave($__internal_563e96dfb6fd998c4e2cf5cd9736196b5769ac8fce695788c7aa28ca09c6c4df_prof);

        
        $__internal_b05357e9c3332b1d1f95342b73798e034b9799d36543a08436c9670b05ff39ac->leave($__internal_b05357e9c3332b1d1f95342b73798e034b9799d36543a08436c9670b05ff39ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
