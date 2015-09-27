<?php

/* base.html.twig */
class __TwigTemplate_41c85a03232f72465671816e18921cc049547f3be3d382ea1518066d03ed8083 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c43c32f45b5cca0502f49540e36f0cf56bb5965f712ff139feccdcae7dc1c9ca = $this->env->getExtension("native_profiler");
        $__internal_c43c32f45b5cca0502f49540e36f0cf56bb5965f712ff139feccdcae7dc1c9ca->enter($__internal_c43c32f45b5cca0502f49540e36f0cf56bb5965f712ff139feccdcae7dc1c9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c43c32f45b5cca0502f49540e36f0cf56bb5965f712ff139feccdcae7dc1c9ca->leave($__internal_c43c32f45b5cca0502f49540e36f0cf56bb5965f712ff139feccdcae7dc1c9ca_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_568cca2334245fcd03a4447d112f1fff210e84234082870c1fc72cd3b147e3c2 = $this->env->getExtension("native_profiler");
        $__internal_568cca2334245fcd03a4447d112f1fff210e84234082870c1fc72cd3b147e3c2->enter($__internal_568cca2334245fcd03a4447d112f1fff210e84234082870c1fc72cd3b147e3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_568cca2334245fcd03a4447d112f1fff210e84234082870c1fc72cd3b147e3c2->leave($__internal_568cca2334245fcd03a4447d112f1fff210e84234082870c1fc72cd3b147e3c2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_22d702e6cc485c7f0e9751960aca29b97bb6dcab7119bff165ade1b6c57bccd4 = $this->env->getExtension("native_profiler");
        $__internal_22d702e6cc485c7f0e9751960aca29b97bb6dcab7119bff165ade1b6c57bccd4->enter($__internal_22d702e6cc485c7f0e9751960aca29b97bb6dcab7119bff165ade1b6c57bccd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_22d702e6cc485c7f0e9751960aca29b97bb6dcab7119bff165ade1b6c57bccd4->leave($__internal_22d702e6cc485c7f0e9751960aca29b97bb6dcab7119bff165ade1b6c57bccd4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5dd539773bac2d44716f40e65190e41d88fe8bf87fb0781fcaa2d35187a7a3a = $this->env->getExtension("native_profiler");
        $__internal_c5dd539773bac2d44716f40e65190e41d88fe8bf87fb0781fcaa2d35187a7a3a->enter($__internal_c5dd539773bac2d44716f40e65190e41d88fe8bf87fb0781fcaa2d35187a7a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c5dd539773bac2d44716f40e65190e41d88fe8bf87fb0781fcaa2d35187a7a3a->leave($__internal_c5dd539773bac2d44716f40e65190e41d88fe8bf87fb0781fcaa2d35187a7a3a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9e9dc2c5e20674ece74d72b21cdee1de30e4eb8474c26f6983b9a01b0409c08e = $this->env->getExtension("native_profiler");
        $__internal_9e9dc2c5e20674ece74d72b21cdee1de30e4eb8474c26f6983b9a01b0409c08e->enter($__internal_9e9dc2c5e20674ece74d72b21cdee1de30e4eb8474c26f6983b9a01b0409c08e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9e9dc2c5e20674ece74d72b21cdee1de30e4eb8474c26f6983b9a01b0409c08e->leave($__internal_9e9dc2c5e20674ece74d72b21cdee1de30e4eb8474c26f6983b9a01b0409c08e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
