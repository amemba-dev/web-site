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

/* security/login.html.twig */
class __TwigTemplate_552e1ea5879b85583e3108b7fa205c79 extends Template
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
        $this->parent = $this->loadTemplate("base.pages.html.twig", "security/login.html.twig", 1);
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
        yield "
<!-- LOGIN SECTION START -->
    <section class=\"login-register\">
        <div class=\"container d-flex\">
            <div class=\"login-left login-card d-flex justify-content-center align-items-center\">
                <div>
                    ";
        // line 10
        if (($context["error"] ?? null)) {
            // line 11
            yield "                    <div class=\"alert alert-primary text-dark\">Erreur de connexion: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["error"] ?? null), "html", null, true);
            yield " </div>
                    ";
        }
        // line 13
        yield "
                    ";
        // line 14
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 14)) {
            // line 15
            yield "                        <div class=\"mb-3\">
                            You are logged in as ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 16), "username", [], "any", false, false, false, 16), "html", null, true);
            yield ", <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a>
                        </div>
                    ";
        }
        // line 19
        yield "                    <img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/login.svg"), "html", null, true);
        yield "\" alt=\"\">
                    <h2 class=\"mt-5 mb-3\">Bon retour parmi nous 😊</h2>
                    <p>Entrez vos identifiants pour accéder à votre compte, Si vous n'avez pas de compte, veuillez faire <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\"> une demande d'adhésion </a> à l'amicale</p>

                </div>
            </div>
            <div class=\"login-right login-card\">
                <div class=\"container\">
                    <form method=\"post\">
                        <h2>Entrez votre email et votre mot de passe</h2>
                        <div class=\"mt-4\">
                             <label class=\"form-label\">Email</label>
                             <input class=\"form-control\" placeholder=\"Adresse email.\" type=\"email\" required value=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["last_username"] ?? null), "html", null, true);
        yield "\" name=\"email\" autocomplete=\"email\">
                        </div> 
                        <div class=\"my-4\">
                            <label class=\"form-label\">Mot de passe</label>
                            <input name=\"password\" autocomplete=\"current-password\" class=\"form-control\" placeholder=\"Au moins 6 caractères.\" type=\"password\" required>
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\" >
                        </div>    
                        <div class=\"d-flex justify-content-between w-100\">
                          <button type=\"submit\" class=\"btn btn-primary\">Connexion</button>
                          <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reset_password");
        yield "\">Mot de passe oublie ?</a>
                        </div> 
                        
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- LOGIN SECTION END -->
";
        yield from [];
    }

    // line 53
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
        return "security/login.html.twig";
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
        return array (  151 => 53,  136 => 40,  129 => 36,  121 => 31,  108 => 21,  102 => 19,  94 => 16,  91 => 15,  89 => 14,  86 => 13,  80 => 11,  78 => 10,  70 => 4,  63 => 3,  53 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "security/login.html.twig", "/workspace/deploy/amemba-site-dev/templates/security/login.html.twig");
    }
}
