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
        $__internal_32e40dfb72ce7ae4112fb025a64224410b91dd1bd0fb8cb54ed68c7ccaa6f000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32e40dfb72ce7ae4112fb025a64224410b91dd1bd0fb8cb54ed68c7ccaa6f000->enter($__internal_32e40dfb72ce7ae4112fb025a64224410b91dd1bd0fb8cb54ed68c7ccaa6f000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_83723067efb6a8ba44b3de6136c2b28158f544a2522cfb5d70b8c1acbb776766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83723067efb6a8ba44b3de6136c2b28158f544a2522cfb5d70b8c1acbb776766->enter($__internal_83723067efb6a8ba44b3de6136c2b28158f544a2522cfb5d70b8c1acbb776766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_32e40dfb72ce7ae4112fb025a64224410b91dd1bd0fb8cb54ed68c7ccaa6f000->leave($__internal_32e40dfb72ce7ae4112fb025a64224410b91dd1bd0fb8cb54ed68c7ccaa6f000_prof);

        
        $__internal_83723067efb6a8ba44b3de6136c2b28158f544a2522cfb5d70b8c1acbb776766->leave($__internal_83723067efb6a8ba44b3de6136c2b28158f544a2522cfb5d70b8c1acbb776766_prof);

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
