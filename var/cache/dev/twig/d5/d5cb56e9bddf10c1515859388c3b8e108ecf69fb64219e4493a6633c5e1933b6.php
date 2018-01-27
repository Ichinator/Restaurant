<?php

/* EasyAdminBundle:default:show.html.twig */
class __TwigTemplate_df750097a754b979aacee1dbff2dbae577c4a40046ee836fae1771412d891ed2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'show_fields' => array($this, 'block_show_fields'),
            'show_field' => array($this, 'block_show_field'),
            'item_actions' => array($this, 'block_item_actions'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:show.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_364abb64e7f5d7796ed11cb5f5ec971a400bb7d36b8ade778e57dacde8c44402 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_364abb64e7f5d7796ed11cb5f5ec971a400bb7d36b8ade778e57dacde8c44402->enter($__internal_364abb64e7f5d7796ed11cb5f5ec971a400bb7d36b8ade778e57dacde8c44402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:show.html.twig"));

        $__internal_c43345055ed7fb23fd4ab274cb4f7163b6007c3c42d3008a9479218014105a8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c43345055ed7fb23fd4ab274cb4f7163b6007c3c42d3008a9479218014105a8d->enter($__internal_c43345055ed7fb23fd4ab274cb4f7163b6007c3c42d3008a9479218014105a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:show.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $context["_entity_id"] = ("" . $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array())));
        // line 4
        $context["__internal_360a172c3c519fc173753d332210cecc5f1a1d170ea3bad966537505ca835c70"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_360a172c3c519fc173753d332210cecc5f1a1d170ea3bad966537505ca835c70"] ?? $this->getContext($context, "__internal_360a172c3c519fc173753d332210cecc5f1a1d170ea3bad966537505ca835c70"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_360a172c3c519fc173753d332210cecc5f1a1d170ea3bad966537505ca835c70"] ?? $this->getContext($context, "__internal_360a172c3c519fc173753d332210cecc5f1a1d170ea3bad966537505ca835c70"))), "%entity_id%" =>         // line 5
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_364abb64e7f5d7796ed11cb5f5ec971a400bb7d36b8ade778e57dacde8c44402->leave($__internal_364abb64e7f5d7796ed11cb5f5ec971a400bb7d36b8ade778e57dacde8c44402_prof);

        
        $__internal_c43345055ed7fb23fd4ab274cb4f7163b6007c3c42d3008a9479218014105a8d->leave($__internal_c43345055ed7fb23fd4ab274cb4f7163b6007c3c42d3008a9479218014105a8d_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_385ca5fdcbfd8544594547b03a8c940e0df3b9cb4abffc3e3235750a962487bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_385ca5fdcbfd8544594547b03a8c940e0df3b9cb4abffc3e3235750a962487bb->enter($__internal_385ca5fdcbfd8544594547b03a8c940e0df3b9cb4abffc3e3235750a962487bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_d3642c67b12fd20060933774ffc5e963944337192ec475b4e5d78462133d4a11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3642c67b12fd20060933774ffc5e963944337192ec475b4e5d78462133d4a11->enter($__internal_d3642c67b12fd20060933774ffc5e963944337192ec475b4e5d78462133d4a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-show-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_d3642c67b12fd20060933774ffc5e963944337192ec475b4e5d78462133d4a11->leave($__internal_d3642c67b12fd20060933774ffc5e963944337192ec475b4e5d78462133d4a11_prof);

        
        $__internal_385ca5fdcbfd8544594547b03a8c940e0df3b9cb4abffc3e3235750a962487bb->leave($__internal_385ca5fdcbfd8544594547b03a8c940e0df3b9cb4abffc3e3235750a962487bb_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_bbb517bedb071cbbe858d2baf4ca63046408c715ce6425b17cabe795896a71fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbb517bedb071cbbe858d2baf4ca63046408c715ce6425b17cabe795896a71fe->enter($__internal_bbb517bedb071cbbe858d2baf4ca63046408c715ce6425b17cabe795896a71fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_d37a56235b935eb244f4ed8ecfb8f64fda37d6907a9213d8d32bf8c13c018feb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d37a56235b935eb244f4ed8ecfb8f64fda37d6907a9213d8d32bf8c13c018feb->enter($__internal_d37a56235b935eb244f4ed8ecfb8f64fda37d6907a9213d8d32bf8c13c018feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("show show-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_d37a56235b935eb244f4ed8ecfb8f64fda37d6907a9213d8d32bf8c13c018feb->leave($__internal_d37a56235b935eb244f4ed8ecfb8f64fda37d6907a9213d8d32bf8c13c018feb_prof);

        
        $__internal_bbb517bedb071cbbe858d2baf4ca63046408c715ce6425b17cabe795896a71fe->leave($__internal_bbb517bedb071cbbe858d2baf4ca63046408c715ce6425b17cabe795896a71fe_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_4e24bd59e34868188de8e142080faaed7f3ec812ae3ddf5e3e08d94a003aac6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e24bd59e34868188de8e142080faaed7f3ec812ae3ddf5e3e08d94a003aac6b->enter($__internal_4e24bd59e34868188de8e142080faaed7f3ec812ae3ddf5e3e08d94a003aac6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_5d6c5d16a7b52805e9b9e2eccea3f57d01e65404bc8b1fc4fce6004236122916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d6c5d16a7b52805e9b9e2eccea3f57d01e65404bc8b1fc4fce6004236122916->enter($__internal_5d6c5d16a7b52805e9b9e2eccea3f57d01e65404bc8b1fc4fce6004236122916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "show", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "show", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_360a172c3c519fc173753d332210cecc5f1a1d170ea3bad966537505ca835c70"] ?? $this->getContext($context, "__internal_360a172c3c519fc173753d332210cecc5f1a1d170ea3bad966537505ca835c70")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5d6c5d16a7b52805e9b9e2eccea3f57d01e65404bc8b1fc4fce6004236122916->leave($__internal_5d6c5d16a7b52805e9b9e2eccea3f57d01e65404bc8b1fc4fce6004236122916_prof);

        
        $__internal_4e24bd59e34868188de8e142080faaed7f3ec812ae3ddf5e3e08d94a003aac6b->leave($__internal_4e24bd59e34868188de8e142080faaed7f3ec812ae3ddf5e3e08d94a003aac6b_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_34ec8cf02955b7b9259d83ec6fc98ea3ba6e8e889a8559b01eb195bce7ba9ee2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34ec8cf02955b7b9259d83ec6fc98ea3ba6e8e889a8559b01eb195bce7ba9ee2->enter($__internal_34ec8cf02955b7b9259d83ec6fc98ea3ba6e8e889a8559b01eb195bce7ba9ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_ce00898944bc9b96f24a1624313944e72cdb9a0fce92dde545e43b9743996a6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce00898944bc9b96f24a1624313944e72cdb9a0fce92dde545e43b9743996a6c->enter($__internal_ce00898944bc9b96f24a1624313944e72cdb9a0fce92dde545e43b9743996a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    <div class=\"form-horizontal\">
        ";
        // line 21
        $this->displayBlock('show_fields', $context, $blocks);
        // line 41
        echo "
        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            ";
        // line 44
        $this->displayBlock('item_actions', $context, $blocks);
        // line 56
        echo "            </div>
        </div>
    </div>

    ";
        // line 60
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_ce00898944bc9b96f24a1624313944e72cdb9a0fce92dde545e43b9743996a6c->leave($__internal_ce00898944bc9b96f24a1624313944e72cdb9a0fce92dde545e43b9743996a6c_prof);

        
        $__internal_34ec8cf02955b7b9259d83ec6fc98ea3ba6e8e889a8559b01eb195bce7ba9ee2->leave($__internal_34ec8cf02955b7b9259d83ec6fc98ea3ba6e8e889a8559b01eb195bce7ba9ee2_prof);

    }

    // line 21
    public function block_show_fields($context, array $blocks = array())
    {
        $__internal_537f27b2f25cab6a031121c662965ed9315445a567b154fc72329c58f7327fac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_537f27b2f25cab6a031121c662965ed9315445a567b154fc72329c58f7327fac->enter($__internal_537f27b2f25cab6a031121c662965ed9315445a567b154fc72329c58f7327fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_fields"));

        $__internal_d2045048fab21e0e5421344ee76af07cb8dc0ef879b720b5b0b37b6e4e7a6494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2045048fab21e0e5421344ee76af07cb8dc0ef879b720b5b0b37b6e4e7a6494->enter($__internal_d2045048fab21e0e5421344ee76af07cb8dc0ef879b720b5b0b37b6e4e7a6494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_fields"));

        // line 22
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? $this->getContext($context, "fields")));
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
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 23
            echo "                ";
            $this->displayBlock('show_field', $context, $blocks);
            // line 39
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        ";
        
        $__internal_d2045048fab21e0e5421344ee76af07cb8dc0ef879b720b5b0b37b6e4e7a6494->leave($__internal_d2045048fab21e0e5421344ee76af07cb8dc0ef879b720b5b0b37b6e4e7a6494_prof);

        
        $__internal_537f27b2f25cab6a031121c662965ed9315445a567b154fc72329c58f7327fac->leave($__internal_537f27b2f25cab6a031121c662965ed9315445a567b154fc72329c58f7327fac_prof);

    }

    // line 23
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_af8b5d63717e56bd8785d62fd8a95da3fc131c64f4ee9c6509f75111fb46eed1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af8b5d63717e56bd8785d62fd8a95da3fc131c64f4ee9c6509f75111fb46eed1->enter($__internal_af8b5d63717e56bd8785d62fd8a95da3fc131c64f4ee9c6509f75111fb46eed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_6f30a4956525374ed29932f7cdc87c135572eda13b8667980193676482fda451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f30a4956525374ed29932f7cdc87c135572eda13b8667980193676482fda451->enter($__internal_6f30a4956525374ed29932f7cdc87c135572eda13b8667980193676482fda451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 24
        echo "                    <div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (($this->getAttribute(($context["metadata"] ?? null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["metadata"] ?? null), "type", array()), "default")) : ("default"))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["metadata"] ?? null), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["metadata"] ?? null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
                        <label class=\"col-sm-2 control-label\">
                            ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "label", array())) ? ($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "label", array())) : ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["field"] ?? $this->getContext($context, "field"))))), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_360a172c3c519fc173753d332210cecc5f1a1d170ea3bad966537505ca835c70"] ?? $this->getContext($context, "__internal_360a172c3c519fc173753d332210cecc5f1a1d170ea3bad966537505ca835c70")));
        // line 26
        echo "
                        </label>
                        <div class=\"col-sm-10\">
                            <div class=\"form-control\">
                                ";
        // line 30
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->renderEntityField($this->env, "show", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), ($context["entity"] ?? $this->getContext($context, "entity")), ($context["metadata"] ?? $this->getContext($context, "metadata")));
        echo "
                            </div>

                            ";
        // line 33
        if (((($this->getAttribute(($context["metadata"] ?? null), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["metadata"] ?? null), "help", array()), "")) : ("")) != "")) {
            // line 34
            echo "                                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "help", array()), array(),             // line 4
($context["__internal_360a172c3c519fc173753d332210cecc5f1a1d170ea3bad966537505ca835c70"] ?? $this->getContext($context, "__internal_360a172c3c519fc173753d332210cecc5f1a1d170ea3bad966537505ca835c70")));
            // line 34
            echo "</span>
                            ";
        }
        // line 36
        echo "                        </div>
                    </div>
                ";
        
        $__internal_6f30a4956525374ed29932f7cdc87c135572eda13b8667980193676482fda451->leave($__internal_6f30a4956525374ed29932f7cdc87c135572eda13b8667980193676482fda451_prof);

        
        $__internal_af8b5d63717e56bd8785d62fd8a95da3fc131c64f4ee9c6509f75111fb46eed1->leave($__internal_af8b5d63717e56bd8785d62fd8a95da3fc131c64f4ee9c6509f75111fb46eed1_prof);

    }

    // line 44
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_28370c2e1a06af0e001014762bcbe68b8a8a4d4762eb958b7b2ef5cb750033ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28370c2e1a06af0e001014762bcbe68b8a8a4d4762eb958b7b2ef5cb750033ba->enter($__internal_28370c2e1a06af0e001014762bcbe68b8a8a4d4762eb958b7b2ef5cb750033ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_2c1ba1d3fa6110fe10b01bcdcb02d9e24a7feed811efaa76f6d96fdf41f606d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c1ba1d3fa6110fe10b01bcdcb02d9e24a7feed811efaa76f6d96fdf41f606d3->enter($__internal_2c1ba1d3fa6110fe10b01bcdcb02d9e24a7feed811efaa76f6d96fdf41f606d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 45
        echo "                ";
        $context["_show_actions"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("show", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()));
        // line 46
        echo "                ";
        $context["_request_parameters"] = array("entity" => $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 47
        echo "
                ";
        // line 48
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 49
($context["_show_actions"] ?? $this->getContext($context, "_show_actions")), "request_parameters" =>         // line 50
($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "translation_domain" => $this->getAttribute(        // line 51
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "trans_parameters" =>         // line 52
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 53
($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), false);
        // line 54
        echo "
            ";
        
        $__internal_2c1ba1d3fa6110fe10b01bcdcb02d9e24a7feed811efaa76f6d96fdf41f606d3->leave($__internal_2c1ba1d3fa6110fe10b01bcdcb02d9e24a7feed811efaa76f6d96fdf41f606d3_prof);

        
        $__internal_28370c2e1a06af0e001014762bcbe68b8a8a4d4762eb958b7b2ef5cb750033ba->leave($__internal_28370c2e1a06af0e001014762bcbe68b8a8a4d4762eb958b7b2ef5cb750033ba_prof);

    }

    // line 60
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_d6de92e02b1239adee164a8d20207632b7154673e68f979b30abfd8502638ed3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6de92e02b1239adee164a8d20207632b7154673e68f979b30abfd8502638ed3->enter($__internal_d6de92e02b1239adee164a8d20207632b7154673e68f979b30abfd8502638ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_c1a04d2ca13ca928903a6b917f3a82f05c16f464be4b4c94cddc9d35bb3a383b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1a04d2ca13ca928903a6b917f3a82f05c16f464be4b4c94cddc9d35bb3a383b->enter($__internal_c1a04d2ca13ca928903a6b917f3a82f05c16f464be4b4c94cddc9d35bb3a383b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 61
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "show", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 63
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 64
($context["delete_form"] ?? $this->getContext($context, "delete_form")), "_translation_domain" => $this->getAttribute(        // line 65
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 66
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 67
($context["_entity_config"] ?? $this->getContext($context, "_entity_config"))), false);
        // line 68
        echo "
    ";
        
        $__internal_c1a04d2ca13ca928903a6b917f3a82f05c16f464be4b4c94cddc9d35bb3a383b->leave($__internal_c1a04d2ca13ca928903a6b917f3a82f05c16f464be4b4c94cddc9d35bb3a383b_prof);

        
        $__internal_d6de92e02b1239adee164a8d20207632b7154673e68f979b30abfd8502638ed3->leave($__internal_d6de92e02b1239adee164a8d20207632b7154673e68f979b30abfd8502638ed3_prof);

    }

    // line 72
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_e6ea5f29b9684db17c5ed1d28feaa91fe2c419c769a0152b01999b1acb236eaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6ea5f29b9684db17c5ed1d28feaa91fe2c419c769a0152b01999b1acb236eaa->enter($__internal_e6ea5f29b9684db17c5ed1d28feaa91fe2c419c769a0152b01999b1acb236eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_f3c101ae8a355409471b838146afe285c7b3f40723796e2b0dad084364985649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3c101ae8a355409471b838146afe285c7b3f40723796e2b0dad084364985649->enter($__internal_f3c101ae8a355409471b838146afe285c7b3f40723796e2b0dad084364985649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 73
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>
";
        
        $__internal_f3c101ae8a355409471b838146afe285c7b3f40723796e2b0dad084364985649->leave($__internal_f3c101ae8a355409471b838146afe285c7b3f40723796e2b0dad084364985649_prof);

        
        $__internal_e6ea5f29b9684db17c5ed1d28feaa91fe2c419c769a0152b01999b1acb236eaa->leave($__internal_e6ea5f29b9684db17c5ed1d28feaa91fe2c419c769a0152b01999b1acb236eaa_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 73,  335 => 72,  324 => 68,  322 => 67,  321 => 66,  320 => 65,  319 => 64,  318 => 63,  316 => 61,  307 => 60,  296 => 54,  294 => 53,  293 => 52,  292 => 51,  291 => 50,  290 => 49,  289 => 48,  286 => 47,  283 => 46,  280 => 45,  271 => 44,  259 => 36,  255 => 34,  253 => 4,  251 => 34,  249 => 33,  243 => 30,  237 => 26,  235 => 4,  234 => 26,  226 => 24,  217 => 23,  207 => 40,  193 => 39,  190 => 23,  172 => 22,  163 => 21,  153 => 60,  147 => 56,  145 => 44,  140 => 41,  138 => 21,  135 => 20,  126 => 19,  113 => 15,  112 => 4,  110 => 15,  107 => 14,  105 => 13,  96 => 12,  78 => 10,  60 => 9,  50 => 7,  48 => 5,  47 => 4,  46 => 5,  45 => 4,  44 => 5,  42 => 4,  40 => 3,  38 => 1,  26 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{# the empty string concatenation is needed when the primary key is an object (e.g. an Uuid object) #}
{% set _entity_id = '' ~ attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-show-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'show show-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'show.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.show.title is defined ? _entity_config.show.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    <div class=\"form-horizontal\">
        {% block show_fields %}
            {% for field, metadata in fields %}
                {% block show_field %}
                    <div class=\"form-group field-{{ metadata.type|default('default')|lower }} {{ metadata.css_class|default('') }}\">
                        <label class=\"col-sm-2 control-label\">
                            {{ (metadata.label ?: field|humanize)|trans(_trans_parameters)|raw }}
                        </label>
                        <div class=\"col-sm-10\">
                            <div class=\"form-control\">
                                {{ easyadmin_render_field_for_show_view(_entity_config.name, entity, metadata) }}
                            </div>

                            {% if metadata.help|default('') != '' %}
                                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ metadata.help|trans|raw }}</span>
                            {% endif %}
                        </div>
                    </div>
                {% endblock %}
            {% endfor %}
        {% endblock %}

        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            {% block item_actions %}
                {% set _show_actions = easyadmin_get_actions_for_show_item(_entity_config.name) %}
                {% set _request_parameters = { entity: _entity_config.name, referer: app.request.query.get('referer') } %}

                {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
                    actions: _show_actions,
                    request_parameters: _request_parameters,
                    translation_domain: _entity_config.translation_domain,
                    trans_parameters: _trans_parameters,
                    item_id: _entity_id
                }, with_context = false) }}
            {% endblock item_actions %}
            </div>
        </div>
    </div>

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'show',
            referer: app.request.query.get('referer', ''),
            delete_form: delete_form,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>
{% endblock %}
", "EasyAdminBundle:default:show.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/show.html.twig");
    }
}
