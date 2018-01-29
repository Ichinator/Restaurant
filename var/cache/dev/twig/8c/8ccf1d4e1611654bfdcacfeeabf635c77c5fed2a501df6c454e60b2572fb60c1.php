<?php

/* EasyAdminBundle:default:field_array.html.twig */
class __TwigTemplate_b2fcf4863676254da0f178612fc1001c7b2d322a4db8281b5ba5257a9a1bb917 extends Twig_Template
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
        $__internal_bd8fab3eac67f02c02b91cb0ee09259903a0c69ba053c3077bdcfd1b9884c1b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd8fab3eac67f02c02b91cb0ee09259903a0c69ba053c3077bdcfd1b9884c1b3->enter($__internal_bd8fab3eac67f02c02b91cb0ee09259903a0c69ba053c3077bdcfd1b9884c1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_array.html.twig"));

        $__internal_55c2bf0bffad8629a2f6cfda60d9f9808f5069984d81c8cce775661974d9bf5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55c2bf0bffad8629a2f6cfda60d9f9808f5069984d81c8cce775661974d9bf5d->enter($__internal_55c2bf0bffad8629a2f6cfda60d9f9808f5069984d81c8cce775661974d9bf5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_array.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            if ((twig_length_filter($this->env, ($context["value"] ?? $this->getContext($context, "value"))) > 0)) {
                // line 3
                echo "        <ul>
            ";
                // line 4
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["value"] ?? $this->getContext($context, "value")));
                foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                    // line 5
                    echo "                <li>";
                    echo twig_escape_filter($this->env, $context["element"], "html", null, true);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 7
                echo "        </ul>
    ";
            } else {
                // line 9
                echo "        <div class=\"empty collection-empty\">
            ";
                // line 10
                echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute(($context["entity_config"] ?? $this->getContext($context, "entity_config")), "templates", array()), "label_empty", array()));
                echo "
        </div>
    ";
            }
        } else {
            // line 14
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, twig_join_filter(($context["value"] ?? $this->getContext($context, "value")), ", ")), "html", null, true);
            echo "
";
        }
        
        $__internal_bd8fab3eac67f02c02b91cb0ee09259903a0c69ba053c3077bdcfd1b9884c1b3->leave($__internal_bd8fab3eac67f02c02b91cb0ee09259903a0c69ba053c3077bdcfd1b9884c1b3_prof);

        
        $__internal_55c2bf0bffad8629a2f6cfda60d9f9808f5069984d81c8cce775661974d9bf5d->leave($__internal_55c2bf0bffad8629a2f6cfda60d9f9808f5069984d81c8cce775661974d9bf5d_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  53 => 10,  50 => 9,  46 => 7,  37 => 5,  33 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if view == 'show' %}
    {% if value|length > 0 %}
        <ul>
            {% for element in value %}
                <li>{{ element }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div class=\"empty collection-empty\">
            {{ include(entity_config.templates.label_empty) }}
        </div>
    {% endif %}
{% else %}
    {{ value|join(', ')|easyadmin_truncate }}
{% endif %}
", "EasyAdminBundle:default:field_array.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_array.html.twig");
    }
}
