<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_f93cca9c4de0be1f5c7381442ee12d0ee7734c89b2d08d5bd4ed99e0c2e6df7b extends Twig_Template
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
        $__internal_c8b9ae303d24f4f4c00236d020344f8122bc17d19f26a86e2f5ff0442c3b48bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8b9ae303d24f4f4c00236d020344f8122bc17d19f26a86e2f5ff0442c3b48bc->enter($__internal_c8b9ae303d24f4f4c00236d020344f8122bc17d19f26a86e2f5ff0442c3b48bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_581fe863a449546c0f2ce8a97728d06ccfdd20f812d9007e0bbcb4aff8d03521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_581fe863a449546c0f2ce8a97728d06ccfdd20f812d9007e0bbcb4aff8d03521->enter($__internal_581fe863a449546c0f2ce8a97728d06ccfdd20f812d9007e0bbcb4aff8d03521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_c8b9ae303d24f4f4c00236d020344f8122bc17d19f26a86e2f5ff0442c3b48bc->leave($__internal_c8b9ae303d24f4f4c00236d020344f8122bc17d19f26a86e2f5ff0442c3b48bc_prof);

        
        $__internal_581fe863a449546c0f2ce8a97728d06ccfdd20f812d9007e0bbcb4aff8d03521->leave($__internal_581fe863a449546c0f2ce8a97728d06ccfdd20f812d9007e0bbcb4aff8d03521_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
