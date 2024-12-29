<?php

/* OrangMedicBundle:Default:confirmation.html.twig */
class __TwigTemplate_3f1870c5fb650847b9aff20f791b2fbbfcfab1e85b058241199fb65df924fd44 extends Twig_Template
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
                                <a href=\"#\" class=\"X\" title=\"enlever ce produit\">X</a>
                                <span class=\"price\">";
                // line 25
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prixAchete"), 3, ".", ","), "html", null, true);
                echo "</span>
                            </div>
                            <div class=\"grid1_of_3\">
                                <input title=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "qteAchete"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "libelle"), "html", null, true);
                echo "\" name=\"qte\" type=\"number\" max=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "stock"), "html", null, true);
                echo "\" min=\"1\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "qteAchete"), "html", null, true);
                echo "\" disabled/> 
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "  
                        <div class=\"grid1_of_3\">
                            <h3>Total : <h4>";
            // line 32
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), "total", array(), "array"), 3, ".", ","), "html", null, true);
            echo " TND</h4></h3>  
                        </div>
                        ";
            // line 34
            $context["c"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "session"), "get", array(0 => "client"), "method");
            // line 35
            echo "                        ";
            if ((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c"))) {
                // line 36
                echo "                            <form name=\"paypalForm\" action=\"https://www.sandbox.paypal.com/cgi-bin/webscr\" method=\"post\">
                                <input type=\"hidden\" name=\"upload\" value=\"1\" />
                                <input type=\"hidden\" name=\"cmd\" value=\"_cart\" />
                                <input type=\"hidden\" name=\"business\" value=\"thunder9662@gmail.com\" />
                                <input type=\"hidden\" name=\"password\" value=\"4PQF66TGHQWWSMD7\" />
                                <input type=\"hidden\" name=\"currency\" value=\"TND\" />
                                ";
                // line 42
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                    // line 43
                    echo "                                    <input type=\"hidden\" name=\"item_name_";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "libelle"), "html", null, true);
                    echo "\" />
                                    <input type=\"hidden\" name=\"item_number_";
                    // line 44
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                    echo "\" />
                                    <input type=\"hidden\" name=\"amount_";
                    // line 45
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prixAchete"), "html", null, true);
                    echo "\" />
                                    <input type=\"hidden\" name=\"quantity_";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "qteAchete"), "html", null, true);
                    echo "\" />
                                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "  
                                <input type=\"hidden\" name=\"return\" value=\"http://tomcat-haythem.rhcloud.com/Orang-Medic/transactiontermine\" />
                                <input type=\"hidden\" name=\"cancel_return\" value=\"localhost";
                // line 49
                echo $this->env->getExtension('routing')->getPath("orang_medic_homepage");
                echo "\" />
                                <input type=\"hidden\" name=\"cert_id\" value=\"AvEL.GqrTxbFg7y1xFQ2kKGnAjUGASGUKzPLO1scLN4FQvxcWtBtHbVP\" />
                                <input type=\"image\" src=\"https://www.paypal.com/fr_FR/FR/i/btn/btn_xpressCheckout.gif\" />
                            </form> 
                        ";
            } else {
                // line 54
                echo "                            <div class=\"grid1_of_3\">
                                <h3>Vous devez être identifié pour pouvoir acheter</h3>
                            </div>
                        ";
            }
            // line 57
            echo "  
                    ";
        }
        // line 58
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
        return "OrangMedicBundle:Default:confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 58,  196 => 57,  190 => 54,  182 => 49,  178 => 47,  160 => 46,  154 => 45,  148 => 44,  141 => 43,  124 => 42,  116 => 36,  113 => 35,  111 => 34,  106 => 32,  102 => 30,  87 => 28,  81 => 25,  75 => 22,  71 => 21,  67 => 20,  64 => 19,  59 => 18,  56 => 17,  53 => 16,  51 => 15,  38 => 4,  35 => 3,  29 => 2,);
    }
}
