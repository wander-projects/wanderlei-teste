<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_5cfa46fca8930ae9de1c5b47b1e73aaec96db41f8dc60666403b317dcc86abff extends Twig_Template
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
        $__internal_07f1ed6453eed0bcffdc4bb15f53474048e4c411a372fd52c4f488c9fe9eb48b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07f1ed6453eed0bcffdc4bb15f53474048e4c411a372fd52c4f488c9fe9eb48b->enter($__internal_07f1ed6453eed0bcffdc4bb15f53474048e4c411a372fd52c4f488c9fe9eb48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_a26d41d74de1df45dc027bf05e3e40152f868f4d2b123f0219ec7a2a6c9b9400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a26d41d74de1df45dc027bf05e3e40152f868f4d2b123f0219ec7a2a6c9b9400->enter($__internal_a26d41d74de1df45dc027bf05e3e40152f868f4d2b123f0219ec7a2a6c9b9400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_07f1ed6453eed0bcffdc4bb15f53474048e4c411a372fd52c4f488c9fe9eb48b->leave($__internal_07f1ed6453eed0bcffdc4bb15f53474048e4c411a372fd52c4f488c9fe9eb48b_prof);

        
        $__internal_a26d41d74de1df45dc027bf05e3e40152f868f4d2b123f0219ec7a2a6c9b9400->leave($__internal_a26d41d74de1df45dc027bf05e3e40152f868f4d2b123f0219ec7a2a6c9b9400_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/var/www/wanderlei-teste/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
