<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_e0840267b59145cbdd7bd6f9550fcb28babf7c193a93223331430567d4901511 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5988f5eaab45a71833c943bc2956f1762b88d33514464a1de3d0dbe8ec4d0de1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5988f5eaab45a71833c943bc2956f1762b88d33514464a1de3d0dbe8ec4d0de1->enter($__internal_5988f5eaab45a71833c943bc2956f1762b88d33514464a1de3d0dbe8ec4d0de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_456df3b79478d97327828592aa195be32fdf5390ad12860b0e6d238ef95bccbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_456df3b79478d97327828592aa195be32fdf5390ad12860b0e6d238ef95bccbb->enter($__internal_456df3b79478d97327828592aa195be32fdf5390ad12860b0e6d238ef95bccbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5988f5eaab45a71833c943bc2956f1762b88d33514464a1de3d0dbe8ec4d0de1->leave($__internal_5988f5eaab45a71833c943bc2956f1762b88d33514464a1de3d0dbe8ec4d0de1_prof);

        
        $__internal_456df3b79478d97327828592aa195be32fdf5390ad12860b0e6d238ef95bccbb->leave($__internal_456df3b79478d97327828592aa195be32fdf5390ad12860b0e6d238ef95bccbb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4ad35f5fc2ca9406c640be1153eb2e47c1da761a5c6025ca16861a3f86512784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ad35f5fc2ca9406c640be1153eb2e47c1da761a5c6025ca16861a3f86512784->enter($__internal_4ad35f5fc2ca9406c640be1153eb2e47c1da761a5c6025ca16861a3f86512784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_492dc1a85d4131aaf150669d489d753416961ed35a9e5782086708010ca52ecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_492dc1a85d4131aaf150669d489d753416961ed35a9e5782086708010ca52ecf->enter($__internal_492dc1a85d4131aaf150669d489d753416961ed35a9e5782086708010ca52ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_492dc1a85d4131aaf150669d489d753416961ed35a9e5782086708010ca52ecf->leave($__internal_492dc1a85d4131aaf150669d489d753416961ed35a9e5782086708010ca52ecf_prof);

        
        $__internal_4ad35f5fc2ca9406c640be1153eb2e47c1da761a5c6025ca16861a3f86512784->leave($__internal_4ad35f5fc2ca9406c640be1153eb2e47c1da761a5c6025ca16861a3f86512784_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/wanderlei-teste/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
