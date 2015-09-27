<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_d4239db2f5c92dc12def3a88f920c48c53ff69ef0bd7753f4137be3ae2cb36c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0b78d5b16e4c6a5ea6ff537a84d34ae43637ce1625164237b00443b28af2587 = $this->env->getExtension("native_profiler");
        $__internal_a0b78d5b16e4c6a5ea6ff537a84d34ae43637ce1625164237b00443b28af2587->enter($__internal_a0b78d5b16e4c6a5ea6ff537a84d34ae43637ce1625164237b00443b28af2587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0b78d5b16e4c6a5ea6ff537a84d34ae43637ce1625164237b00443b28af2587->leave($__internal_a0b78d5b16e4c6a5ea6ff537a84d34ae43637ce1625164237b00443b28af2587_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4647e1cb6bac6751153086f07113a0c51a1cebd22284d5febff9e2dbfb8925aa = $this->env->getExtension("native_profiler");
        $__internal_4647e1cb6bac6751153086f07113a0c51a1cebd22284d5febff9e2dbfb8925aa->enter($__internal_4647e1cb6bac6751153086f07113a0c51a1cebd22284d5febff9e2dbfb8925aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_4647e1cb6bac6751153086f07113a0c51a1cebd22284d5febff9e2dbfb8925aa->leave($__internal_4647e1cb6bac6751153086f07113a0c51a1cebd22284d5febff9e2dbfb8925aa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
