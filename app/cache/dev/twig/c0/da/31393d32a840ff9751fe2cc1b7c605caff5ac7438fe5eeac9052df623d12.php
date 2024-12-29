<?php

/* OrangMedicBundle:Default:contact.html.twig */
class __TwigTemplate_c0da31393d32a840ff9751fe2cc1b7c605caff5ac7438fe5eeac9052df623d12 extends Twig_Template
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
        echo "Contact | Orang-Medic";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"top_bg\">
        <div class=\"main_top\">
            <h4 class=\"style\">Contact</h4>
        </div>
    </div>
    <!-- start main -->
    <div class=\"main_bg\">
        <div class=\"main\">
            <div class=\"contact\">\t\t\t\t
                <div class=\"contact_left\">
                    <div class=\"contact_info\">
                        <h3>Infos de contact</h3>
                        <div class=\"map\">
                            <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1618.5526018593623!2d10.82918059756063!3d35.77279201456708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2stn!4v1431977234052\" width=\"100%\" height=\"175\" frameborder=\"0\" style=\"border:0\"></iframe>
                        </div>
                    </div>
                    <div class=\"company_address\">
                        <h3>Globe Service informatique :</h3>
                        <p>Place 3 septembre rue Trabelsia 5000 Monastir,</p>
                        <p>Tunisie MONASTIR,</p>
                        <p>TEL: +216 73 447 836</p>
                        <p>Fax: +216 73 468 696</p>
                        <p>Email: <a href=\"mailto:commercial@gsi.com.tn\">commercial@gsi.com.tn</a></p>
                    </div>
                </div>\t\t\t\t
                <div class=\"contact_right\">
                    <div class=\"contact-form\">
                        <h3>Contacter nous</h3>
                        <form method=\"get\" action=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("Email");
        echo "\">
                            <div>
                                <span><label>NOM</label></span>
                                <span><input name=\"userName\" type=\"text\" class=\"textbox\" required=\"required\"></span>
                            </div>
                            <div>
                                <span><label>E-MAIL</label></span>
                                <span><input name=\"userEmail\" type=\"text\" class=\"textbox\" required=\"required\"></span>
                            </div>
                            <div>
                                <span><label>MOBILE</label></span>
                                <span><input name=\"userPhone\" type=\"text\" class=\"textbox\" required=\"required\"></span>
                            </div>
                            <div>
                                <span><label>Message</label></span>
                                <span><input name=\"userSubject\" type=\"text\" class=\"textbox\" placeholder=\"sujet de message\" required=\"required\"></span>
                                <span><textarea name=\"userMsg\" required=\"required\"> </textarea></span>
                            </div>
                            <div>
                                <span><input type=\"submit\" value=\"Envoyer\"></span>
                            </div>
                        </form>
                    </div>
                </div>\t\t
                <div class=\"clear\"></div>\t\t
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OrangMedicBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 32,  38 => 4,  35 => 3,  29 => 2,);
    }
}
