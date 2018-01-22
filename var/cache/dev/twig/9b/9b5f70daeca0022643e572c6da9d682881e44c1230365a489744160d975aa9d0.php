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
        $__internal_ee93a2900932fd4fdb8f3209371775df47d913734cba5a70ad86f4bc205dfa5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee93a2900932fd4fdb8f3209371775df47d913734cba5a70ad86f4bc205dfa5e->enter($__internal_ee93a2900932fd4fdb8f3209371775df47d913734cba5a70ad86f4bc205dfa5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_6c9afb1ee82aaf2846d09361aa13c136fde5c1525c9eb6204f9afbee512cfe1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c9afb1ee82aaf2846d09361aa13c136fde5c1525c9eb6204f9afbee512cfe1b->enter($__internal_6c9afb1ee82aaf2846d09361aa13c136fde5c1525c9eb6204f9afbee512cfe1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_ee93a2900932fd4fdb8f3209371775df47d913734cba5a70ad86f4bc205dfa5e->leave($__internal_ee93a2900932fd4fdb8f3209371775df47d913734cba5a70ad86f4bc205dfa5e_prof);

        
        $__internal_6c9afb1ee82aaf2846d09361aa13c136fde5c1525c9eb6204f9afbee512cfe1b->leave($__internal_6c9afb1ee82aaf2846d09361aa13c136fde5c1525c9eb6204f9afbee512cfe1b_prof);

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
