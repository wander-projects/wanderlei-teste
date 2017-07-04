<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_37c2c943d2afe2e5305f378a7cdd914eb4b6593aeaf72c443747a78ae521b6d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_82f21e97936ff9817fbe471c77806b16a2104c61d96e2acbc56cb091db7f94b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82f21e97936ff9817fbe471c77806b16a2104c61d96e2acbc56cb091db7f94b7->enter($__internal_82f21e97936ff9817fbe471c77806b16a2104c61d96e2acbc56cb091db7f94b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_82bb1b0c68424700e1a1f540cfa1e161a913c5b0288ccc3237540c1691d224e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82bb1b0c68424700e1a1f540cfa1e161a913c5b0288ccc3237540c1691d224e7->enter($__internal_82bb1b0c68424700e1a1f540cfa1e161a913c5b0288ccc3237540c1691d224e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82f21e97936ff9817fbe471c77806b16a2104c61d96e2acbc56cb091db7f94b7->leave($__internal_82f21e97936ff9817fbe471c77806b16a2104c61d96e2acbc56cb091db7f94b7_prof);

        
        $__internal_82bb1b0c68424700e1a1f540cfa1e161a913c5b0288ccc3237540c1691d224e7->leave($__internal_82bb1b0c68424700e1a1f540cfa1e161a913c5b0288ccc3237540c1691d224e7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_840a3e8d1051346d3f36fd539d6f2069495118bdededcf4f1369422ad7ed5448 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_840a3e8d1051346d3f36fd539d6f2069495118bdededcf4f1369422ad7ed5448->enter($__internal_840a3e8d1051346d3f36fd539d6f2069495118bdededcf4f1369422ad7ed5448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c7ac46c7e498bcf378fdd673b658fc7be171f1df9a065f5dc6a123e1fea9aa52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7ac46c7e498bcf378fdd673b658fc7be171f1df9a065f5dc6a123e1fea9aa52->enter($__internal_c7ac46c7e498bcf378fdd673b658fc7be171f1df9a065f5dc6a123e1fea9aa52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c7ac46c7e498bcf378fdd673b658fc7be171f1df9a065f5dc6a123e1fea9aa52->leave($__internal_c7ac46c7e498bcf378fdd673b658fc7be171f1df9a065f5dc6a123e1fea9aa52_prof);

        
        $__internal_840a3e8d1051346d3f36fd539d6f2069495118bdededcf4f1369422ad7ed5448->leave($__internal_840a3e8d1051346d3f36fd539d6f2069495118bdededcf4f1369422ad7ed5448_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7d65b07c94b2a5061c5f92add246068e25abe5ca9243500ad85562306eae147c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d65b07c94b2a5061c5f92add246068e25abe5ca9243500ad85562306eae147c->enter($__internal_7d65b07c94b2a5061c5f92add246068e25abe5ca9243500ad85562306eae147c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6cf1b6096a4993b37e911dbf7f3835138202797cb5c8da268a7a2150d89afa68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cf1b6096a4993b37e911dbf7f3835138202797cb5c8da268a7a2150d89afa68->enter($__internal_6cf1b6096a4993b37e911dbf7f3835138202797cb5c8da268a7a2150d89afa68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6cf1b6096a4993b37e911dbf7f3835138202797cb5c8da268a7a2150d89afa68->leave($__internal_6cf1b6096a4993b37e911dbf7f3835138202797cb5c8da268a7a2150d89afa68_prof);

        
        $__internal_7d65b07c94b2a5061c5f92add246068e25abe5ca9243500ad85562306eae147c->leave($__internal_7d65b07c94b2a5061c5f92add246068e25abe5ca9243500ad85562306eae147c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_926d797c55b5df1d36f18d6de603393b0d3c85a7e2761aafc21ca6dead11214d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_926d797c55b5df1d36f18d6de603393b0d3c85a7e2761aafc21ca6dead11214d->enter($__internal_926d797c55b5df1d36f18d6de603393b0d3c85a7e2761aafc21ca6dead11214d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cb0a3249de45d604b77c9c846361cc1c1df12814840ce3a9e4bbca2a5f0cc4e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb0a3249de45d604b77c9c846361cc1c1df12814840ce3a9e4bbca2a5f0cc4e6->enter($__internal_cb0a3249de45d604b77c9c846361cc1c1df12814840ce3a9e4bbca2a5f0cc4e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cb0a3249de45d604b77c9c846361cc1c1df12814840ce3a9e4bbca2a5f0cc4e6->leave($__internal_cb0a3249de45d604b77c9c846361cc1c1df12814840ce3a9e4bbca2a5f0cc4e6_prof);

        
        $__internal_926d797c55b5df1d36f18d6de603393b0d3c85a7e2761aafc21ca6dead11214d->leave($__internal_926d797c55b5df1d36f18d6de603393b0d3c85a7e2761aafc21ca6dead11214d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/wanderlei-teste/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
