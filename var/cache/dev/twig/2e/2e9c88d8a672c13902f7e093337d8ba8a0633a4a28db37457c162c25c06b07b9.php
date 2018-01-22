<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_663cde4c4b5553c7311f8af8b1cf8d338c3bf0e4e1a995e6074a0db191ba6f0a extends Twig_Template
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
        $__internal_12a0d3950be238155772fe07b7db1dfac5366703eadeaeeb7f47b9c4f0f7d028 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12a0d3950be238155772fe07b7db1dfac5366703eadeaeeb7f47b9c4f0f7d028->enter($__internal_12a0d3950be238155772fe07b7db1dfac5366703eadeaeeb7f47b9c4f0f7d028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_3591df61249e3a57bd80c66b858be30922372488e2ae95b9a015aa1d430d1451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3591df61249e3a57bd80c66b858be30922372488e2ae95b9a015aa1d430d1451->enter($__internal_3591df61249e3a57bd80c66b858be30922372488e2ae95b9a015aa1d430d1451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_12a0d3950be238155772fe07b7db1dfac5366703eadeaeeb7f47b9c4f0f7d028->leave($__internal_12a0d3950be238155772fe07b7db1dfac5366703eadeaeeb7f47b9c4f0f7d028_prof);

        
        $__internal_3591df61249e3a57bd80c66b858be30922372488e2ae95b9a015aa1d430d1451->leave($__internal_3591df61249e3a57bd80c66b858be30922372488e2ae95b9a015aa1d430d1451_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
