<?php

/* OrangMedicBundle:Default:checkout.html.twig */
class __TwigTemplate_4bb9bb67db0e25417224c11cee1c8b25c19b3b585d19ee9c3aa394af13004109 extends Twig_Template
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
        echo "Commander | Orang-Medic";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"top_bg\">
        <div class=\"main_top\">
            <h4 class=\"style\">Veuillez remplir ces champs avant de continuer</h4>
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
        $context["client"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "session"), "get", array(0 => "client"), "method");
        // line 16
        echo "                    ";
        if ((((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")) == null) || (!array_key_exists("client", $context)))) {
            // line 17
            echo "                        <script>window.location.href = \"http://localhost/Orang-Medic-Mobile/web/app_dev.php\"</script>
                    ";
        } else {
            // line 19
            echo "                        <div class=\"registration_form\">
                            <form id=\"registration_form\" action=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("enregistrerCommande");
            echo "\" method=\"get\">
                                <input type=\"text\" name=\"nom\" placeholder=\"nom\" required=\"required\" />
                                <input type=\"text\" name=\"prenom\" placeholder=\"prénom\" required=\"required\" />
                                <input type=\"text\" name=\"adresse\" placeholder=\"adresse de livraison\" required=\"required\" /> 
                                <input type=\"text\" name=\"code\" placeholder=\"code postal\" required=\"required\" />
                                <select name=\"gov\" size=\"1\">
                                    <option selected>Monastir</option>
                                    <option>Sousse</option>
                                    <option>Ben Arous</option>
                                    <option>Tunis</option>
                                    <option>Ariana</option>
                                    <option>Béja</option>
                                    <option>Bizerte</option>
                                    <option>Gabès</option>
                                    <option>Gafsa</option>
                                    <option>Jendouba</option>
                                    <option>Kairouan</option>
                                    <option>Kasserine</option>
                                    <option>Kébili</option>
                                    <option>Kef</option>
                                    <option>Mahdia</option>
                                    <option>Manouba</option>
                                    <option>Médenine</option>
                                    <option>Nabeul</option>
                                    <option>Sfax</option>
                                    <option>Sidi Bouzid</option>
                                    <option>Siliana</option>
                                    <option>Tataouine</option>
                                    <option>Tozeur</option>
                                    <option>Zaghouan</option>
                                </select> 
                                <input type=\"submit\" value=\"Continuer\" /> 
                            </form>
                        </div>
                    ";
        }
        // line 55
        echo "                    <div class=\"clear\"></div>
                </div>
                <div class=\"clear\"></div>
            </div>
        </div>
    </div>  
";
    }

    public function getTemplateName()
    {
        return "OrangMedicBundle:Default:checkout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 55,  63 => 20,  60 => 19,  56 => 17,  53 => 16,  51 => 15,  38 => 4,  35 => 3,  29 => 2,);
    }
}
