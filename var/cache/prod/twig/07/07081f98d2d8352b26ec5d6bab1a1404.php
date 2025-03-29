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

/* membre_entreprise/index.html.twig */
class __TwigTemplate_457c84b79f93497b2f30dcf499d2f380 extends Template
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
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("base.pages.html.twig", "membre_entreprise/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Mon entreprise";
        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<!-- REGISTER SECTION START -->
<section class=\"login-register\">
    <div class=\"container d-flex\">
        <div class=\"login-left login-card d-flex justify-content-center align-items-center\">
            <div>
                <img src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/business_woman.svg"), "html", null, true);
        yield "\" alt=\"business woman\">
                
            </div>
        </div>
        <div class=\"login-right login-card\">
            <div class=\"container\">
                <form method=\"POST\" action = \" ";
        // line 17
        if (array_key_exists("entreprise", $context)) {
            yield " ";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_membre_entreprise_update");
            yield " ";
        } else {
            yield " ";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_membre_entreprise_add");
            yield " ";
        }
        yield " \" enctype=\"multipart/form-data\">
                    <h2> ";
        // line 18
        if (array_key_exists("entreprise", $context)) {
            yield "  Modifier les informations de mon entreprise ";
        } else {
            yield " Je suis entrepreneure, j'inscris mon entreprise ";
        }
        yield " </h2>
                    <div class=\"mb-3\">
                        <label class=\"form-label\">Nom</label>
                        <input type=\"text\" class=\"form-control\" name=\"id\" value=\"";
        // line 21
        if (array_key_exists("entreprise", $context)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["entreprise"] ?? null), "id", [], "any", false, false, false, 21), "html", null, true);
        }
        yield "\" hidden>
                        <input class=\"form-control\" name=\"nom\" placeholder=\"Nom de l'entreprise\" type=\"text\" required ";
        // line 22
        if (array_key_exists("entreprise", $context)) {
            yield "value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["entreprise"] ?? null), "nom", [], "any", false, false, false, 22), "html", null, true);
            yield "\"";
        }
        yield ">
                    </div>
                    <div class=\"mb-3\">
                        <label class=\"form-label\">Domaine d'activite</label>
                        <input class=\"form-control\" name=\"domaine\" placeholder=\"Domaine\" type=\"text\" required ";
        // line 26
        if (array_key_exists("entreprise", $context)) {
            yield "value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["entreprise"] ?? null), "domaine", [], "any", false, false, false, 26), "html", null, true);
            yield "\"";
        }
        yield ">
                    </div>
                    <div class=\"mb-3\">
                        <label class=\"form-label\">Parlez nous de votre entreprise en quelques mots</label>
                        <textarea class=\"form-control\" name=\"description\" placeholder=\"Description de votre entreprise\" rows=\"4\" required>";
        // line 30
        if (array_key_exists("entreprise", $context)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["entreprise"] ?? null), "description", [], "any", false, false, false, 30), "html", null, true);
        }
        yield "</textarea>
                    </div>
                    <div class=\"mb-3\">
                        <label class=\"form-label\">Date de création ou de debut d'activité</label>
                        <input class=\"form-control\" name=\"date\" placeholder=\"Ou se situe votre entreprise?\" type=\"date\" required ";
        // line 34
        if (array_key_exists("entreprise", $context)) {
            yield "value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["entreprise"] ?? null), "createdAt", [], "any", false, false, false, 34), "m/d/Y"), "html", null, true);
            yield "\"";
        }
        yield ">
                    </div>
                    <div class=\"mb-3\">
                        <label class=\"form-label\">Adresse</label>
                        <input class=\"form-control\" name=\"adresse\" placeholder=\"Ou se situe votre entreprise?\" type=\"text\" required ";
        // line 38
        if (array_key_exists("entreprise", $context)) {
            yield "value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["entreprise"] ?? null), "adresses", [], "any", false, false, false, 38), "html", null, true);
            yield "\"";
        }
        yield ">
                    </div>
                    <div class=\"mb-3\">
                        <label class=\"form-label\">Type d'entreprise</label>
                        <select class=\"form-select\" aria-label=\"Default select example\" name=\"type\">
                            <option value=\"Entreprise individuelle\" selected>Entreprise individuelle</option>
                            <option value=\"SA\">SA</option>
                            <option value=\"SARL\">SARL</option>
                            <option value=\"SUARL\">SUARL</option>
                            <option value=\"GIE\">GIE</option>
                        </select>
                    </div>
                    <div class=\"mb-3\">
                        <label class=\"form-label\">Email</label>
                        <input class=\"form-control\" name=\"email\" placeholder=\"Ou se situe votre entreprise?\" type=\"email\" required ";
        // line 52
        if (array_key_exists("entreprise", $context)) {
            yield "value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["entreprise"] ?? null), "email", [], "any", false, false, false, 52), "html", null, true);
            yield "\"";
        }
        yield ">
                    </div>
                    <div class=\"mb-3\">
                        <label class=\"form-label\">Lien vers la page du réseau social le plus actif</label>
                        <input class=\"form-control\" name=\"instagram\" placeholder=\"Ou se situe votre entreprise?\" type=\"url\" ";
        // line 56
        if (array_key_exists("entreprise", $context)) {
            yield "value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["entreprise"] ?? null), "instagram", [], "any", false, false, false, 56), "html", null, true);
            yield "\"";
        }
        yield ">
                    </div>
                    <div class=\"mb-3\">
                        <label class=\"form-label\">Site web</label>
                        <input class=\"form-control\" name=\"site\" placeholder=\"Ou se situe votre entreprise?\" type=\"url\" ";
        // line 60
        if (array_key_exists("entreprise", $context)) {
            yield "value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["entreprise"] ?? null), "site", [], "any", false, false, false, 60), "html", null, true);
            yield "\"";
        }
        yield ">
                    </div>
                    <div class=\"mb-3\">
                        <label class=\"form-label\">Logo de l'entreprise (facultatif)</label>
                        <input class=\"form-control logo-enterprise\" name=\"logo\" type=\"file\" accept=\"image/png, image/gif, image/jpeg\">
                    </div>

                    ";
        // line 67
        if (array_key_exists("entreprise", $context)) {
            // line 68
            yield "                    <div class=\"mb-4\">
                        <label class=\"form-label\">Etat : <strong>";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["entreprise"] ?? null), "etat", [], "any", false, false, false, 69), "html", null, true);
            yield "</strong> </label>
                        <select class=\"form-select\" aria-label=\"Default select example\" name=\"etat\">
                            ";
            // line 71
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["entreprise"] ?? null), "etat", [], "any", false, false, false, 71) == "VALIDE")) {
                // line 72
                yield "                                <option value=\"VALIDE\" selected >Valider</option>
                                <option value=\"ARCHIVE\">Archiver</option>
                            ";
            } else {
                // line 75
                yield "                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["entreprise"] ?? null), "etat", [], "any", false, false, false, 75) == "ARCHIVE")) {
                    // line 76
                    yield "                                <option value=\"ARCHIVE\">Archiver</option>
                                <option value=\"DEMANDE\" selected>Demande de publication</option>
                            ";
                }
                // line 79
                yield "                            ";
            }
            // line 80
            yield "                        </select>
                    </div> 
                    ";
        }
        // line 83
        yield "                    

                    <div class=\"mb-4\">
                        ";
        // line 86
        if (array_key_exists("entreprise", $context)) {
            // line 87
            yield "                        <button type=\"submit\" class=\"btn btn-warning w-100\">Modifier mon entrepise</button>
                        ";
        } else {
            // line 89
            yield "                        <button type=\"submit\" class=\"btn btn-primary w-100\">Inscrire mon entrepise</button>
                        ";
        }
        // line 91
        yield "                        
                    </div>

                   
                </form>
            </div>
        </div>
    </div>
</section>
<!-- REGISTER SECTION END -->







";
        // line 108
        yield from $this->unwrap()->yieldBlock('part', $context, $blocks);
        yield from [];
    }

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
        return "membre_entreprise/index.html.twig";
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
        return array (  292 => 108,  273 => 91,  269 => 89,  265 => 87,  263 => 86,  258 => 83,  253 => 80,  250 => 79,  245 => 76,  242 => 75,  237 => 72,  235 => 71,  230 => 69,  227 => 68,  225 => 67,  211 => 60,  200 => 56,  189 => 52,  168 => 38,  157 => 34,  148 => 30,  137 => 26,  126 => 22,  120 => 21,  110 => 18,  98 => 17,  89 => 11,  82 => 6,  75 => 5,  65 => 3,  54 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "membre_entreprise/index.html.twig", "/workspace/deploy/amemba-site-dev/templates/membre_entreprise/index.html.twig");
    }
}
