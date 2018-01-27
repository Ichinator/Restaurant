<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_83a0565531fbd7e04f236454dceaaabdaf2d1cd7a61ba5d7a52c9ae9123a179a extends Twig_Template
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
        $__internal_115e891159a99fff4b59a80130d10e5c47d5a3cfacd860cb23568bf3e38b85e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_115e891159a99fff4b59a80130d10e5c47d5a3cfacd860cb23568bf3e38b85e6->enter($__internal_115e891159a99fff4b59a80130d10e5c47d5a3cfacd860cb23568bf3e38b85e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_e40edeca54c73ade2c9c41f0cf04fbac2506be548a17c1aa0fdff651228b2761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e40edeca54c73ade2c9c41f0cf04fbac2506be548a17c1aa0fdff651228b2761->enter($__internal_e40edeca54c73ade2c9c41f0cf04fbac2506be548a17c1aa0fdff651228b2761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_115e891159a99fff4b59a80130d10e5c47d5a3cfacd860cb23568bf3e38b85e6->leave($__internal_115e891159a99fff4b59a80130d10e5c47d5a3cfacd860cb23568bf3e38b85e6_prof);

        
        $__internal_e40edeca54c73ade2c9c41f0cf04fbac2506be548a17c1aa0fdff651228b2761->leave($__internal_e40edeca54c73ade2c9c41f0cf04fbac2506be548a17c1aa0fdff651228b2761_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
