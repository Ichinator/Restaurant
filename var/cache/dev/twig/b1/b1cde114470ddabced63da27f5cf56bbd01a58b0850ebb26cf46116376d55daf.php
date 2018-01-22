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
        $__internal_ba4e1102269fcd332691a082064d5d2d42ab3895ca91a160d91bcbd2b37cbd43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba4e1102269fcd332691a082064d5d2d42ab3895ca91a160d91bcbd2b37cbd43->enter($__internal_ba4e1102269fcd332691a082064d5d2d42ab3895ca91a160d91bcbd2b37cbd43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_f1316dc829800ca78a42f679d35df664a377fda639098bebe977dd7f16f5b66a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1316dc829800ca78a42f679d35df664a377fda639098bebe977dd7f16f5b66a->enter($__internal_f1316dc829800ca78a42f679d35df664a377fda639098bebe977dd7f16f5b66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_ba4e1102269fcd332691a082064d5d2d42ab3895ca91a160d91bcbd2b37cbd43->leave($__internal_ba4e1102269fcd332691a082064d5d2d42ab3895ca91a160d91bcbd2b37cbd43_prof);

        
        $__internal_f1316dc829800ca78a42f679d35df664a377fda639098bebe977dd7f16f5b66a->leave($__internal_f1316dc829800ca78a42f679d35df664a377fda639098bebe977dd7f16f5b66a_prof);

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
