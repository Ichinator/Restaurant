<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_5420bc19e60aa5b54a7f565395eb55728bac625a33b7e5506741e940f2ac82f5 extends Twig_Template
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
        $__internal_993ff5be64a9958a4c2072357f1eda3d4c64074018165df67609f9ea897296c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_993ff5be64a9958a4c2072357f1eda3d4c64074018165df67609f9ea897296c8->enter($__internal_993ff5be64a9958a4c2072357f1eda3d4c64074018165df67609f9ea897296c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_2ef7834b80578fe560201fe2e13903e20887ca438879af31f6bf8c815fc3426d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef7834b80578fe560201fe2e13903e20887ca438879af31f6bf8c815fc3426d->enter($__internal_2ef7834b80578fe560201fe2e13903e20887ca438879af31f6bf8c815fc3426d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_993ff5be64a9958a4c2072357f1eda3d4c64074018165df67609f9ea897296c8->leave($__internal_993ff5be64a9958a4c2072357f1eda3d4c64074018165df67609f9ea897296c8_prof);

        
        $__internal_2ef7834b80578fe560201fe2e13903e20887ca438879af31f6bf8c815fc3426d->leave($__internal_2ef7834b80578fe560201fe2e13903e20887ca438879af31f6bf8c815fc3426d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
