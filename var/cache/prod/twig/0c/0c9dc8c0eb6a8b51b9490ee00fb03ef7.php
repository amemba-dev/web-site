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

/* register/client.register.html.twig */
class __TwigTemplate_41ed6a00640583c22b052396e7bdb290 extends Template
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
            'page' => [$this, 'block_page'],
            'content' => [$this, 'block_content'],
            'part' => [$this, 'block_part'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.pages.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.pages.html.twig", "register/client.register.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "<section class=\"login-register\">
    <div class=\"container d-flex\">
        <div class=\"login-left login-card d-flex justify-content-center align-items-center\">
            <div>
                <img src=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/join_vector.svg"), "html", null, true);
        yield "\" alt=\"\">
                <h2>";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["txtRegister"] ?? null), "html", null, true);
        yield "</h2>
            </div>
        </div>
        <div class=\"login-right login-card\">
            <div class=\"container\">
                <form method = \"post\" action= \"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_client");
        yield "\">
                    <h2>Création de compte client</h2>\t
                    <div class=\"row gx-2\">
                        <div class=\"col-6 mb-3\">
                            <label class=\"form-label\">Prenom</label>
                            <input type=\"text\" class=\"form-control\" name=\"prenom\" required=\"\" placeholder=\"Prenom\">
                        </div>
                        <div class=\"col-6 mb-3\">
                            <label class=\"form-label\">Nom</label>
                            <input type=\"text\" class=\"form-control\" name=\"nom\" required=\"\" placeholder=\"Nom\">
                        </div> 
                    </div>
                    <div class=\"mb-3\">
                         <label class=\"form-label\">Email</label>
                         <input class=\"form-control\" name=\"email\" placeholder=\"Adresse email\" type=\"email\" required>
                    </div> 
                    <div class=\"mb-3\">
                         <label class=\"form-label\">Password</label>
                         <input class=\"form-control\" name=\"password\" placeholder=\"Mot de passe\" type=\"password\" required>
                    </div> 
                    <div class=\"my-4\">
                      <button type=\"submit\" class=\"btn btn-primary w-100\">Creer un compte</button>
                    </div> 
            
                   
                    <span>Vous avez deja un compte ? <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Connectez-vous</a></span> 
                </form>
            </div>
        </div>
    </div>
</section>
<!-- REGISTER SECTION END -->
";
        yield from [];
    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_part(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "register/client.register.html.twig";
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
        return array (  129 => 49,  116 => 39,  88 => 14,  80 => 9,  76 => 8,  70 => 4,  63 => 3,  53 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "register/client.register.html.twig", "/workspace/deploy/amemba-site-dev/templates/register/client.register.html.twig");
    }
}
