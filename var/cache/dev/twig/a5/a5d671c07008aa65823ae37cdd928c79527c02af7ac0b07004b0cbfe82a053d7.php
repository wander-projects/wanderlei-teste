<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_65f5c266ad478db1dce824c6fcf9ad13f423e289d12eb85ceb0456806fb0508b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b5fe63bc4fc7b75d3ecbbed5deee409bbc5f05aad84aeae2b7ae50ec469392d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b5fe63bc4fc7b75d3ecbbed5deee409bbc5f05aad84aeae2b7ae50ec469392d->enter($__internal_8b5fe63bc4fc7b75d3ecbbed5deee409bbc5f05aad84aeae2b7ae50ec469392d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e9c0972b207c24ee7554001bb7485fab5c76d9c139114ef0bdb5c909f3ab8e75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9c0972b207c24ee7554001bb7485fab5c76d9c139114ef0bdb5c909f3ab8e75->enter($__internal_e9c0972b207c24ee7554001bb7485fab5c76d9c139114ef0bdb5c909f3ab8e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b5fe63bc4fc7b75d3ecbbed5deee409bbc5f05aad84aeae2b7ae50ec469392d->leave($__internal_8b5fe63bc4fc7b75d3ecbbed5deee409bbc5f05aad84aeae2b7ae50ec469392d_prof);

        
        $__internal_e9c0972b207c24ee7554001bb7485fab5c76d9c139114ef0bdb5c909f3ab8e75->leave($__internal_e9c0972b207c24ee7554001bb7485fab5c76d9c139114ef0bdb5c909f3ab8e75_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dcaf2c0a4af93634994ea494101dadcb483521beaccf3a62c06493d2888ed44f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcaf2c0a4af93634994ea494101dadcb483521beaccf3a62c06493d2888ed44f->enter($__internal_dcaf2c0a4af93634994ea494101dadcb483521beaccf3a62c06493d2888ed44f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7a20264c42d1fef278471495b353d99d33a64e7e4711b5afd924bf5b5d40c014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a20264c42d1fef278471495b353d99d33a64e7e4711b5afd924bf5b5d40c014->enter($__internal_7a20264c42d1fef278471495b353d99d33a64e7e4711b5afd924bf5b5d40c014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7a20264c42d1fef278471495b353d99d33a64e7e4711b5afd924bf5b5d40c014->leave($__internal_7a20264c42d1fef278471495b353d99d33a64e7e4711b5afd924bf5b5d40c014_prof);

        
        $__internal_dcaf2c0a4af93634994ea494101dadcb483521beaccf3a62c06493d2888ed44f->leave($__internal_dcaf2c0a4af93634994ea494101dadcb483521beaccf3a62c06493d2888ed44f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4db45edb9fb2825a6aff8e77fbf41c5509da2535c04a3ae035467d5445c25cb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4db45edb9fb2825a6aff8e77fbf41c5509da2535c04a3ae035467d5445c25cb0->enter($__internal_4db45edb9fb2825a6aff8e77fbf41c5509da2535c04a3ae035467d5445c25cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b7206dcae3347d8559be157e6cde43d6291e702f869870366c233652571a5700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7206dcae3347d8559be157e6cde43d6291e702f869870366c233652571a5700->enter($__internal_b7206dcae3347d8559be157e6cde43d6291e702f869870366c233652571a5700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b7206dcae3347d8559be157e6cde43d6291e702f869870366c233652571a5700->leave($__internal_b7206dcae3347d8559be157e6cde43d6291e702f869870366c233652571a5700_prof);

        
        $__internal_4db45edb9fb2825a6aff8e77fbf41c5509da2535c04a3ae035467d5445c25cb0->leave($__internal_4db45edb9fb2825a6aff8e77fbf41c5509da2535c04a3ae035467d5445c25cb0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fd681e343dc8d957b2c8f3c189799a19f781ee3c67134b9d42107fcc50ca2f6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd681e343dc8d957b2c8f3c189799a19f781ee3c67134b9d42107fcc50ca2f6f->enter($__internal_fd681e343dc8d957b2c8f3c189799a19f781ee3c67134b9d42107fcc50ca2f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9cb04673ac51122a10d8056ba9b47f96b1bf317ba8d240b0f58fe2796aa7539f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cb04673ac51122a10d8056ba9b47f96b1bf317ba8d240b0f58fe2796aa7539f->enter($__internal_9cb04673ac51122a10d8056ba9b47f96b1bf317ba8d240b0f58fe2796aa7539f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_9cb04673ac51122a10d8056ba9b47f96b1bf317ba8d240b0f58fe2796aa7539f->leave($__internal_9cb04673ac51122a10d8056ba9b47f96b1bf317ba8d240b0f58fe2796aa7539f_prof);

        
        $__internal_fd681e343dc8d957b2c8f3c189799a19f781ee3c67134b9d42107fcc50ca2f6f->leave($__internal_fd681e343dc8d957b2c8f3c189799a19f781ee3c67134b9d42107fcc50ca2f6f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/wanderlei-teste/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
