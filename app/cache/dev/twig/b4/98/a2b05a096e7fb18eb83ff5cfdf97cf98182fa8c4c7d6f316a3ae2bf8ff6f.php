<?php

/* OrangMedicBundle:Default:details.html.twig */
class __TwigTemplate_b498a2b05a096e7fb18eb83ff5cfdf97cf98182fa8c4c7d6f316a3ae2bf8ff6f extends Twig_Template
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
        echo "Détails produit | Orang-Medic";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"top_bg\">
        <div class=\"main_top\">
            <h2 class=\"style\">Produit :</h2>
        </div>
    </div>
    <!-- start main -->
    <div class=\"main_bg\">
        <div class=\"main\">
            <!-- start content -->
            <div class=\"single\">
                <!-- start span1_of_1 -->
                <div class=\"left_content\">
                    <div class=\"span1_of_1\">
                        <!----start-img-cursual---->
                        <div id=\"products\">
                            <div class=\"slides_container\">
                                <img class=\"a\" id=\"img1\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image")), "html", null, true);
        echo "\" alt=\"\" rel=\"images/zoom/slide_pic1.jpg\" />
                            </div>
                            <div class=\"clear\"></div>
                        </div>
                        <!----//End-img-cursual---->
                    </div>
                    <!-- start span1_of_1 -->
                    <div class=\"span1_of_1_des\">
                        <div class=\"desc1\">
                            ";
        // line 29
        $context["prd"] = $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "idPromo");
        // line 30
        echo "                            <h3>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "libelle"), "html", null, true);
        echo "</h3>
                            <h5>";
        // line 31
        if (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix") != $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prixAchete"))) {
            echo " Prix Promo : ";
        } else {
            echo " Prix : ";
        }
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prixAchete"), 3, ".", ","), "html", null, true);
        echo " TND</h5>
                            <div class=\"available\">
                                <div class=\"btn_form\">
                                    <form action=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter_au_panier", array("nomProd" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "libelle"))), "html", null, true);
        echo "\" method=\"get\">
                                        <input type=\"submit\" value=\"Ajouter au panier\" />
                                    </form>
                                </div>
                                 ";
        // line 38
        $context["pd"] = twig_split_filter($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description"), "<br />");
        // line 39
        echo "                                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pd"]) ? $context["pd"] : $this->getContext($context, "pd")));
        foreach ($context['_seq'] as $context["_key"] => $context["chaine"]) {
            // line 40
            echo "                                     ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter((isset($context["chaine"]) ? $context["chaine"] : $this->getContext($context, "chaine")), "<br/>"));
            foreach ($context['_seq'] as $context["_key"] => $context["souschaine"]) {
                // line 41
                echo "                                <p>";
                echo twig_escape_filter($this->env, (isset($context["souschaine"]) ? $context["souschaine"] : $this->getContext($context, "souschaine")), "html", null, true);
                echo "</p>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['souschaine'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chaine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                            </div>
                        </div>
                    </div>
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
        return "OrangMedicBundle:Default:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 44,  114 => 43,  105 => 41,  100 => 40,  95 => 39,  93 => 38,  86 => 34,  75 => 31,  70 => 30,  68 => 29,  56 => 20,  38 => 4,  35 => 3,  29 => 2,);
    }
}
