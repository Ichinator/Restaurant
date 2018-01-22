<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_5b8393d152451bafbd6b0e050ba241db1c251a58f93769724c48a25913d4933a extends Twig_Template
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
        $__internal_714cdad502b2cbe6b9122162d9c9359ea38dc3625bf8408fb85ed886e780edbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_714cdad502b2cbe6b9122162d9c9359ea38dc3625bf8408fb85ed886e780edbf->enter($__internal_714cdad502b2cbe6b9122162d9c9359ea38dc3625bf8408fb85ed886e780edbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_63d7813e6962ce7ae23490212ec8bc8594dac240ce808920f0f449f89e31629c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63d7813e6962ce7ae23490212ec8bc8594dac240ce808920f0f449f89e31629c->enter($__internal_63d7813e6962ce7ae23490212ec8bc8594dac240ce808920f0f449f89e31629c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_714cdad502b2cbe6b9122162d9c9359ea38dc3625bf8408fb85ed886e780edbf->leave($__internal_714cdad502b2cbe6b9122162d9c9359ea38dc3625bf8408fb85ed886e780edbf_prof);

        
        $__internal_63d7813e6962ce7ae23490212ec8bc8594dac240ce808920f0f449f89e31629c->leave($__internal_63d7813e6962ce7ae23490212ec8bc8594dac240ce808920f0f449f89e31629c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
