<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_3bedc1140f350b896fcfbde03c84c489b0460ee01084306ea2f2c01f25e9aac4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_b2f576481114b23abd8f5fc6f162e8963f3f03d6c6bfccdacfbbc57349639997 = $this->env->getExtension("native_profiler");
        $__internal_b2f576481114b23abd8f5fc6f162e8963f3f03d6c6bfccdacfbbc57349639997->enter($__internal_b2f576481114b23abd8f5fc6f162e8963f3f03d6c6bfccdacfbbc57349639997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2f576481114b23abd8f5fc6f162e8963f3f03d6c6bfccdacfbbc57349639997->leave($__internal_b2f576481114b23abd8f5fc6f162e8963f3f03d6c6bfccdacfbbc57349639997_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9350abea4475a77712d4528f9425c455709bc4607ebdd84982ea1f362fe91366 = $this->env->getExtension("native_profiler");
        $__internal_9350abea4475a77712d4528f9425c455709bc4607ebdd84982ea1f362fe91366->enter($__internal_9350abea4475a77712d4528f9425c455709bc4607ebdd84982ea1f362fe91366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_9350abea4475a77712d4528f9425c455709bc4607ebdd84982ea1f362fe91366->leave($__internal_9350abea4475a77712d4528f9425c455709bc4607ebdd84982ea1f362fe91366_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */