<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_52c35ff65a6258f61126111155758b16b8819ea72daa2c5a2bab76e0e8634836 extends Twig_Template
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
        $__internal_0cc20f09877b6af58b17e491637645d7e1d7d25b1525bedb186e6be57bcaf13a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cc20f09877b6af58b17e491637645d7e1d7d25b1525bedb186e6be57bcaf13a->enter($__internal_0cc20f09877b6af58b17e491637645d7e1d7d25b1525bedb186e6be57bcaf13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_23706dec6e49e7059eb8861db3276ea4cf2880013ab8d3f0c117709cf5c0007d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23706dec6e49e7059eb8861db3276ea4cf2880013ab8d3f0c117709cf5c0007d->enter($__internal_23706dec6e49e7059eb8861db3276ea4cf2880013ab8d3f0c117709cf5c0007d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_0cc20f09877b6af58b17e491637645d7e1d7d25b1525bedb186e6be57bcaf13a->leave($__internal_0cc20f09877b6af58b17e491637645d7e1d7d25b1525bedb186e6be57bcaf13a_prof);

        
        $__internal_23706dec6e49e7059eb8861db3276ea4cf2880013ab8d3f0c117709cf5c0007d->leave($__internal_23706dec6e49e7059eb8861db3276ea4cf2880013ab8d3f0c117709cf5c0007d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
