<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_8fce049fbf16f89a36467eaf1b6e57bf16599707724e28706e424440c90394a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7f8fd188251f923e20bc68a3a6a8ba230b13e303d5f82aad45d098956050ffd = $this->env->getExtension("native_profiler");
        $__internal_b7f8fd188251f923e20bc68a3a6a8ba230b13e303d5f82aad45d098956050ffd->enter($__internal_b7f8fd188251f923e20bc68a3a6a8ba230b13e303d5f82aad45d098956050ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7f8fd188251f923e20bc68a3a6a8ba230b13e303d5f82aad45d098956050ffd->leave($__internal_b7f8fd188251f923e20bc68a3a6a8ba230b13e303d5f82aad45d098956050ffd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6849668813bc5f3754633cb3b47b43cf9c8afa25b7a55c7225057d58fa86b594 = $this->env->getExtension("native_profiler");
        $__internal_6849668813bc5f3754633cb3b47b43cf9c8afa25b7a55c7225057d58fa86b594->enter($__internal_6849668813bc5f3754633cb3b47b43cf9c8afa25b7a55c7225057d58fa86b594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6849668813bc5f3754633cb3b47b43cf9c8afa25b7a55c7225057d58fa86b594->leave($__internal_6849668813bc5f3754633cb3b47b43cf9c8afa25b7a55c7225057d58fa86b594_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_86f870615be4de7f30d02ddbc81888651f49065200f857b1da023e38e0a9923c = $this->env->getExtension("native_profiler");
        $__internal_86f870615be4de7f30d02ddbc81888651f49065200f857b1da023e38e0a9923c->enter($__internal_86f870615be4de7f30d02ddbc81888651f49065200f857b1da023e38e0a9923c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_86f870615be4de7f30d02ddbc81888651f49065200f857b1da023e38e0a9923c->leave($__internal_86f870615be4de7f30d02ddbc81888651f49065200f857b1da023e38e0a9923c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_60f136a8ee045e3f52ebd384218874606c3cfffac661d0dcb1a76b040f30e111 = $this->env->getExtension("native_profiler");
        $__internal_60f136a8ee045e3f52ebd384218874606c3cfffac661d0dcb1a76b040f30e111->enter($__internal_60f136a8ee045e3f52ebd384218874606c3cfffac661d0dcb1a76b040f30e111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_60f136a8ee045e3f52ebd384218874606c3cfffac661d0dcb1a76b040f30e111->leave($__internal_60f136a8ee045e3f52ebd384218874606c3cfffac661d0dcb1a76b040f30e111_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
