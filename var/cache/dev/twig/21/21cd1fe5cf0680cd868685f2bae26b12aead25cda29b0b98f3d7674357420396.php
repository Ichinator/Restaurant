<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_fe49548416b13cf7f755e859dccd58e716633e3171985397f7b1e26999afe0c8 extends Twig_Template
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
        $__internal_20bf46af4d3671c55b24812eb070eba55f25305bd0719f8c8717b6d3d4f7bcb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20bf46af4d3671c55b24812eb070eba55f25305bd0719f8c8717b6d3d4f7bcb2->enter($__internal_20bf46af4d3671c55b24812eb070eba55f25305bd0719f8c8717b6d3d4f7bcb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_43dbf0f1c0aa5614b787a4f677e8b6551a0ddffeccd22cfff1705127f0e9d13c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43dbf0f1c0aa5614b787a4f677e8b6551a0ddffeccd22cfff1705127f0e9d13c->enter($__internal_43dbf0f1c0aa5614b787a4f677e8b6551a0ddffeccd22cfff1705127f0e9d13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_20bf46af4d3671c55b24812eb070eba55f25305bd0719f8c8717b6d3d4f7bcb2->leave($__internal_20bf46af4d3671c55b24812eb070eba55f25305bd0719f8c8717b6d3d4f7bcb2_prof);

        
        $__internal_43dbf0f1c0aa5614b787a4f677e8b6551a0ddffeccd22cfff1705127f0e9d13c->leave($__internal_43dbf0f1c0aa5614b787a4f677e8b6551a0ddffeccd22cfff1705127f0e9d13c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
