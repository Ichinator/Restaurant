<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_11c5d1df6edc6ca211eca1ef347d984ec72a5f9320cf26803edb7df6b61d91fc extends Twig_Template
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
        $__internal_e709c70e3d9a247a115f262a9323fc5e2c2ef7bcfa40f96f7883b281fb3c8bb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e709c70e3d9a247a115f262a9323fc5e2c2ef7bcfa40f96f7883b281fb3c8bb3->enter($__internal_e709c70e3d9a247a115f262a9323fc5e2c2ef7bcfa40f96f7883b281fb3c8bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_7f95d5e9da9b8eef8f4c5e9f7dcc92d9f148e6ada32bb6a0ec051a516e5a8278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f95d5e9da9b8eef8f4c5e9f7dcc92d9f148e6ada32bb6a0ec051a516e5a8278->enter($__internal_7f95d5e9da9b8eef8f4c5e9f7dcc92d9f148e6ada32bb6a0ec051a516e5a8278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_e709c70e3d9a247a115f262a9323fc5e2c2ef7bcfa40f96f7883b281fb3c8bb3->leave($__internal_e709c70e3d9a247a115f262a9323fc5e2c2ef7bcfa40f96f7883b281fb3c8bb3_prof);

        
        $__internal_7f95d5e9da9b8eef8f4c5e9f7dcc92d9f148e6ada32bb6a0ec051a516e5a8278->leave($__internal_7f95d5e9da9b8eef8f4c5e9f7dcc92d9f148e6ada32bb6a0ec051a516e5a8278_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
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
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
