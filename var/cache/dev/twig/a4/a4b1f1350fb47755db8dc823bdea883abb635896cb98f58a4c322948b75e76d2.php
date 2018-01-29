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
        $__internal_6dcb1c816e04fa11a1f6c241e7223eac6bf6495f5607429e0a05713c295e97c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dcb1c816e04fa11a1f6c241e7223eac6bf6495f5607429e0a05713c295e97c0->enter($__internal_6dcb1c816e04fa11a1f6c241e7223eac6bf6495f5607429e0a05713c295e97c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_01e26209f9fa51e041f4b9655fdbfd495de9dbf92bfdc2a01b84b624dfb7b255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01e26209f9fa51e041f4b9655fdbfd495de9dbf92bfdc2a01b84b624dfb7b255->enter($__internal_01e26209f9fa51e041f4b9655fdbfd495de9dbf92bfdc2a01b84b624dfb7b255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6dcb1c816e04fa11a1f6c241e7223eac6bf6495f5607429e0a05713c295e97c0->leave($__internal_6dcb1c816e04fa11a1f6c241e7223eac6bf6495f5607429e0a05713c295e97c0_prof);

        
        $__internal_01e26209f9fa51e041f4b9655fdbfd495de9dbf92bfdc2a01b84b624dfb7b255->leave($__internal_01e26209f9fa51e041f4b9655fdbfd495de9dbf92bfdc2a01b84b624dfb7b255_prof);

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
