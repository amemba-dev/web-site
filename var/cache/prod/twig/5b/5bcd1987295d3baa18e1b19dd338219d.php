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

/* footer/index.html.twig */
class __TwigTemplate_d542729904dbe63813d8b6c574c9dc32 extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.admin.html.twig", "footer/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "<div class=\"page-content\">
    <section class=\"section\">
        <div class=\"row\" id=\"basic-table\">
            <div class=\"col-12 \">

                <div class=\"card\">
                    
                        
                    <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingFour\">
                        <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseFour\" aria-expanded=\"false\" aria-controls=\"panelsStayOpen-collapseFour\">
                        <strong> Réseaux sociaux </strong> 
                        </button>
                    </h2>
                    <div id=\"panelsStayOpen-collapseFour\" class=\"accordion-collapse collapse\" aria-labelledby=\"panelsStayOpen-headingFour\">
                        <div class=\"accordion-body\">
                            <form class=\"form form-horizontal\" method=\"POST\" action=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_footer");
        yield "\">
                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <label for=\"entrepriseTitre\">Mail</label>
                                            <input type=\"text\" class=\"form-control\" name=\"mail\" id=\"entrepriseTitre\" aria-describedby=\"helpId\" placeholder=\"\" value=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["foot"] ?? null), "mail", [], "any", false, false, false, 24), "html", null, true);
        yield "\">                                               
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <label for=\"entrepriseTitre\">Facebook</label>
                                            <input type=\"text\" class=\"form-control\" name=\"facebook\" id=\"entrepriseTitre\" aria-describedby=\"helpId\" placeholder=\"\" value=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["foot"] ?? null), "facebook", [], "any", false, false, false, 30), "html", null, true);
        yield "\">                                               
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <label for=\"entrepriseTitre\">Instagram</label>
                                            <input type=\"text\" class=\"form-control\" name=\"instagram\" id=\"entrepriseTitre\" aria-describedby=\"helpId\" placeholder=\"\" value=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["foot"] ?? null), "instagram", [], "any", false, false, false, 36), "html", null, true);
        yield "\">                                               
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <label for=\"entrepriseTitre\">Twitter</label>
                                            <input type=\"text\" class=\"form-control\" name=\"twitter\" id=\"entrepriseTitre\" aria-describedby=\"helpId\" placeholder=\"\" value=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["foot"] ?? null), "twitter", [], "any", false, false, false, 42), "html", null, true);
        yield "\">                                               
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"form-group\">
                                            <label for=\"entrepriseTitre\">Whatsapp</label>
                                            <input type=\"text\" class=\"form-control\" name=\"whatsapp\" id=\"entrepriseTitre\" aria-describedby=\"helpId\" placeholder=\"\" value=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["foot"] ?? null), "whatsapp", [], "any", false, false, false, 48), "html", null, true);
        yield "\">                                               
                                        </div>
                                    </div>
                                </div>
                                
                                <button type=\"submit\" class=\"btn btn-primary\">Modifier la section</button>      
                            </form>
                        </div>
                    </div>
                        
                    
                </div>  
            </div>
        </div>
    </section>    
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "footer/index.html.twig";
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
        return array (  119 => 48,  110 => 42,  101 => 36,  92 => 30,  83 => 24,  75 => 19,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "footer/index.html.twig", "/workspace/deploy/amemba-site-dev/templates/footer/index.html.twig");
    }
}
