<?php

/* themes/prisma/templates/header/header-page.html.twig */
class __TwigTemplate_66badaaad838394887918b421a047de8adf36e6341c39b2b1909f27af000b6e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 18);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div class=\"full-header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-md-2 brand\">
                <a href=\"/\" class=\"logo-dk\"><img src=\"/themes/prisma/assets/images/logo.png\"></a>
                <a href=\"/\" class=\"logo-mb\"><img src=\"/themes/prisma/assets/images/logo-mb.png\"></a>
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#main-menu\"  aria-expanded=\"false\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>
                <div class=\"clear\"></div>
            </div>
            <div class=\"col-sm-12 col-md-10 main-menu\">
                <div class=\"collapse navbar-collapse pull-right\" id=\"main-menu\">
                    ";
        // line 18
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", array())) {
            // line 19
            echo "                        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
            echo "
                    ";
        }
        // line 20
        echo "  
                </div>
            </div>
            
        </div>
    </div>
</div>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12 page-title\">";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "page_title", array()), "html", null, true));
        echo "

        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/prisma/templates/header/header-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 29,  70 => 20,  64 => 19,  62 => 18,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/prisma/templates/header/header-page.html.twig", "/var/www/html/prisma/themes/prisma/templates/header/header-page.html.twig");
    }
}