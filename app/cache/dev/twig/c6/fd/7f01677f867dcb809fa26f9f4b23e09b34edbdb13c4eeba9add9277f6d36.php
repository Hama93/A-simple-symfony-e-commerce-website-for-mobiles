<?php

/* OrangMedicBundle:Default:support.html.twig */
class __TwigTemplate_c6fd7f01677f867dcb809fa26f9f4b23e09b34edbdb13c4eeba9add9277f6d36 extends Twig_Template
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
        echo "Support | Orang-Medic";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"top_bg\">
        <div class=\"main_top\">
            <h4 class=\"style\">Support</h4>
        </div>
    </div>
    <!-- start main -->
    <div class=\"main_bg\">
        <div class=\"wrap\">
            <div class=\"main\">
                <!-- start grids_of_3 -->
                <div class=\"grids_of_3\">
                        <h5>Salut et bienvenu sur Orang-Medic-mobile<br />
                        Ce site et fourni pour les appareils mobiles, Comme sur Orang-Medic, cette version <br />
                        vous offre la possibilité d'achât en ligne des produits médicaux.<br />
                        Si vous avez une question n'hésitez pas a nous contacter.</h5>
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
        return "OrangMedicBundle:Default:support.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  35 => 3,  29 => 2,);
    }
}
