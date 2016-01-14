<?php

/* uniMisJuegosBundle:plataforma:buscarPlat.html.twig */
class __TwigTemplate_239837ae3e28074ff2e2c75d17e64d205d5244ba488e09d356bb75bb4b778d16 extends Twig_Template
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
    <h1>Plataformas</h1>
    
    <form id=\"selectCats\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("respPlat");
        echo "\" method=\"POST\">
            
            <div class=\"LineaFormulario\">  </div>
            <div class=\"LineaFormulario\">  </div>
            <div class=\"LineaFormulario\"> 
                <p class=\"izquierda separarIzq15\">Seleccione una plataforma de la lista y a continuación se mostrarán los juegos correspondientes.</p>
            </div>
            <div class=\"LineaFormulario\">  </div>
            <div class=\"LineaFormulario izquierda separarIzq15\">      
                <label for=\"nombre\" class=\"letraverde\">Plataforma: </label>                                    
                     <select name=\"nombre\" onblur=\"submitform(this)\" class=\"izquierda\">                         
                     ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ePlat"]) ? $context["ePlat"] : $this->getContext($context, "ePlat")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
            echo "</option>                        
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                     </select>                                          
             </div>
             <input type=\"hidden\" id=\"nomOculto\" name=\"nomOculto\" value=\"\"/>
    </form>

";
        // line 25
        if ((!(null === (isset($context["nomPlat"]) ? $context["nomPlat"] : $this->getContext($context, "nomPlat"))))) {
            // line 26
            echo "       <div class=\"LineaFormulario izquierda\">  
        <h1 class=\"izquierda separarIzq15\">
            Juegos de <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("plataforma_show", array("id" => $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre"), "html", null, true);
            echo "</a>
        </h1>
       </div>
       <div class=\"LineaFormulario izquierda\">  </div>
                
            ";
            // line 33
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "juegos"));
            foreach ($context['_seq'] as $context["_key"] => $context["juego"]) {
                echo "             
                <div class=\"LineaFormulario izquierda separarIzq15\">
                    <h2 class=\"izquierda separarIzq15\"><a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("juego_show", array("id" => $this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "nombre"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["juego"]) ? $context["juego"] : $this->getContext($context, "juego")), "puntuacion"), "html", null, true);
                echo "</a></h2>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['juego'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                      
     ";
        }
        // line 39
        echo "              
        
    ";
    }

    public function getTemplateName()
    {
        return "uniMisJuegosBundle:plataforma:buscarPlat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 39,  107 => 38,  94 => 35,  87 => 33,  77 => 28,  73 => 26,  71 => 25,  64 => 20,  53 => 18,  49 => 17,  35 => 6,  28 => 3,);
    }
}
