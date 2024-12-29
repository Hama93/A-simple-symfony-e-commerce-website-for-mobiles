<?php

/* OrangMedicBundle:Default:identification.html.twig */
class __TwigTemplate_818f9cac840a8be855cbdb56d34e232b70618e34209a5afcf9529482eb65060d extends Twig_Template
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
        echo "Connecter vous | Orang-Medic";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"top_bg\">
        <div class=\"main_top\">
            <h4 class=\"style\">Connexion</h4>
        </div>
    </div>
    <!-- start main -->
    <div class=\"main_bg\">
        <div class=\"main\">
            <div class=\"login_left\">
                <h3>nouveau chez Orang-Medic-Mobile ?</h3>
                <p>Créer un compte maintenant et bénificiez de nos services.<br />Même si vous avez un compte sur Orang-Medic veuillez créer un autre sur Orang-Medic-Mobile</p>
                <div class=\"btn\">
                    <form>
                        <a href =";
        // line 17
        echo $this->env->getExtension('routing')->getPath("orang_medic_inscription");
        echo ">Créer mon compte mobile</a>
                    </form>
                </div>
            </div>
            <div class=\"login_left\">
                <h3>Déjà enregistré? Connectez vous ici</h3>
                <p>Si vous êtes déjà inscrit sur Orang-Medic-Mobile, vous pouvez s'identifiez sur le site si dessous.</p>
                <!-- start registration -->
                <div class=\"registration\">
                    <div class=\"registration_left\">
                        <div class=\"registration_form\">
                            <!-- Form -->
                            <form id=\"registration_form\" action=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("connexion");
        echo "\" method=\"get\">
                                <div>
                                    <label>
                                        <input name=\"email\" placeholder=\"adresse email\" type=\"email\" tabindex=\"3\" required=\"required\">
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input name=\"mp\" placeholder=\"mot de passe\" type=\"password\" tabindex=\"4\" required=\"required\">
                                    </label>
                                </div>
                                ";
        // line 40
        if ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))) {
            echo " 
                                <div>
                                    <label>
                                        <p>";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</p>
                                    </label>
                                </div>
                                ";
        }
        // line 47
        echo "                                <div>
                                    <input type=\"submit\" value=\"S'identifier\" id=\"register-submit\">
                                </div>
                            </form>
                            <!-- /Form -->
                        </div>
                    </div>
                </div>
                <!-- end registration -->
            </div>
            <div class=\"clear\"></div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OrangMedicBundle:Default:identification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 47,  88 => 43,  82 => 40,  68 => 29,  53 => 17,  38 => 4,  35 => 3,  29 => 2,);
    }
}
