<?php

/* FOSCommentBundle:Thread:comment_content.html.twig */
class __TwigTemplate_b077f3b5d88a93a887b397197075c107eb98f621848054dfd7d2b11349491474 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_comment_comment' => array($this, 'block_fos_comment_comment'),
            'fos_comment_comment_metas' => array($this, 'block_fos_comment_comment_metas'),
            'fos_comment_comment_metas_authorline' => array($this, 'block_fos_comment_comment_metas_authorline'),
            'fos_comment_comment_metas_edit' => array($this, 'block_fos_comment_comment_metas_edit'),
            'fos_comment_comment_metas_delete' => array($this, 'block_fos_comment_comment_metas_delete'),
            'fos_comment_comment_metas_voting' => array($this, 'block_fos_comment_comment_metas_voting'),
            'fos_comment_comment_body' => array($this, 'block_fos_comment_comment_body'),
            'fos_comment_comment_children' => array($this, 'block_fos_comment_comment_children'),
            'fos_comment_comment_reply' => array($this, 'block_fos_comment_comment_reply'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b32a82bcc187a3a52c06dc8782cb3f0d54ca0095ba4b4b68ce2457098dad7b3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b32a82bcc187a3a52c06dc8782cb3f0d54ca0095ba4b4b68ce2457098dad7b3b->enter($__internal_b32a82bcc187a3a52c06dc8782cb3f0d54ca0095ba4b4b68ce2457098dad7b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:comment_content.html.twig"));

        $__internal_ebdceae5d6bb4b31c5ddee7dcf873fc6e2762139298922f668ea8629a74a417e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebdceae5d6bb4b31c5ddee7dcf873fc6e2762139298922f668ea8629a74a417e->enter($__internal_ebdceae5d6bb4b31c5ddee7dcf873fc6e2762139298922f668ea8629a74a417e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSCommentBundle:Thread:comment_content.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('fos_comment_comment', $context, $blocks);
        
        $__internal_b32a82bcc187a3a52c06dc8782cb3f0d54ca0095ba4b4b68ce2457098dad7b3b->leave($__internal_b32a82bcc187a3a52c06dc8782cb3f0d54ca0095ba4b4b68ce2457098dad7b3b_prof);

        
        $__internal_ebdceae5d6bb4b31c5ddee7dcf873fc6e2762139298922f668ea8629a74a417e->leave($__internal_ebdceae5d6bb4b31c5ddee7dcf873fc6e2762139298922f668ea8629a74a417e_prof);

    }

    public function block_fos_comment_comment($context, array $blocks = array())
    {
        $__internal_36362f561b56ef121d297e213b73f02ce66181efc829d16c2cdea05958bee505 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36362f561b56ef121d297e213b73f02ce66181efc829d16c2cdea05958bee505->enter($__internal_36362f561b56ef121d297e213b73f02ce66181efc829d16c2cdea05958bee505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment"));

        $__internal_1c511648f4ea67ef3e176f2ef272536ffb333dde14ac42d4203c9854080003ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c511648f4ea67ef3e176f2ef272536ffb333dde14ac42d4203c9854080003ac->enter($__internal_1c511648f4ea67ef3e176f2ef272536ffb333dde14ac42d4203c9854080003ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment"));

        // line 13
        echo "<div id=\"fos_comment_";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "id", array()), "html", null, true);
        echo "\" class=\"fos_comment_comment_show fos_comment_comment_depth_";
        echo twig_escape_filter($this->env, ($context["depth"] ?? $this->getContext($context, "depth")), "html", null, true);
        echo "\" ";
        if ((array_key_exists("parent", $context) &&  !(null === ($context["parent"] ?? $this->getContext($context, "parent"))))) {
            echo "data-parent=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["parent"] ?? $this->getContext($context, "parent")), "id", array()), "html", null, true);
            echo "\"";
        }
        echo ">

    <div class=\"fos_comment_comment_metas\">
        ";
        // line 16
        $this->displayBlock('fos_comment_comment_metas', $context, $blocks);
        // line 56
        echo "    </div>

    <div id=\"fos_comment_comment_body_";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "id", array()), "html", null, true);
        echo "\" class=\"fos_comment_comment_body\">
        ";
        // line 59
        $this->displayBlock('fos_comment_comment_body', $context, $blocks);
        // line 70
        echo "    </div>

    ";
        // line 72
        $this->displayBlock('fos_comment_comment_children', $context, $blocks);
        // line 93
        echo "
</div>
";
        
        $__internal_1c511648f4ea67ef3e176f2ef272536ffb333dde14ac42d4203c9854080003ac->leave($__internal_1c511648f4ea67ef3e176f2ef272536ffb333dde14ac42d4203c9854080003ac_prof);

        
        $__internal_36362f561b56ef121d297e213b73f02ce66181efc829d16c2cdea05958bee505->leave($__internal_36362f561b56ef121d297e213b73f02ce66181efc829d16c2cdea05958bee505_prof);

    }

    // line 16
    public function block_fos_comment_comment_metas($context, array $blocks = array())
    {
        $__internal_cc8e5d76e68c12430a29488f0e4d5e036be26e24de864df2c20d455dd36effdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc8e5d76e68c12430a29488f0e4d5e036be26e24de864df2c20d455dd36effdb->enter($__internal_cc8e5d76e68c12430a29488f0e4d5e036be26e24de864df2c20d455dd36effdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas"));

        $__internal_5f11824f2c92bf192d1f66b7bec42eef965b48a2539212f2d37edf24a50e5f18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f11824f2c92bf192d1f66b7bec42eef965b48a2539212f2d37edf24a50e5f18->enter($__internal_5f11824f2c92bf192d1f66b7bec42eef965b48a2539212f2d37edf24a50e5f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas"));

        // line 17
        echo "            ";
        $this->displayBlock('fos_comment_comment_metas_authorline', $context, $blocks);
        // line 27
        echo "
            ";
        // line 28
        $this->displayBlock('fos_comment_comment_metas_edit', $context, $blocks);
        // line 33
        echo "
            ";
        // line 34
        $this->displayBlock('fos_comment_comment_metas_delete', $context, $blocks);
        // line 45
        echo "
            ";
        // line 46
        $this->displayBlock('fos_comment_comment_metas_voting', $context, $blocks);
        // line 55
        echo "        ";
        
        $__internal_5f11824f2c92bf192d1f66b7bec42eef965b48a2539212f2d37edf24a50e5f18->leave($__internal_5f11824f2c92bf192d1f66b7bec42eef965b48a2539212f2d37edf24a50e5f18_prof);

        
        $__internal_cc8e5d76e68c12430a29488f0e4d5e036be26e24de864df2c20d455dd36effdb->leave($__internal_cc8e5d76e68c12430a29488f0e4d5e036be26e24de864df2c20d455dd36effdb_prof);

    }

    // line 17
    public function block_fos_comment_comment_metas_authorline($context, array $blocks = array())
    {
        $__internal_85e1ea75b1536b5ae035e33d027fa9a7526246c74a39d053d7f9fdc97170d31b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85e1ea75b1536b5ae035e33d027fa9a7526246c74a39d053d7f9fdc97170d31b->enter($__internal_85e1ea75b1536b5ae035e33d027fa9a7526246c74a39d053d7f9fdc97170d31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas_authorline"));

        $__internal_2df910b60e9bee6dfd60b55849b2d62e8b2296e066eec77291cae1aa5308ab1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2df910b60e9bee6dfd60b55849b2d62e8b2296e066eec77291cae1aa5308ab1a->enter($__internal_2df910b60e9bee6dfd60b55849b2d62e8b2296e066eec77291cae1aa5308ab1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas_authorline"));

        // line 18
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_show_by", array(), "FOSCommentBundle");
        // line 19
        echo "                <span class=\"fos_comment_comment_authorname\">
                    ";
        // line 20
        if ($this->env->getExtension('FOS\CommentBundle\Twig\CommentExtension')->isCommentInState(($context["comment"] ?? $this->getContext($context, "comment")), twig_constant("FOS\\CommentBundle\\Model\\CommentInterface::STATE_DELETED"))) {
            // line 21
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_deleted", array(), "FOSCommentBundle");
            // line 22
            echo "                    ";
        } else {
            // line 23
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "authorName", array()), "html", null, true);
            echo "
                    ";
        }
        // line 25
        echo "                </span> - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "createdAt", array())), "html", null, true);
        echo "
            ";
        
        $__internal_2df910b60e9bee6dfd60b55849b2d62e8b2296e066eec77291cae1aa5308ab1a->leave($__internal_2df910b60e9bee6dfd60b55849b2d62e8b2296e066eec77291cae1aa5308ab1a_prof);

        
        $__internal_85e1ea75b1536b5ae035e33d027fa9a7526246c74a39d053d7f9fdc97170d31b->leave($__internal_85e1ea75b1536b5ae035e33d027fa9a7526246c74a39d053d7f9fdc97170d31b_prof);

    }

    // line 28
    public function block_fos_comment_comment_metas_edit($context, array $blocks = array())
    {
        $__internal_d6a6530c4f9dae0ab762b1d211573452609da6cb22fa898870d3886eaf62f59d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6a6530c4f9dae0ab762b1d211573452609da6cb22fa898870d3886eaf62f59d->enter($__internal_d6a6530c4f9dae0ab762b1d211573452609da6cb22fa898870d3886eaf62f59d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas_edit"));

        $__internal_58b0d99f1ee5fd171f1ce45885b49a70ae11d784da37253051f368b4b189cdb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58b0d99f1ee5fd171f1ce45885b49a70ae11d784da37253051f368b4b189cdb2->enter($__internal_58b0d99f1ee5fd171f1ce45885b49a70ae11d784da37253051f368b4b189cdb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas_edit"));

        // line 29
        echo "                ";
        if ($this->env->getExtension('FOS\CommentBundle\Twig\CommentExtension')->canEditComment(($context["comment"] ?? $this->getContext($context, "comment")))) {
            // line 30
            echo "                <button data-container=\"#fos_comment_comment_body_";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "id", array()), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_comment_edit_thread_comment", array("id" => $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "thread", array()), "id", array()), "commentId" => $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "id", array()))), "html", null, true);
            echo "\" class=\"fos_comment_comment_edit_show_form\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_edit", array(), "FOSCommentBundle");
            echo "</button>
                ";
        }
        // line 32
        echo "            ";
        
        $__internal_58b0d99f1ee5fd171f1ce45885b49a70ae11d784da37253051f368b4b189cdb2->leave($__internal_58b0d99f1ee5fd171f1ce45885b49a70ae11d784da37253051f368b4b189cdb2_prof);

        
        $__internal_d6a6530c4f9dae0ab762b1d211573452609da6cb22fa898870d3886eaf62f59d->leave($__internal_d6a6530c4f9dae0ab762b1d211573452609da6cb22fa898870d3886eaf62f59d_prof);

    }

    // line 34
    public function block_fos_comment_comment_metas_delete($context, array $blocks = array())
    {
        $__internal_a185937007d252749e9d151393025fa2fc668ed80ab4f6965b5c5a05bb60f8c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a185937007d252749e9d151393025fa2fc668ed80ab4f6965b5c5a05bb60f8c5->enter($__internal_a185937007d252749e9d151393025fa2fc668ed80ab4f6965b5c5a05bb60f8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas_delete"));

        $__internal_580804bdbc5469c2288a2878786e826c138cbcb11f9b7cd3e0d93f033ed0da14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_580804bdbc5469c2288a2878786e826c138cbcb11f9b7cd3e0d93f033ed0da14->enter($__internal_580804bdbc5469c2288a2878786e826c138cbcb11f9b7cd3e0d93f033ed0da14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas_delete"));

        // line 35
        echo "                ";
        if ($this->env->getExtension('FOS\CommentBundle\Twig\CommentExtension')->canDeleteComment(($context["comment"] ?? $this->getContext($context, "comment")))) {
            // line 36
            echo "                    ";
            if ($this->env->getExtension('FOS\CommentBundle\Twig\CommentExtension')->isCommentInState(($context["comment"] ?? $this->getContext($context, "comment")), twig_constant("FOS\\CommentBundle\\Model\\CommentInterface::STATE_DELETED"))) {
                // line 37
                echo "                        ";
                // line 38
                echo "                        <button data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_comment_remove_thread_comment", array("id" => $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "thread", array()), "id", array()), "commentId" => $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "id", array()), "value" => twig_constant("FOS\\CommentBundle\\Model\\CommentInterface::STATE_VISIBLE"))), "html", null, true);
                echo "\" class=\"fos_comment_comment_remove\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_undelete", array(), "FOSCommentBundle");
                echo "</button>
                    ";
            } else {
                // line 40
                echo "                        ";
                // line 41
                echo "                        <button data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_comment_remove_thread_comment", array("id" => $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "thread", array()), "id", array()), "commentId" => $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "id", array()), "value" => twig_constant("FOS\\CommentBundle\\Model\\CommentInterface::STATE_DELETED"))), "html", null, true);
                echo "\" class=\"fos_comment_comment_remove\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_delete", array(), "FOSCommentBundle");
                echo "</button>
                    ";
            }
            // line 43
            echo "                ";
        }
        // line 44
        echo "            ";
        
        $__internal_580804bdbc5469c2288a2878786e826c138cbcb11f9b7cd3e0d93f033ed0da14->leave($__internal_580804bdbc5469c2288a2878786e826c138cbcb11f9b7cd3e0d93f033ed0da14_prof);

        
        $__internal_a185937007d252749e9d151393025fa2fc668ed80ab4f6965b5c5a05bb60f8c5->leave($__internal_a185937007d252749e9d151393025fa2fc668ed80ab4f6965b5c5a05bb60f8c5_prof);

    }

    // line 46
    public function block_fos_comment_comment_metas_voting($context, array $blocks = array())
    {
        $__internal_e36fce8ff7787c4d1614f54b286fb07ff8a701ab2707584763438622cc83e582 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e36fce8ff7787c4d1614f54b286fb07ff8a701ab2707584763438622cc83e582->enter($__internal_e36fce8ff7787c4d1614f54b286fb07ff8a701ab2707584763438622cc83e582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas_voting"));

        $__internal_8beaa96304ff29fc8a2cd4b1591a10ee881ee267893f1246a4d92014690cf273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8beaa96304ff29fc8a2cd4b1591a10ee881ee267893f1246a4d92014690cf273->enter($__internal_8beaa96304ff29fc8a2cd4b1591a10ee881ee267893f1246a4d92014690cf273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas_voting"));

        // line 47
        echo "                ";
        if ($this->env->getExtension('FOS\CommentBundle\Twig\CommentExtension')->canVote(($context["comment"] ?? $this->getContext($context, "comment")))) {
            // line 48
            echo "                    <div class=\"fos_comment_comment_voting\">
                        <button data-url=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_comment_new_thread_comment_votes", array("id" => $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "thread", array()), "id", array()), "commentId" => $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "id", array()), "value" => 1)), "html", null, true);
            echo "\" class=\"fos_comment_comment_vote\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_show_voteup", array(), "FOSCommentBundle");
            echo "</button>
                        <button data-url=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_comment_new_thread_comment_votes", array("id" => $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "thread", array()), "id", array()), "commentId" => $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "id", array()), "value" =>  -1)), "html", null, true);
            echo "\" class=\"fos_comment_comment_vote\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_show_votedown", array(), "FOSCommentBundle");
            echo "</button>
                        <div class=\"fos_comment_comment_score\" id=\"fos_comment_score_";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "id", array()), "html", null, true);
            echo "\">";
            $this->loadTemplate("FOSCommentBundle:Thread:comment_votes.html.twig", "FOSCommentBundle:Thread:comment_content.html.twig", 51)->display(array_merge($context, array("commentScore" => $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "score", array()))));
            echo "</div>
                    </div>
                ";
        }
        // line 54
        echo "            ";
        
        $__internal_8beaa96304ff29fc8a2cd4b1591a10ee881ee267893f1246a4d92014690cf273->leave($__internal_8beaa96304ff29fc8a2cd4b1591a10ee881ee267893f1246a4d92014690cf273_prof);

        
        $__internal_e36fce8ff7787c4d1614f54b286fb07ff8a701ab2707584763438622cc83e582->leave($__internal_e36fce8ff7787c4d1614f54b286fb07ff8a701ab2707584763438622cc83e582_prof);

    }

    // line 59
    public function block_fos_comment_comment_body($context, array $blocks = array())
    {
        $__internal_e6853de24289837b46a7de85260552d57d03d8d137c5964a08397e5637d01049 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6853de24289837b46a7de85260552d57d03d8d137c5964a08397e5637d01049->enter($__internal_e6853de24289837b46a7de85260552d57d03d8d137c5964a08397e5637d01049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_body"));

        $__internal_31a37d3e9ac8c1110169d73f4b6113634e15bd94c344d6912a2d88ed783b953f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31a37d3e9ac8c1110169d73f4b6113634e15bd94c344d6912a2d88ed783b953f->enter($__internal_31a37d3e9ac8c1110169d73f4b6113634e15bd94c344d6912a2d88ed783b953f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_body"));

        // line 60
        echo "            ";
        if ($this->env->getExtension('FOS\CommentBundle\Twig\CommentExtension')->isCommentInState(($context["comment"] ?? $this->getContext($context, "comment")), twig_constant("FOS\\CommentBundle\\Model\\CommentInterface::STATE_DELETED"))) {
            // line 61
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_deleted", array(), "FOSCommentBundle");
            // line 62
            echo "            ";
        } else {
            // line 63
            echo "                ";
            if ($this->env->getExtension('FOS\CommentBundle\Twig\CommentExtension')->isRawComment(($context["comment"] ?? $this->getContext($context, "comment")))) {
                // line 64
                echo "                    ";
                echo $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "rawBody", array());
                echo "
                ";
            } else {
                // line 66
                echo "                    ";
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "body", array()), "html", null, true));
                echo "
                ";
            }
            // line 68
            echo "            ";
        }
        // line 69
        echo "        ";
        
        $__internal_31a37d3e9ac8c1110169d73f4b6113634e15bd94c344d6912a2d88ed783b953f->leave($__internal_31a37d3e9ac8c1110169d73f4b6113634e15bd94c344d6912a2d88ed783b953f_prof);

        
        $__internal_e6853de24289837b46a7de85260552d57d03d8d137c5964a08397e5637d01049->leave($__internal_e6853de24289837b46a7de85260552d57d03d8d137c5964a08397e5637d01049_prof);

    }

    // line 72
    public function block_fos_comment_comment_children($context, array $blocks = array())
    {
        $__internal_ca6c4fd3273de1be0a7a6748686cc72dda5cce5e65e6ed25a9e29785da490138 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca6c4fd3273de1be0a7a6748686cc72dda5cce5e65e6ed25a9e29785da490138->enter($__internal_ca6c4fd3273de1be0a7a6748686cc72dda5cce5e65e6ed25a9e29785da490138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_children"));

        $__internal_44fb94dfe41184c573e2e805627adeb10bd64deba099d7ffad2e04e074e587fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44fb94dfe41184c573e2e805627adeb10bd64deba099d7ffad2e04e074e587fc->enter($__internal_44fb94dfe41184c573e2e805627adeb10bd64deba099d7ffad2e04e074e587fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_children"));

        // line 73
        echo "        ";
        if ( !(($context["view"] ?? $this->getContext($context, "view")) === "flat")) {
            // line 74
            echo "            ";
            if ($this->env->getExtension('FOS\CommentBundle\Twig\CommentExtension')->canComment(($context["comment"] ?? $this->getContext($context, "comment")))) {
                // line 75
                echo "                <div class=\"fos_comment_comment_reply\">
                    ";
                // line 76
                $this->displayBlock('fos_comment_comment_reply', $context, $blocks);
                // line 79
                echo "                </div>
            ";
            }
            // line 81
            echo "
            <div class=\"fos_comment_comment_replies\">

                ";
            // line 84
            if (array_key_exists("children", $context)) {
                // line 85
                echo "                    ";
                $this->loadTemplate("FOSCommentBundle:Thread:comments.html.twig", "FOSCommentBundle:Thread:comment_content.html.twig", 85)->display(array_merge($context, array("comments" => ($context["children"] ?? $this->getContext($context, "children")), "depth" => (($context["depth"] ?? $this->getContext($context, "depth")) + 1), "parent" => ($context["comment"] ?? $this->getContext($context, "comment")), "view" => ($context["view"] ?? $this->getContext($context, "view")))));
                // line 86
                echo "                ";
            }
            // line 87
            echo "
            </div>
        ";
        } elseif (((        // line 89
($context["view"] ?? $this->getContext($context, "view")) === "flat") && array_key_exists("children", $context))) {
            // line 90
            echo "            ";
            $this->loadTemplate("FOSCommentBundle:Thread:comments.html.twig", "FOSCommentBundle:Thread:comment_content.html.twig", 90)->display(array_merge($context, array("comments" => ($context["children"] ?? $this->getContext($context, "children")), "depth" => (($context["depth"] ?? $this->getContext($context, "depth")) + 1), "parent" => ($context["comment"] ?? $this->getContext($context, "comment")), "view" => ($context["view"] ?? $this->getContext($context, "view")))));
            // line 91
            echo "        ";
        }
        // line 92
        echo "    ";
        
        $__internal_44fb94dfe41184c573e2e805627adeb10bd64deba099d7ffad2e04e074e587fc->leave($__internal_44fb94dfe41184c573e2e805627adeb10bd64deba099d7ffad2e04e074e587fc_prof);

        
        $__internal_ca6c4fd3273de1be0a7a6748686cc72dda5cce5e65e6ed25a9e29785da490138->leave($__internal_ca6c4fd3273de1be0a7a6748686cc72dda5cce5e65e6ed25a9e29785da490138_prof);

    }

    // line 76
    public function block_fos_comment_comment_reply($context, array $blocks = array())
    {
        $__internal_8184c0460cb7d2454d38cead6ee07c21518ac17064389692398fbbee4925b33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8184c0460cb7d2454d38cead6ee07c21518ac17064389692398fbbee4925b33e->enter($__internal_8184c0460cb7d2454d38cead6ee07c21518ac17064389692398fbbee4925b33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_reply"));

        $__internal_a740574ea036b6d5c661f33e23d35b53973f61efc9699ee6df40fc07ba05c682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a740574ea036b6d5c661f33e23d35b53973f61efc9699ee6df40fc07ba05c682->enter($__internal_a740574ea036b6d5c661f33e23d35b53973f61efc9699ee6df40fc07ba05c682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_reply"));

        // line 77
        echo "                        <button data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_comment_new_thread_comments", array("id" => $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "thread", array()), "id", array()))), "html", null, true);
        echo "\" data-name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "authorName", array()), "html", null, true);
        echo "\" data-parent-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "id", array()), "html", null, true);
        echo "\" class=\"fos_comment_comment_reply_show_form\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_show_reply", array(), "FOSCommentBundle");
        echo "</button>
                    ";
        
        $__internal_a740574ea036b6d5c661f33e23d35b53973f61efc9699ee6df40fc07ba05c682->leave($__internal_a740574ea036b6d5c661f33e23d35b53973f61efc9699ee6df40fc07ba05c682_prof);

        
        $__internal_8184c0460cb7d2454d38cead6ee07c21518ac17064389692398fbbee4925b33e->leave($__internal_8184c0460cb7d2454d38cead6ee07c21518ac17064389692398fbbee4925b33e_prof);

    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:comment_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  418 => 77,  409 => 76,  399 => 92,  396 => 91,  393 => 90,  391 => 89,  387 => 87,  384 => 86,  381 => 85,  379 => 84,  374 => 81,  370 => 79,  368 => 76,  365 => 75,  362 => 74,  359 => 73,  350 => 72,  340 => 69,  337 => 68,  331 => 66,  325 => 64,  322 => 63,  319 => 62,  316 => 61,  313 => 60,  304 => 59,  294 => 54,  286 => 51,  280 => 50,  274 => 49,  271 => 48,  268 => 47,  259 => 46,  249 => 44,  246 => 43,  238 => 41,  236 => 40,  228 => 38,  226 => 37,  223 => 36,  220 => 35,  211 => 34,  201 => 32,  191 => 30,  188 => 29,  179 => 28,  166 => 25,  160 => 23,  157 => 22,  154 => 21,  152 => 20,  149 => 19,  146 => 18,  137 => 17,  127 => 55,  125 => 46,  122 => 45,  120 => 34,  117 => 33,  115 => 28,  112 => 27,  109 => 17,  100 => 16,  88 => 93,  86 => 72,  82 => 70,  80 => 59,  76 => 58,  72 => 56,  70 => 16,  55 => 13,  37 => 12,  34 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

 This file is part of the FOSCommentBundle package.

 (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>

 This source file is subject to the MIT license that is bundled
 with this source code in the file LICENSE.

#}

{% block fos_comment_comment %}
<div id=\"fos_comment_{{ comment.id }}\" class=\"fos_comment_comment_show fos_comment_comment_depth_{{ depth }}\" {% if parent is defined and parent is not null %}data-parent=\"{{ parent.id }}\"{% endif %}>

    <div class=\"fos_comment_comment_metas\">
        {% block fos_comment_comment_metas %}
            {% block fos_comment_comment_metas_authorline %}
                {% trans from 'FOSCommentBundle' %}fos_comment_comment_show_by{% endtrans %}
                <span class=\"fos_comment_comment_authorname\">
                    {% if comment is fos_comment_in_state(constant('FOS\\\\CommentBundle\\\\Model\\\\CommentInterface::STATE_DELETED')) %}
                {% trans from 'FOSCommentBundle' %}fos_comment_comment_deleted{% endtrans %}
                    {% else %}
                        {{ comment.authorName }}
                    {% endif %}
                </span> - {{ comment.createdAt|date }}
            {% endblock fos_comment_comment_metas_authorline %}

            {% block fos_comment_comment_metas_edit %}
                {% if fos_comment_can_edit_comment(comment) %}
                <button data-container=\"#fos_comment_comment_body_{{ comment.id }}\" data-url=\"{{ url(\"fos_comment_edit_thread_comment\", {\"id\": comment.thread.id, \"commentId\": comment.id}) }}\" class=\"fos_comment_comment_edit_show_form\">{% trans from 'FOSCommentBundle' %}fos_comment_comment_edit{% endtrans %}</button>
                {% endif %}
            {% endblock fos_comment_comment_metas_edit %}

            {% block fos_comment_comment_metas_delete %}
                {% if fos_comment_can_delete_comment(comment) %}
                    {% if comment is fos_comment_in_state(constant('FOS\\\\CommentBundle\\\\Model\\\\CommentInterface::STATE_DELETED')) %}
                        {# undelete #}
                        <button data-url=\"{{ url(\"fos_comment_remove_thread_comment\", {\"id\": comment.thread.id, \"commentId\": comment.id, \"value\": constant('FOS\\\\CommentBundle\\\\Model\\\\CommentInterface::STATE_VISIBLE') }) }}\" class=\"fos_comment_comment_remove\">{% trans from 'FOSCommentBundle' %}fos_comment_comment_undelete{% endtrans %}</button>
                    {% else %}
                        {# delete #}
                        <button data-url=\"{{ url(\"fos_comment_remove_thread_comment\", {\"id\": comment.thread.id, \"commentId\": comment.id, \"value\":  constant('FOS\\\\CommentBundle\\\\Model\\\\CommentInterface::STATE_DELETED')}) }}\" class=\"fos_comment_comment_remove\">{% trans from 'FOSCommentBundle' %}fos_comment_comment_delete{% endtrans %}</button>
                    {% endif %}
                {% endif %}
            {% endblock fos_comment_comment_metas_delete %}

            {% block fos_comment_comment_metas_voting %}
                {% if fos_comment_can_vote(comment) %}
                    <div class=\"fos_comment_comment_voting\">
                        <button data-url=\"{{ url(\"fos_comment_new_thread_comment_votes\", {\"id\": comment.thread.id, \"commentId\": comment.id, \"value\": 1}) }}\" class=\"fos_comment_comment_vote\">{% trans from 'FOSCommentBundle' %}fos_comment_comment_show_voteup{% endtrans %}</button>
                        <button data-url=\"{{ url(\"fos_comment_new_thread_comment_votes\", {\"id\": comment.thread.id, \"commentId\": comment.id, \"value\": -1}) }}\" class=\"fos_comment_comment_vote\">{% trans from 'FOSCommentBundle' %}fos_comment_comment_show_votedown{% endtrans %}</button>
                        <div class=\"fos_comment_comment_score\" id=\"fos_comment_score_{{ comment.id }}\">{% include \"FOSCommentBundle:Thread:comment_votes.html.twig\" with { 'commentScore': comment.score } %}</div>
                    </div>
                {% endif %}
            {% endblock fos_comment_comment_metas_voting %}
        {% endblock fos_comment_comment_metas %}
    </div>

    <div id=\"fos_comment_comment_body_{{ comment.id }}\" class=\"fos_comment_comment_body\">
        {% block fos_comment_comment_body %}
            {% if comment is fos_comment_in_state(constant('FOS\\\\CommentBundle\\\\Model\\\\CommentInterface::STATE_DELETED')) %}
                {% trans from 'FOSCommentBundle' %}fos_comment_comment_deleted{% endtrans %}
            {% else %}
                {% if comment is fos_comment_raw %}
                    {{ comment.rawBody | raw }}
                {% else %}
                    {{ comment.body | nl2br }}
                {% endif %}
            {% endif %}
        {% endblock fos_comment_comment_body %}
    </div>

    {% block fos_comment_comment_children %}
        {% if view is not same as('flat') %}
            {% if fos_comment_can_comment(comment) %}
                <div class=\"fos_comment_comment_reply\">
                    {% block fos_comment_comment_reply %}
                        <button data-url=\"{{ url('fos_comment_new_thread_comments', {\"id\": comment.thread.id}) }}\" data-name=\"{{ comment.authorName }}\" data-parent-id=\"{{ comment.id }}\" class=\"fos_comment_comment_reply_show_form\">{% trans from 'FOSCommentBundle' %}fos_comment_comment_show_reply{% endtrans %}</button>
                    {% endblock fos_comment_comment_reply %}
                </div>
            {% endif %}

            <div class=\"fos_comment_comment_replies\">

                {% if children is defined %}
                    {% include \"FOSCommentBundle:Thread:comments.html.twig\" with { \"comments\": children, \"depth\": depth + 1, \"parent\": comment, \"view\": view } %}
                {% endif %}

            </div>
        {% elseif view is same as('flat') and children is defined %}
            {% include \"FOSCommentBundle:Thread:comments.html.twig\" with { \"comments\": children, \"depth\": depth + 1, \"parent\": comment, \"view\": view } %}
        {% endif %}
    {% endblock fos_comment_comment_children %}

</div>
{% endblock fos_comment_comment %}
", "FOSCommentBundle:Thread:comment_content.html.twig", "/home/ichinator/Bureau/MesProjetsGIT/Restaurant/vendor/friendsofsymfony/comment-bundle/FOS/CommentBundle/Resources/views/Thread/comment_content.html.twig");
    }
}
