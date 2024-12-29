<?php

/* ::base.html.twig */
class __TwigTemplate_d98e4df9f4ace97aa264b67807dbcfb25eea9174bf64a9fd06309a2e4e958e92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"fb-root\"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = \"//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.3\";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
            ";
        // line 22
        $this->displayBlock('header', $context, $blocks);
        // line 83
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 84
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        // line 153
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 155
        echo "    <script type=\"text/javascript\">
        window.___gcfg = {lang: 'fr'};

        (function () {
            var po = document.createElement('script');
            po.type = 'text/javascript';
            po.async = true;
            po.src = 'https://apis.google.com/js/platform.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(po, s);
        })();
    </script>
</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link href=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo " media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
        ";
    }

    // line 22
    public function block_header($context, array $blocks = array())
    {
        // line 23
        echo "            <div class=\"top_bg\">
                <div class=\"header\">
                    ";
        // line 25
        $context["c"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "session"), "get", array(0 => "client"), "method");
        // line 26
        echo "                    ";
        if ((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c"))) {
            // line 27
            echo "                        <div class=\"logo\">
                            <a  title=\"Accueil\" href=";
            // line 28
            echo $this->env->getExtension('routing')->getPath("orang_medic_homepage");
            echo ">Orang-Medic</a>
                            <h4>Bienvenue ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "nom"), "html", null, true);
            echo "</h4>
                            <figure>
                                <a  title=\"afficher mon profil\" href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("profil");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "photo")), "html", null, true);
            echo "\" id=\"cphoto\" /></a>
                            </figure>
                        </div>
                                <span><a href=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("deconnexion");
            echo "\" class=\"a1\" >Déconnecter</a></span>
                                <span><a href=\"";
            // line 35
            echo $this->env->getExtension('routing')->getPath("mesCommandes");
            echo "\" class=\"a2\" >mes Commandes</a></span>
                    ";
        } else {
            // line 37
            echo "                        <div class=\"logo\">
                            <a href=";
            // line 38
            echo $this->env->getExtension('routing')->getPath("orang_medic_homepage");
            echo ">Orang-Medic</a>
                        </div>
                        <div class=\"log_reg\">
                            <ul>
                                <li><a href=";
            // line 42
            echo $this->env->getExtension('routing')->getPath("orang_medic_connexion");
            echo ">Connecter</a> </li>
                                <span class=\"log\"> | </span>
                                <li><a href=";
            // line 44
            echo $this->env->getExtension('routing')->getPath("orang_medic_inscription");
            echo ">Inscription</a> </li>\t\t\t\t\t\t\t\t   
                                <div class=\"clear\"></div>
                            </ul>
                        </div>\t
                    ";
        }
        // line 48
        echo "       
                    <div class=\"clear\"></div>
                </div>\t
            </div>
            <div class=\"header_btm\">
                <div class=\"drp-dwn\">
                    <select   onchange=\"window.location = this.options[this.selectedIndex].value\">
                        <option id=\"uni\" selected>Naviguer le site :</option>
                        <option value=";
        // line 56
        echo $this->env->getExtension('routing')->getPath("orang_medic_homepage");
        echo ">Accueil</option>
                        <optgroup label=\"Catégories :\">
                            ";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 59
            echo "                                <option value=";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("orang_medic_produits", array("nom" => "categorie", "prod" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "nomCategorie"))), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "nomCategorie"), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "  
                        </optgroup>
                        <optgroup label=\"Marques :\">
                            ";
        // line 63
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["marques"]) ? $context["marques"] : $this->getContext($context, "marques")));
        foreach ($context['_seq'] as $context["_key"] => $context["marque"]) {
            // line 64
            echo "                                <option value=";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("orang_medic_produits", array("nom" => "marque", "prod" => $this->getAttribute((isset($context["marque"]) ? $context["marque"] : $this->getContext($context, "marque")), "nomMarque"))), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["marque"]) ? $context["marque"] : $this->getContext($context, "marque")), "nomMarque"), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['marque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo " 
                        </optgroup>
                        <option value=";
        // line 67
        echo $this->env->getExtension('routing')->getPath("orang_medic_contact");
        echo ">Contact</option>
                    </select>
                </div>
                <div class=\"header_right\">
                    ";
        // line 71
        $context["panier"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "session"), "get", array(0 => "panier"), "method");
        // line 72
        echo "                    <ul>
                        ";
        // line 73
        if ((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier"))) {
            // line 74
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("lister");
            echo "\"><i title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), "qte", array(), "array"), "html", null, true);
            echo " produit(s) dans votre panier\"  class=\"cart\"></i><span>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), "qte", array(), "array"), "html", null, true);
            echo "</span></a></li>
                                    ";
        } else {
            // line 76
            echo "                            <li><a href=\"#\"><i title=\"votre panier est vide\" class=\"cart\"></i><span>0</span></a></li>
                                    ";
        }
        // line 78
        echo "                    </ul>
                </div>
                <div class=\"clear\"></div>
            </div>
        ";
    }

    // line 83
    public function block_body($context, array $blocks = array())
    {
    }

    // line 84
    public function block_footer($context, array $blocks = array())
    {
        // line 85
        echo "        <!-- start footer -->
        <div class=\"footer_top\">
            <div class=\"footer\">
                <!-- start grids_of_3 -->
                <div class=\"span_of_3\">
                    <div class=\"span1_of_3\">
                        <h3>facebook widget</h3>
                        <div class=\"fb-comments\" data-href=\"http://developers.facebook.com/docs/plugins/comments/\" data-numposts=\"5\" data-width=\"100%\" data-colorscheme=\"light\"></div>
                    </div>
                    <div class=\"span1_of_3\">
                        <h3>flickr widget</h3>
                        <div style='position: relative; padding-bottom: 101%; height: 0; overflow: hidden;'><iframe id='iframe' src='http://flickrit.com/slideshowholder.php?height=100&size=big&keyword=medical&thumbnails=0&transition=0&layoutType=responsive&sort=0' scrolling='no' frameborder='0'style='width:100%; height:100%; position: absolute; top:0; left:0;' ></iframe></div>
                    </div>
                    <div class=\"clear\"></div>
                </div>
            </div>
        </div>
        <div class=\"footer_mid\">
            <div class=\"footer\">
                <div class=\"f_search\">
                    <form action=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("newsletter");
        echo "\" method=\"get\">
                        ";
        // line 106
        if ((array_key_exists("existe", $context) && ((isset($context["existe"]) ? $context["existe"] : $this->getContext($context, "existe")) == "existe"))) {
            // line 107
            echo "                            <input type=\"email\" name=\"newsletter\" placeholder=\"vous êtes déjà inscrit\" required=\"required\"/>
                        ";
        } elseif ((array_key_exists("existe", $context) && ((isset($context["existe"]) ? $context["existe"] : $this->getContext($context, "existe")) == "enregistré"))) {
            // line 109
            echo "                            <input type=\"email\" name=\"newsletter\" placeholder=\"vous êtes maintenant inscrit\" required=\"required\"/>
                        ";
        } else {
            // line 111
            echo "                            <input type=\"email\" name=\"newsletter\" placeholder=\"Entrer un email pour newsletter\" required=\"required\"/>
                        ";
        }
        // line 113
        echo "                        <input type=\"submit\" value=\"\"/>
                    </form>
                </div>
                <div class=\"soc_icons\">
                    <ul>
                        <li><div class=\"fb-share-button icon1\" data-href=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "uri"), "html", null, true);
        echo "\" data-layout=\"button\"></div></li>
                        <li><a href=\"https://twitter.com/share\" class=\"twitter-share-button icon2\" data-count=\"none\">Tweet</a> <script>!function (d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                                if (!d.getElementById(id)) {
                                    js = d.createElement(s);
                                    js.id = id;
                                    js.src = p + '://platform.twitter.com/widgets.js';
                                    fjs.parentNode.insertBefore(js, fjs);
                                }
                            }(document, 'script', 'twitter-wjs');</script></li>
                        <li><div class=\"g-plusone icon3\" data-size=\"medium\" data-annotation=\"none\"></div></li>
                        <li><script src=\"//platform.linkedin.com/in.js\" type=\"text/javascript\"> lang: en_US</script>
                            <script class=\"icon4\" type=\"IN/Share\"></script></li>
                    </ul>\t
                </div>
                <div class=\"clear\"></div>
            </div>
        </div>
        <!-- start footer -->
        <div class=\"footer_bg\">
            <div class=\"footer\">
                <div class=\"f_nav1\">
                    <ul>
                        <li><a href=\"";
        // line 141
        echo $this->env->getExtension('routing')->getPath("orang_medic_homepage");
        echo "\">Accueil /</a></li>
                        <li><a href=\"";
        // line 142
        echo $this->env->getExtension('routing')->getPath("support");
        echo "\">Support /</a></li>
                        <li><a href=\"";
        // line 143
        echo $this->env->getExtension('routing')->getPath("orang_medic_contact");
        echo "\">Nous contacter</a></li>
                    </ul>
                </div>
                <div class=\"copy\">
                    <p class=\"link\"><span>© All rights reserved | Template by&nbsp;<a href=\"http://w3layouts.com/\"> W3Layouts</a></span></p>
                </div>
                <div class=\"clear\"></div>
            </div>
        </div>
    ";
    }

    // line 153
    public function block_javascripts($context, array $blocks = array())
    {
        // line 154
        echo "    ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 154,  355 => 153,  341 => 143,  337 => 142,  333 => 141,  307 => 118,  300 => 113,  296 => 111,  292 => 109,  288 => 107,  286 => 106,  282 => 105,  260 => 85,  257 => 84,  252 => 83,  244 => 78,  240 => 76,  230 => 74,  228 => 73,  225 => 72,  223 => 71,  216 => 67,  212 => 65,  201 => 64,  197 => 63,  192 => 60,  181 => 59,  177 => 58,  172 => 56,  162 => 48,  154 => 44,  149 => 42,  142 => 38,  139 => 37,  134 => 35,  130 => 34,  122 => 31,  117 => 29,  113 => 28,  110 => 27,  107 => 26,  105 => 25,  101 => 23,  98 => 22,  91 => 7,  88 => 6,  83 => 5,  65 => 155,  62 => 153,  59 => 84,  56 => 83,  54 => 22,  37 => 9,  35 => 6,  31 => 5,  25 => 1,);
    }
}
