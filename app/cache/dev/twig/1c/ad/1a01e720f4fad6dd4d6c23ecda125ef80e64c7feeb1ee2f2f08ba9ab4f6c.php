<?php

/* OrangMedicBundle:Default:cart.html.twig */
class __TwigTemplate_1cad1a01e720f4fad6dd4d6c23ecda125ef80e64c7feeb1ee2f2f08ba9ab4f6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Panier | Orang-Medic";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"top_bg\">
        <div class=\"main_top\">
            <h4 class=\"style\">Panier</h4>
        </div>
    </div>
    <!-- start main -->
    <div class=\"main_bg\">
        <div class=\"wrap\">
            <div class=\"main\">
                <!-- start grids_of_3 -->
                <div class=\"grids_of_3\">
                    ";
        // line 15
        $context["panier"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "session"), "get", array(0 => "panier"), "method");
        // line 16
        echo "                    ";
        if ((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier"))) {
            // line 17
            echo "                        ";
            $context["produits"] = $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), "prods", array(), "array");
            // line 18
            echo "                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 19
                echo "                            <div class=\"grid1_of_3\">
                                <img alt=\"image de produit\" src=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image")), "html", null, true);
                echo "\" />
                                <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("orang_medic_details", array("nomProd" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "libelle"))), "html", null, true);
                echo "\">
                                    <h3> ";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "libelle"), "html", null, true);
                echo "</h3>
                                </a>
                                <a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer", array("nomProd" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "libelle"))), "html", null, true);
                echo "\" class=\"X\" title=\"enlever ce produit\">X</a>
                                <span class=\"price\">";
                // line 25
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prixAchete"), 3, ".", ","), "html", null, true);
                echo "</span>
                            </div>
                            <div class=\"grid1_of_3\">
                                <form action=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter_au_panier", array("nomProd" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "libelle"))), "html", null, true);
                echo "\" method=\"get\">
                                    <input type=\"submit\" value=\"ajouter\" /> 
                                    <input title=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "qteAchete"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "libelle"), "html", null, true);
                echo "\" name=\"qte\" type=\"number\" max=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "stock"), "html", null, true);
                echo "\" min=\"1\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "qteAchete"), "html", null, true);
                echo "\" /> 
                                </form>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "  
                        <div class=\"grid1_of_3\">
                            <h3>Total : <h4>";
            // line 35
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), "total", array(), "array"), 3, ".", ","), "html", null, true);
            echo " TND</h4></h3>  
                        </div>
                        ";
            // line 37
            $context["c"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "session"), "get", array(0 => "client"), "method");
            // line 38
            echo "                        ";
            if ((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c"))) {
                // line 39
                echo "                            <div class=\"registration_form\">
                            <form id=\"registration_form\" action=\"";
                // line 40
                echo $this->env->getExtension('routing')->getPath("commander");
                echo "\" method=\"get\">
                            <input type=\"submit\" value=\"Commander\" /> 
                            </form> 
                            </div>
                        ";
            } else {
                // line 45
                echo "                            <div class=\"grid1_of_3\">
                                <h3>Vous devez être identifié pour pouvoir acheter</h3>
                            </div>
                        ";
            }
            // line 48
            echo "  
                        ";
        }
        // line 49
        echo "  
                        <div class=\"clear\"></div>
                    </div>
                    <div class=\"clear\"></div>
                </div>
            </div>
        </div>  
        ";
    }

    public function getTemplateName()
    {
        return "OrangMedicBundle:Default:cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 49,  142 => 48,  136 => 45,  128 => 40,  125 => 39,  122 => 38,  120 => 37,  115 => 35,  111 => 33,  95 => 30,  90 => 28,  84 => 25,  80 => 24,  75 => 22,  71 => 21,  67 => 20,  64 => 19,  59 => 18,  56 => 17,  53 => 16,  51 => 15,  38 => 4,  35 => 3,  29 => 2,);
    }
}
