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
        $__internal_a210534bf7f7800d41875e2bf701b8c913555653c2b4398be1e4da8bb4bafb54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a210534bf7f7800d41875e2bf701b8c913555653c2b4398be1e4da8bb4bafb54->enter($__internal_a210534bf7f7800d41875e2bf701b8c913555653c2b4398be1e4da8bb4bafb54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_67406681af0d6bb56b17743d8fb693ad8abe6c537ea7f0d8b81b75148ae1fa76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67406681af0d6bb56b17743d8fb693ad8abe6c537ea7f0d8b81b75148ae1fa76->enter($__internal_67406681af0d6bb56b17743d8fb693ad8abe6c537ea7f0d8b81b75148ae1fa76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a210534bf7f7800d41875e2bf701b8c913555653c2b4398be1e4da8bb4bafb54->leave($__internal_a210534bf7f7800d41875e2bf701b8c913555653c2b4398be1e4da8bb4bafb54_prof);

        
        $__internal_67406681af0d6bb56b17743d8fb693ad8abe6c537ea7f0d8b81b75148ae1fa76->leave($__internal_67406681af0d6bb56b17743d8fb693ad8abe6c537ea7f0d8b81b75148ae1fa76_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_681f17108851dc07b9d7deae6c7685f5ac524fe552b5d1608b1460df83f187d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_681f17108851dc07b9d7deae6c7685f5ac524fe552b5d1608b1460df83f187d9->enter($__internal_681f17108851dc07b9d7deae6c7685f5ac524fe552b5d1608b1460df83f187d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_0495fcf5bcdcf8f5c29e4f20e0c837c97a1ba131737a315406d70f79d4d82d34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0495fcf5bcdcf8f5c29e4f20e0c837c97a1ba131737a315406d70f79d4d82d34->enter($__internal_0495fcf5bcdcf8f5c29e4f20e0c837c97a1ba131737a315406d70f79d4d82d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_0495fcf5bcdcf8f5c29e4f20e0c837c97a1ba131737a315406d70f79d4d82d34->leave($__internal_0495fcf5bcdcf8f5c29e4f20e0c837c97a1ba131737a315406d70f79d4d82d34_prof);

        
        $__internal_681f17108851dc07b9d7deae6c7685f5ac524fe552b5d1608b1460df83f187d9->leave($__internal_681f17108851dc07b9d7deae6c7685f5ac524fe552b5d1608b1460df83f187d9_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_c6d9f980eeae963337a28486dd00a932276d07849c701093b6a2ef8bfe4475ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6d9f980eeae963337a28486dd00a932276d07849c701093b6a2ef8bfe4475ec->enter($__internal_c6d9f980eeae963337a28486dd00a932276d07849c701093b6a2ef8bfe4475ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_4aa4fcfb2550d33b2875621b6c135731d44165a1872151fa1b95b510a8824b61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aa4fcfb2550d33b2875621b6c135731d44165a1872151fa1b95b510a8824b61->enter($__internal_4aa4fcfb2550d33b2875621b6c135731d44165a1872151fa1b95b510a8824b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_4aa4fcfb2550d33b2875621b6c135731d44165a1872151fa1b95b510a8824b61->leave($__internal_4aa4fcfb2550d33b2875621b6c135731d44165a1872151fa1b95b510a8824b61_prof);

        
        $__internal_c6d9f980eeae963337a28486dd00a932276d07849c701093b6a2ef8bfe4475ec->leave($__internal_c6d9f980eeae963337a28486dd00a932276d07849c701093b6a2ef8bfe4475ec_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_2753d5cb2795d4616adb3b544c38ab140335e455830089443e58f54918776da1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2753d5cb2795d4616adb3b544c38ab140335e455830089443e58f54918776da1->enter($__internal_2753d5cb2795d4616adb3b544c38ab140335e455830089443e58f54918776da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_9302029ffcdbeb34a3026702a603bc515f0e94792215d9dcfe1a4d88a06e4558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9302029ffcdbeb34a3026702a603bc515f0e94792215d9dcfe1a4d88a06e4558->enter($__internal_9302029ffcdbeb34a3026702a603bc515f0e94792215d9dcfe1a4d88a06e4558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_9302029ffcdbeb34a3026702a603bc515f0e94792215d9dcfe1a4d88a06e4558->leave($__internal_9302029ffcdbeb34a3026702a603bc515f0e94792215d9dcfe1a4d88a06e4558_prof);

        
        $__internal_2753d5cb2795d4616adb3b544c38ab140335e455830089443e58f54918776da1->leave($__internal_2753d5cb2795d4616adb3b544c38ab140335e455830089443e58f54918776da1_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_ca1da0529842d63a1236b22de90121cbf7d4745a49d0a66d2a40835175d4e428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca1da0529842d63a1236b22de90121cbf7d4745a49d0a66d2a40835175d4e428->enter($__internal_ca1da0529842d63a1236b22de90121cbf7d4745a49d0a66d2a40835175d4e428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_6436fd815a6310a5be1595c2fd55dcae981a3beba5667e844a024eb3f1cb14e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6436fd815a6310a5be1595c2fd55dcae981a3beba5667e844a024eb3f1cb14e8->enter($__internal_6436fd815a6310a5be1595c2fd55dcae981a3beba5667e844a024eb3f1cb14e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

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
        
        $__internal_6436fd815a6310a5be1595c2fd55dcae981a3beba5667e844a024eb3f1cb14e8->leave($__internal_6436fd815a6310a5be1595c2fd55dcae981a3beba5667e844a024eb3f1cb14e8_prof);

        
        $__internal_ca1da0529842d63a1236b22de90121cbf7d4745a49d0a66d2a40835175d4e428->leave($__internal_ca1da0529842d63a1236b22de90121cbf7d4745a49d0a66d2a40835175d4e428_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_0c184d9019ef52153c5c0893d975e4132729ec6b96b3643b749ef31bc73804c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c184d9019ef52153c5c0893d975e4132729ec6b96b3643b749ef31bc73804c8->enter($__internal_0c184d9019ef52153c5c0893d975e4132729ec6b96b3643b749ef31bc73804c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_c92babc8091ac1d820bb0c1dbd4674df43a157ad54c5bc8f25004d8df7adb878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c92babc8091ac1d820bb0c1dbd4674df43a157ad54c5bc8f25004d8df7adb878->enter($__internal_c92babc8091ac1d820bb0c1dbd4674df43a157ad54c5bc8f25004d8df7adb878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

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
        
        $__internal_c92babc8091ac1d820bb0c1dbd4674df43a157ad54c5bc8f25004d8df7adb878->leave($__internal_c92babc8091ac1d820bb0c1dbd4674df43a157ad54c5bc8f25004d8df7adb878_prof);

        
        $__internal_0c184d9019ef52153c5c0893d975e4132729ec6b96b3643b749ef31bc73804c8->leave($__internal_0c184d9019ef52153c5c0893d975e4132729ec6b96b3643b749ef31bc73804c8_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_00aba9f95d5aa9d33d970dfd026fdda7f205927fe2791572274e7a01871338f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00aba9f95d5aa9d33d970dfd026fdda7f205927fe2791572274e7a01871338f5->enter($__internal_00aba9f95d5aa9d33d970dfd026fdda7f205927fe2791572274e7a01871338f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_cc984fd8cf22f98768bd9dea9fcc1d7ab51904cbc3e30bf5a00c0cc3ae6081ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc984fd8cf22f98768bd9dea9fcc1d7ab51904cbc3e30bf5a00c0cc3ae6081ca->enter($__internal_cc984fd8cf22f98768bd9dea9fcc1d7ab51904cbc3e30bf5a00c0cc3ae6081ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_cc984fd8cf22f98768bd9dea9fcc1d7ab51904cbc3e30bf5a00c0cc3ae6081ca->leave($__internal_cc984fd8cf22f98768bd9dea9fcc1d7ab51904cbc3e30bf5a00c0cc3ae6081ca_prof);

        
        $__internal_00aba9f95d5aa9d33d970dfd026fdda7f205927fe2791572274e7a01871338f5->leave($__internal_00aba9f95d5aa9d33d970dfd026fdda7f205927fe2791572274e7a01871338f5_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_fca5716689eac81ec734c87bbc6c0389a766a554a0763f89ede61443348d2ec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fca5716689eac81ec734c87bbc6c0389a766a554a0763f89ede61443348d2ec6->enter($__internal_fca5716689eac81ec734c87bbc6c0389a766a554a0763f89ede61443348d2ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_c7cad74107a6e564a3f2469f449d4fa0a6c3517624c1a831f0d77f8708f3570a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7cad74107a6e564a3f2469f449d4fa0a6c3517624c1a831f0d77f8708f3570a->enter($__internal_c7cad74107a6e564a3f2469f449d4fa0a6c3517624c1a831f0d77f8708f3570a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_c7cad74107a6e564a3f2469f449d4fa0a6c3517624c1a831f0d77f8708f3570a->leave($__internal_c7cad74107a6e564a3f2469f449d4fa0a6c3517624c1a831f0d77f8708f3570a_prof);

        
        $__internal_fca5716689eac81ec734c87bbc6c0389a766a554a0763f89ede61443348d2ec6->leave($__internal_fca5716689eac81ec734c87bbc6c0389a766a554a0763f89ede61443348d2ec6_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_44df6ba644f874d5df2657fee7ec314995f743e57baf2d3eb1c7165c0c35ecb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44df6ba644f874d5df2657fee7ec314995f743e57baf2d3eb1c7165c0c35ecb0->enter($__internal_44df6ba644f874d5df2657fee7ec314995f743e57baf2d3eb1c7165c0c35ecb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_7a3ebf0e1aee67a4de3237b5cb3d5de11c218a6fa088bf9175bab45adcefbc0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a3ebf0e1aee67a4de3237b5cb3d5de11c218a6fa088bf9175bab45adcefbc0b->enter($__internal_7a3ebf0e1aee67a4de3237b5cb3d5de11c218a6fa088bf9175bab45adcefbc0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_7a3ebf0e1aee67a4de3237b5cb3d5de11c218a6fa088bf9175bab45adcefbc0b->leave($__internal_7a3ebf0e1aee67a4de3237b5cb3d5de11c218a6fa088bf9175bab45adcefbc0b_prof);

        
        $__internal_44df6ba644f874d5df2657fee7ec314995f743e57baf2d3eb1c7165c0c35ecb0->leave($__internal_44df6ba644f874d5df2657fee7ec314995f743e57baf2d3eb1c7165c0c35ecb0_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_86520bc4517c4ffb73e4a6379770f23d24e9331a385b873572029d154f747d1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86520bc4517c4ffb73e4a6379770f23d24e9331a385b873572029d154f747d1e->enter($__internal_86520bc4517c4ffb73e4a6379770f23d24e9331a385b873572029d154f747d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_ce854eb29724fef45577c16221e81650979368c1835384226f91b44b34013c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce854eb29724fef45577c16221e81650979368c1835384226f91b44b34013c34->enter($__internal_ce854eb29724fef45577c16221e81650979368c1835384226f91b44b34013c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_ce854eb29724fef45577c16221e81650979368c1835384226f91b44b34013c34->leave($__internal_ce854eb29724fef45577c16221e81650979368c1835384226f91b44b34013c34_prof);

        
        $__internal_86520bc4517c4ffb73e4a6379770f23d24e9331a385b873572029d154f747d1e->leave($__internal_86520bc4517c4ffb73e4a6379770f23d24e9331a385b873572029d154f747d1e_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_18efdfd4da4b9b3ff07c8603daec210ca1278594921d874ff4f714c1927f4ca6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18efdfd4da4b9b3ff07c8603daec210ca1278594921d874ff4f714c1927f4ca6->enter($__internal_18efdfd4da4b9b3ff07c8603daec210ca1278594921d874ff4f714c1927f4ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_ab5219b2806476cfcc2441008625115d579cf743e381ab059ded0b1e28af8119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab5219b2806476cfcc2441008625115d579cf743e381ab059ded0b1e28af8119->enter($__internal_ab5219b2806476cfcc2441008625115d579cf743e381ab059ded0b1e28af8119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_ab5219b2806476cfcc2441008625115d579cf743e381ab059ded0b1e28af8119->leave($__internal_ab5219b2806476cfcc2441008625115d579cf743e381ab059ded0b1e28af8119_prof);

        
        $__internal_18efdfd4da4b9b3ff07c8603daec210ca1278594921d874ff4f714c1927f4ca6->leave($__internal_18efdfd4da4b9b3ff07c8603daec210ca1278594921d874ff4f714c1927f4ca6_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_bfb303553493d23e4781602d065a91e5d16131f8b6619169c6bf97af9913c509 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfb303553493d23e4781602d065a91e5d16131f8b6619169c6bf97af9913c509->enter($__internal_bfb303553493d23e4781602d065a91e5d16131f8b6619169c6bf97af9913c509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_877b4d2e880043fbef3a2721f071103d1d80ce7b65a9c975fa2bdfde16c0a317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_877b4d2e880043fbef3a2721f071103d1d80ce7b65a9c975fa2bdfde16c0a317->enter($__internal_877b4d2e880043fbef3a2721f071103d1d80ce7b65a9c975fa2bdfde16c0a317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_877b4d2e880043fbef3a2721f071103d1d80ce7b65a9c975fa2bdfde16c0a317->leave($__internal_877b4d2e880043fbef3a2721f071103d1d80ce7b65a9c975fa2bdfde16c0a317_prof);

        
        $__internal_bfb303553493d23e4781602d065a91e5d16131f8b6619169c6bf97af9913c509->leave($__internal_bfb303553493d23e4781602d065a91e5d16131f8b6619169c6bf97af9913c509_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_bb3baf7e731769745194fdc3177c8d85059d1d122ff795524c9b7de581a7dba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb3baf7e731769745194fdc3177c8d85059d1d122ff795524c9b7de581a7dba9->enter($__internal_bb3baf7e731769745194fdc3177c8d85059d1d122ff795524c9b7de581a7dba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_8dc2917256608c9b31a11e380439ceec2ee0882f4a279f634207ac900a10c617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc2917256608c9b31a11e380439ceec2ee0882f4a279f634207ac900a10c617->enter($__internal_8dc2917256608c9b31a11e380439ceec2ee0882f4a279f634207ac900a10c617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_8dc2917256608c9b31a11e380439ceec2ee0882f4a279f634207ac900a10c617->leave($__internal_8dc2917256608c9b31a11e380439ceec2ee0882f4a279f634207ac900a10c617_prof);

        
        $__internal_bb3baf7e731769745194fdc3177c8d85059d1d122ff795524c9b7de581a7dba9->leave($__internal_bb3baf7e731769745194fdc3177c8d85059d1d122ff795524c9b7de581a7dba9_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_6802ea35d17891db64197603390526ab37f20197e7e2a7dfba9b4bf48b754a16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6802ea35d17891db64197603390526ab37f20197e7e2a7dfba9b4bf48b754a16->enter($__internal_6802ea35d17891db64197603390526ab37f20197e7e2a7dfba9b4bf48b754a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_409d62a5fb1d4bd4fa681fa48f26f20032c01c358881ce9f5756c8fec9c7b03d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_409d62a5fb1d4bd4fa681fa48f26f20032c01c358881ce9f5756c8fec9c7b03d->enter($__internal_409d62a5fb1d4bd4fa681fa48f26f20032c01c358881ce9f5756c8fec9c7b03d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_409d62a5fb1d4bd4fa681fa48f26f20032c01c358881ce9f5756c8fec9c7b03d->leave($__internal_409d62a5fb1d4bd4fa681fa48f26f20032c01c358881ce9f5756c8fec9c7b03d_prof);

        
        $__internal_6802ea35d17891db64197603390526ab37f20197e7e2a7dfba9b4bf48b754a16->leave($__internal_6802ea35d17891db64197603390526ab37f20197e7e2a7dfba9b4bf48b754a16_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_f44c1f51c2c66b73985c23711172144be5d9836aef55b3f8f86988ebd90fb67f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f44c1f51c2c66b73985c23711172144be5d9836aef55b3f8f86988ebd90fb67f->enter($__internal_f44c1f51c2c66b73985c23711172144be5d9836aef55b3f8f86988ebd90fb67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_7da0b098bc80ac315f9fb7ad18536e705e9dd3e1b3ebae748c9c899be8a13697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7da0b098bc80ac315f9fb7ad18536e705e9dd3e1b3ebae748c9c899be8a13697->enter($__internal_7da0b098bc80ac315f9fb7ad18536e705e9dd3e1b3ebae748c9c899be8a13697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

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
        
        $__internal_7da0b098bc80ac315f9fb7ad18536e705e9dd3e1b3ebae748c9c899be8a13697->leave($__internal_7da0b098bc80ac315f9fb7ad18536e705e9dd3e1b3ebae748c9c899be8a13697_prof);

        
        $__internal_f44c1f51c2c66b73985c23711172144be5d9836aef55b3f8f86988ebd90fb67f->leave($__internal_f44c1f51c2c66b73985c23711172144be5d9836aef55b3f8f86988ebd90fb67f_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_32df5eb63e5ff74b7ae96d1d32e2d20d4c56bcb8b4d8e88297ba24798720d327 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32df5eb63e5ff74b7ae96d1d32e2d20d4c56bcb8b4d8e88297ba24798720d327->enter($__internal_32df5eb63e5ff74b7ae96d1d32e2d20d4c56bcb8b4d8e88297ba24798720d327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_69e30ee2ef095ff61bf958b693f9d09f9cad1046efc51b3cad98cad88b1c1f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e30ee2ef095ff61bf958b693f9d09f9cad1046efc51b3cad98cad88b1c1f1e->enter($__internal_69e30ee2ef095ff61bf958b693f9d09f9cad1046efc51b3cad98cad88b1c1f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_69e30ee2ef095ff61bf958b693f9d09f9cad1046efc51b3cad98cad88b1c1f1e->leave($__internal_69e30ee2ef095ff61bf958b693f9d09f9cad1046efc51b3cad98cad88b1c1f1e_prof);

        
        $__internal_32df5eb63e5ff74b7ae96d1d32e2d20d4c56bcb8b4d8e88297ba24798720d327->leave($__internal_32df5eb63e5ff74b7ae96d1d32e2d20d4c56bcb8b4d8e88297ba24798720d327_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_90d753cf3479eb45f89d5fe16543ff9873c4b50c30a155016072e0b379232612 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90d753cf3479eb45f89d5fe16543ff9873c4b50c30a155016072e0b379232612->enter($__internal_90d753cf3479eb45f89d5fe16543ff9873c4b50c30a155016072e0b379232612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_39c0864d4b2a50e528f529aad4d74ed600019ae82f4ba500a42548451e177056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39c0864d4b2a50e528f529aad4d74ed600019ae82f4ba500a42548451e177056->enter($__internal_39c0864d4b2a50e528f529aad4d74ed600019ae82f4ba500a42548451e177056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_39c0864d4b2a50e528f529aad4d74ed600019ae82f4ba500a42548451e177056->leave($__internal_39c0864d4b2a50e528f529aad4d74ed600019ae82f4ba500a42548451e177056_prof);

        
        $__internal_90d753cf3479eb45f89d5fe16543ff9873c4b50c30a155016072e0b379232612->leave($__internal_90d753cf3479eb45f89d5fe16543ff9873c4b50c30a155016072e0b379232612_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_3fb9eae3cc2c4e77ff0d0232eb64d124bd0b422c0098bce479d1d97d8b05dc44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fb9eae3cc2c4e77ff0d0232eb64d124bd0b422c0098bce479d1d97d8b05dc44->enter($__internal_3fb9eae3cc2c4e77ff0d0232eb64d124bd0b422c0098bce479d1d97d8b05dc44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_7e150ff1d26015edb7d58dc092b528cf89f40a3b18ad2641043d457201a61a88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e150ff1d26015edb7d58dc092b528cf89f40a3b18ad2641043d457201a61a88->enter($__internal_7e150ff1d26015edb7d58dc092b528cf89f40a3b18ad2641043d457201a61a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_7e150ff1d26015edb7d58dc092b528cf89f40a3b18ad2641043d457201a61a88->leave($__internal_7e150ff1d26015edb7d58dc092b528cf89f40a3b18ad2641043d457201a61a88_prof);

        
        $__internal_3fb9eae3cc2c4e77ff0d0232eb64d124bd0b422c0098bce479d1d97d8b05dc44->leave($__internal_3fb9eae3cc2c4e77ff0d0232eb64d124bd0b422c0098bce479d1d97d8b05dc44_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_3b919a622d70c62e261ae3a289b0df86dc77140907710c49073ce53449c25475 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b919a622d70c62e261ae3a289b0df86dc77140907710c49073ce53449c25475->enter($__internal_3b919a622d70c62e261ae3a289b0df86dc77140907710c49073ce53449c25475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_aed69d1e7baf5a75da6b4dbaed472f4e02f4346f4d97bdb27fe50cc372035f0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aed69d1e7baf5a75da6b4dbaed472f4e02f4346f4d97bdb27fe50cc372035f0b->enter($__internal_aed69d1e7baf5a75da6b4dbaed472f4e02f4346f4d97bdb27fe50cc372035f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_aed69d1e7baf5a75da6b4dbaed472f4e02f4346f4d97bdb27fe50cc372035f0b->leave($__internal_aed69d1e7baf5a75da6b4dbaed472f4e02f4346f4d97bdb27fe50cc372035f0b_prof);

        
        $__internal_3b919a622d70c62e261ae3a289b0df86dc77140907710c49073ce53449c25475->leave($__internal_3b919a622d70c62e261ae3a289b0df86dc77140907710c49073ce53449c25475_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_5afd44ef584ae578bf13898f8fbac0cf27c2da22998ddaf711e7ab7ca914e329 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5afd44ef584ae578bf13898f8fbac0cf27c2da22998ddaf711e7ab7ca914e329->enter($__internal_5afd44ef584ae578bf13898f8fbac0cf27c2da22998ddaf711e7ab7ca914e329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_2463833d3bf63bbd61cfe252bac455f85caf883d56c452be7b8804c80d1b91e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2463833d3bf63bbd61cfe252bac455f85caf883d56c452be7b8804c80d1b91e8->enter($__internal_2463833d3bf63bbd61cfe252bac455f85caf883d56c452be7b8804c80d1b91e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2463833d3bf63bbd61cfe252bac455f85caf883d56c452be7b8804c80d1b91e8->leave($__internal_2463833d3bf63bbd61cfe252bac455f85caf883d56c452be7b8804c80d1b91e8_prof);

        
        $__internal_5afd44ef584ae578bf13898f8fbac0cf27c2da22998ddaf711e7ab7ca914e329->leave($__internal_5afd44ef584ae578bf13898f8fbac0cf27c2da22998ddaf711e7ab7ca914e329_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_c15eb2407d1fd13f871d83a2dcdee5d09122e8b748b0267a7e061cf2a7b5d791 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c15eb2407d1fd13f871d83a2dcdee5d09122e8b748b0267a7e061cf2a7b5d791->enter($__internal_c15eb2407d1fd13f871d83a2dcdee5d09122e8b748b0267a7e061cf2a7b5d791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_8141353bc285a68a092850c6a1ed05482af9e14d7a875ccfb358674c1535a1e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8141353bc285a68a092850c6a1ed05482af9e14d7a875ccfb358674c1535a1e9->enter($__internal_8141353bc285a68a092850c6a1ed05482af9e14d7a875ccfb358674c1535a1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8141353bc285a68a092850c6a1ed05482af9e14d7a875ccfb358674c1535a1e9->leave($__internal_8141353bc285a68a092850c6a1ed05482af9e14d7a875ccfb358674c1535a1e9_prof);

        
        $__internal_c15eb2407d1fd13f871d83a2dcdee5d09122e8b748b0267a7e061cf2a7b5d791->leave($__internal_c15eb2407d1fd13f871d83a2dcdee5d09122e8b748b0267a7e061cf2a7b5d791_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_e51a3658696b0d68526b9bde7034375fbf10f21588ee11c6aab737b7fa557bf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e51a3658696b0d68526b9bde7034375fbf10f21588ee11c6aab737b7fa557bf5->enter($__internal_e51a3658696b0d68526b9bde7034375fbf10f21588ee11c6aab737b7fa557bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_40f38f09363a5cc89ddb651c5d05ab2bfe9b7baff68255b793fae50d57420e45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40f38f09363a5cc89ddb651c5d05ab2bfe9b7baff68255b793fae50d57420e45->enter($__internal_40f38f09363a5cc89ddb651c5d05ab2bfe9b7baff68255b793fae50d57420e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_40f38f09363a5cc89ddb651c5d05ab2bfe9b7baff68255b793fae50d57420e45->leave($__internal_40f38f09363a5cc89ddb651c5d05ab2bfe9b7baff68255b793fae50d57420e45_prof);

        
        $__internal_e51a3658696b0d68526b9bde7034375fbf10f21588ee11c6aab737b7fa557bf5->leave($__internal_e51a3658696b0d68526b9bde7034375fbf10f21588ee11c6aab737b7fa557bf5_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_fa0419a26d588c80a849e63210e11b87be56caf9d10e22079c8ebcc4bad77b96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa0419a26d588c80a849e63210e11b87be56caf9d10e22079c8ebcc4bad77b96->enter($__internal_fa0419a26d588c80a849e63210e11b87be56caf9d10e22079c8ebcc4bad77b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_2d3bdacd886aff4d64555f8e67817ef68249c575ed5dd026ae8796c4df1dfbff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d3bdacd886aff4d64555f8e67817ef68249c575ed5dd026ae8796c4df1dfbff->enter($__internal_2d3bdacd886aff4d64555f8e67817ef68249c575ed5dd026ae8796c4df1dfbff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2d3bdacd886aff4d64555f8e67817ef68249c575ed5dd026ae8796c4df1dfbff->leave($__internal_2d3bdacd886aff4d64555f8e67817ef68249c575ed5dd026ae8796c4df1dfbff_prof);

        
        $__internal_fa0419a26d588c80a849e63210e11b87be56caf9d10e22079c8ebcc4bad77b96->leave($__internal_fa0419a26d588c80a849e63210e11b87be56caf9d10e22079c8ebcc4bad77b96_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_c177525e269c4e93a783c70b1e3ae3edb7e947dd14b381e4a731fd2d483de41e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c177525e269c4e93a783c70b1e3ae3edb7e947dd14b381e4a731fd2d483de41e->enter($__internal_c177525e269c4e93a783c70b1e3ae3edb7e947dd14b381e4a731fd2d483de41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_ff2e620c121f7fc638b17ea84b5b1adde0058530f4e98c04eba9ba5c52de6b38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff2e620c121f7fc638b17ea84b5b1adde0058530f4e98c04eba9ba5c52de6b38->enter($__internal_ff2e620c121f7fc638b17ea84b5b1adde0058530f4e98c04eba9ba5c52de6b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_ff2e620c121f7fc638b17ea84b5b1adde0058530f4e98c04eba9ba5c52de6b38->leave($__internal_ff2e620c121f7fc638b17ea84b5b1adde0058530f4e98c04eba9ba5c52de6b38_prof);

        
        $__internal_c177525e269c4e93a783c70b1e3ae3edb7e947dd14b381e4a731fd2d483de41e->leave($__internal_c177525e269c4e93a783c70b1e3ae3edb7e947dd14b381e4a731fd2d483de41e_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_c78a1b14224f0f71cce395414bd08a2f45c49f62187dbc9b048cbefcf58d9310 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c78a1b14224f0f71cce395414bd08a2f45c49f62187dbc9b048cbefcf58d9310->enter($__internal_c78a1b14224f0f71cce395414bd08a2f45c49f62187dbc9b048cbefcf58d9310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_999bd68f8f72e9f93ed777bc2bda53ffde90d698ed90512552a5fd5b75e1087c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_999bd68f8f72e9f93ed777bc2bda53ffde90d698ed90512552a5fd5b75e1087c->enter($__internal_999bd68f8f72e9f93ed777bc2bda53ffde90d698ed90512552a5fd5b75e1087c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_999bd68f8f72e9f93ed777bc2bda53ffde90d698ed90512552a5fd5b75e1087c->leave($__internal_999bd68f8f72e9f93ed777bc2bda53ffde90d698ed90512552a5fd5b75e1087c_prof);

        
        $__internal_c78a1b14224f0f71cce395414bd08a2f45c49f62187dbc9b048cbefcf58d9310->leave($__internal_c78a1b14224f0f71cce395414bd08a2f45c49f62187dbc9b048cbefcf58d9310_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_417748b33bd5110b2e10049146888591253eb7e621798c6df309cbd80cc95baf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_417748b33bd5110b2e10049146888591253eb7e621798c6df309cbd80cc95baf->enter($__internal_417748b33bd5110b2e10049146888591253eb7e621798c6df309cbd80cc95baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_aede2ef19eb9518150df9fc29a2e6c94bd94376619ba75b41f44d998d5fc45ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aede2ef19eb9518150df9fc29a2e6c94bd94376619ba75b41f44d998d5fc45ae->enter($__internal_aede2ef19eb9518150df9fc29a2e6c94bd94376619ba75b41f44d998d5fc45ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_aede2ef19eb9518150df9fc29a2e6c94bd94376619ba75b41f44d998d5fc45ae->leave($__internal_aede2ef19eb9518150df9fc29a2e6c94bd94376619ba75b41f44d998d5fc45ae_prof);

        
        $__internal_417748b33bd5110b2e10049146888591253eb7e621798c6df309cbd80cc95baf->leave($__internal_417748b33bd5110b2e10049146888591253eb7e621798c6df309cbd80cc95baf_prof);

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
