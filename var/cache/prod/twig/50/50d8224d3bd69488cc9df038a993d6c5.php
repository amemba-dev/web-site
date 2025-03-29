<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* socials.html.twig */
class __TwigTemplate_4995354ea58340fef67c968e2066fc56 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<ul class=\"reseaux-sociaux list-group d-flex\">
    <li class=\"\"><a href=\"mailto:";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["foot"] ?? null), "mail", [], "any", false, false, false, 2), "html", null, true);
        yield "\"><i class=\"fa-solid fa-envelope fa-2x\"></i> <span class=\"mx-3\">Mail</span></a></li>
    <li class=\"\"><a href=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["foot"] ?? null), "facebook", [], "any", false, false, false, 3), "html", null, true);
        yield "\" target=\"_blank\"><i class=\"fa-brands fa-facebook fa-2x\"></i> <span class=\"mx-3\">Facebook</span></a></li>
    <li class=\"\"><a href=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["foot"] ?? null), "instagram", [], "any", false, false, false, 4), "html", null, true);
        yield "\" target=\"_blank\"><i class=\"fa-brands fa-instagram fa-2x\"></i> <span class=\"mx-3\">amemba_officiel</span></a></li>
    <li class=\"\"><a href=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["foot"] ?? null), "twitter", [], "any", false, false, false, 5), "html", null, true);
        yield "\" target=\"_blank\"><i class=\"fa-brands fa-twitter fa-2x\"></i> <span class=\"mx-3\">AMEMBAofficiel</span></a></li>
    <!--
    <li class=\"\"><a href=\"https://www.youtube.com/channel/UCDPsjydTxiMkAjlqnur3Btw\" target=\"_blank\"><i class=\"fa-brands fa-youtube fa-2x\"></i> <span class=\"mx-3\">Youtube</span></a></li>
    -->
    <li class=\"\"><a href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["foot"] ?? null), "whatsapp", [], "any", false, false, false, 9), "html", null, true);
        yield "\" target=\"_blank\"><i class=\"fa-brands fa-whatsapp fa-2x\"></i> <span class=\"mx-3\">WhatsApp</span></a></li>

</ul>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "socials.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  64 => 9,  57 => 5,  53 => 4,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "socials.html.twig", "/workspace/deploy/amemba-site-dev/templates/socials.html.twig");
    }
}
