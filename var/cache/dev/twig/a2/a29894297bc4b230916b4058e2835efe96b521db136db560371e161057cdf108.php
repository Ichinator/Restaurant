<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_0fa7905a73d75ebda45fc57b5d8b917c384271751e71b96c65427385bb73bd56 extends Twig_Template
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
        $__internal_bd8d5900c5eac4df9f68252631fd6a2f256a1636312c7ddd2cd34d32ec03e0b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd8d5900c5eac4df9f68252631fd6a2f256a1636312c7ddd2cd34d32ec03e0b1->enter($__internal_bd8d5900c5eac4df9f68252631fd6a2f256a1636312c7ddd2cd34d32ec03e0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_fee182ad78aa088b7f425a31bd32651785ab32762659bdeb782361ec935264b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fee182ad78aa088b7f425a31bd32651785ab32762659bdeb782361ec935264b0->enter($__internal_fee182ad78aa088b7f425a31bd32651785ab32762659bdeb782361ec935264b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_bd8d5900c5eac4df9f68252631fd6a2f256a1636312c7ddd2cd34d32ec03e0b1->leave($__internal_bd8d5900c5eac4df9f68252631fd6a2f256a1636312c7ddd2cd34d32ec03e0b1_prof);

        
        $__internal_fee182ad78aa088b7f425a31bd32651785ab32762659bdeb782361ec935264b0->leave($__internal_fee182ad78aa088b7f425a31bd32651785ab32762659bdeb782361ec935264b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
