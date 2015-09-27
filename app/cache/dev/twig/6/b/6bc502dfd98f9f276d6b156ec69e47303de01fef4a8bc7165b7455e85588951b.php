<?php

/* Eliastre100HomeBundle:Pages:index.html.twig */
class __TwigTemplate_c37334dc16f8dbbebd8b74119fdc36febc466c17b95a31c6a2b66c3e44788fa9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e45de887fb4b2b5415c295f0e24a0f5e065da1e3ef3130d927b4afcf9198079 = $this->env->getExtension("native_profiler");
        $__internal_9e45de887fb4b2b5415c295f0e24a0f5e065da1e3ef3130d927b4afcf9198079->enter($__internal_9e45de887fb4b2b5415c295f0e24a0f5e065da1e3ef3130d927b4afcf9198079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Eliastre100HomeBundle:Pages:index.html.twig"));

        // line 1
        echo "<html>
\t<head>
\t\t<title>Welcome !</title>
\t\t<meta charset=\"utf-8\" />
\t</head>
\t<body>
\t\t<h1>Welcome to your plug.dj like website !</h1>
\t\t<p>You can customize every page to fit like you want.<br>
\t\tyou have to <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\" >log in</a> to view all pages or <a href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" >register</a> if you haven't already created an account</p>
\t<hr />
\t<div>
\t\t<h2>Home page</h2>
\t\t<p>You can customize this page by editing the src/Eliastre100/HomeBundle/resouces/views/Pages/index.html.twig<br />Note that for all page you can overload all pages <a href=\"http://symfony.com/doc/current/cookbook/bundles/override.html\" >according to the documentation</a></p>
\t</body>
</html>
";
        
        $__internal_9e45de887fb4b2b5415c295f0e24a0f5e065da1e3ef3130d927b4afcf9198079->leave($__internal_9e45de887fb4b2b5415c295f0e24a0f5e065da1e3ef3130d927b4afcf9198079_prof);

    }

    public function getTemplateName()
    {
        return "Eliastre100HomeBundle:Pages:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 9,  22 => 1,);
    }
}
/* <html>*/
/* 	<head>*/
/* 		<title>Welcome !</title>*/
/* 		<meta charset="utf-8" />*/
/* 	</head>*/
/* 	<body>*/
/* 		<h1>Welcome to your plug.dj like website !</h1>*/
/* 		<p>You can customize every page to fit like you want.<br>*/
/* 		you have to <a href="{{ path('fos_user_security_login') }}" >log in</a> to view all pages or <a href="{{ path('fos_user_registration_register') }}" >register</a> if you haven't already created an account</p>*/
/* 	<hr />*/
/* 	<div>*/
/* 		<h2>Home page</h2>*/
/* 		<p>You can customize this page by editing the src/Eliastre100/HomeBundle/resouces/views/Pages/index.html.twig<br />Note that for all page you can overload all pages <a href="http://symfony.com/doc/current/cookbook/bundles/override.html" >according to the documentation</a></p>*/
/* 	</body>*/
/* </html>*/
/* */
