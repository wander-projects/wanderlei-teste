<?php

/* user/new.html.twig */
class __TwigTemplate_d46d6fcb228a41ae051695bf7e134c036813d9c1c623ea607df2ac108397c081 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68c34f72dab4abe6917ba7d182c2b0b1574ffe0728cbfa780bb3711bfbdadb88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68c34f72dab4abe6917ba7d182c2b0b1574ffe0728cbfa780bb3711bfbdadb88->enter($__internal_68c34f72dab4abe6917ba7d182c2b0b1574ffe0728cbfa780bb3711bfbdadb88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_9102da5ab9e122b2344734d94cfdf5bd1a17f6122ff0de557e3e6f687238f8fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9102da5ab9e122b2344734d94cfdf5bd1a17f6122ff0de557e3e6f687238f8fa->enter($__internal_9102da5ab9e122b2344734d94cfdf5bd1a17f6122ff0de557e3e6f687238f8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68c34f72dab4abe6917ba7d182c2b0b1574ffe0728cbfa780bb3711bfbdadb88->leave($__internal_68c34f72dab4abe6917ba7d182c2b0b1574ffe0728cbfa780bb3711bfbdadb88_prof);

        
        $__internal_9102da5ab9e122b2344734d94cfdf5bd1a17f6122ff0de557e3e6f687238f8fa->leave($__internal_9102da5ab9e122b2344734d94cfdf5bd1a17f6122ff0de557e3e6f687238f8fa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b444bf52f9e09298d769b8e51864367a69b3d6835e4572a8b2ccae332fbd9895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b444bf52f9e09298d769b8e51864367a69b3d6835e4572a8b2ccae332fbd9895->enter($__internal_b444bf52f9e09298d769b8e51864367a69b3d6835e4572a8b2ccae332fbd9895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c6e7280f689f9c97bdb83e01ce152c7698ed35ccf67e2795b600df6a59b423a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6e7280f689f9c97bdb83e01ce152c7698ed35ccf67e2795b600df6a59b423a1->enter($__internal_c6e7280f689f9c97bdb83e01ce152c7698ed35ccf67e2795b600df6a59b423a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"col-md-10 col-md-offset-1\">
            <h3>Novo Usuário</h3>
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"#\">Usuarios</a></li>
                        <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("activity_index");
        echo "\">Listagem</a></li>
                        <li class=\"breadcrumb-item active\">Novo</li>
                    </ol>
                </div>
                <div class=\"panel-body\">
                    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                    <div class=\"form-group\">
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nome")));
        echo "
                    </div>
                    <div class=\"form-group\">
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "E-mail")));
        echo "
                    </div>
                    <div class=\"form-group\">
                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Usuario")));
        echo "
                    </div>
                    <div class=\"form-group\">
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Senha")));
        echo "
                    </div>
                </div>
                <div class=\"panel-footer\">
                    <input type=\"submit\" value=\"Salvar\" class=\"btn btn-primary\" />
                ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                <div class=\"pull-right\">
                    <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">voltar a lista de usuários</a>
                </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_c6e7280f689f9c97bdb83e01ce152c7698ed35ccf67e2795b600df6a59b423a1->leave($__internal_c6e7280f689f9c97bdb83e01ce152c7698ed35ccf67e2795b600df6a59b423a1_prof);

        
        $__internal_b444bf52f9e09298d769b8e51864367a69b3d6835e4572a8b2ccae332fbd9895->leave($__internal_b444bf52f9e09298d769b8e51864367a69b3d6835e4572a8b2ccae332fbd9895_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 34,  97 => 32,  89 => 27,  83 => 24,  77 => 21,  71 => 18,  66 => 16,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <div class=\"col-md-10 col-md-offset-1\">
            <h3>Novo Usuário</h3>
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"#\">Usuarios</a></li>
                        <li class=\"breadcrumb-item\"><a href=\"{{path('activity_index')}}\">Listagem</a></li>
                        <li class=\"breadcrumb-item active\">Novo</li>
                    </ol>
                </div>
                <div class=\"panel-body\">
                    {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
                    <div class=\"form-group\">
                    {{ form_widget(form.name, {'attr': {'class': 'form-control', 'placeholder':'Nome'}}) }}
                    </div>
                    <div class=\"form-group\">
                    {{ form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder':'E-mail'}}) }}
                    </div>
                    <div class=\"form-group\">
                    {{ form_widget(form.username, {'attr': {'class': 'form-control', 'placeholder':'Usuario'}}) }}
                    </div>
                    <div class=\"form-group\">
                    {{ form_widget(form.password, {'attr': {'class': 'form-control', 'placeholder':'Senha'}}) }}
                    </div>
                </div>
                <div class=\"panel-footer\">
                    <input type=\"submit\" value=\"Salvar\" class=\"btn btn-primary\" />
                {{ form_end(form) }}
                <div class=\"pull-right\">
                    <a href=\"{{ path('user_index') }}\">voltar a lista de usuários</a>
                </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "user/new.html.twig", "/var/www/wanderlei-teste/app/Resources/views/user/new.html.twig");
    }
}
