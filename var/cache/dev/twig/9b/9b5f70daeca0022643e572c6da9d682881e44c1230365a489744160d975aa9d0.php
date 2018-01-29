<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_59d9798229444e2294e16c9cadb44fd705ceebf72fe804b18830e6b2c37859a3 extends Twig_Template
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
        $__internal_5568dce3147ddeceed78cc1f2b65e3030659fa95627c3be88722d28f5381548c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5568dce3147ddeceed78cc1f2b65e3030659fa95627c3be88722d28f5381548c->enter($__internal_5568dce3147ddeceed78cc1f2b65e3030659fa95627c3be88722d28f5381548c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_fe066b6917c0a9c1014fa1e5bf55604d30df4c8d9fd33c2117cd09bc03f1d89e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe066b6917c0a9c1014fa1e5bf55604d30df4c8d9fd33c2117cd09bc03f1d89e->enter($__internal_fe066b6917c0a9c1014fa1e5bf55604d30df4c8d9fd33c2117cd09bc03f1d89e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_5568dce3147ddeceed78cc1f2b65e3030659fa95627c3be88722d28f5381548c->leave($__internal_5568dce3147ddeceed78cc1f2b65e3030659fa95627c3be88722d28f5381548c_prof);

        
        $__internal_fe066b6917c0a9c1014fa1e5bf55604d30df4c8d9fd33c2117cd09bc03f1d89e->leave($__internal_fe066b6917c0a9c1014fa1e5bf55604d30df4c8d9fd33c2117cd09bc03f1d89e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
