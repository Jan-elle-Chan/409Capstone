<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/footer.html.twig */
class __TwigTemplate_3ff3881a7e87ac6494db2b1ee9aee1f82bc6a1201717d7a3dea6303a16196f83 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<section id=\"footer\" class=\"section\">
    <section class=\"container ";
        // line 2
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">
        <section class=\"footer-flex-container\">
        <div>
            <p><a href=\"https://docs.google.com/forms/d/e/1FAIpQLSdRxBe8XcXRCo2Bli_LJovnxYWVLBbQ8piaRWb9MTh8cMdFXw/viewform?usp=pp_url\">Contact Us
        </div>
        <div>
            Copyright &copy; 2024
        </div>

        </section>
        
        
       
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"footer\" class=\"section\">
    <section class=\"container {{ grid_size }}\">
        <section class=\"footer-flex-container\">
        <div>
            <p><a href=\"https://docs.google.com/forms/d/e/1FAIpQLSdRxBe8XcXRCo2Bli_LJovnxYWVLBbQ8piaRWb9MTh8cMdFXw/viewform?usp=pp_url\">Contact Us
        </div>
        <div>
            Copyright &copy; 2024
        </div>

        </section>
        
        
       
    </section>
</section>
", "partials/footer.html.twig", "C:\\xampp\\htdocs\\dtSimplified\\user\\themes\\quark\\templates\\partials\\footer.html.twig");
    }
}
