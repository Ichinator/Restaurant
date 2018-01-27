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
        $__internal_43cfaec9da7315a148c2de9134731b2dafacabf6b3663cd5764ba0677d3a4665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43cfaec9da7315a148c2de9134731b2dafacabf6b3663cd5764ba0677d3a4665->enter($__internal_43cfaec9da7315a148c2de9134731b2dafacabf6b3663cd5764ba0677d3a4665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_a45c3727e4ea14c616b56dbc56da537be45d9d056e9f93f9b485f200a78038bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a45c3727e4ea14c616b56dbc56da537be45d9d056e9f93f9b485f200a78038bb->enter($__internal_a45c3727e4ea14c616b56dbc56da537be45d9d056e9f93f9b485f200a78038bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_43cfaec9da7315a148c2de9134731b2dafacabf6b3663cd5764ba0677d3a4665->leave($__internal_43cfaec9da7315a148c2de9134731b2dafacabf6b3663cd5764ba0677d3a4665_prof);

        
        $__internal_a45c3727e4ea14c616b56dbc56da537be45d9d056e9f93f9b485f200a78038bb->leave($__internal_a45c3727e4ea14c616b56dbc56da537be45d9d056e9f93f9b485f200a78038bb_prof);

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
