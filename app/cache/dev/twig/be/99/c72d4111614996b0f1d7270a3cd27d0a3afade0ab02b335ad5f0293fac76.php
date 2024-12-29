<?php

/* OrangMedicBundle:Default:products.html.twig */
class __TwigTemplate_be99c72d4111614996b0f1d7270a3cd27d0a3afade0ab02b335ad5f0293fac76 extends Twig_Template
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
        echo "Produits | Orang-Medic";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"top_bg\">
        <div class=\"wrap\">
            <div class=\"main_top\">
                <h4 class=\"style\">Produits trouvés</h4>
            </div>
        </div>
    </div>
    <!-- start main -->
    <div class=\"main_bg\">
        <div class=\"wrap\">
            <div class=\"main\">
                <!-- start grids_of_3 -->
                <div class=\"grids_of_3\">
                    ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 18
            echo "                        <div class=\"grid1_of_3\">
                            <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("orang_medic_details", array("nomProd" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "libelle"))), "html", null, true);
            echo " \">
                                <img alt=\"image de produit\" src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image")), "html", null, true);
            echo "\" />
                                <h3> ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "libelle"), "html", null, true);
            echo "</h3>
                                ";
            // line 22
            if (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "etat") == "nouveau")) {
                // line 23
                echo "                                    <span class=\"price1 bg1\">Nouveau</span>
                                ";
            }
            // line 25
            echo "                                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "idPromo"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 26
                echo "                                    <span class=\"price1 bg\">en Promo</span>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                                ";
            if (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "stock") <= 0)) {
                // line 29
                echo "                                    <span class=\"price1 bg2\">Non Disponible</span>
                                ";
            }
            // line 31
            echo "                                <span class=\"price\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prixAchete"), 3, ".", ","), "html", null, true);
            echo "</span>
                            </a>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
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
        return "OrangMedicBundle:Default:products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 34,  97 => 31,  93 => 29,  90 => 28,  83 => 26,  78 => 25,  74 => 23,  72 => 22,  68 => 21,  64 => 20,  60 => 19,  57 => 18,  53 => 17,  38 => 4,  35 => 3,  29 => 2,);
    }
}
