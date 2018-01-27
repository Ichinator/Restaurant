<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_2b70176c81d1c1ebfa53d697781a5315ae598c76d08368bf3f3ebae833299b39 extends Twig_Template
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
        $__internal_7532a1d138e795c63c24057fd3032c2b45220a0be3dacec351f21ab274085a0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7532a1d138e795c63c24057fd3032c2b45220a0be3dacec351f21ab274085a0f->enter($__internal_7532a1d138e795c63c24057fd3032c2b45220a0be3dacec351f21ab274085a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_fc4368a0bfd7f0f301969bbcaae4f6e9f695ed3edaa116665317b2939f3230d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc4368a0bfd7f0f301969bbcaae4f6e9f695ed3edaa116665317b2939f3230d6->enter($__internal_fc4368a0bfd7f0f301969bbcaae4f6e9f695ed3edaa116665317b2939f3230d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_7532a1d138e795c63c24057fd3032c2b45220a0be3dacec351f21ab274085a0f->leave($__internal_7532a1d138e795c63c24057fd3032c2b45220a0be3dacec351f21ab274085a0f_prof);

        
        $__internal_fc4368a0bfd7f0f301969bbcaae4f6e9f695ed3edaa116665317b2939f3230d6->leave($__internal_fc4368a0bfd7f0f301969bbcaae4f6e9f695ed3edaa116665317b2939f3230d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
