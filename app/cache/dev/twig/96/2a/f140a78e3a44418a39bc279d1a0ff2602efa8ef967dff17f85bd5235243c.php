<?php

/* OrangMedicBundle:Default:register.html.twig */
class __TwigTemplate_962af140a78e3a44418a39bc279d1a0ff2602efa8ef967dff17f85bd5235243c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "Inscription | Orang-Medic";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <!-- start top_bg -->
    <div class=\"top_bg\">
        <div class=\"main_top\">
            <h4 class=\"style\">Inscription</h4>
        </div>
    </div>
    <!-- start main -->
    <div class=\"main_bg\">
        <div class=\"main\">
            <div class=\"login_left\">
                <h3>Identification client</h3>
                <p>Si vous avez déjà un compte, veuillez vous identifier.</p>
                <!-- start registration -->
                <div class=\"registration\">
                    <div class=\"registration_left\">
                        <div class=\"registration_form\">
                            <!-- Form -->
                            <form id=\"registration_form\" action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("connexion");
        echo "\" method=\"get\">
                                <div>
                                    <label>
                                        <input name=\"email\"  placeholder=\"adresse email\" type=\"email\" tabindex=\"3\" required=\"required\">
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input name=\"mp\" placeholder=\"mot de passe\" type=\"password\" tabindex=\"4\" required=\"required\">
                                    </label>
                                </div>\t\t\t\t\t\t
                                <div>
                                    <input type=\"submit\" value=\"S'identifier\" id=\"register-submit\">
                                </div>
                            </form>
                            <!-- /Form -->
                        </div>
                    </div>
                </div>
                <!-- end registration -->
            </div>
            <div class=\"login_left\">
                <h3>Nouveau chez nous? veuillez nous joindre et devenez un client</h3>
                <p>N'hésitez pas, joiniez nous maintenant et soyez le bienvene chez Orang-Medic.</p>
                <div class=\"registration_left\">
                    <div class=\"registration_form\">
                        <!-- Form -->
                        <form onsubmit=\"return verifier()\" id=\"registration_form\" action=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("enregistrer");
        echo "\" method=\"get\">
                            <div>
                                <label>
                                    <input name=\"nom\" placeholder=\"nom\" type=\"text\" tabindex=\"1\" required=\"\" autofocus=\"\">
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input name=\"prenom\" placeholder=\"prénom\" type=\"text\" tabindex=\"2\" required=\"\" autofocus=\"\">
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input name=\"email\" placeholder=\"adresse email\" type=\"email\" tabindex=\"3\" required=\"required\">
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input name=\"mp\" placeholder=\"mot de passe\" type=\"password\" tabindex=\"4\" required=\"required\" id=\"passe1\">
                                </label>
                            </div>\t\t\t\t\t\t
                            <div>
                                <label>
                                    <input placeholder=\"ré-entrer le mot de passe\" type=\"password\" tabindex=\"4\" required=\"required\" id=\"passe2\">
                                </label>
                                <label>
                                     <p id=\"erreur\"></p>
                                </label>
                            </div>\t
                            ";
        // line 77
        if ((array_key_exists("messageInscrit", $context) && (isset($context["messageInscrit"]) ? $context["messageInscrit"] : $this->getContext($context, "messageInscrit")))) {
            echo " 
                                <div>
                                    <label>
                                        <p>";
            // line 80
            echo twig_escape_filter($this->env, (isset($context["messageInscrit"]) ? $context["messageInscrit"] : $this->getContext($context, "messageInscrit")), "html", null, true);
            echo "</p>
                                    </label>
                                </div>
                                ";
        }
        // line 84
        echo "                            <div>
                                <input type=\"submit\" value=\"creer compte\" id=\"register-submit\">
                            </div>
                        </form>
                        <!-- /Form -->
                    </div>
                </div>
            </div>
            <div class=\"clear\"></div>
        </div>
    </div>
";
    }

    // line 96
    public function block_javascripts($context, array $blocks = array())
    {
        // line 97
        echo "<script type=\"text/javascript\">
function verifier(){
        var p1=document.getElementById(\"passe1\");
        var p2=document.getElementById(\"passe2\");
        if(p2.value!=p1.value){
        return false;
        }
        if(((p1.value).length)<9)
        {
        var m=document.getElementById(\"erreur\");
        m.innerHTML='mot de passe doit être 9 caractéres au minimum';
        return false;
        }
        return true;
}
</script>
 ";
    }

    public function getTemplateName()
    {
        return "OrangMedicBundle:Default:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 97,  148 => 96,  133 => 84,  126 => 80,  120 => 77,  88 => 48,  58 => 21,  39 => 4,  36 => 3,  30 => 2,);
    }
}
