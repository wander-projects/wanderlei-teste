<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e7ad76d1ac0107c627d653e57c0736e281bc1be1be61e74d5dda09374088e5fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1a9d32cd3a1be7c8273de814b8569de801a01b26523c8222f787cac754118f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1a9d32cd3a1be7c8273de814b8569de801a01b26523c8222f787cac754118f2->enter($__internal_f1a9d32cd3a1be7c8273de814b8569de801a01b26523c8222f787cac754118f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_908b4a197232c7af853303ed3cdfa3adad7efb88f74e9d74eb57d2fb2f1c7a91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_908b4a197232c7af853303ed3cdfa3adad7efb88f74e9d74eb57d2fb2f1c7a91->enter($__internal_908b4a197232c7af853303ed3cdfa3adad7efb88f74e9d74eb57d2fb2f1c7a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1a9d32cd3a1be7c8273de814b8569de801a01b26523c8222f787cac754118f2->leave($__internal_f1a9d32cd3a1be7c8273de814b8569de801a01b26523c8222f787cac754118f2_prof);

        
        $__internal_908b4a197232c7af853303ed3cdfa3adad7efb88f74e9d74eb57d2fb2f1c7a91->leave($__internal_908b4a197232c7af853303ed3cdfa3adad7efb88f74e9d74eb57d2fb2f1c7a91_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f856fd63d1acf2b56a27a46b91dcf6f105874ad8f189cd4272584461362b9825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f856fd63d1acf2b56a27a46b91dcf6f105874ad8f189cd4272584461362b9825->enter($__internal_f856fd63d1acf2b56a27a46b91dcf6f105874ad8f189cd4272584461362b9825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d50cbaf652187c125f1f5f55408627f5f191777cbcee206763d12eaa15ac5f86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d50cbaf652187c125f1f5f55408627f5f191777cbcee206763d12eaa15ac5f86->enter($__internal_d50cbaf652187c125f1f5f55408627f5f191777cbcee206763d12eaa15ac5f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_d50cbaf652187c125f1f5f55408627f5f191777cbcee206763d12eaa15ac5f86->leave($__internal_d50cbaf652187c125f1f5f55408627f5f191777cbcee206763d12eaa15ac5f86_prof);

        
        $__internal_f856fd63d1acf2b56a27a46b91dcf6f105874ad8f189cd4272584461362b9825->leave($__internal_f856fd63d1acf2b56a27a46b91dcf6f105874ad8f189cd4272584461362b9825_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_fcb8f753e1de0998373dc57584d861af3f10e64c819d477de0ce01ca2f8a194e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcb8f753e1de0998373dc57584d861af3f10e64c819d477de0ce01ca2f8a194e->enter($__internal_fcb8f753e1de0998373dc57584d861af3f10e64c819d477de0ce01ca2f8a194e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aa65dc92ca47218f5844a566dca40e0abbcae7dc68473d4b5fc990a2084ca3d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa65dc92ca47218f5844a566dca40e0abbcae7dc68473d4b5fc990a2084ca3d9->enter($__internal_aa65dc92ca47218f5844a566dca40e0abbcae7dc68473d4b5fc990a2084ca3d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_aa65dc92ca47218f5844a566dca40e0abbcae7dc68473d4b5fc990a2084ca3d9->leave($__internal_aa65dc92ca47218f5844a566dca40e0abbcae7dc68473d4b5fc990a2084ca3d9_prof);

        
        $__internal_fcb8f753e1de0998373dc57584d861af3f10e64c819d477de0ce01ca2f8a194e->leave($__internal_fcb8f753e1de0998373dc57584d861af3f10e64c819d477de0ce01ca2f8a194e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c31fdc652329d2f96b5c480949ecbd240a4e1c6cd2dccb265a0cf53723ad23e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c31fdc652329d2f96b5c480949ecbd240a4e1c6cd2dccb265a0cf53723ad23e2->enter($__internal_c31fdc652329d2f96b5c480949ecbd240a4e1c6cd2dccb265a0cf53723ad23e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_05556cfb88b4c02a24d278eba049867c7f0730dc925996cfb878e6a55014d655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05556cfb88b4c02a24d278eba049867c7f0730dc925996cfb878e6a55014d655->enter($__internal_05556cfb88b4c02a24d278eba049867c7f0730dc925996cfb878e6a55014d655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_05556cfb88b4c02a24d278eba049867c7f0730dc925996cfb878e6a55014d655->leave($__internal_05556cfb88b4c02a24d278eba049867c7f0730dc925996cfb878e6a55014d655_prof);

        
        $__internal_c31fdc652329d2f96b5c480949ecbd240a4e1c6cd2dccb265a0cf53723ad23e2->leave($__internal_c31fdc652329d2f96b5c480949ecbd240a4e1c6cd2dccb265a0cf53723ad23e2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/wanderlei-teste/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
