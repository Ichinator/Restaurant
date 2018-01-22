<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_64cdbe80a52bef51641b49df9c3dffd4682756d62dd4eca269ff85a3b72cb37a extends Twig_Template
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
        $__internal_e94cade13b540496095a8fdde1e6b8a122953f76ec3ab865e681ef653daf74be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e94cade13b540496095a8fdde1e6b8a122953f76ec3ab865e681ef653daf74be->enter($__internal_e94cade13b540496095a8fdde1e6b8a122953f76ec3ab865e681ef653daf74be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_1771b5a647bb6138deff140ebc1b7632ee3c35d9fd3602069c3e6b713c0a0850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1771b5a647bb6138deff140ebc1b7632ee3c35d9fd3602069c3e6b713c0a0850->enter($__internal_1771b5a647bb6138deff140ebc1b7632ee3c35d9fd3602069c3e6b713c0a0850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e94cade13b540496095a8fdde1e6b8a122953f76ec3ab865e681ef653daf74be->leave($__internal_e94cade13b540496095a8fdde1e6b8a122953f76ec3ab865e681ef653daf74be_prof);

        
        $__internal_1771b5a647bb6138deff140ebc1b7632ee3c35d9fd3602069c3e6b713c0a0850->leave($__internal_1771b5a647bb6138deff140ebc1b7632ee3c35d9fd3602069c3e6b713c0a0850_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
