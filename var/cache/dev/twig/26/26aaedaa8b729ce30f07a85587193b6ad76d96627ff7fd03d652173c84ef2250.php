<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_078d307dfbd965c6c462e73e4a2e3228595af6b18d44b2a0eb70e916174e81ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'choice_label' => array($this, 'block_choice_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'form_row' => array($this, 'block_form_row'),
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56f38f9fb12952a092c88c361dc00242794d97c6147688a90f1bf28dbad25567 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56f38f9fb12952a092c88c361dc00242794d97c6147688a90f1bf28dbad25567->enter($__internal_56f38f9fb12952a092c88c361dc00242794d97c6147688a90f1bf28dbad25567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_f6fc0841478fb60d5d5f2b33c46ffbba766aff917cf58b860677a2ce64bf6d93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6fc0841478fb60d5d5f2b33c46ffbba766aff917cf58b860677a2ce64bf6d93->enter($__internal_f6fc0841478fb60d5d5f2b33c46ffbba766aff917cf58b860677a2ce64bf6d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56f38f9fb12952a092c88c361dc00242794d97c6147688a90f1bf28dbad25567->leave($__internal_56f38f9fb12952a092c88c361dc00242794d97c6147688a90f1bf28dbad25567_prof);

        
        $__internal_f6fc0841478fb60d5d5f2b33c46ffbba766aff917cf58b860677a2ce64bf6d93->leave($__internal_f6fc0841478fb60d5d5f2b33c46ffbba766aff917cf58b860677a2ce64bf6d93_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_f4982389508e83e29aec1bfc80c70309b9f27eb706cfdae4beed933ec772e472 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4982389508e83e29aec1bfc80c70309b9f27eb706cfdae4beed933ec772e472->enter($__internal_f4982389508e83e29aec1bfc80c70309b9f27eb706cfdae4beed933ec772e472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_957873ec52ac7ca7933514a8fda2d976ddc24d4a428843695e7281ad77a80d78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_957873ec52ac7ca7933514a8fda2d976ddc24d4a428843695e7281ad77a80d78->enter($__internal_957873ec52ac7ca7933514a8fda2d976ddc24d4a428843695e7281ad77a80d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_957873ec52ac7ca7933514a8fda2d976ddc24d4a428843695e7281ad77a80d78->leave($__internal_957873ec52ac7ca7933514a8fda2d976ddc24d4a428843695e7281ad77a80d78_prof);

        
        $__internal_f4982389508e83e29aec1bfc80c70309b9f27eb706cfdae4beed933ec772e472->leave($__internal_f4982389508e83e29aec1bfc80c70309b9f27eb706cfdae4beed933ec772e472_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_c44467bb04cde6d27a71763f7f4b1aef87100e27d8271907bfa5eda378956e5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c44467bb04cde6d27a71763f7f4b1aef87100e27d8271907bfa5eda378956e5d->enter($__internal_c44467bb04cde6d27a71763f7f4b1aef87100e27d8271907bfa5eda378956e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_4350b771f112fa73fc271db34dc858ca686f8e92a5553bc7aeff94ff3d6e712e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4350b771f112fa73fc271db34dc858ca686f8e92a5553bc7aeff94ff3d6e712e->enter($__internal_4350b771f112fa73fc271db34dc858ca686f8e92a5553bc7aeff94ff3d6e712e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_4350b771f112fa73fc271db34dc858ca686f8e92a5553bc7aeff94ff3d6e712e->leave($__internal_4350b771f112fa73fc271db34dc858ca686f8e92a5553bc7aeff94ff3d6e712e_prof);

        
        $__internal_c44467bb04cde6d27a71763f7f4b1aef87100e27d8271907bfa5eda378956e5d->leave($__internal_c44467bb04cde6d27a71763f7f4b1aef87100e27d8271907bfa5eda378956e5d_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_c9be83adf4dcf05364dc508241d84c0089a1c35cdcdec2bdc79e8e3c0e1bf7f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9be83adf4dcf05364dc508241d84c0089a1c35cdcdec2bdc79e8e3c0e1bf7f2->enter($__internal_c9be83adf4dcf05364dc508241d84c0089a1c35cdcdec2bdc79e8e3c0e1bf7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_18f68a61faee7bc423cbcf93e13713a4232f2df88239ffe656e7c7f50e2d9e34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f68a61faee7bc423cbcf93e13713a4232f2df88239ffe656e7c7f50e2d9e34->enter($__internal_18f68a61faee7bc423cbcf93e13713a4232f2df88239ffe656e7c7f50e2d9e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_18f68a61faee7bc423cbcf93e13713a4232f2df88239ffe656e7c7f50e2d9e34->leave($__internal_18f68a61faee7bc423cbcf93e13713a4232f2df88239ffe656e7c7f50e2d9e34_prof);

        
        $__internal_c9be83adf4dcf05364dc508241d84c0089a1c35cdcdec2bdc79e8e3c0e1bf7f2->leave($__internal_c9be83adf4dcf05364dc508241d84c0089a1c35cdcdec2bdc79e8e3c0e1bf7f2_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_4dc613decc16c47aaeaeb1eab4f4c6b60ffd2011a87df4f656b36eb544aaf161 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dc613decc16c47aaeaeb1eab4f4c6b60ffd2011a87df4f656b36eb544aaf161->enter($__internal_4dc613decc16c47aaeaeb1eab4f4c6b60ffd2011a87df4f656b36eb544aaf161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_538c996bbd337b7f36526a29c901576ccd8e74e8327835e6cf4cc66d49c6ac07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_538c996bbd337b7f36526a29c901576ccd8e74e8327835e6cf4cc66d49c6ac07->enter($__internal_538c996bbd337b7f36526a29c901576ccd8e74e8327835e6cf4cc66d49c6ac07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_538c996bbd337b7f36526a29c901576ccd8e74e8327835e6cf4cc66d49c6ac07->leave($__internal_538c996bbd337b7f36526a29c901576ccd8e74e8327835e6cf4cc66d49c6ac07_prof);

        
        $__internal_4dc613decc16c47aaeaeb1eab4f4c6b60ffd2011a87df4f656b36eb544aaf161->leave($__internal_4dc613decc16c47aaeaeb1eab4f4c6b60ffd2011a87df4f656b36eb544aaf161_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_98cd9769a7f60e6888df8c12c8e103b2254c766b651ff6e04c3a61a0787f6e5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98cd9769a7f60e6888df8c12c8e103b2254c766b651ff6e04c3a61a0787f6e5f->enter($__internal_98cd9769a7f60e6888df8c12c8e103b2254c766b651ff6e04c3a61a0787f6e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_d52d7b25fae6e5d9b2cc5113da2a388731d12f1f89f1a42634eee94b47fdd189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d52d7b25fae6e5d9b2cc5113da2a388731d12f1f89f1a42634eee94b47fdd189->enter($__internal_d52d7b25fae6e5d9b2cc5113da2a388731d12f1f89f1a42634eee94b47fdd189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_d52d7b25fae6e5d9b2cc5113da2a388731d12f1f89f1a42634eee94b47fdd189->leave($__internal_d52d7b25fae6e5d9b2cc5113da2a388731d12f1f89f1a42634eee94b47fdd189_prof);

        
        $__internal_98cd9769a7f60e6888df8c12c8e103b2254c766b651ff6e04c3a61a0787f6e5f->leave($__internal_98cd9769a7f60e6888df8c12c8e103b2254c766b651ff6e04c3a61a0787f6e5f_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_2cfc245c72ea95272a4661702a32b21c06fd14938cb7cad10950b514f09f4c0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cfc245c72ea95272a4661702a32b21c06fd14938cb7cad10950b514f09f4c0b->enter($__internal_2cfc245c72ea95272a4661702a32b21c06fd14938cb7cad10950b514f09f4c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_5c7aa9798a6ceefa1922cf0366f33fc23426b6313845ceffa639a4f75d659792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c7aa9798a6ceefa1922cf0366f33fc23426b6313845ceffa639a4f75d659792->enter($__internal_5c7aa9798a6ceefa1922cf0366f33fc23426b6313845ceffa639a4f75d659792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_5c7aa9798a6ceefa1922cf0366f33fc23426b6313845ceffa639a4f75d659792->leave($__internal_5c7aa9798a6ceefa1922cf0366f33fc23426b6313845ceffa639a4f75d659792_prof);

        
        $__internal_2cfc245c72ea95272a4661702a32b21c06fd14938cb7cad10950b514f09f4c0b->leave($__internal_2cfc245c72ea95272a4661702a32b21c06fd14938cb7cad10950b514f09f4c0b_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_91d7f291ff38b913b91f37731e7ca2caf926d3dc16fcf182dc087662b1ec945e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91d7f291ff38b913b91f37731e7ca2caf926d3dc16fcf182dc087662b1ec945e->enter($__internal_91d7f291ff38b913b91f37731e7ca2caf926d3dc16fcf182dc087662b1ec945e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_5b06c9e68d2ae3829691983c4e2cd5c23a4ea30a7f895f3d58afc2053235810a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b06c9e68d2ae3829691983c4e2cd5c23a4ea30a7f895f3d58afc2053235810a->enter($__internal_5b06c9e68d2ae3829691983c4e2cd5c23a4ea30a7f895f3d58afc2053235810a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_5b06c9e68d2ae3829691983c4e2cd5c23a4ea30a7f895f3d58afc2053235810a->leave($__internal_5b06c9e68d2ae3829691983c4e2cd5c23a4ea30a7f895f3d58afc2053235810a_prof);

        
        $__internal_91d7f291ff38b913b91f37731e7ca2caf926d3dc16fcf182dc087662b1ec945e->leave($__internal_91d7f291ff38b913b91f37731e7ca2caf926d3dc16fcf182dc087662b1ec945e_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_63686b710978511c73b7a2d224034c17eb5357a6b80909ea0c386acb85958097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63686b710978511c73b7a2d224034c17eb5357a6b80909ea0c386acb85958097->enter($__internal_63686b710978511c73b7a2d224034c17eb5357a6b80909ea0c386acb85958097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_60beb2e89336c00a8d5cfa207d7a625a0e949eaa944b50380a57eb1680e757d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60beb2e89336c00a8d5cfa207d7a625a0e949eaa944b50380a57eb1680e757d9->enter($__internal_60beb2e89336c00a8d5cfa207d7a625a0e949eaa944b50380a57eb1680e757d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_60beb2e89336c00a8d5cfa207d7a625a0e949eaa944b50380a57eb1680e757d9->leave($__internal_60beb2e89336c00a8d5cfa207d7a625a0e949eaa944b50380a57eb1680e757d9_prof);

        
        $__internal_63686b710978511c73b7a2d224034c17eb5357a6b80909ea0c386acb85958097->leave($__internal_63686b710978511c73b7a2d224034c17eb5357a6b80909ea0c386acb85958097_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_b9ccde5b6de60fa42b3cd37442219bb744e8dce29dbe35f5500b332ef86bf50e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9ccde5b6de60fa42b3cd37442219bb744e8dce29dbe35f5500b332ef86bf50e->enter($__internal_b9ccde5b6de60fa42b3cd37442219bb744e8dce29dbe35f5500b332ef86bf50e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_68a72d344451406009a7f59ac150a0a2b0697b5acc3abc53e90b9f03bca962da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68a72d344451406009a7f59ac150a0a2b0697b5acc3abc53e90b9f03bca962da->enter($__internal_68a72d344451406009a7f59ac150a0a2b0697b5acc3abc53e90b9f03bca962da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_68a72d344451406009a7f59ac150a0a2b0697b5acc3abc53e90b9f03bca962da->leave($__internal_68a72d344451406009a7f59ac150a0a2b0697b5acc3abc53e90b9f03bca962da_prof);

        
        $__internal_b9ccde5b6de60fa42b3cd37442219bb744e8dce29dbe35f5500b332ef86bf50e->leave($__internal_b9ccde5b6de60fa42b3cd37442219bb744e8dce29dbe35f5500b332ef86bf50e_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_eb3fd2e5d8dae1becbc8c407112dff55652a34a005f5906ff6a6f400f738f0db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb3fd2e5d8dae1becbc8c407112dff55652a34a005f5906ff6a6f400f738f0db->enter($__internal_eb3fd2e5d8dae1becbc8c407112dff55652a34a005f5906ff6a6f400f738f0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_3537f8a344e2f5d17dba46f0775a1d812afb4aa0921ae8279bde741cab25e759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3537f8a344e2f5d17dba46f0775a1d812afb4aa0921ae8279bde741cab25e759->enter($__internal_3537f8a344e2f5d17dba46f0775a1d812afb4aa0921ae8279bde741cab25e759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_3537f8a344e2f5d17dba46f0775a1d812afb4aa0921ae8279bde741cab25e759->leave($__internal_3537f8a344e2f5d17dba46f0775a1d812afb4aa0921ae8279bde741cab25e759_prof);

        
        $__internal_eb3fd2e5d8dae1becbc8c407112dff55652a34a005f5906ff6a6f400f738f0db->leave($__internal_eb3fd2e5d8dae1becbc8c407112dff55652a34a005f5906ff6a6f400f738f0db_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_12ec6be693d5ff48eb6984af01b43e6c9569d089ec3c21304ec24117719be439 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12ec6be693d5ff48eb6984af01b43e6c9569d089ec3c21304ec24117719be439->enter($__internal_12ec6be693d5ff48eb6984af01b43e6c9569d089ec3c21304ec24117719be439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_2556f393c34dc60d232310287c1af55d1acc619286b3a7d17a83aa30a17fd14a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2556f393c34dc60d232310287c1af55d1acc619286b3a7d17a83aa30a17fd14a->enter($__internal_2556f393c34dc60d232310287c1af55d1acc619286b3a7d17a83aa30a17fd14a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_2556f393c34dc60d232310287c1af55d1acc619286b3a7d17a83aa30a17fd14a->leave($__internal_2556f393c34dc60d232310287c1af55d1acc619286b3a7d17a83aa30a17fd14a_prof);

        
        $__internal_12ec6be693d5ff48eb6984af01b43e6c9569d089ec3c21304ec24117719be439->leave($__internal_12ec6be693d5ff48eb6984af01b43e6c9569d089ec3c21304ec24117719be439_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_f2328bbe990c3fe9855a30507c61e8cd01c65b3564cec96f427686486cacb713 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2328bbe990c3fe9855a30507c61e8cd01c65b3564cec96f427686486cacb713->enter($__internal_f2328bbe990c3fe9855a30507c61e8cd01c65b3564cec96f427686486cacb713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_2ed33a89931d7a64d1eb059d386b184ae3e82ab2e95dfec96c1eb60ea79be16b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed33a89931d7a64d1eb059d386b184ae3e82ab2e95dfec96c1eb60ea79be16b->enter($__internal_2ed33a89931d7a64d1eb059d386b184ae3e82ab2e95dfec96c1eb60ea79be16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_2ed33a89931d7a64d1eb059d386b184ae3e82ab2e95dfec96c1eb60ea79be16b->leave($__internal_2ed33a89931d7a64d1eb059d386b184ae3e82ab2e95dfec96c1eb60ea79be16b_prof);

        
        $__internal_f2328bbe990c3fe9855a30507c61e8cd01c65b3564cec96f427686486cacb713->leave($__internal_f2328bbe990c3fe9855a30507c61e8cd01c65b3564cec96f427686486cacb713_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_011112dc5b19b51a0632519e90bf4eb4d0eec153f9e0f92be5499a5484e5b878 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_011112dc5b19b51a0632519e90bf4eb4d0eec153f9e0f92be5499a5484e5b878->enter($__internal_011112dc5b19b51a0632519e90bf4eb4d0eec153f9e0f92be5499a5484e5b878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_b1088d8a1dd6c6b5a1eb035db34d5dc37dddda1b12053f15d6a971246ac573fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1088d8a1dd6c6b5a1eb035db34d5dc37dddda1b12053f15d6a971246ac573fd->enter($__internal_b1088d8a1dd6c6b5a1eb035db34d5dc37dddda1b12053f15d6a971246ac573fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_b1088d8a1dd6c6b5a1eb035db34d5dc37dddda1b12053f15d6a971246ac573fd->leave($__internal_b1088d8a1dd6c6b5a1eb035db34d5dc37dddda1b12053f15d6a971246ac573fd_prof);

        
        $__internal_011112dc5b19b51a0632519e90bf4eb4d0eec153f9e0f92be5499a5484e5b878->leave($__internal_011112dc5b19b51a0632519e90bf4eb4d0eec153f9e0f92be5499a5484e5b878_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_af5a26df7d37f11c58cbb2c68ed329efc942dc5f26fe8a9397e8b7bc95024ef1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af5a26df7d37f11c58cbb2c68ed329efc942dc5f26fe8a9397e8b7bc95024ef1->enter($__internal_af5a26df7d37f11c58cbb2c68ed329efc942dc5f26fe8a9397e8b7bc95024ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_7807865e0f274c921adf44e46439958df9eedd28d37f15dae6cabcdc1259f5c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7807865e0f274c921adf44e46439958df9eedd28d37f15dae6cabcdc1259f5c9->enter($__internal_7807865e0f274c921adf44e46439958df9eedd28d37f15dae6cabcdc1259f5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_7807865e0f274c921adf44e46439958df9eedd28d37f15dae6cabcdc1259f5c9->leave($__internal_7807865e0f274c921adf44e46439958df9eedd28d37f15dae6cabcdc1259f5c9_prof);

        
        $__internal_af5a26df7d37f11c58cbb2c68ed329efc942dc5f26fe8a9397e8b7bc95024ef1->leave($__internal_af5a26df7d37f11c58cbb2c68ed329efc942dc5f26fe8a9397e8b7bc95024ef1_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_8ca8c8a8183111602c2955f632ad80e35b43bd7f22c10d19686b28a102fe9e2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ca8c8a8183111602c2955f632ad80e35b43bd7f22c10d19686b28a102fe9e2e->enter($__internal_8ca8c8a8183111602c2955f632ad80e35b43bd7f22c10d19686b28a102fe9e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_76c88e7927f4ba5a0328be8b19240e1bb36d40059fec74eae9e897c3e71bd846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76c88e7927f4ba5a0328be8b19240e1bb36d40059fec74eae9e897c3e71bd846->enter($__internal_76c88e7927f4ba5a0328be8b19240e1bb36d40059fec74eae9e897c3e71bd846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_76c88e7927f4ba5a0328be8b19240e1bb36d40059fec74eae9e897c3e71bd846->leave($__internal_76c88e7927f4ba5a0328be8b19240e1bb36d40059fec74eae9e897c3e71bd846_prof);

        
        $__internal_8ca8c8a8183111602c2955f632ad80e35b43bd7f22c10d19686b28a102fe9e2e->leave($__internal_8ca8c8a8183111602c2955f632ad80e35b43bd7f22c10d19686b28a102fe9e2e_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_2e76bc22c9e76f3982a36608ca368b30c3a7814fd00c2a7e9a8e229c62cea45f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e76bc22c9e76f3982a36608ca368b30c3a7814fd00c2a7e9a8e229c62cea45f->enter($__internal_2e76bc22c9e76f3982a36608ca368b30c3a7814fd00c2a7e9a8e229c62cea45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_bf48d7e9d652304f5c39184bafbb04c2425279f9bdcfe54b01cd7733103d6c63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf48d7e9d652304f5c39184bafbb04c2425279f9bdcfe54b01cd7733103d6c63->enter($__internal_bf48d7e9d652304f5c39184bafbb04c2425279f9bdcfe54b01cd7733103d6c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_bf48d7e9d652304f5c39184bafbb04c2425279f9bdcfe54b01cd7733103d6c63->leave($__internal_bf48d7e9d652304f5c39184bafbb04c2425279f9bdcfe54b01cd7733103d6c63_prof);

        
        $__internal_2e76bc22c9e76f3982a36608ca368b30c3a7814fd00c2a7e9a8e229c62cea45f->leave($__internal_2e76bc22c9e76f3982a36608ca368b30c3a7814fd00c2a7e9a8e229c62cea45f_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_95f4f039fdcf122e85d93c225d4fd15da67a2c28dc2da9b704501578dbfb17aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95f4f039fdcf122e85d93c225d4fd15da67a2c28dc2da9b704501578dbfb17aa->enter($__internal_95f4f039fdcf122e85d93c225d4fd15da67a2c28dc2da9b704501578dbfb17aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_45a6f180d4c2cad082572c357921d6c7ff88fe188c9e0c5e4f2835f00bd245e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45a6f180d4c2cad082572c357921d6c7ff88fe188c9e0c5e4f2835f00bd245e2->enter($__internal_45a6f180d4c2cad082572c357921d6c7ff88fe188c9e0c5e4f2835f00bd245e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 255
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
        ";
        // line 262
        echo ($context["widget"] ?? $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_45a6f180d4c2cad082572c357921d6c7ff88fe188c9e0c5e4f2835f00bd245e2->leave($__internal_45a6f180d4c2cad082572c357921d6c7ff88fe188c9e0c5e4f2835f00bd245e2_prof);

        
        $__internal_95f4f039fdcf122e85d93c225d4fd15da67a2c28dc2da9b704501578dbfb17aa->leave($__internal_95f4f039fdcf122e85d93c225d4fd15da67a2c28dc2da9b704501578dbfb17aa_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_222bba24371cba036fc7e73f00cd9cecc48158ede44279b6de3edee2e104d5b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_222bba24371cba036fc7e73f00cd9cecc48158ede44279b6de3edee2e104d5b1->enter($__internal_222bba24371cba036fc7e73f00cd9cecc48158ede44279b6de3edee2e104d5b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_b113437427840641ede562bce3c5f02828a65478c2317ad9e280e1c70deb7c1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b113437427840641ede562bce3c5f02828a65478c2317ad9e280e1c70deb7c1f->enter($__internal_b113437427840641ede562bce3c5f02828a65478c2317ad9e280e1c70deb7c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_b113437427840641ede562bce3c5f02828a65478c2317ad9e280e1c70deb7c1f->leave($__internal_b113437427840641ede562bce3c5f02828a65478c2317ad9e280e1c70deb7c1f_prof);

        
        $__internal_222bba24371cba036fc7e73f00cd9cecc48158ede44279b6de3edee2e104d5b1->leave($__internal_222bba24371cba036fc7e73f00cd9cecc48158ede44279b6de3edee2e104d5b1_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_9d37fb77337d0d441f591695a9825dd44040ba44361b1d5eb9a1f24dde375020 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d37fb77337d0d441f591695a9825dd44040ba44361b1d5eb9a1f24dde375020->enter($__internal_9d37fb77337d0d441f591695a9825dd44040ba44361b1d5eb9a1f24dde375020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_674935c5c331ad8a90963157a4899da1c4462de103a92dafd4e857d316f79834 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_674935c5c331ad8a90963157a4899da1c4462de103a92dafd4e857d316f79834->enter($__internal_674935c5c331ad8a90963157a4899da1c4462de103a92dafd4e857d316f79834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_674935c5c331ad8a90963157a4899da1c4462de103a92dafd4e857d316f79834->leave($__internal_674935c5c331ad8a90963157a4899da1c4462de103a92dafd4e857d316f79834_prof);

        
        $__internal_9d37fb77337d0d441f591695a9825dd44040ba44361b1d5eb9a1f24dde375020->leave($__internal_9d37fb77337d0d441f591695a9825dd44040ba44361b1d5eb9a1f24dde375020_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_6aa73878952f4ee484ecc1fa830c098aa170dad33a6725f4e6314203e6e7c383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6aa73878952f4ee484ecc1fa830c098aa170dad33a6725f4e6314203e6e7c383->enter($__internal_6aa73878952f4ee484ecc1fa830c098aa170dad33a6725f4e6314203e6e7c383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_f73927fbb45a4825dfb0130df25841dae65c3ba2b927f1177bb4ec470b532188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f73927fbb45a4825dfb0130df25841dae65c3ba2b927f1177bb4ec470b532188->enter($__internal_f73927fbb45a4825dfb0130df25841dae65c3ba2b927f1177bb4ec470b532188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f73927fbb45a4825dfb0130df25841dae65c3ba2b927f1177bb4ec470b532188->leave($__internal_f73927fbb45a4825dfb0130df25841dae65c3ba2b927f1177bb4ec470b532188_prof);

        
        $__internal_6aa73878952f4ee484ecc1fa830c098aa170dad33a6725f4e6314203e6e7c383->leave($__internal_6aa73878952f4ee484ecc1fa830c098aa170dad33a6725f4e6314203e6e7c383_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_12bbdb340eee6803f6b3b60d8e366179c345e12901d4c876304df62c92c30e96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12bbdb340eee6803f6b3b60d8e366179c345e12901d4c876304df62c92c30e96->enter($__internal_12bbdb340eee6803f6b3b60d8e366179c345e12901d4c876304df62c92c30e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_6ea33c2bf1201cf0fb178281c9c7aea0667d96448006c89ba941afb8314b9a01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ea33c2bf1201cf0fb178281c9c7aea0667d96448006c89ba941afb8314b9a01->enter($__internal_6ea33c2bf1201cf0fb178281c9c7aea0667d96448006c89ba941afb8314b9a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6ea33c2bf1201cf0fb178281c9c7aea0667d96448006c89ba941afb8314b9a01->leave($__internal_6ea33c2bf1201cf0fb178281c9c7aea0667d96448006c89ba941afb8314b9a01_prof);

        
        $__internal_12bbdb340eee6803f6b3b60d8e366179c345e12901d4c876304df62c92c30e96->leave($__internal_12bbdb340eee6803f6b3b60d8e366179c345e12901d4c876304df62c92c30e96_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_f3533372453ade60c131bee74901507f741ff975e95dced3d940005dd0fa07f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3533372453ade60c131bee74901507f741ff975e95dced3d940005dd0fa07f4->enter($__internal_f3533372453ade60c131bee74901507f741ff975e95dced3d940005dd0fa07f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_cc141b8b5dff979380ea1d3997e359b0c139021833a87ec1d6c8f293e3eba30b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc141b8b5dff979380ea1d3997e359b0c139021833a87ec1d6c8f293e3eba30b->enter($__internal_cc141b8b5dff979380ea1d3997e359b0c139021833a87ec1d6c8f293e3eba30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_cc141b8b5dff979380ea1d3997e359b0c139021833a87ec1d6c8f293e3eba30b->leave($__internal_cc141b8b5dff979380ea1d3997e359b0c139021833a87ec1d6c8f293e3eba30b_prof);

        
        $__internal_f3533372453ade60c131bee74901507f741ff975e95dced3d940005dd0fa07f4->leave($__internal_f3533372453ade60c131bee74901507f741ff975e95dced3d940005dd0fa07f4_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_d4a0a4331996e660a507080519191f9826d1fdf0b0b89ac9197f9cbe4b83c617 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4a0a4331996e660a507080519191f9826d1fdf0b0b89ac9197f9cbe4b83c617->enter($__internal_d4a0a4331996e660a507080519191f9826d1fdf0b0b89ac9197f9cbe4b83c617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_a4615c2526045519251770b887dbca11b83743d945b0f6fb52df772dc078e4d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4615c2526045519251770b887dbca11b83743d945b0f6fb52df772dc078e4d9->enter($__internal_a4615c2526045519251770b887dbca11b83743d945b0f6fb52df772dc078e4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_a4615c2526045519251770b887dbca11b83743d945b0f6fb52df772dc078e4d9->leave($__internal_a4615c2526045519251770b887dbca11b83743d945b0f6fb52df772dc078e4d9_prof);

        
        $__internal_d4a0a4331996e660a507080519191f9826d1fdf0b0b89ac9197f9cbe4b83c617->leave($__internal_d4a0a4331996e660a507080519191f9826d1fdf0b0b89ac9197f9cbe4b83c617_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_3298913c85980e6254c9a33c5f107908708af529bb7f2a19eb3af540a4d2f74d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3298913c85980e6254c9a33c5f107908708af529bb7f2a19eb3af540a4d2f74d->enter($__internal_3298913c85980e6254c9a33c5f107908708af529bb7f2a19eb3af540a4d2f74d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_cd2733b0c8bb186e05836644a3e550bd5561b4c82aafb8c62f25521ee4041afe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd2733b0c8bb186e05836644a3e550bd5561b4c82aafb8c62f25521ee4041afe->enter($__internal_cd2733b0c8bb186e05836644a3e550bd5561b4c82aafb8c62f25521ee4041afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_cd2733b0c8bb186e05836644a3e550bd5561b4c82aafb8c62f25521ee4041afe->leave($__internal_cd2733b0c8bb186e05836644a3e550bd5561b4c82aafb8c62f25521ee4041afe_prof);

        
        $__internal_3298913c85980e6254c9a33c5f107908708af529bb7f2a19eb3af540a4d2f74d->leave($__internal_3298913c85980e6254c9a33c5f107908708af529bb7f2a19eb3af540a4d2f74d_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_61a4f7bada0a7b0697550dccca106458fcbcc29fa1b8bfb23262ae1502c1aa20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61a4f7bada0a7b0697550dccca106458fcbcc29fa1b8bfb23262ae1502c1aa20->enter($__internal_61a4f7bada0a7b0697550dccca106458fcbcc29fa1b8bfb23262ae1502c1aa20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_c12e9c05b2f208a74c7e0937317f23627b5670b60e85b362c118fd47392d8628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c12e9c05b2f208a74c7e0937317f23627b5670b60e85b362c118fd47392d8628->enter($__internal_c12e9c05b2f208a74c7e0937317f23627b5670b60e85b362c118fd47392d8628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_c12e9c05b2f208a74c7e0937317f23627b5670b60e85b362c118fd47392d8628->leave($__internal_c12e9c05b2f208a74c7e0937317f23627b5670b60e85b362c118fd47392d8628_prof);

        
        $__internal_61a4f7bada0a7b0697550dccca106458fcbcc29fa1b8bfb23262ae1502c1aa20->leave($__internal_61a4f7bada0a7b0697550dccca106458fcbcc29fa1b8bfb23262ae1502c1aa20_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {% endif %}
    <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form is not rootform %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form is not rootform %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/foundation_5_layout.html.twig");
    }
}
