<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_4ddc14ea5db4985ce521562d9670d5e0447f7cc6596942562453388a1d8247a0 extends Twig_Template
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
        $__internal_707bc18975a4e8307f6decb2fc52172ee1cc7ee7bee220101cf521187aa4beb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_707bc18975a4e8307f6decb2fc52172ee1cc7ee7bee220101cf521187aa4beb3->enter($__internal_707bc18975a4e8307f6decb2fc52172ee1cc7ee7bee220101cf521187aa4beb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_64e7407b5c2265c85c29b4042d35028b3041e7e463c2f63ca903b0b2e0be66b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64e7407b5c2265c85c29b4042d35028b3041e7e463c2f63ca903b0b2e0be66b1->enter($__internal_64e7407b5c2265c85c29b4042d35028b3041e7e463c2f63ca903b0b2e0be66b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_707bc18975a4e8307f6decb2fc52172ee1cc7ee7bee220101cf521187aa4beb3->leave($__internal_707bc18975a4e8307f6decb2fc52172ee1cc7ee7bee220101cf521187aa4beb3_prof);

        
        $__internal_64e7407b5c2265c85c29b4042d35028b3041e7e463c2f63ca903b0b2e0be66b1->leave($__internal_64e7407b5c2265c85c29b4042d35028b3041e7e463c2f63ca903b0b2e0be66b1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
