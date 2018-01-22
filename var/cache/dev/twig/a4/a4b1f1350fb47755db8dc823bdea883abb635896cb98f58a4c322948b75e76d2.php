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
        $__internal_9abc6e3cf77340340098a1f63acd69caef4b0f2f4d2a816db105d8a0591800bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9abc6e3cf77340340098a1f63acd69caef4b0f2f4d2a816db105d8a0591800bb->enter($__internal_9abc6e3cf77340340098a1f63acd69caef4b0f2f4d2a816db105d8a0591800bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_3a4c904169c45567ee6afc43915dca394707a6ce792601927b3ee5641bc0ce1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a4c904169c45567ee6afc43915dca394707a6ce792601927b3ee5641bc0ce1b->enter($__internal_3a4c904169c45567ee6afc43915dca394707a6ce792601927b3ee5641bc0ce1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9abc6e3cf77340340098a1f63acd69caef4b0f2f4d2a816db105d8a0591800bb->leave($__internal_9abc6e3cf77340340098a1f63acd69caef4b0f2f4d2a816db105d8a0591800bb_prof);

        
        $__internal_3a4c904169c45567ee6afc43915dca394707a6ce792601927b3ee5641bc0ce1b->leave($__internal_3a4c904169c45567ee6afc43915dca394707a6ce792601927b3ee5641bc0ce1b_prof);

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
