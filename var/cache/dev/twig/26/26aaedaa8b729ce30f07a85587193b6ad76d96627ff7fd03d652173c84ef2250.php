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
        $__internal_879472d15e0193bc714ab011f61ad86cbc47d4f530b359cd46c17df2406d3022 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_879472d15e0193bc714ab011f61ad86cbc47d4f530b359cd46c17df2406d3022->enter($__internal_879472d15e0193bc714ab011f61ad86cbc47d4f530b359cd46c17df2406d3022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_ffbf799f5bdd5a77f18255406fcca9d3483754df6480623c8ad8e60729668238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffbf799f5bdd5a77f18255406fcca9d3483754df6480623c8ad8e60729668238->enter($__internal_ffbf799f5bdd5a77f18255406fcca9d3483754df6480623c8ad8e60729668238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_879472d15e0193bc714ab011f61ad86cbc47d4f530b359cd46c17df2406d3022->leave($__internal_879472d15e0193bc714ab011f61ad86cbc47d4f530b359cd46c17df2406d3022_prof);

        
        $__internal_ffbf799f5bdd5a77f18255406fcca9d3483754df6480623c8ad8e60729668238->leave($__internal_ffbf799f5bdd5a77f18255406fcca9d3483754df6480623c8ad8e60729668238_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_ee78ea8c1a59b4f6f00d5d133544a92a50446b58484e68cb276496c12bec202b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee78ea8c1a59b4f6f00d5d133544a92a50446b58484e68cb276496c12bec202b->enter($__internal_ee78ea8c1a59b4f6f00d5d133544a92a50446b58484e68cb276496c12bec202b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_eb8bbc70205b67f20cfafd67d815fa3c6224b55d85961c363f676dd1a41fb1be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb8bbc70205b67f20cfafd67d815fa3c6224b55d85961c363f676dd1a41fb1be->enter($__internal_eb8bbc70205b67f20cfafd67d815fa3c6224b55d85961c363f676dd1a41fb1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_eb8bbc70205b67f20cfafd67d815fa3c6224b55d85961c363f676dd1a41fb1be->leave($__internal_eb8bbc70205b67f20cfafd67d815fa3c6224b55d85961c363f676dd1a41fb1be_prof);

        
        $__internal_ee78ea8c1a59b4f6f00d5d133544a92a50446b58484e68cb276496c12bec202b->leave($__internal_ee78ea8c1a59b4f6f00d5d133544a92a50446b58484e68cb276496c12bec202b_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_f7148b4e137f6bb7c11b69c96c5e1ea56bdc48112096f3398a31769271f5e958 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7148b4e137f6bb7c11b69c96c5e1ea56bdc48112096f3398a31769271f5e958->enter($__internal_f7148b4e137f6bb7c11b69c96c5e1ea56bdc48112096f3398a31769271f5e958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_b482d8c94dc8a9e6b9592995983c67b11c4a6891d3af77ce7b97389f6db6b449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b482d8c94dc8a9e6b9592995983c67b11c4a6891d3af77ce7b97389f6db6b449->enter($__internal_b482d8c94dc8a9e6b9592995983c67b11c4a6891d3af77ce7b97389f6db6b449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_b482d8c94dc8a9e6b9592995983c67b11c4a6891d3af77ce7b97389f6db6b449->leave($__internal_b482d8c94dc8a9e6b9592995983c67b11c4a6891d3af77ce7b97389f6db6b449_prof);

        
        $__internal_f7148b4e137f6bb7c11b69c96c5e1ea56bdc48112096f3398a31769271f5e958->leave($__internal_f7148b4e137f6bb7c11b69c96c5e1ea56bdc48112096f3398a31769271f5e958_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_a78a5d460767cb78f18ff18eb66c8dca6e0afef872922521e4cbc8da4e0eeb98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a78a5d460767cb78f18ff18eb66c8dca6e0afef872922521e4cbc8da4e0eeb98->enter($__internal_a78a5d460767cb78f18ff18eb66c8dca6e0afef872922521e4cbc8da4e0eeb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_8836128d48139953f18e216f06d170a8a9216818868b2244a7911eec182b94c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8836128d48139953f18e216f06d170a8a9216818868b2244a7911eec182b94c1->enter($__internal_8836128d48139953f18e216f06d170a8a9216818868b2244a7911eec182b94c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_8836128d48139953f18e216f06d170a8a9216818868b2244a7911eec182b94c1->leave($__internal_8836128d48139953f18e216f06d170a8a9216818868b2244a7911eec182b94c1_prof);

        
        $__internal_a78a5d460767cb78f18ff18eb66c8dca6e0afef872922521e4cbc8da4e0eeb98->leave($__internal_a78a5d460767cb78f18ff18eb66c8dca6e0afef872922521e4cbc8da4e0eeb98_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_c26b30b46c66e2a6f79218e658869476fa6543ec8de06a118bcc03ed1fc5f06f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c26b30b46c66e2a6f79218e658869476fa6543ec8de06a118bcc03ed1fc5f06f->enter($__internal_c26b30b46c66e2a6f79218e658869476fa6543ec8de06a118bcc03ed1fc5f06f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_238ddb4d98137cc7d2af8ab79eab9c09905c4ebc91fc7b9e527c4360d477de33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_238ddb4d98137cc7d2af8ab79eab9c09905c4ebc91fc7b9e527c4360d477de33->enter($__internal_238ddb4d98137cc7d2af8ab79eab9c09905c4ebc91fc7b9e527c4360d477de33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

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
        
        $__internal_238ddb4d98137cc7d2af8ab79eab9c09905c4ebc91fc7b9e527c4360d477de33->leave($__internal_238ddb4d98137cc7d2af8ab79eab9c09905c4ebc91fc7b9e527c4360d477de33_prof);

        
        $__internal_c26b30b46c66e2a6f79218e658869476fa6543ec8de06a118bcc03ed1fc5f06f->leave($__internal_c26b30b46c66e2a6f79218e658869476fa6543ec8de06a118bcc03ed1fc5f06f_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_a1f8a5743fee42f2a5261b1465ca10d693271133dd0b5fd0929eee322e25a49d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1f8a5743fee42f2a5261b1465ca10d693271133dd0b5fd0929eee322e25a49d->enter($__internal_a1f8a5743fee42f2a5261b1465ca10d693271133dd0b5fd0929eee322e25a49d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_0b03e4c2c6067728d7c334d6ebee9a151c85524e7d0c69ca2688b2dd5304bf3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b03e4c2c6067728d7c334d6ebee9a151c85524e7d0c69ca2688b2dd5304bf3c->enter($__internal_0b03e4c2c6067728d7c334d6ebee9a151c85524e7d0c69ca2688b2dd5304bf3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

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
        
        $__internal_0b03e4c2c6067728d7c334d6ebee9a151c85524e7d0c69ca2688b2dd5304bf3c->leave($__internal_0b03e4c2c6067728d7c334d6ebee9a151c85524e7d0c69ca2688b2dd5304bf3c_prof);

        
        $__internal_a1f8a5743fee42f2a5261b1465ca10d693271133dd0b5fd0929eee322e25a49d->leave($__internal_a1f8a5743fee42f2a5261b1465ca10d693271133dd0b5fd0929eee322e25a49d_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_47c115cc0549e165626ffc94a812922b0a3e569f79378c5c3f99cbbd0a1e167a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47c115cc0549e165626ffc94a812922b0a3e569f79378c5c3f99cbbd0a1e167a->enter($__internal_47c115cc0549e165626ffc94a812922b0a3e569f79378c5c3f99cbbd0a1e167a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_3fc067522951aee3d4645462b7f6aeadb5c2472180bcaa125b643f3f04378f50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fc067522951aee3d4645462b7f6aeadb5c2472180bcaa125b643f3f04378f50->enter($__internal_3fc067522951aee3d4645462b7f6aeadb5c2472180bcaa125b643f3f04378f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_3fc067522951aee3d4645462b7f6aeadb5c2472180bcaa125b643f3f04378f50->leave($__internal_3fc067522951aee3d4645462b7f6aeadb5c2472180bcaa125b643f3f04378f50_prof);

        
        $__internal_47c115cc0549e165626ffc94a812922b0a3e569f79378c5c3f99cbbd0a1e167a->leave($__internal_47c115cc0549e165626ffc94a812922b0a3e569f79378c5c3f99cbbd0a1e167a_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_2bd6459fa732455f9c3d5665f52e884f982c97d45cf826b9f1a444b7b978e10a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bd6459fa732455f9c3d5665f52e884f982c97d45cf826b9f1a444b7b978e10a->enter($__internal_2bd6459fa732455f9c3d5665f52e884f982c97d45cf826b9f1a444b7b978e10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_497a548a502f4f3df9e8419244b0bf5436eef4294cf11f10fd5cca931919fb95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_497a548a502f4f3df9e8419244b0bf5436eef4294cf11f10fd5cca931919fb95->enter($__internal_497a548a502f4f3df9e8419244b0bf5436eef4294cf11f10fd5cca931919fb95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_497a548a502f4f3df9e8419244b0bf5436eef4294cf11f10fd5cca931919fb95->leave($__internal_497a548a502f4f3df9e8419244b0bf5436eef4294cf11f10fd5cca931919fb95_prof);

        
        $__internal_2bd6459fa732455f9c3d5665f52e884f982c97d45cf826b9f1a444b7b978e10a->leave($__internal_2bd6459fa732455f9c3d5665f52e884f982c97d45cf826b9f1a444b7b978e10a_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_7b4d4430955b3bd751e13a1e4f2f235734fbc5460826fcbbb9a693be27553a5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b4d4430955b3bd751e13a1e4f2f235734fbc5460826fcbbb9a693be27553a5c->enter($__internal_7b4d4430955b3bd751e13a1e4f2f235734fbc5460826fcbbb9a693be27553a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_99d0243f6d7d2a9006e077529dbaaf5dcc14bb39aa5660c892bb0e78861222bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99d0243f6d7d2a9006e077529dbaaf5dcc14bb39aa5660c892bb0e78861222bc->enter($__internal_99d0243f6d7d2a9006e077529dbaaf5dcc14bb39aa5660c892bb0e78861222bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_99d0243f6d7d2a9006e077529dbaaf5dcc14bb39aa5660c892bb0e78861222bc->leave($__internal_99d0243f6d7d2a9006e077529dbaaf5dcc14bb39aa5660c892bb0e78861222bc_prof);

        
        $__internal_7b4d4430955b3bd751e13a1e4f2f235734fbc5460826fcbbb9a693be27553a5c->leave($__internal_7b4d4430955b3bd751e13a1e4f2f235734fbc5460826fcbbb9a693be27553a5c_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_d4aaf2f749b80b4d3d128890fcf873605f153cb1c4ba99ff3b41a5f7312c74fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4aaf2f749b80b4d3d128890fcf873605f153cb1c4ba99ff3b41a5f7312c74fb->enter($__internal_d4aaf2f749b80b4d3d128890fcf873605f153cb1c4ba99ff3b41a5f7312c74fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_952b92b1d3c693de3b1dc1ef6ffaf076af459d9a98c80cb0244b682fa3590e17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_952b92b1d3c693de3b1dc1ef6ffaf076af459d9a98c80cb0244b682fa3590e17->enter($__internal_952b92b1d3c693de3b1dc1ef6ffaf076af459d9a98c80cb0244b682fa3590e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_952b92b1d3c693de3b1dc1ef6ffaf076af459d9a98c80cb0244b682fa3590e17->leave($__internal_952b92b1d3c693de3b1dc1ef6ffaf076af459d9a98c80cb0244b682fa3590e17_prof);

        
        $__internal_d4aaf2f749b80b4d3d128890fcf873605f153cb1c4ba99ff3b41a5f7312c74fb->leave($__internal_d4aaf2f749b80b4d3d128890fcf873605f153cb1c4ba99ff3b41a5f7312c74fb_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_51bc2f0416d74ef6c3dc9cc14b039d5353d8771ecc43303e67b5e10225ec6bd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51bc2f0416d74ef6c3dc9cc14b039d5353d8771ecc43303e67b5e10225ec6bd3->enter($__internal_51bc2f0416d74ef6c3dc9cc14b039d5353d8771ecc43303e67b5e10225ec6bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_4e49fb246689bf646f9b42e94b29c37812e1c0f3529fdc2d1233b268e03df717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e49fb246689bf646f9b42e94b29c37812e1c0f3529fdc2d1233b268e03df717->enter($__internal_4e49fb246689bf646f9b42e94b29c37812e1c0f3529fdc2d1233b268e03df717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_4e49fb246689bf646f9b42e94b29c37812e1c0f3529fdc2d1233b268e03df717->leave($__internal_4e49fb246689bf646f9b42e94b29c37812e1c0f3529fdc2d1233b268e03df717_prof);

        
        $__internal_51bc2f0416d74ef6c3dc9cc14b039d5353d8771ecc43303e67b5e10225ec6bd3->leave($__internal_51bc2f0416d74ef6c3dc9cc14b039d5353d8771ecc43303e67b5e10225ec6bd3_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_b385686c0be0b6b206e19d7112fc835820349c621ff622ffd0d08bb51eef3593 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b385686c0be0b6b206e19d7112fc835820349c621ff622ffd0d08bb51eef3593->enter($__internal_b385686c0be0b6b206e19d7112fc835820349c621ff622ffd0d08bb51eef3593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_03279e135fdb240c17f2470fff13a17b185629da2f649f507294753d54ff0d54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03279e135fdb240c17f2470fff13a17b185629da2f649f507294753d54ff0d54->enter($__internal_03279e135fdb240c17f2470fff13a17b185629da2f649f507294753d54ff0d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_03279e135fdb240c17f2470fff13a17b185629da2f649f507294753d54ff0d54->leave($__internal_03279e135fdb240c17f2470fff13a17b185629da2f649f507294753d54ff0d54_prof);

        
        $__internal_b385686c0be0b6b206e19d7112fc835820349c621ff622ffd0d08bb51eef3593->leave($__internal_b385686c0be0b6b206e19d7112fc835820349c621ff622ffd0d08bb51eef3593_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_e57083c297dd9c88f2f78cbde37ebb07f556927872fec9e004f2ed910d2fee17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e57083c297dd9c88f2f78cbde37ebb07f556927872fec9e004f2ed910d2fee17->enter($__internal_e57083c297dd9c88f2f78cbde37ebb07f556927872fec9e004f2ed910d2fee17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_a203d181bc1ba54bd698fd9fb669e33098ea81671b8cfa4d611005587ad02ee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a203d181bc1ba54bd698fd9fb669e33098ea81671b8cfa4d611005587ad02ee7->enter($__internal_a203d181bc1ba54bd698fd9fb669e33098ea81671b8cfa4d611005587ad02ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_a203d181bc1ba54bd698fd9fb669e33098ea81671b8cfa4d611005587ad02ee7->leave($__internal_a203d181bc1ba54bd698fd9fb669e33098ea81671b8cfa4d611005587ad02ee7_prof);

        
        $__internal_e57083c297dd9c88f2f78cbde37ebb07f556927872fec9e004f2ed910d2fee17->leave($__internal_e57083c297dd9c88f2f78cbde37ebb07f556927872fec9e004f2ed910d2fee17_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_575059f3965ae82e166b150fb22b7f806b7673362bf009fc427ce023e6b88435 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_575059f3965ae82e166b150fb22b7f806b7673362bf009fc427ce023e6b88435->enter($__internal_575059f3965ae82e166b150fb22b7f806b7673362bf009fc427ce023e6b88435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_1b2088123060b50a342e1634319bed1c358c42642d8e7b72f99aa83f6bad25ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b2088123060b50a342e1634319bed1c358c42642d8e7b72f99aa83f6bad25ae->enter($__internal_1b2088123060b50a342e1634319bed1c358c42642d8e7b72f99aa83f6bad25ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_1b2088123060b50a342e1634319bed1c358c42642d8e7b72f99aa83f6bad25ae->leave($__internal_1b2088123060b50a342e1634319bed1c358c42642d8e7b72f99aa83f6bad25ae_prof);

        
        $__internal_575059f3965ae82e166b150fb22b7f806b7673362bf009fc427ce023e6b88435->leave($__internal_575059f3965ae82e166b150fb22b7f806b7673362bf009fc427ce023e6b88435_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_2ea39ca907d5395fd2566f07d52e1ae35e822ae133d52162d086b3ed790e7fe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ea39ca907d5395fd2566f07d52e1ae35e822ae133d52162d086b3ed790e7fe5->enter($__internal_2ea39ca907d5395fd2566f07d52e1ae35e822ae133d52162d086b3ed790e7fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_2b9bc49428e23eddff90b3d7e17bbdc3f5c61c0cda6dc6f8d012942e13bd08e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b9bc49428e23eddff90b3d7e17bbdc3f5c61c0cda6dc6f8d012942e13bd08e1->enter($__internal_2b9bc49428e23eddff90b3d7e17bbdc3f5c61c0cda6dc6f8d012942e13bd08e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

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
        
        $__internal_2b9bc49428e23eddff90b3d7e17bbdc3f5c61c0cda6dc6f8d012942e13bd08e1->leave($__internal_2b9bc49428e23eddff90b3d7e17bbdc3f5c61c0cda6dc6f8d012942e13bd08e1_prof);

        
        $__internal_2ea39ca907d5395fd2566f07d52e1ae35e822ae133d52162d086b3ed790e7fe5->leave($__internal_2ea39ca907d5395fd2566f07d52e1ae35e822ae133d52162d086b3ed790e7fe5_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_8c91c26a6fa1c199a24cce8239be37574c1e133c2e003518b92f2092d4266552 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c91c26a6fa1c199a24cce8239be37574c1e133c2e003518b92f2092d4266552->enter($__internal_8c91c26a6fa1c199a24cce8239be37574c1e133c2e003518b92f2092d4266552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_38d5e2654fe6675a5d1c1d0d4931730fd04a89a3e9501ac52c9fc13805a61c26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38d5e2654fe6675a5d1c1d0d4931730fd04a89a3e9501ac52c9fc13805a61c26->enter($__internal_38d5e2654fe6675a5d1c1d0d4931730fd04a89a3e9501ac52c9fc13805a61c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_38d5e2654fe6675a5d1c1d0d4931730fd04a89a3e9501ac52c9fc13805a61c26->leave($__internal_38d5e2654fe6675a5d1c1d0d4931730fd04a89a3e9501ac52c9fc13805a61c26_prof);

        
        $__internal_8c91c26a6fa1c199a24cce8239be37574c1e133c2e003518b92f2092d4266552->leave($__internal_8c91c26a6fa1c199a24cce8239be37574c1e133c2e003518b92f2092d4266552_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_93486ecb36e85accd045ea05da6e7828474c2a7774e806694c2471f8e7dc5d73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93486ecb36e85accd045ea05da6e7828474c2a7774e806694c2471f8e7dc5d73->enter($__internal_93486ecb36e85accd045ea05da6e7828474c2a7774e806694c2471f8e7dc5d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_69f6ed52c768f9a090cdb87f2a5df2407c63985dd86e585370873129220e5541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69f6ed52c768f9a090cdb87f2a5df2407c63985dd86e585370873129220e5541->enter($__internal_69f6ed52c768f9a090cdb87f2a5df2407c63985dd86e585370873129220e5541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_69f6ed52c768f9a090cdb87f2a5df2407c63985dd86e585370873129220e5541->leave($__internal_69f6ed52c768f9a090cdb87f2a5df2407c63985dd86e585370873129220e5541_prof);

        
        $__internal_93486ecb36e85accd045ea05da6e7828474c2a7774e806694c2471f8e7dc5d73->leave($__internal_93486ecb36e85accd045ea05da6e7828474c2a7774e806694c2471f8e7dc5d73_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_a8a90fc52d8603c35062446e6cfe1f58d1aa9349a18648e96c535f8b9bc29604 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8a90fc52d8603c35062446e6cfe1f58d1aa9349a18648e96c535f8b9bc29604->enter($__internal_a8a90fc52d8603c35062446e6cfe1f58d1aa9349a18648e96c535f8b9bc29604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_e2fe049ff47de03b84b71afe590fd0b64c82a2485dd6272fbe179248e4f9a816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2fe049ff47de03b84b71afe590fd0b64c82a2485dd6272fbe179248e4f9a816->enter($__internal_e2fe049ff47de03b84b71afe590fd0b64c82a2485dd6272fbe179248e4f9a816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_e2fe049ff47de03b84b71afe590fd0b64c82a2485dd6272fbe179248e4f9a816->leave($__internal_e2fe049ff47de03b84b71afe590fd0b64c82a2485dd6272fbe179248e4f9a816_prof);

        
        $__internal_a8a90fc52d8603c35062446e6cfe1f58d1aa9349a18648e96c535f8b9bc29604->leave($__internal_a8a90fc52d8603c35062446e6cfe1f58d1aa9349a18648e96c535f8b9bc29604_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_b79fd05e7f5e73812d19a123096dd6d43c9d943da5487d26c872a3b95f61e8fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b79fd05e7f5e73812d19a123096dd6d43c9d943da5487d26c872a3b95f61e8fe->enter($__internal_b79fd05e7f5e73812d19a123096dd6d43c9d943da5487d26c872a3b95f61e8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_35acf8c76dfddf43ea197496b7262b73d7b656c09b78ed5756f5c0853af472d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35acf8c76dfddf43ea197496b7262b73d7b656c09b78ed5756f5c0853af472d9->enter($__internal_35acf8c76dfddf43ea197496b7262b73d7b656c09b78ed5756f5c0853af472d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_35acf8c76dfddf43ea197496b7262b73d7b656c09b78ed5756f5c0853af472d9->leave($__internal_35acf8c76dfddf43ea197496b7262b73d7b656c09b78ed5756f5c0853af472d9_prof);

        
        $__internal_b79fd05e7f5e73812d19a123096dd6d43c9d943da5487d26c872a3b95f61e8fe->leave($__internal_b79fd05e7f5e73812d19a123096dd6d43c9d943da5487d26c872a3b95f61e8fe_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_cc51cd9e62be06b753650bb6950fd70f11dd12d2b903124412142b858cdcfa36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc51cd9e62be06b753650bb6950fd70f11dd12d2b903124412142b858cdcfa36->enter($__internal_cc51cd9e62be06b753650bb6950fd70f11dd12d2b903124412142b858cdcfa36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_030cd02ef850f423d1a982e49d27a6b946a4b5921b21742c91c9e79bc3c37e5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_030cd02ef850f423d1a982e49d27a6b946a4b5921b21742c91c9e79bc3c37e5e->enter($__internal_030cd02ef850f423d1a982e49d27a6b946a4b5921b21742c91c9e79bc3c37e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_030cd02ef850f423d1a982e49d27a6b946a4b5921b21742c91c9e79bc3c37e5e->leave($__internal_030cd02ef850f423d1a982e49d27a6b946a4b5921b21742c91c9e79bc3c37e5e_prof);

        
        $__internal_cc51cd9e62be06b753650bb6950fd70f11dd12d2b903124412142b858cdcfa36->leave($__internal_cc51cd9e62be06b753650bb6950fd70f11dd12d2b903124412142b858cdcfa36_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_a65546505ba913d7a74a87482d0df8a20597fdd02437beea8f12b20b801413c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a65546505ba913d7a74a87482d0df8a20597fdd02437beea8f12b20b801413c4->enter($__internal_a65546505ba913d7a74a87482d0df8a20597fdd02437beea8f12b20b801413c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_06970b8256c3e33214e0470aa0c8e7a6cce46b629d86b6e983a56faae7f1bee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06970b8256c3e33214e0470aa0c8e7a6cce46b629d86b6e983a56faae7f1bee9->enter($__internal_06970b8256c3e33214e0470aa0c8e7a6cce46b629d86b6e983a56faae7f1bee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_06970b8256c3e33214e0470aa0c8e7a6cce46b629d86b6e983a56faae7f1bee9->leave($__internal_06970b8256c3e33214e0470aa0c8e7a6cce46b629d86b6e983a56faae7f1bee9_prof);

        
        $__internal_a65546505ba913d7a74a87482d0df8a20597fdd02437beea8f12b20b801413c4->leave($__internal_a65546505ba913d7a74a87482d0df8a20597fdd02437beea8f12b20b801413c4_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_6f840d3703cbe5ee1a01878cc4ce22ef85f16fcb5f25937fb1a584c62b4f886c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f840d3703cbe5ee1a01878cc4ce22ef85f16fcb5f25937fb1a584c62b4f886c->enter($__internal_6f840d3703cbe5ee1a01878cc4ce22ef85f16fcb5f25937fb1a584c62b4f886c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_357033be9b360fd267de1f543e0e6532f1ca6852ddda1bd220993c55eaf650b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_357033be9b360fd267de1f543e0e6532f1ca6852ddda1bd220993c55eaf650b0->enter($__internal_357033be9b360fd267de1f543e0e6532f1ca6852ddda1bd220993c55eaf650b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_357033be9b360fd267de1f543e0e6532f1ca6852ddda1bd220993c55eaf650b0->leave($__internal_357033be9b360fd267de1f543e0e6532f1ca6852ddda1bd220993c55eaf650b0_prof);

        
        $__internal_6f840d3703cbe5ee1a01878cc4ce22ef85f16fcb5f25937fb1a584c62b4f886c->leave($__internal_6f840d3703cbe5ee1a01878cc4ce22ef85f16fcb5f25937fb1a584c62b4f886c_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_a8b2552b9009b27052e75040a6478242ed7fa3a3331cdaca76dd4ad97dd44c6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8b2552b9009b27052e75040a6478242ed7fa3a3331cdaca76dd4ad97dd44c6e->enter($__internal_a8b2552b9009b27052e75040a6478242ed7fa3a3331cdaca76dd4ad97dd44c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_2067b1ca21689b2b66b7d6ff692ff43b5efb15ce0dd621d9274f95ffe8ad7aae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2067b1ca21689b2b66b7d6ff692ff43b5efb15ce0dd621d9274f95ffe8ad7aae->enter($__internal_2067b1ca21689b2b66b7d6ff692ff43b5efb15ce0dd621d9274f95ffe8ad7aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2067b1ca21689b2b66b7d6ff692ff43b5efb15ce0dd621d9274f95ffe8ad7aae->leave($__internal_2067b1ca21689b2b66b7d6ff692ff43b5efb15ce0dd621d9274f95ffe8ad7aae_prof);

        
        $__internal_a8b2552b9009b27052e75040a6478242ed7fa3a3331cdaca76dd4ad97dd44c6e->leave($__internal_a8b2552b9009b27052e75040a6478242ed7fa3a3331cdaca76dd4ad97dd44c6e_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_5a65eed17852f3824e696c6bcf482796eabe3f899ba4e701946a9f582b3aea57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a65eed17852f3824e696c6bcf482796eabe3f899ba4e701946a9f582b3aea57->enter($__internal_5a65eed17852f3824e696c6bcf482796eabe3f899ba4e701946a9f582b3aea57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_af0e63934f913902d1692af7236eb22b87d4ab356169e0366292fa70a6ed6534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af0e63934f913902d1692af7236eb22b87d4ab356169e0366292fa70a6ed6534->enter($__internal_af0e63934f913902d1692af7236eb22b87d4ab356169e0366292fa70a6ed6534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_af0e63934f913902d1692af7236eb22b87d4ab356169e0366292fa70a6ed6534->leave($__internal_af0e63934f913902d1692af7236eb22b87d4ab356169e0366292fa70a6ed6534_prof);

        
        $__internal_5a65eed17852f3824e696c6bcf482796eabe3f899ba4e701946a9f582b3aea57->leave($__internal_5a65eed17852f3824e696c6bcf482796eabe3f899ba4e701946a9f582b3aea57_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_c9c981b3bc56eea61a9f6adb17ff86aef2166c1ce9b354b7ab7763701a26e43a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9c981b3bc56eea61a9f6adb17ff86aef2166c1ce9b354b7ab7763701a26e43a->enter($__internal_c9c981b3bc56eea61a9f6adb17ff86aef2166c1ce9b354b7ab7763701a26e43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_0bebc38a30ad517553af7a30553324c7cf89fdefd5ee6809043660d5110517fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bebc38a30ad517553af7a30553324c7cf89fdefd5ee6809043660d5110517fb->enter($__internal_0bebc38a30ad517553af7a30553324c7cf89fdefd5ee6809043660d5110517fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_0bebc38a30ad517553af7a30553324c7cf89fdefd5ee6809043660d5110517fb->leave($__internal_0bebc38a30ad517553af7a30553324c7cf89fdefd5ee6809043660d5110517fb_prof);

        
        $__internal_c9c981b3bc56eea61a9f6adb17ff86aef2166c1ce9b354b7ab7763701a26e43a->leave($__internal_c9c981b3bc56eea61a9f6adb17ff86aef2166c1ce9b354b7ab7763701a26e43a_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_aca4d67ea569f015bc9f722ef6cdd54f6a181c0415c8ec978602e04bf7cafd06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aca4d67ea569f015bc9f722ef6cdd54f6a181c0415c8ec978602e04bf7cafd06->enter($__internal_aca4d67ea569f015bc9f722ef6cdd54f6a181c0415c8ec978602e04bf7cafd06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_3da1c2d37569ecdd5110080825f0b414e5c23c0cf0faa62ea1c6f47d03acd149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3da1c2d37569ecdd5110080825f0b414e5c23c0cf0faa62ea1c6f47d03acd149->enter($__internal_3da1c2d37569ecdd5110080825f0b414e5c23c0cf0faa62ea1c6f47d03acd149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_3da1c2d37569ecdd5110080825f0b414e5c23c0cf0faa62ea1c6f47d03acd149->leave($__internal_3da1c2d37569ecdd5110080825f0b414e5c23c0cf0faa62ea1c6f47d03acd149_prof);

        
        $__internal_aca4d67ea569f015bc9f722ef6cdd54f6a181c0415c8ec978602e04bf7cafd06->leave($__internal_aca4d67ea569f015bc9f722ef6cdd54f6a181c0415c8ec978602e04bf7cafd06_prof);

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
