<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_ac4bef923d2527fbf1d8549093740cbfd35d0604767399100322144894a94344 extends Twig_Template
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
        $__internal_3efbb0241e8feac3cd3991a1374dc76448744ff10235a8b10baf0ebf91285cdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3efbb0241e8feac3cd3991a1374dc76448744ff10235a8b10baf0ebf91285cdb->enter($__internal_3efbb0241e8feac3cd3991a1374dc76448744ff10235a8b10baf0ebf91285cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_ef1851ad159c8f9342079f322a5d63b8a4d20968777dd84bf2db1dc4f56e04ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef1851ad159c8f9342079f322a5d63b8a4d20968777dd84bf2db1dc4f56e04ce->enter($__internal_ef1851ad159c8f9342079f322a5d63b8a4d20968777dd84bf2db1dc4f56e04ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_3efbb0241e8feac3cd3991a1374dc76448744ff10235a8b10baf0ebf91285cdb->leave($__internal_3efbb0241e8feac3cd3991a1374dc76448744ff10235a8b10baf0ebf91285cdb_prof);

        
        $__internal_ef1851ad159c8f9342079f322a5d63b8a4d20968777dd84bf2db1dc4f56e04ce->leave($__internal_ef1851ad159c8f9342079f322a5d63b8a4d20968777dd84bf2db1dc4f56e04ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
