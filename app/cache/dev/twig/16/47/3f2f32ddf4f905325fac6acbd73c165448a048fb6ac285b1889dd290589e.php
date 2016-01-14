<?php

/* uniMisJuegosBundle:Default:index.html.twig */
class __TwigTemplate_16473f2f32ddf4f905325fac6acbd73c165448a048fb6ac285b1889dd290589e extends Twig_Template
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

    <h1>Clasificación mundial de Juegos</h1>

     <div class=\"LineaFormulario centrado\">           
           <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/unimisjuegos/img/unienc2.jpeg"), "html", null, true);
        echo "\" width=\"25%\" heigth=\"25%\"/>
    </div>
            
";
    }

    public function getTemplateName()
    {
        return "uniMisJuegosBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  28 => 3,);
    }
}
