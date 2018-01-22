<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_495eaf3b4e4c1a4aa161464b0f8a101d60b2aea2435424711d0aa52000db1f1f extends Twig_Template
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
        $__internal_728f64fa96a4540e257b0a73e63a9df5bc7119a1c9ba0f738fbccad7e9b07aca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_728f64fa96a4540e257b0a73e63a9df5bc7119a1c9ba0f738fbccad7e9b07aca->enter($__internal_728f64fa96a4540e257b0a73e63a9df5bc7119a1c9ba0f738fbccad7e9b07aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_b4ca190c65b70e64ff617a68f3e1c1b7256f2dcb9d20360f10643f9a7159a4aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4ca190c65b70e64ff617a68f3e1c1b7256f2dcb9d20360f10643f9a7159a4aa->enter($__internal_b4ca190c65b70e64ff617a68f3e1c1b7256f2dcb9d20360f10643f9a7159a4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_728f64fa96a4540e257b0a73e63a9df5bc7119a1c9ba0f738fbccad7e9b07aca->leave($__internal_728f64fa96a4540e257b0a73e63a9df5bc7119a1c9ba0f738fbccad7e9b07aca_prof);

        
        $__internal_b4ca190c65b70e64ff617a68f3e1c1b7256f2dcb9d20360f10643f9a7159a4aa->leave($__internal_b4ca190c65b70e64ff617a68f3e1c1b7256f2dcb9d20360f10643f9a7159a4aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
