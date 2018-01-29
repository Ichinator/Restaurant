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
        $__internal_448699275ca63171ddcd7c1cf693ac912b34e3524aeb09591a4476eae6167042 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_448699275ca63171ddcd7c1cf693ac912b34e3524aeb09591a4476eae6167042->enter($__internal_448699275ca63171ddcd7c1cf693ac912b34e3524aeb09591a4476eae6167042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:show.html.twig"));

        $__internal_9a559bf3960606c5a3ffcae6c140cf13ed312ba161df864a862e3f8980d5354d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a559bf3960606c5a3ffcae6c140cf13ed312ba161df864a862e3f8980d5354d->enter($__internal_9a559bf3960606c5a3ffcae6c140cf13ed312ba161df864a862e3f8980d5354d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:show.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $context["_entity_id"] = ("" . $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array())));
        // line 4
        $context["__internal_12df89d781a6352932d089a2df62297f99ae7f9b3dd8266f9f3e013585a22f62"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_12df89d781a6352932d089a2df62297f99ae7f9b3dd8266f9f3e013585a22f62"] ?? $this->getContext($context, "__internal_12df89d781a6352932d089a2df62297f99ae7f9b3dd8266f9f3e013585a22f62"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_12df89d781a6352932d089a2df62297f99ae7f9b3dd8266f9f3e013585a22f62"] ?? $this->getContext($context, "__internal_12df89d781a6352932d089a2df62297f99ae7f9b3dd8266f9f3e013585a22f62"))), "%entity_id%" =>         // line 5
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_448699275ca63171ddcd7c1cf693ac912b34e3524aeb09591a4476eae6167042->leave($__internal_448699275ca63171ddcd7c1cf693ac912b34e3524aeb09591a4476eae6167042_prof);

        
        $__internal_9a559bf3960606c5a3ffcae6c140cf13ed312ba161df864a862e3f8980d5354d->leave($__internal_9a559bf3960606c5a3ffcae6c140cf13ed312ba161df864a862e3f8980d5354d_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_3fbd0f613522fd9fe3d2ab98eba80c5862494e2b97cace070060aa85870d6252 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fbd0f613522fd9fe3d2ab98eba80c5862494e2b97cace070060aa85870d6252->enter($__internal_3fbd0f613522fd9fe3d2ab98eba80c5862494e2b97cace070060aa85870d6252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_49bfb2cc17629253215b8f0ea0250667d03b518525a7468770129caa0c008fa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49bfb2cc17629253215b8f0ea0250667d03b518525a7468770129caa0c008fa2->enter($__internal_49bfb2cc17629253215b8f0ea0250667d03b518525a7468770129caa0c008fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-show-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_49bfb2cc17629253215b8f0ea0250667d03b518525a7468770129caa0c008fa2->leave($__internal_49bfb2cc17629253215b8f0ea0250667d03b518525a7468770129caa0c008fa2_prof);

        
        $__internal_3fbd0f613522fd9fe3d2ab98eba80c5862494e2b97cace070060aa85870d6252->leave($__internal_3fbd0f613522fd9fe3d2ab98eba80c5862494e2b97cace070060aa85870d6252_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_831dd2024aadf3533557f52ba14f390fe650880e4791f26504d87d9b824c11a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_831dd2024aadf3533557f52ba14f390fe650880e4791f26504d87d9b824c11a1->enter($__internal_831dd2024aadf3533557f52ba14f390fe650880e4791f26504d87d9b824c11a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_79f87566401821d412b80f951fddbee0c5513dfe38a8c8d41c4b2ef0aefb72ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79f87566401821d412b80f951fddbee0c5513dfe38a8c8d41c4b2ef0aefb72ad->enter($__internal_79f87566401821d412b80f951fddbee0c5513dfe38a8c8d41c4b2ef0aefb72ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("show show-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_79f87566401821d412b80f951fddbee0c5513dfe38a8c8d41c4b2ef0aefb72ad->leave($__internal_79f87566401821d412b80f951fddbee0c5513dfe38a8c8d41c4b2ef0aefb72ad_prof);

        
        $__internal_831dd2024aadf3533557f52ba14f390fe650880e4791f26504d87d9b824c11a1->leave($__internal_831dd2024aadf3533557f52ba14f390fe650880e4791f26504d87d9b824c11a1_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_54dc2b563f9d14a53b13f775e26e0d072ea7c80fe69dbe901922e210887c2074 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54dc2b563f9d14a53b13f775e26e0d072ea7c80fe69dbe901922e210887c2074->enter($__internal_54dc2b563f9d14a53b13f775e26e0d072ea7c80fe69dbe901922e210887c2074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_30435ad9b58fce239d882aa93e65298fbdc52b0d011f07768944ec8ddee40185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30435ad9b58fce239d882aa93e65298fbdc52b0d011f07768944ec8ddee40185->enter($__internal_30435ad9b58fce239d882aa93e65298fbdc52b0d011f07768944ec8ddee40185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "show", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "show", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_12df89d781a6352932d089a2df62297f99ae7f9b3dd8266f9f3e013585a22f62"] ?? $this->getContext($context, "__internal_12df89d781a6352932d089a2df62297f99ae7f9b3dd8266f9f3e013585a22f62")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_30435ad9b58fce239d882aa93e65298fbdc52b0d011f07768944ec8ddee40185->leave($__internal_30435ad9b58fce239d882aa93e65298fbdc52b0d011f07768944ec8ddee40185_prof);

        
        $__internal_54dc2b563f9d14a53b13f775e26e0d072ea7c80fe69dbe901922e210887c2074->leave($__internal_54dc2b563f9d14a53b13f775e26e0d072ea7c80fe69dbe901922e210887c2074_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_05990c44c9a5806b14b2a65c7358faee36b9a075b8c06119e78fa7495585c9a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05990c44c9a5806b14b2a65c7358faee36b9a075b8c06119e78fa7495585c9a2->enter($__internal_05990c44c9a5806b14b2a65c7358faee36b9a075b8c06119e78fa7495585c9a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_82ce0091de90c9599882088e8d9cb56e182a9cc8a9d9307a01e8b7dc4b451bdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ce0091de90c9599882088e8d9cb56e182a9cc8a9d9307a01e8b7dc4b451bdf->enter($__internal_82ce0091de90c9599882088e8d9cb56e182a9cc8a9d9307a01e8b7dc4b451bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_82ce0091de90c9599882088e8d9cb56e182a9cc8a9d9307a01e8b7dc4b451bdf->leave($__internal_82ce0091de90c9599882088e8d9cb56e182a9cc8a9d9307a01e8b7dc4b451bdf_prof);

        
        $__internal_05990c44c9a5806b14b2a65c7358faee36b9a075b8c06119e78fa7495585c9a2->leave($__internal_05990c44c9a5806b14b2a65c7358faee36b9a075b8c06119e78fa7495585c9a2_prof);

    }

    // line 21
    public function block_show_fields($context, array $blocks = array())
    {
        $__internal_a583b12e76367a1b8bc75a31c0b9ca6af858a34bac30a9395c2aa0066aca642c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a583b12e76367a1b8bc75a31c0b9ca6af858a34bac30a9395c2aa0066aca642c->enter($__internal_a583b12e76367a1b8bc75a31c0b9ca6af858a34bac30a9395c2aa0066aca642c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_fields"));

        $__internal_c85501d4ac43885ef7a3b1255344a782949c851e2cb60cf97c1b5d33ffe1ed3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c85501d4ac43885ef7a3b1255344a782949c851e2cb60cf97c1b5d33ffe1ed3f->enter($__internal_c85501d4ac43885ef7a3b1255344a782949c851e2cb60cf97c1b5d33ffe1ed3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_fields"));

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
        
        $__internal_c85501d4ac43885ef7a3b1255344a782949c851e2cb60cf97c1b5d33ffe1ed3f->leave($__internal_c85501d4ac43885ef7a3b1255344a782949c851e2cb60cf97c1b5d33ffe1ed3f_prof);

        
        $__internal_a583b12e76367a1b8bc75a31c0b9ca6af858a34bac30a9395c2aa0066aca642c->leave($__internal_a583b12e76367a1b8bc75a31c0b9ca6af858a34bac30a9395c2aa0066aca642c_prof);

    }

    // line 23
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_841544035dcb733c2f6e114f2e543c18bf8833eb788ef92cbd429b82578151ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_841544035dcb733c2f6e114f2e543c18bf8833eb788ef92cbd429b82578151ec->enter($__internal_841544035dcb733c2f6e114f2e543c18bf8833eb788ef92cbd429b82578151ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_21e980ca519bb72f9859931a8d5b36a895393c1bf090b6450f0851401a8f29db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21e980ca519bb72f9859931a8d5b36a895393c1bf090b6450f0851401a8f29db->enter($__internal_21e980ca519bb72f9859931a8d5b36a895393c1bf090b6450f0851401a8f29db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

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
($context["__internal_12df89d781a6352932d089a2df62297f99ae7f9b3dd8266f9f3e013585a22f62"] ?? $this->getContext($context, "__internal_12df89d781a6352932d089a2df62297f99ae7f9b3dd8266f9f3e013585a22f62")));
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
($context["__internal_12df89d781a6352932d089a2df62297f99ae7f9b3dd8266f9f3e013585a22f62"] ?? $this->getContext($context, "__internal_12df89d781a6352932d089a2df62297f99ae7f9b3dd8266f9f3e013585a22f62")));
            // line 34
            echo "</span>
                            ";
        }
        // line 36
        echo "                        </div>
                    </div>
                ";
        
        $__internal_21e980ca519bb72f9859931a8d5b36a895393c1bf090b6450f0851401a8f29db->leave($__internal_21e980ca519bb72f9859931a8d5b36a895393c1bf090b6450f0851401a8f29db_prof);

        
        $__internal_841544035dcb733c2f6e114f2e543c18bf8833eb788ef92cbd429b82578151ec->leave($__internal_841544035dcb733c2f6e114f2e543c18bf8833eb788ef92cbd429b82578151ec_prof);

    }

    // line 44
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_ca2883662864df9c331ee243b1a1680a444243cf5827182224d7caf3aca9589e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca2883662864df9c331ee243b1a1680a444243cf5827182224d7caf3aca9589e->enter($__internal_ca2883662864df9c331ee243b1a1680a444243cf5827182224d7caf3aca9589e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_93985f96c5be16c670cb6ad6718323597f871f218bffec3316126a251e2f7143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93985f96c5be16c670cb6ad6718323597f871f218bffec3316126a251e2f7143->enter($__internal_93985f96c5be16c670cb6ad6718323597f871f218bffec3316126a251e2f7143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

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
        
        $__internal_93985f96c5be16c670cb6ad6718323597f871f218bffec3316126a251e2f7143->leave($__internal_93985f96c5be16c670cb6ad6718323597f871f218bffec3316126a251e2f7143_prof);

        
        $__internal_ca2883662864df9c331ee243b1a1680a444243cf5827182224d7caf3aca9589e->leave($__internal_ca2883662864df9c331ee243b1a1680a444243cf5827182224d7caf3aca9589e_prof);

    }

    // line 60
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_5a5671051b0e2a9ac32871c9437c660596945fa7869e7daca99915f35f379593 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a5671051b0e2a9ac32871c9437c660596945fa7869e7daca99915f35f379593->enter($__internal_5a5671051b0e2a9ac32871c9437c660596945fa7869e7daca99915f35f379593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_af9ce41c0d3b57d61f50367d2e2529ef835e355bcc0d1f27837fa06fa58f6a04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af9ce41c0d3b57d61f50367d2e2529ef835e355bcc0d1f27837fa06fa58f6a04->enter($__internal_af9ce41c0d3b57d61f50367d2e2529ef835e355bcc0d1f27837fa06fa58f6a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

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
        
        $__internal_af9ce41c0d3b57d61f50367d2e2529ef835e355bcc0d1f27837fa06fa58f6a04->leave($__internal_af9ce41c0d3b57d61f50367d2e2529ef835e355bcc0d1f27837fa06fa58f6a04_prof);

        
        $__internal_5a5671051b0e2a9ac32871c9437c660596945fa7869e7daca99915f35f379593->leave($__internal_5a5671051b0e2a9ac32871c9437c660596945fa7869e7daca99915f35f379593_prof);

    }

    // line 72
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_6d2c66052256606c525544e36653b2c183c68ee5c1c9504aa652000b72280dd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d2c66052256606c525544e36653b2c183c68ee5c1c9504aa652000b72280dd4->enter($__internal_6d2c66052256606c525544e36653b2c183c68ee5c1c9504aa652000b72280dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_600e10389b274b8ecffc48274743314099cbeb795e7bbc6c4ce20dd7e4f7570a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_600e10389b274b8ecffc48274743314099cbeb795e7bbc6c4ce20dd7e4f7570a->enter($__internal_600e10389b274b8ecffc48274743314099cbeb795e7bbc6c4ce20dd7e4f7570a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_600e10389b274b8ecffc48274743314099cbeb795e7bbc6c4ce20dd7e4f7570a->leave($__internal_600e10389b274b8ecffc48274743314099cbeb795e7bbc6c4ce20dd7e4f7570a_prof);

        
        $__internal_6d2c66052256606c525544e36653b2c183c68ee5c1c9504aa652000b72280dd4->leave($__internal_6d2c66052256606c525544e36653b2c183c68ee5c1c9504aa652000b72280dd4_prof);

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
