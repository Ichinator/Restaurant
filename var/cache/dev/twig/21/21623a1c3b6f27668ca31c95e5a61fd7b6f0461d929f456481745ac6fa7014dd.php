<?php

/* EasyAdminBundle:default:layout.html.twig */
class __TwigTemplate_26d6d1e44324f7a1f9f7ffa6216e7aff467b39e03c191ef64e4588f16f7147c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'adminlte_options' => array($this, 'block_adminlte_options'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header' => array($this, 'block_header'),
            'header_logo' => array($this, 'block_header_logo'),
            'header_custom_menu' => array($this, 'block_header_custom_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'user_menu_dropdown' => array($this, 'block_user_menu_dropdown'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'content_help' => array($this, 'block_content_help'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48cdbc2fe1747df6562628c0cf3c4dffa697d66990e4f54ab44da11f9c2ff1ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48cdbc2fe1747df6562628c0cf3c4dffa697d66990e4f54ab44da11f9c2ff1ab->enter($__internal_48cdbc2fe1747df6562628c0cf3c4dffa697d66990e4f54ab44da11f9c2ff1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

        $__internal_1fa20a564089aeb8e0166db59788364bedb5506e4ac0eb7bcbee0b1dd06312d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa20a564089aeb8e0166db59788364bedb5506e4ac0eb7bcbee0b1dd06312d4->enter($__internal_1fa20a564089aeb8e0166db59788364bedb5506e4ac0eb7bcbee0b1dd06312d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 20
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.rtl")) {
            // line 47
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/bootstrap-rtl.min.css"), "html", null, true);
            echo "\">
            <link rel=\"stylesheet\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/adminlte-rtl.min.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 50
        echo "    </head>

    ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 167
        echo "</html>
";
        
        $__internal_48cdbc2fe1747df6562628c0cf3c4dffa697d66990e4f54ab44da11f9c2ff1ab->leave($__internal_48cdbc2fe1747df6562628c0cf3c4dffa697d66990e4f54ab44da11f9c2ff1ab_prof);

        
        $__internal_1fa20a564089aeb8e0166db59788364bedb5506e4ac0eb7bcbee0b1dd06312d4->leave($__internal_1fa20a564089aeb8e0166db59788364bedb5506e4ac0eb7bcbee0b1dd06312d4_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_ab29042385f9eb51a5490bbb131027c680a12361f172f16bc6378a133bc0bd1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab29042385f9eb51a5490bbb131027c680a12361f172f16bc6378a133bc0bd1e->enter($__internal_ab29042385f9eb51a5490bbb131027c680a12361f172f16bc6378a133bc0bd1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_813da5e6204463764cc082effcfa07282cf0045a4baf8c91aa222858e419476f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_813da5e6204463764cc082effcfa07282cf0045a4baf8c91aa222858e419476f->enter($__internal_813da5e6204463764cc082effcfa07282cf0045a4baf8c91aa222858e419476f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_813da5e6204463764cc082effcfa07282cf0045a4baf8c91aa222858e419476f->leave($__internal_813da5e6204463764cc082effcfa07282cf0045a4baf8c91aa222858e419476f_prof);

        
        $__internal_ab29042385f9eb51a5490bbb131027c680a12361f172f16bc6378a133bc0bd1e->leave($__internal_ab29042385f9eb51a5490bbb131027c680a12361f172f16bc6378a133bc0bd1e_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_727382dfaca382b6b860a736b12ff074017bc557cf3bfb4cd07c2e383a51086f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_727382dfaca382b6b860a736b12ff074017bc557cf3bfb4cd07c2e383a51086f->enter($__internal_727382dfaca382b6b860a736b12ff074017bc557cf3bfb4cd07c2e383a51086f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_fdc0b65cc6d214ebcbfe5acd82b7b27de3d77856ca5feed9ba4ac68bea9b89fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdc0b65cc6d214ebcbfe5acd82b7b27de3d77856ca5feed9ba4ac68bea9b89fb->enter($__internal_fdc0b65cc6d214ebcbfe5acd82b7b27de3d77856ca5feed9ba4ac68bea9b89fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/easyadmin-all.min.css"), "html", null, true);
        echo "\">
            <style>
                ";
        // line 15
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("_internal.custom_css");
        echo "
            </style>
        ";
        
        $__internal_fdc0b65cc6d214ebcbfe5acd82b7b27de3d77856ca5feed9ba4ac68bea9b89fb->leave($__internal_fdc0b65cc6d214ebcbfe5acd82b7b27de3d77856ca5feed9ba4ac68bea9b89fb_prof);

        
        $__internal_727382dfaca382b6b860a736b12ff074017bc557cf3bfb4cd07c2e383a51086f->leave($__internal_727382dfaca382b6b860a736b12ff074017bc557cf3bfb4cd07c2e383a51086f_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_181366d7aff9cdc79f7b2afc55cfa5e81ef03290ea0f759a11fc77aaee9f195c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_181366d7aff9cdc79f7b2afc55cfa5e81ef03290ea0f759a11fc77aaee9f195c->enter($__internal_181366d7aff9cdc79f7b2afc55cfa5e81ef03290ea0f759a11fc77aaee9f195c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_b2d7b3441c5eebdf38b7f9d73d930f3278f5712b545afbefb469cd34f6e60b93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2d7b3441c5eebdf38b7f9d73d930f3278f5712b545afbefb469cd34f6e60b93->enter($__internal_b2d7b3441c5eebdf38b7f9d73d930f3278f5712b545afbefb469cd34f6e60b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 24
        echo "            ";
        $context["favicon"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.favicon");
        // line 25
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["favicon"] ?? $this->getContext($context, "favicon")), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["favicon"] ?? $this->getContext($context, "favicon")), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_b2d7b3441c5eebdf38b7f9d73d930f3278f5712b545afbefb469cd34f6e60b93->leave($__internal_b2d7b3441c5eebdf38b7f9d73d930f3278f5712b545afbefb469cd34f6e60b93_prof);

        
        $__internal_181366d7aff9cdc79f7b2afc55cfa5e81ef03290ea0f759a11fc77aaee9f195c->leave($__internal_181366d7aff9cdc79f7b2afc55cfa5e81ef03290ea0f759a11fc77aaee9f195c_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_96a2c79cdd9ce04608733b3370df561f668b8340a0d5872a7955a023489e8ac1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96a2c79cdd9ce04608733b3370df561f668b8340a0d5872a7955a023489e8ac1->enter($__internal_96a2c79cdd9ce04608733b3370df561f668b8340a0d5872a7955a023489e8ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_9599dfaf58ab8500363e897c42a11b92df6e51c86beb4a73e9a0d1bc2e72cfde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9599dfaf58ab8500363e897c42a11b92df6e51c86beb4a73e9a0d1bc2e72cfde->enter($__internal_9599dfaf58ab8500363e897c42a11b92df6e51c86beb4a73e9a0d1bc2e72cfde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 29
        echo "            ";
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 42
        echo "
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/javascript/easyadmin-all.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_9599dfaf58ab8500363e897c42a11b92df6e51c86beb4a73e9a0d1bc2e72cfde->leave($__internal_9599dfaf58ab8500363e897c42a11b92df6e51c86beb4a73e9a0d1bc2e72cfde_prof);

        
        $__internal_96a2c79cdd9ce04608733b3370df561f668b8340a0d5872a7955a023489e8ac1->leave($__internal_96a2c79cdd9ce04608733b3370df561f668b8340a0d5872a7955a023489e8ac1_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_7e6dbaf796088e831385683b25360aef4fa0e5e3bb081256008d36a4fa7d3315 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e6dbaf796088e831385683b25360aef4fa0e5e3bb081256008d36a4fa7d3315->enter($__internal_7e6dbaf796088e831385683b25360aef4fa0e5e3bb081256008d36a4fa7d3315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_f673951b01396e3960d43c1789fc92dae139c0772f075f839497aebb35af2632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f673951b01396e3960d43c1789fc92dae139c0772f075f839497aebb35af2632->enter($__internal_f673951b01396e3960d43c1789fc92dae139c0772f075f839497aebb35af2632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        // line 30
        echo "                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            ";
        
        $__internal_f673951b01396e3960d43c1789fc92dae139c0772f075f839497aebb35af2632->leave($__internal_f673951b01396e3960d43c1789fc92dae139c0772f075f839497aebb35af2632_prof);

        
        $__internal_7e6dbaf796088e831385683b25360aef4fa0e5e3bb081256008d36a4fa7d3315->leave($__internal_7e6dbaf796088e831385683b25360aef4fa0e5e3bb081256008d36a4fa7d3315_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_43653b2bac11a4a20b20f0c32af59595310b2c0fd3f85de58ef45e2055076896 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43653b2bac11a4a20b20f0c32af59595310b2c0fd3f85de58ef45e2055076896->enter($__internal_43653b2bac11a4a20b20f0c32af59595310b2c0fd3f85de58ef45e2055076896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1cc3cd8bc5e9e7a065ad4db35ddb50c1a4a295103d195a1fd0cf886a63c84886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cc3cd8bc5e9e7a065ad4db35ddb50c1a4a295103d195a1fd0cf886a63c84886->enter($__internal_1cc3cd8bc5e9e7a065ad4db35ddb50c1a4a295103d195a1fd0cf886a63c84886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 55
        $this->displayBlock('wrapper', $context, $blocks);
        // line 158
        echo "        </div>

        ";
        // line 160
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 161
        echo "
        ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 163
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "    </body>
    ";
        
        $__internal_1cc3cd8bc5e9e7a065ad4db35ddb50c1a4a295103d195a1fd0cf886a63c84886->leave($__internal_1cc3cd8bc5e9e7a065ad4db35ddb50c1a4a295103d195a1fd0cf886a63c84886_prof);

        
        $__internal_43653b2bac11a4a20b20f0c32af59595310b2c0fd3f85de58ef45e2055076896->leave($__internal_43653b2bac11a4a20b20f0c32af59595310b2c0fd3f85de58ef45e2055076896_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_9984ce71def7d880cf4678480c76a8125ce29df48f2ea4e47451df3b757045c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9984ce71def7d880cf4678480c76a8125ce29df48f2ea4e47451df3b757045c1->enter($__internal_9984ce71def7d880cf4678480c76a8125ce29df48f2ea4e47451df3b757045c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_8cac15b51bb84a7b528586f55f10e8a7f621a44e1b41c4c30867a82da4c67edf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cac15b51bb84a7b528586f55f10e8a7f621a44e1b41c4c30867a82da4c67edf->enter($__internal_8cac15b51bb84a7b528586f55f10e8a7f621a44e1b41c4c30867a82da4c67edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_8cac15b51bb84a7b528586f55f10e8a7f621a44e1b41c4c30867a82da4c67edf->leave($__internal_8cac15b51bb84a7b528586f55f10e8a7f621a44e1b41c4c30867a82da4c67edf_prof);

        
        $__internal_9984ce71def7d880cf4678480c76a8125ce29df48f2ea4e47451df3b757045c1->leave($__internal_9984ce71def7d880cf4678480c76a8125ce29df48f2ea4e47451df3b757045c1_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_b59e397e7f1e38dc87b5894792780155fefd058cb88ca7ada2ec11bf62e1cff5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b59e397e7f1e38dc87b5894792780155fefd058cb88ca7ada2ec11bf62e1cff5->enter($__internal_b59e397e7f1e38dc87b5894792780155fefd058cb88ca7ada2ec11bf62e1cff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_a32514c69b981dc8e54a3324e2427bb4fa08a2811e1c57c44ebe6cbd96a61a14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a32514c69b981dc8e54a3324e2427bb4fa08a2811e1c57c44ebe6cbd96a61a14->enter($__internal_a32514c69b981dc8e54a3324e2427bb4fa08a2811e1c57c44ebe6cbd96a61a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_a32514c69b981dc8e54a3324e2427bb4fa08a2811e1c57c44ebe6cbd96a61a14->leave($__internal_a32514c69b981dc8e54a3324e2427bb4fa08a2811e1c57c44ebe6cbd96a61a14_prof);

        
        $__internal_b59e397e7f1e38dc87b5894792780155fefd058cb88ca7ada2ec11bf62e1cff5->leave($__internal_b59e397e7f1e38dc87b5894792780155fefd058cb88ca7ada2ec11bf62e1cff5_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_1014d1c143c0c0928e178790ce698baa9a32c1ad76c5fa64ddeef6c8450c8733 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1014d1c143c0c0928e178790ce698baa9a32c1ad76c5fa64ddeef6c8450c8733->enter($__internal_1014d1c143c0c0928e178790ce698baa9a32c1ad76c5fa64ddeef6c8450c8733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_5bbc84a38877b48a502cf69716bc6640a9d362c89eea61e9a31895d2f9efad15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bbc84a38877b48a502cf69716bc6640a9d362c89eea61e9a31895d2f9efad15->enter($__internal_5bbc84a38877b48a502cf69716bc6640a9d362c89eea61e9a31895d2f9efad15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 56
        echo "            <header class=\"main-header\">
            ";
        // line 57
        $this->displayBlock('header', $context, $blocks);
        // line 115
        echo "            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 118
        $this->displayBlock('sidebar', $context, $blocks);
        // line 129
        echo "            </aside>

            <div class=\"content-wrapper\">
            ";
        // line 132
        $this->displayBlock('content', $context, $blocks);
        // line 156
        echo "            </div>
        ";
        
        $__internal_5bbc84a38877b48a502cf69716bc6640a9d362c89eea61e9a31895d2f9efad15->leave($__internal_5bbc84a38877b48a502cf69716bc6640a9d362c89eea61e9a31895d2f9efad15_prof);

        
        $__internal_1014d1c143c0c0928e178790ce698baa9a32c1ad76c5fa64ddeef6c8450c8733->leave($__internal_1014d1c143c0c0928e178790ce698baa9a32c1ad76c5fa64ddeef6c8450c8733_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_d4bd86164c5e5729dbd5d4a2fc337f855fc4b35f5f8be9ea52c861530033f28b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4bd86164c5e5729dbd5d4a2fc337f855fc4b35f5f8be9ea52c861530033f28b->enter($__internal_d4bd86164c5e5729dbd5d4a2fc337f855fc4b35f5f8be9ea52c861530033f28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_ec0e530dfc15ff9fb3631168bfc007217964f217150d693fcda8f85efed2402c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec0e530dfc15ff9fb3631168bfc007217964f217150d693fcda8f85efed2402c->enter($__internal_ec0e530dfc15ff9fb3631168bfc007217964f217150d693fcda8f85efed2402c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 58
        echo "                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("toggle_navigation", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>

                    <div id=\"header-logo\">
                        ";
        // line 64
        $this->displayBlock('header_logo', $context, $blocks);
        // line 69
        echo "                    </div>

                    <div class=\"navbar-custom-menu\">
                    ";
        // line 72
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 112
        echo "                    </div>
                </nav>
            ";
        
        $__internal_ec0e530dfc15ff9fb3631168bfc007217964f217150d693fcda8f85efed2402c->leave($__internal_ec0e530dfc15ff9fb3631168bfc007217964f217150d693fcda8f85efed2402c_prof);

        
        $__internal_d4bd86164c5e5729dbd5d4a2fc337f855fc4b35f5f8be9ea52c861530033f28b->leave($__internal_d4bd86164c5e5729dbd5d4a2fc337f855fc4b35f5f8be9ea52c861530033f28b_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_f86d7e9c30e79d2ad0bb00326f92a65074f7b17950d0ce04f1f95bd85b508245 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f86d7e9c30e79d2ad0bb00326f92a65074f7b17950d0ce04f1f95bd85b508245->enter($__internal_f86d7e9c30e79d2ad0bb00326f92a65074f7b17950d0ce04f1f95bd85b508245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_5688697fe090409ae30bf27222c42584cb2a078e318fc46e8f8d1f0ee10a114e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5688697fe090409ae30bf27222c42584cb2a078e318fc46e8f8d1f0ee10a114e->enter($__internal_5688697fe090409ae30bf27222c42584cb2a078e318fc46e8f8d1f0ee10a114e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 65
        echo "                            <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                ";
        // line 66
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name");
        echo "
                            </a>
                        ";
        
        $__internal_5688697fe090409ae30bf27222c42584cb2a078e318fc46e8f8d1f0ee10a114e->leave($__internal_5688697fe090409ae30bf27222c42584cb2a078e318fc46e8f8d1f0ee10a114e_prof);

        
        $__internal_f86d7e9c30e79d2ad0bb00326f92a65074f7b17950d0ce04f1f95bd85b508245->leave($__internal_f86d7e9c30e79d2ad0bb00326f92a65074f7b17950d0ce04f1f95bd85b508245_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_4340fdd71746da29a4f9b2fea0251c1550223f69eef156d041c85df49c07c1b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4340fdd71746da29a4f9b2fea0251c1550223f69eef156d041c85df49c07c1b5->enter($__internal_4340fdd71746da29a4f9b2fea0251c1550223f69eef156d041c85df49c07c1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_d2176e3ec6469792145e52ac79083eb00a567fa16dc4cf0bec10d6d398327f0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2176e3ec6469792145e52ac79083eb00a567fa16dc4cf0bec10d6d398327f0f->enter($__internal_d2176e3ec6469792145e52ac79083eb00a567fa16dc4cf0bec10d6d398327f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 73
        echo "                        ";
        $context["_logout_path"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getLogoutPath();
        // line 74
        echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                ";
        // line 76
        $this->displayBlock('user_menu', $context, $blocks);
        // line 109
        echo "                            </li>
                        </ul>
                    ";
        
        $__internal_d2176e3ec6469792145e52ac79083eb00a567fa16dc4cf0bec10d6d398327f0f->leave($__internal_d2176e3ec6469792145e52ac79083eb00a567fa16dc4cf0bec10d6d398327f0f_prof);

        
        $__internal_4340fdd71746da29a4f9b2fea0251c1550223f69eef156d041c85df49c07c1b5->leave($__internal_4340fdd71746da29a4f9b2fea0251c1550223f69eef156d041c85df49c07c1b5_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_91377557511478f9f5ed14b72c6c8e4cce816f2b30ca46bd94ac42bcd40d3a2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91377557511478f9f5ed14b72c6c8e4cce816f2b30ca46bd94ac42bcd40d3a2d->enter($__internal_91377557511478f9f5ed14b72c6c8e4cce816f2b30ca46bd94ac42bcd40d3a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_34307936c04766048d1b525549ffbba0951b3ce767c40cd05922fa72f9f5402f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34307936c04766048d1b525549ffbba0951b3ce767c40cd05922fa72f9f5402f->enter($__internal_34307936c04766048d1b525549ffbba0951b3ce767c40cd05922fa72f9f5402f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 77
        echo "                                    <span class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>

                                    ";
        // line 79
        if (((($this->getAttribute(($context["app"] ?? null), "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["app"] ?? null), "user", array()), false)) : (false)) == false)) {
            // line 80
            echo "                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        ";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                    ";
        } elseif ( !        // line 82
($context["_logout_path"] ?? $this->getContext($context, "_logout_path"))) {
            // line 83
            echo "                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        ";
            // line 84
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                    ";
        } else {
            // line 86
            echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                ";
            // line 89
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                ";
            // line 95
            $this->displayBlock('user_menu_dropdown', $context, $blocks);
            // line 105
            echo "                                            </ul>
                                        </div>
                                    ";
        }
        // line 108
        echo "                                ";
        
        $__internal_34307936c04766048d1b525549ffbba0951b3ce767c40cd05922fa72f9f5402f->leave($__internal_34307936c04766048d1b525549ffbba0951b3ce767c40cd05922fa72f9f5402f_prof);

        
        $__internal_91377557511478f9f5ed14b72c6c8e4cce816f2b30ca46bd94ac42bcd40d3a2d->leave($__internal_91377557511478f9f5ed14b72c6c8e4cce816f2b30ca46bd94ac42bcd40d3a2d_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_979095aaadd05ccffd2df0c094fe49fe52ce47e645b37759a29bc5c0f9dfc4a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_979095aaadd05ccffd2df0c094fe49fe52ce47e645b37759a29bc5c0f9dfc4a9->enter($__internal_979095aaadd05ccffd2df0c094fe49fe52ce47e645b37759a29bc5c0f9dfc4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_33cffb8d20ce4e24aab2a68bffba2ead3989bcb9af8147dd2ba0216d5146b461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33cffb8d20ce4e24aab2a68bffba2ead3989bcb9af8147dd2ba0216d5146b461->enter($__internal_33cffb8d20ce4e24aab2a68bffba2ead3989bcb9af8147dd2ba0216d5146b461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        // line 96
        echo "                                                <li>
                                                    <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, ($context["_logout_path"] ?? $this->getContext($context, "_logout_path")), "html", null, true);
        echo "\"><i class=\"fa fa-sign-out\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.signout", array(), "EasyAdminBundle"), "html", null, true);
        echo "</a>
                                                </li>
                                                ";
        // line 99
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PREVIOUS_ADMIN")) {
            // line 100
            echo "                                                    <li>
                                                        <a href=\"?_switch_user=_exit\"><i class=\"fa fa-sign-out\"></i> ";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.exit_impersonation", array(), "EasyAdminBundle"), "html", null, true);
            echo "</a>
                                                    </li>
                                                ";
        }
        // line 104
        echo "                                                ";
        
        $__internal_33cffb8d20ce4e24aab2a68bffba2ead3989bcb9af8147dd2ba0216d5146b461->leave($__internal_33cffb8d20ce4e24aab2a68bffba2ead3989bcb9af8147dd2ba0216d5146b461_prof);

        
        $__internal_979095aaadd05ccffd2df0c094fe49fe52ce47e645b37759a29bc5c0f9dfc4a9->leave($__internal_979095aaadd05ccffd2df0c094fe49fe52ce47e645b37759a29bc5c0f9dfc4a9_prof);

    }

    // line 118
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_13cacf7d6625d506c61ab7f8619339d5e339a15e0444a31889a571bcee9cd082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13cacf7d6625d506c61ab7f8619339d5e339a15e0444a31889a571bcee9cd082->enter($__internal_13cacf7d6625d506c61ab7f8619339d5e339a15e0444a31889a571bcee9cd082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_97fdbc1658da0cad1227c45d2803c1c869699b155db5ddf56b7a1a55275dc48e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97fdbc1658da0cad1227c45d2803c1c869699b155db5ddf56b7a1a55275dc48e->enter($__internal_97fdbc1658da0cad1227c45d2803c1c869699b155db5ddf56b7a1a55275dc48e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 119
        echo "                <section class=\"sidebar\">
                    ";
        // line 120
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 127
        echo "                </section>
            ";
        
        $__internal_97fdbc1658da0cad1227c45d2803c1c869699b155db5ddf56b7a1a55275dc48e->leave($__internal_97fdbc1658da0cad1227c45d2803c1c869699b155db5ddf56b7a1a55275dc48e_prof);

        
        $__internal_13cacf7d6625d506c61ab7f8619339d5e339a15e0444a31889a571bcee9cd082->leave($__internal_13cacf7d6625d506c61ab7f8619339d5e339a15e0444a31889a571bcee9cd082_prof);

    }

    // line 120
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_c96248f39e06b19e51cdeb9e9bba9158fe1fb33fb4769f4f1de87a900664f48c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c96248f39e06b19e51cdeb9e9bba9158fe1fb33fb4769f4f1de87a900664f48c->enter($__internal_c96248f39e06b19e51cdeb9e9bba9158fe1fb33fb4769f4f1de87a900664f48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_1b6401986da9201a2e2e927fa5257c4b75f5ce51b3ae25de8d8b3d4d4979d152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b6401986da9201a2e2e927fa5257c4b75f5ce51b3ae25de8d8b3d4d4979d152->enter($__internal_1b6401986da9201a2e2e927fa5257c4b75f5ce51b3ae25de8d8b3d4d4979d152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 121
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 122
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 125
        echo "
                    ";
        
        $__internal_1b6401986da9201a2e2e927fa5257c4b75f5ce51b3ae25de8d8b3d4d4979d152->leave($__internal_1b6401986da9201a2e2e927fa5257c4b75f5ce51b3ae25de8d8b3d4d4979d152_prof);

        
        $__internal_c96248f39e06b19e51cdeb9e9bba9158fe1fb33fb4769f4f1de87a900664f48c->leave($__internal_c96248f39e06b19e51cdeb9e9bba9158fe1fb33fb4769f4f1de87a900664f48c_prof);

    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        $__internal_b8d9cc34c4c2b0064f85818fee8d8b3a88fd00409fe963f0541a65b5eee833de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8d9cc34c4c2b0064f85818fee8d8b3a88fd00409fe963f0541a65b5eee833de->enter($__internal_b8d9cc34c4c2b0064f85818fee8d8b3a88fd00409fe963f0541a65b5eee833de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f89a9c42733cc4d07e57f4c3d4e723d65f010ee84a19fe5ea8c81474f3adff25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89a9c42733cc4d07e57f4c3d4e723d65f010ee84a19fe5ea8c81474f3adff25->enter($__internal_f89a9c42733cc4d07e57f4c3d4e723d65f010ee84a19fe5ea8c81474f3adff25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 133
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 136
        echo "
                <section class=\"content-header\">
                ";
        // line 138
        $this->displayBlock('content_header', $context, $blocks);
        // line 141
        echo "                ";
        $this->displayBlock('content_help', $context, $blocks);
        // line 150
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 153
        $this->displayBlock('main', $context, $blocks);
        // line 154
        echo "                </section>
            ";
        
        $__internal_f89a9c42733cc4d07e57f4c3d4e723d65f010ee84a19fe5ea8c81474f3adff25->leave($__internal_f89a9c42733cc4d07e57f4c3d4e723d65f010ee84a19fe5ea8c81474f3adff25_prof);

        
        $__internal_b8d9cc34c4c2b0064f85818fee8d8b3a88fd00409fe963f0541a65b5eee833de->leave($__internal_b8d9cc34c4c2b0064f85818fee8d8b3a88fd00409fe963f0541a65b5eee833de_prof);

    }

    // line 133
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_10aab1c818ac1ec622083a5a92a4dff50676ed112db82a044c76a008f71f8e91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10aab1c818ac1ec622083a5a92a4dff50676ed112db82a044c76a008f71f8e91->enter($__internal_10aab1c818ac1ec622083a5a92a4dff50676ed112db82a044c76a008f71f8e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_319983fc730446da12d865399f5041dacc1614fa48a56188611d36d26ab6d7c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319983fc730446da12d865399f5041dacc1614fa48a56188611d36d26ab6d7c7->enter($__internal_319983fc730446da12d865399f5041dacc1614fa48a56188611d36d26ab6d7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 134
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_319983fc730446da12d865399f5041dacc1614fa48a56188611d36d26ab6d7c7->leave($__internal_319983fc730446da12d865399f5041dacc1614fa48a56188611d36d26ab6d7c7_prof);

        
        $__internal_10aab1c818ac1ec622083a5a92a4dff50676ed112db82a044c76a008f71f8e91->leave($__internal_10aab1c818ac1ec622083a5a92a4dff50676ed112db82a044c76a008f71f8e91_prof);

    }

    // line 138
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_e7be29e815492d13ea61b9353c1ac2b9c901789dbd2da0f2f31fe19a57c695c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7be29e815492d13ea61b9353c1ac2b9c901789dbd2da0f2f31fe19a57c695c8->enter($__internal_e7be29e815492d13ea61b9353c1ac2b9c901789dbd2da0f2f31fe19a57c695c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_fe0c76b3151151ad2d2502851a47ea336e798d819ad0f9899fd5c495ceedd6cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe0c76b3151151ad2d2502851a47ea336e798d819ad0f9899fd5c495ceedd6cb->enter($__internal_fe0c76b3151151ad2d2502851a47ea336e798d819ad0f9899fd5c495ceedd6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 139
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_fe0c76b3151151ad2d2502851a47ea336e798d819ad0f9899fd5c495ceedd6cb->leave($__internal_fe0c76b3151151ad2d2502851a47ea336e798d819ad0f9899fd5c495ceedd6cb_prof);

        
        $__internal_e7be29e815492d13ea61b9353c1ac2b9c901789dbd2da0f2f31fe19a57c695c8->leave($__internal_e7be29e815492d13ea61b9353c1ac2b9c901789dbd2da0f2f31fe19a57c695c8_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_1355df409cf9646a328dec089c1a23fd098a234daffe7d7325662d9a61cea97b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1355df409cf9646a328dec089c1a23fd098a234daffe7d7325662d9a61cea97b->enter($__internal_1355df409cf9646a328dec089c1a23fd098a234daffe7d7325662d9a61cea97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_248ef00f371ff534fbe8e47a8a02b7c2b6a1f22f85b90766a35b8a794eb81d25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_248ef00f371ff534fbe8e47a8a02b7c2b6a1f22f85b90766a35b8a794eb81d25->enter($__internal_248ef00f371ff534fbe8e47a8a02b7c2b6a1f22f85b90766a35b8a794eb81d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_248ef00f371ff534fbe8e47a8a02b7c2b6a1f22f85b90766a35b8a794eb81d25->leave($__internal_248ef00f371ff534fbe8e47a8a02b7c2b6a1f22f85b90766a35b8a794eb81d25_prof);

        
        $__internal_1355df409cf9646a328dec089c1a23fd098a234daffe7d7325662d9a61cea97b->leave($__internal_1355df409cf9646a328dec089c1a23fd098a234daffe7d7325662d9a61cea97b_prof);

    }

    // line 141
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_e721b0dc21f3b7a67ede2de653392d4b36d181a29d38b5973d000b0eb51ebe07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e721b0dc21f3b7a67ede2de653392d4b36d181a29d38b5973d000b0eb51ebe07->enter($__internal_e721b0dc21f3b7a67ede2de653392d4b36d181a29d38b5973d000b0eb51ebe07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_7385116456c3f19953144030fe4a0de0931c43806a950332c697b880a9c5e21e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7385116456c3f19953144030fe4a0de0931c43806a950332c697b880a9c5e21e->enter($__internal_7385116456c3f19953144030fe4a0de0931c43806a950332c697b880a9c5e21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        // line 142
        echo "                    ";
        if ((array_key_exists("_entity_config", $context) && (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array"), false)) : (false)))) {
            // line 143
            echo "                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                ";
            // line 145
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array"), "help", array(), "array"));
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 149
        echo "                ";
        
        $__internal_7385116456c3f19953144030fe4a0de0931c43806a950332c697b880a9c5e21e->leave($__internal_7385116456c3f19953144030fe4a0de0931c43806a950332c697b880a9c5e21e_prof);

        
        $__internal_e721b0dc21f3b7a67ede2de653392d4b36d181a29d38b5973d000b0eb51ebe07->leave($__internal_e721b0dc21f3b7a67ede2de653392d4b36d181a29d38b5973d000b0eb51ebe07_prof);

    }

    // line 153
    public function block_main($context, array $blocks = array())
    {
        $__internal_ab27eefb1178986e04f11d672091e700558831755895cc8c3faf7a58c96379e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab27eefb1178986e04f11d672091e700558831755895cc8c3faf7a58c96379e2->enter($__internal_ab27eefb1178986e04f11d672091e700558831755895cc8c3faf7a58c96379e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_eec6757d3f5d61b4a7d77a7a7ad6ed5feb85161bad1ce1939bbd0dd0b40fca2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eec6757d3f5d61b4a7d77a7a7ad6ed5feb85161bad1ce1939bbd0dd0b40fca2a->enter($__internal_eec6757d3f5d61b4a7d77a7a7ad6ed5feb85161bad1ce1939bbd0dd0b40fca2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_eec6757d3f5d61b4a7d77a7a7ad6ed5feb85161bad1ce1939bbd0dd0b40fca2a->leave($__internal_eec6757d3f5d61b4a7d77a7a7ad6ed5feb85161bad1ce1939bbd0dd0b40fca2a_prof);

        
        $__internal_ab27eefb1178986e04f11d672091e700558831755895cc8c3faf7a58c96379e2->leave($__internal_ab27eefb1178986e04f11d672091e700558831755895cc8c3faf7a58c96379e2_prof);

    }

    // line 160
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_d4b4a14358eecca90366ca86cd975d5eb7958e50eb2e202b98e1df159ebd5792 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4b4a14358eecca90366ca86cd975d5eb7958e50eb2e202b98e1df159ebd5792->enter($__internal_d4b4a14358eecca90366ca86cd975d5eb7958e50eb2e202b98e1df159ebd5792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_113ae6f5afaa359f0318b1c592723a750d1a3c5b87e22cfd178b6ae553bf9520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_113ae6f5afaa359f0318b1c592723a750d1a3c5b87e22cfd178b6ae553bf9520->enter($__internal_113ae6f5afaa359f0318b1c592723a750d1a3c5b87e22cfd178b6ae553bf9520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_113ae6f5afaa359f0318b1c592723a750d1a3c5b87e22cfd178b6ae553bf9520->leave($__internal_113ae6f5afaa359f0318b1c592723a750d1a3c5b87e22cfd178b6ae553bf9520_prof);

        
        $__internal_d4b4a14358eecca90366ca86cd975d5eb7958e50eb2e202b98e1df159ebd5792->leave($__internal_d4b4a14358eecca90366ca86cd975d5eb7958e50eb2e202b98e1df159ebd5792_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  788 => 160,  771 => 153,  761 => 149,  754 => 145,  750 => 143,  747 => 142,  738 => 141,  709 => 139,  700 => 138,  687 => 134,  678 => 133,  667 => 154,  665 => 153,  660 => 150,  657 => 141,  655 => 138,  651 => 136,  648 => 133,  639 => 132,  628 => 125,  626 => 122,  624 => 121,  615 => 120,  604 => 127,  602 => 120,  599 => 119,  590 => 118,  580 => 104,  574 => 101,  571 => 100,  569 => 99,  562 => 97,  559 => 96,  550 => 95,  540 => 108,  535 => 105,  533 => 95,  524 => 89,  519 => 86,  514 => 84,  511 => 83,  509 => 82,  505 => 81,  502 => 80,  500 => 79,  494 => 77,  485 => 76,  473 => 109,  471 => 76,  467 => 74,  464 => 73,  455 => 72,  442 => 66,  433 => 65,  424 => 64,  412 => 112,  410 => 72,  405 => 69,  403 => 64,  396 => 60,  392 => 58,  383 => 57,  372 => 156,  370 => 132,  365 => 129,  363 => 118,  358 => 115,  356 => 57,  353 => 56,  344 => 55,  311 => 53,  300 => 165,  291 => 163,  287 => 162,  284 => 161,  282 => 160,  278 => 158,  276 => 55,  266 => 53,  257 => 52,  236 => 30,  227 => 29,  215 => 43,  212 => 42,  209 => 29,  200 => 28,  185 => 25,  182 => 24,  173 => 23,  160 => 15,  154 => 13,  145 => 12,  127 => 10,  116 => 167,  114 => 52,  110 => 50,  105 => 48,  100 => 47,  98 => 46,  95 => 45,  93 => 28,  90 => 27,  88 => 23,  85 => 22,  76 => 20,  72 => 19,  69 => 18,  67 => 12,  62 => 10,  51 => 2,  48 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale|split('_')|first|default('en') }}\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>

        {% block head_stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/easyadmin-all.min.css') }}\">
            <style>
                {{ easyadmin_config('_internal.custom_css')|raw }}
            </style>
        {% endblock %}

        {% for css_asset in easyadmin_config('design.assets.css') %}
            <link rel=\"stylesheet\" href=\"{{ asset(css_asset) }}\">
        {% endfor %}

        {% block head_favicon %}
            {% set favicon = easyadmin_config('design.assets.favicon') %}
            <link rel=\"icon\" type=\"{{ favicon.mime_type }}\" href=\"{{ asset(favicon.path) }}\" />
        {% endblock %}

        {% block head_javascript %}
            {% block adminlte_options %}
                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            {% endblock %}

            <script src=\"{{ asset('bundles/easyadmin/javascript/easyadmin-all.min.js') }}\"></script>
        {% endblock head_javascript %}

        {% if easyadmin_config('design.rtl') %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/bootstrap-rtl.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/adminlte-rtl.min.css') }}\">
        {% endif %}
    </head>

    {% block body %}
    <body id=\"{% block body_id %}{% endblock %}\" class=\"easyadmin sidebar-mini {% block body_class %}{% endblock %} {{ app.request.cookies.has('_easyadmin_navigation_iscollapsed') ? 'sidebar-collapse' }}\">
        <div class=\"wrapper\">
        {% block wrapper %}
            <header class=\"main-header\">
            {% block header %}
                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">{{ 'toggle_navigation'|trans(domain = 'EasyAdminBundle') }}</span>
                    </a>

                    <div id=\"header-logo\">
                        {% block header_logo %}
                            <a class=\"logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}\" title=\"{{ easyadmin_config('site_name')|striptags }}\" href=\"{{ path('easyadmin') }}\">
                                {{ easyadmin_config('site_name')|raw }}
                            </a>
                        {% endblock header_logo %}
                    </div>

                    <div class=\"navbar-custom-menu\">
                    {% block header_custom_menu %}
                        {% set _logout_path = easyadmin_logout_path() %}
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                {% block user_menu %}
                                    <span class=\"sr-only\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>

                                    {% if app.user|default(false) == false %}
                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}
                                    {% elseif not _logout_path %}
                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                    {% else %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                {% block user_menu_dropdown %}
                                                <li>
                                                    <a href=\"{{ _logout_path }}\"><i class=\"fa fa-sign-out\"></i> {{ 'user.signout'|trans(domain = 'EasyAdminBundle') }}</a>
                                                </li>
                                                {% if is_granted('ROLE_PREVIOUS_ADMIN') %}
                                                    <li>
                                                        <a href=\"?_switch_user=_exit\"><i class=\"fa fa-sign-out\"></i> {{ 'user.exit_impersonation'|trans(domain = 'EasyAdminBundle') }}</a>
                                                    </li>
                                                {% endif %}
                                                {% endblock user_menu_dropdown %}
                                            </ul>
                                        </div>
                                    {% endif %}
                                {% endblock user_menu %}
                            </li>
                        </ul>
                    {% endblock header_custom_menu %}
                    </div>
                </nav>
            {% endblock header %}
            </header>

            <aside class=\"main-sidebar\">
            {% block sidebar %}
                <section class=\"sidebar\">
                    {% block main_menu_wrapper %}
                        {{ include([
                            _entity_config is defined ? _entity_config.templates.menu,
                            easyadmin_config('design.templates.menu'),
                            '@EasyAdmin/default/menu.html.twig'
                        ]) }}
                    {% endblock main_menu_wrapper %}
                </section>
            {% endblock sidebar %}
            </aside>

            <div class=\"content-wrapper\">
            {% block content %}
                {% block flash_messages %}
                    {{ include(_entity_config is defined ? _entity_config.templates.flash_messages : '@EasyAdmin/default/flash_messages.html.twig') }}
                {% endblock flash_messages %}

                <section class=\"content-header\">
                {% block content_header %}
                    <h1 class=\"title\">{% block content_title %}{% endblock %}</h1>
                {% endblock content_header %}
                {% block content_help %}
                    {% if _entity_config is defined and _entity_config[app.request.query.get('action')]['help']|default(false) %}
                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                {{ _entity_config[app.request.query.get('action')]['help']|trans|raw }}
                            </div>
                        </div>
                    {% endif %}
                {% endblock content_help %}
                </section>

                <section id=\"main\" class=\"content\">
                    {% block main %}{% endblock %}
                </section>
            {% endblock content %}
            </div>
        {% endblock wrapper %}
        </div>

        {% block body_javascript %}{% endblock body_javascript %}

        {% for js_asset in easyadmin_config('design.assets.js') %}
            <script src=\"{{ asset(js_asset) }}\"></script>
        {% endfor %}
    </body>
    {% endblock body %}
</html>
", "EasyAdminBundle:default:layout.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/layout.html.twig");
    }
}
