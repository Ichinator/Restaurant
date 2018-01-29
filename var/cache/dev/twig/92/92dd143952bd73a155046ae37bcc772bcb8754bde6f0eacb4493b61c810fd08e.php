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
        $__internal_4c4e59e41ac844ac58b43244c5db9867e7e31cb1bb8e6f2b449751231f068b9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c4e59e41ac844ac58b43244c5db9867e7e31cb1bb8e6f2b449751231f068b9d->enter($__internal_4c4e59e41ac844ac58b43244c5db9867e7e31cb1bb8e6f2b449751231f068b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_8c2a3de9f2895885169f7243efca02364cca0c1b713dc6a5d8e41bd5cea751a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c2a3de9f2895885169f7243efca02364cca0c1b713dc6a5d8e41bd5cea751a7->enter($__internal_8c2a3de9f2895885169f7243efca02364cca0c1b713dc6a5d8e41bd5cea751a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_4c4e59e41ac844ac58b43244c5db9867e7e31cb1bb8e6f2b449751231f068b9d->leave($__internal_4c4e59e41ac844ac58b43244c5db9867e7e31cb1bb8e6f2b449751231f068b9d_prof);

        
        $__internal_8c2a3de9f2895885169f7243efca02364cca0c1b713dc6a5d8e41bd5cea751a7->leave($__internal_8c2a3de9f2895885169f7243efca02364cca0c1b713dc6a5d8e41bd5cea751a7_prof);

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
