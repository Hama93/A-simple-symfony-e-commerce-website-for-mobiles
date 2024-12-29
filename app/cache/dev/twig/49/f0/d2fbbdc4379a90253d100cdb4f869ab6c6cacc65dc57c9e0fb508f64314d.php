<?php

/* OrangMedicBundle:Default:profil.html.twig */
class __TwigTemplate_49f0d2fbbdc4379a90253d100cdb4f869ab6c6cacc65dc57c9e0fb508f64314d extends Twig_Template
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
        echo "Profil | Orang-Medic";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["c"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "session"), "get", array(0 => "client"), "method");
        // line 5
        echo "    ";
        if ((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c"))) {
            // line 6
            echo "        <div class=\"top_bg\">
            <div class=\"main_top\">
                <h2 class=\"style\">Profil : ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "nom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "prenom"), "html", null, true);
            echo "</h2>
            </div>
        </div>
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
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "photo")), "html", null, true);
            echo "\" alt=\"photo de client\" />
                                    <form action=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("profil");
            echo "\" method=\"POST\" enctype=\"multipart/form-data\">
                                        <input title=\"changer cette photo\" type=\"file\" name=\"upload\" accept='image/*' required=\"required\" onchange=\"this.form.submit()\" />
                                    </form>
                                </div>
                                <div class=\"registration_form\">
                                    <!-- Form -->
                                    ";
            // line 28
            $context["c"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "session"), "get", array(0 => "client"), "method");
            // line 29
            echo "                                    <form id=\"registration_form\" action=\"";
            echo $this->env->getExtension('routing')->getPath("profil");
            echo "\" method=\"GET\">
                                        <div>
                                            <label>
                                                <input name=\"nom\"  placeholder=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "nom"), "html", null, true);
            echo "\" type=\"text\" tabindex=\"3\" title=\"changer mon nom\" >
                                            </label>
                                        </div>
                                        <div>
                                            <label>
                                                <input name=\"prenom\" placeholder=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "prenom"), "html", null, true);
            echo "\" type=\"text\" title=\"changer prénom\" tabindex=\"4\" >
                                            </label>
                                        </div>\t\t\t\t
                                        <div>
                                            <label>
                                                <input name=\"tel\" placeholder=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "tel"), "html", null, true);
            echo "\" type=\"text\" title=\"changer mon numéro de téléphone\" tabindex=\"4\" >
                                            </label>
                                        </div>
                                        <div>
                                            <label>
                                                <input name=\"mp\" type=\"password\" placeholder=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "mp"), "html", null, true);
            echo "\" title=\"changer mon mot de passe\" tabindex=\"4\" >
                                            </label>
                                        </div>
                                        <div>
                                            <label>
                                                <select name=\"sexe\" size=\"1\">
                                                    ";
            // line 53
            if (($this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "sexe") && ($this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "sexe") == "homme"))) {
                // line 54
                echo "                                                        <option selected>homme</option>
                                                        <option>femme</option>
                                                    ";
            } elseif (($this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "sexe") && ($this->getAttribute((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")), "sexe") == "femme"))) {
                // line 57
                echo "                                                        <option>homme</option>
                                                        <option selected>femme</option>
                                                    ";
            } else {
                // line 60
                echo "                                                        <option selected></option>
                                                        <option>homme</option>
                                                        <option>femme</option>
                                                    ";
            }
            // line 64
            echo "                                                </select>
                                            </label>
                                        </div>
                                            <div>
                                                <input type=\"submit\" value=\"Enregistrer\" id=\"register-submit\">
                                            </div>
                                    </form>
                                    <!-- /Form -->
                                </div>
                                <div class=\"clear\"></div>
                            </div>
                            <!----//End-img-cursual---->
                        </div>
                        <!-- start span1_of_1 -->

                        <div class=\"clear\"></div>
                    </div>
                    <div class=\"clear\"></div>
                </div>
            </div>
        </div>
    ";
        } else {
            // line 86
            echo "        <script>window.location.href = \"http://localhost/Orang-Medic-Mobile/web/app_dev.php\"</script>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OrangMedicBundle:Default:profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 86,  139 => 64,  133 => 60,  128 => 57,  123 => 54,  121 => 53,  112 => 47,  104 => 42,  96 => 37,  88 => 32,  81 => 29,  79 => 28,  70 => 22,  66 => 21,  48 => 8,  44 => 6,  41 => 5,  38 => 4,  35 => 3,  29 => 2,);
    }
}
