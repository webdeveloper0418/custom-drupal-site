<?php

/* themes/prisma/templates/page/page--node-conference.html.twig */
class __TwigTemplate_5dd000f1366ef8e51d389abcb17aaceb76892b4373bff87a727fa3da60df8080 extends Twig_Template
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
        $tags = array("if" => 21, "include" => 72);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'include'),
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
        echo "<!-- Header Section -->
<div id=\"main\">
    <div class=\"header interior\" style=\"background: url('/themes/prisma/assets/images/office.png');\">
    <div class=\"full-header\">
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
        // line 21
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", array())) {
            // line 22
            echo "                            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
            echo "
                        ";
        }
        // line 24
        echo "                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
<div class=\"background\"></div>
    <div class=\"wrap office-temp\">
        <div class=\"main-contain\">
            <div class=\"page-intro container\">
                <div class=\"row\">
                    ";
        // line 35
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
                </div>
            </div>
            <!-- // Revistas Statistics \\\\ -->
            <div class=\"container eventos-content\">
            <div class=\"row\">
            <h2 class=\"con_title_1\">Próximos eventos de Josef Ajram</h2>
                <div class=\"post-lists \">

                    <div class=\"eventos-ports flex-wrap-center-colum\">
                        ";
        // line 45
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "eventos_widget", array()), "html", null, true));
        echo "
                    </div>
                </div>
                </div>
            </div>
            <div class=\"somos color-block container-fluid\">
             <div class=\"container\">
                <div class=\"row\">

                        <h1 class=\"con_title_2\">Conferenciantes relacionados</h1>
                        ";
        // line 55
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "related", array()), "html", null, true));
        echo "

                    </div>
                </div>
            </div>
            <div class=\"container actualidad post-new-section\">
                <div class=\"post-lists row\">
                    <h2 class=\"con_title_3\">Actualidad</h2>
                    ";
        // line 63
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "actualidad_widget", array()), "html", null, true));
        echo "
                </div>
            </div>
        </div>
        <!-- // Revistas Statistics \\\\ -->
    </div>

    <!-- Footer Section -->

    ";
        // line 72
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/footer/footer.html.twig"), "themes/prisma/templates/page/page--node-conference.html.twig", 72)->display($context);
        // line 73
        echo "
    <!-- /Footer Section -->
</div>
<input type=\"hidden\" id=\"menu-link-active\" value = \"conference\">
";
    }

    public function getTemplateName()
    {
        return "themes/prisma/templates/page/page--node-conference.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 73,  135 => 72,  123 => 63,  112 => 55,  99 => 45,  86 => 35,  73 => 24,  67 => 22,  65 => 21,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/prisma/templates/page/page--node-conference.html.twig", "/var/www/html/prisma/themes/prisma/templates/page/page--node-conference.html.twig");
    }
}
