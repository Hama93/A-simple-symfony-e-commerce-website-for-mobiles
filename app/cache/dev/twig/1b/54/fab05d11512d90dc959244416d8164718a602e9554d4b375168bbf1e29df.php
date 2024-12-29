<?php

/* OrangMedicBundle:Default:index.html.twig */
class __TwigTemplate_1b54fab05d11512d90dc959244416d8164718a602e9554d4b375168bbf1e29df extends Twig_Template
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
        echo "Accueil | Orang-Medic";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <!-- start image1_of_3 -->
    <div class=\"top_bg\">
        <div class=\"main1\">
            <div class=\"image1_of_3\">
                <img src=";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/new.jpg"), "html", null, true);
        echo " alt=\"\"/>
                <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("orang_medic_offresetnv");
        echo "\"><span class=\"tag\">offres et nouveautés</span></a>
            </div>
            <div class=\"clear\"></div>
        </div>
    </div>
    <!-- start main -->
    <div class=\"main_bg\">
        <div class=\"main\">
            <div class=\"top_main\">
                <h2>Produits en vedettes</h2>
                <div class=\"clear\"></div>
            </div>
            <!-- start grids_of_3 -->
            <div class=\"grids_of_3\">
                ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 24
            echo "                <div class=\"grid1_of_3\">
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("orang_medic_details", array("nomProd" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "libelle"))), "html", null, true);
            echo "\">
                        <img alt=\"image de produit\" src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image")), "html", null, true);
            echo "\" />
                        <h3> ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "libelle"), "html", null, true);
            echo "</h3>
                         ";
            // line 28
            if (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "etat") == "nouveau")) {
                // line 29
                echo "                         <span class=\"price1 bg1\">Nouveau</span>
                         ";
            }
            // line 31
            echo "                         ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "idPromo"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 32
                echo "                         <span class=\"price1 bg\">en Promo</span>
                         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                         ";
            if (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "stock") <= 0)) {
                // line 35
                echo "                         <span class=\"price1 bg2\">Non Disponible</span>
                         ";
            }
            // line 37
            echo "                         <span class=\"price\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prixAchete"), 3, ".", ","), "html", null, true);
            echo "</span>
                    </a>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        
                <div class=\"clear\"></div>
            </div>
            <div class=\"clear\"></div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OrangMedicBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 40,  109 => 37,  105 => 35,  102 => 34,  95 => 32,  90 => 31,  86 => 29,  84 => 28,  80 => 27,  76 => 26,  72 => 25,  69 => 24,  65 => 23,  48 => 9,  44 => 8,  38 => 4,  35 => 3,  29 => 2,);
    }
}
