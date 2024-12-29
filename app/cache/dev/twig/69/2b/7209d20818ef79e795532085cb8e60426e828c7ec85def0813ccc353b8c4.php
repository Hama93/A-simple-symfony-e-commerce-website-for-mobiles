<?php

/* OrangMedicBundle:Default:mesCommandes.html.twig */
class __TwigTemplate_692b7209d20818ef79e795532085cb8e60426e828c7ec85def0813ccc353b8c4 extends Twig_Template
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
        echo "Commandes | Orang-Medic";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"main_bg\">
        <div class=\"wrap\">
            <div class=\"main\">
                <!-- start grids_of_3 -->
                <div class=\"grids_of_3\">
                    ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) ? $context["commandes"] : $this->getContext($context, "commandes")));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 10
            echo "                        <div class=\"grid1_of_3\">
                            <img alt=\"commande\" src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/colis.jpg"), "html", null, true);
            echo "\" />
                            <a href=\"#\">
                                <h3>Commandes : ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "idcmd"), "html", null, true);
            echo "</h3>
                            </a>
                        </div>
                        <div class=\"grid1_of_3\">
                            <h3>Total produits : <h4> ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "qtetotale"), "html", null, true);
            echo "</h4></h3>  
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
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
        return "OrangMedicBundle:Default:mesCommandes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  64 => 17,  57 => 13,  52 => 11,  49 => 10,  45 => 9,  38 => 4,  35 => 3,  29 => 2,);
    }
}
