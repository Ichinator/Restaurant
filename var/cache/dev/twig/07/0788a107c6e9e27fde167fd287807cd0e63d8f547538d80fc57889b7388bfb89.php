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
        $__internal_c455d96d94070dd45f1239847070ef17e6f0f41fc1dcd9d556bef12152e38554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c455d96d94070dd45f1239847070ef17e6f0f41fc1dcd9d556bef12152e38554->enter($__internal_c455d96d94070dd45f1239847070ef17e6f0f41fc1dcd9d556bef12152e38554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_1edf8ea18fc9add924567ad879972d7d141c47ad77c363fbee4f2858877459ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1edf8ea18fc9add924567ad879972d7d141c47ad77c363fbee4f2858877459ec->enter($__internal_1edf8ea18fc9add924567ad879972d7d141c47ad77c363fbee4f2858877459ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_c455d96d94070dd45f1239847070ef17e6f0f41fc1dcd9d556bef12152e38554->leave($__internal_c455d96d94070dd45f1239847070ef17e6f0f41fc1dcd9d556bef12152e38554_prof);

        
        $__internal_1edf8ea18fc9add924567ad879972d7d141c47ad77c363fbee4f2858877459ec->leave($__internal_1edf8ea18fc9add924567ad879972d7d141c47ad77c363fbee4f2858877459ec_prof);

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
