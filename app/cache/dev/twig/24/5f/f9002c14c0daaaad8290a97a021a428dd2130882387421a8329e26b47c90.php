<?php

/* uniMisJuegosBundle::layout.html.twig */
class __TwigTemplate_245ff9002c14c0daaaad8290a97a021a428dd2130882387421a8329e26b47c90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
            'menuSup' => array($this, 'block_menuSup'),
            'central' => array($this, 'block_central'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo " 
        <div id=\"menuSup\">
            ";
        // line 7
        $this->displayBlock('menuSup', $context, $blocks);
        // line 25
        echo "        </div>
 
        
        <div id=\"central\">
            
            ";
        // line 30
        $this->displayBlock('central', $context, $blocks);
        // line 33
        echo "            
        </div>
 
 
 ";
    }

    // line 7
    public function block_menuSup($context, array $blocks = array())
    {
        // line 8
        echo "                
             <ul id=\"menu-horizontal\">
                 <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("uni_mis_juegos_homepage");
        echo "\" title=\"Texto\">INICIO</a>
                      
                 </li>
                 
                <li><a href=\"#\" title=\"Texto\">Plataformas</a>
                    <ul>
                        <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("linkPlataformas");
        echo "\" title=\"Texto\">Buscar</a></li>
                        <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("plataforma");
        echo "\" title=\"Texto\">Listado</a></li>
                    </ul>
                </li>
                <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("juego");
        echo "\" title=\"Texto\">Juegos</a></li>
                <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("linkTipos");
        echo "\" title=\"Texto\">Tipos</a></li>                                              
             </ul>
             
            ";
    }

    // line 30
    public function block_central($context, array $blocks = array())
    {
        // line 31
        echo "            
            ";
    }

    public function getTemplateName()
    {
        return "uniMisJuegosBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 31,  94 => 30,  86 => 21,  76 => 17,  72 => 16,  63 => 10,  59 => 8,  56 => 7,  46 => 30,  39 => 25,  37 => 7,  33 => 5,  30 => 4,  89 => 36,  82 => 20,  70 => 25,  64 => 22,  57 => 18,  51 => 17,  48 => 33,  44 => 15,  28 => 3,);
    }
}
