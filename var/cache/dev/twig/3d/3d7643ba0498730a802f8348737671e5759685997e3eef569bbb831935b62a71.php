<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_95ce3aaf93f6e8acd0da75212565de602b83a017c5ab9124cb42d326329c9727 extends Twig_Template
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
        $__internal_3c453796660b7db2073333eb85419b9a37344bcb50bb4bcb55dbe26e37b68232 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c453796660b7db2073333eb85419b9a37344bcb50bb4bcb55dbe26e37b68232->enter($__internal_3c453796660b7db2073333eb85419b9a37344bcb50bb4bcb55dbe26e37b68232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_c17699745cc6631fe252fbd9a0c79bd879ee2f5ed59ca3b332e7fdc5368bdcd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c17699745cc6631fe252fbd9a0c79bd879ee2f5ed59ca3b332e7fdc5368bdcd6->enter($__internal_c17699745cc6631fe252fbd9a0c79bd879ee2f5ed59ca3b332e7fdc5368bdcd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_3c453796660b7db2073333eb85419b9a37344bcb50bb4bcb55dbe26e37b68232->leave($__internal_3c453796660b7db2073333eb85419b9a37344bcb50bb4bcb55dbe26e37b68232_prof);

        
        $__internal_c17699745cc6631fe252fbd9a0c79bd879ee2f5ed59ca3b332e7fdc5368bdcd6->leave($__internal_c17699745cc6631fe252fbd9a0c79bd879ee2f5ed59ca3b332e7fdc5368bdcd6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}