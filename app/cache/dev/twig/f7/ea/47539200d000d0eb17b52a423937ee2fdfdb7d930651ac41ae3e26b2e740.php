<?php

/* uniMisJuegosBundle:tipo:edit.html.twig */
class __TwigTemplate_f7ea47539200d000d0eb17b52a423937ee2fdfdb7d930651ac41ae3e26b2e740 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("uniMisJuegosBundle::layout.html.twig");

        $this->blocks = array(
            'central' => array($this, 'block_central'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "uniMisJuegosBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_central($context, array $blocks = array())
    {
        echo " 
    <h1>tipo edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "
    
    <div class=\"LineaFormulario izquierda\">  </div>
    
   

    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("tipo");
        echo "\">
                Back to the list
            </a>
        </li>
        <li>";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "uniMisJuegosBundle:tipo:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 18,  46 => 14,  35 => 6,  28 => 3,);
    }
}
