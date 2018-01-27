<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_ac4bef923d2527fbf1d8549093740cbfd35d0604767399100322144894a94344 extends Twig_Template
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
        $__internal_0d314ff0dee6c2d64a51528cb3299b9e50c8c2f94d745d74bbb37161e541b19a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d314ff0dee6c2d64a51528cb3299b9e50c8c2f94d745d74bbb37161e541b19a->enter($__internal_0d314ff0dee6c2d64a51528cb3299b9e50c8c2f94d745d74bbb37161e541b19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_31d5830f5c2c8bf989f70eaae17eca4463da0286e382493d394dc4f3ae8c5a5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31d5830f5c2c8bf989f70eaae17eca4463da0286e382493d394dc4f3ae8c5a5e->enter($__internal_31d5830f5c2c8bf989f70eaae17eca4463da0286e382493d394dc4f3ae8c5a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_0d314ff0dee6c2d64a51528cb3299b9e50c8c2f94d745d74bbb37161e541b19a->leave($__internal_0d314ff0dee6c2d64a51528cb3299b9e50c8c2f94d745d74bbb37161e541b19a_prof);

        
        $__internal_31d5830f5c2c8bf989f70eaae17eca4463da0286e382493d394dc4f3ae8c5a5e->leave($__internal_31d5830f5c2c8bf989f70eaae17eca4463da0286e382493d394dc4f3ae8c5a5e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
