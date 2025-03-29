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

/* annuaire/details.html.twig */
class __TwigTemplate_d0d4b1d32db89dd388c72c2338d10385 extends Template
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
        $this->parent = $this->loadTemplate("base.pages.html.twig", "annuaire/details.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Annuaire";
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "
<!-- SECOND SECTION START -->
<section class=\"container py-5\">
    <div class=\" row\">
        <div class=\"col-4\">
            <img src=\"";
        // line 12
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "profile", [], "any", false, false, false, 12)) {
            yield " /pp/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "profile", [], "any", false, false, false, 12), "html", null, true);
            yield " ";
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/avatars/exemple.jpg"), "html", null, true);
            yield " ";
        }
        yield "\" style=\"object-fit: cover; object-position: center\" alt=\"avatar\" width=\"300\" height=\"500\">

        </div>
        <div class=\"col-8\">
            <div class=\"card\">
                
                <div class=\"card-header\">
                    <strong> <h3>";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "prenom", [], "any", false, false, false, 19), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "nom", [], "any", false, false, false, 19), "html", null, true);
        yield "</h3> </strong>
                </div>
                ";
        // line 21
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "statut", [], "any", false, false, false, 21)) {
            // line 22
            yield "                            <button class=\"btn btn-primary mt-1 mx-1\">Recherche d'emplois</button>
                ";
        }
        // line 24
        yield "
                <div class=\"card-body\">
                  <p class=\"card-text mb-3\">  <strong>  Bio : </strong> ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "bio", [], "any", false, false, false, 26), "html", null, true);
        yield "  </p>
                  <p class=\"card-text mb-3\">  <strong>  Promotion : </strong> ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "promotion", [], "any", false, false, false, 27), "html", null, true);
        yield "</p>
                  <p class=\"card-text mb-3\">  <strong>  Pays : </strong> ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "pays", [], "any", false, false, false, 28), "html", null, true);
        yield "</p>
                  <p class=\"card-text mb-3\">  <strong>  Ville : </strong> ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "ville", [], "any", false, false, false, 29), "html", null, true);
        yield "</p>
                  <p class=\"card-text mb-3\">  <strong>  Email : </strong> <a class=\"card-text\" href=\"mailto:";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "email", [], "any", false, false, false, 30), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "email", [], "any", false, false, false, 30), "html", null, true);
        yield "</a></p>
                  <p class=\"card-text mb-3\">  <strong>  Téléphone : </strong> ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "telephone", [], "any", false, false, false, 31), "html", null, true);
        yield "</p>
                  ";
        // line 32
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "statut", [], "any", false, false, false, 32)) {
            // line 33
            yield "                  ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "cv", [], "any", false, false, false, 33)) {
                // line 34
                yield "                   <a href=\"/cv/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "cv", [], "any", false, false, false, 34), "html", null, true);
                yield "\" target=\"_blank\" class=\"btn btn-primary\">Affichier le CV</a>
                  ";
            }
            // line 36
            yield "                   
                ";
        }
        // line 38
        yield "                </div>
                
                <div class=\"accordion accordion-flush mt-3\" id=\"accordionFlushExample\">
                    <div class=\"accordion-item\">
                      <h2 class=\"accordion-header\" id=\"flush-headingOne\">
                        <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapseOne\" aria-expanded=\"false\" aria-controls=\"flush-collapseOne\">
                         Afficher plus d'informations
                        </button>
                      </h2>
                      <div id=\"flush-collapseOne\" class=\"accordion-collapse collapse\" aria-labelledby=\"flush-headingOne\" data-bs-parent=\"#accordionFlushExample\">
                        <div class=\"accordion-body\">
                            <p class=\"card-text mb-3\">  <strong>  Baccalauréat obtenu : </strong> ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "bac", [], "any", false, false, false, 49), "html", null, true);
        yield "</p>
                            <p class=\"card-text mb-3\">  <strong>  Université : </strong> ";
        // line 50
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "univ", [], "any", false, false, false, 50);
        yield "</p>
                            <p class=\"card-text mb-3\">  <strong>  Derniers diplôme obtenu : </strong> ";
        // line 51
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "diplome", [], "any", false, false, false, 51);
        yield "</p>
                            <p class=\"card-text mb-3\">  <strong>  Dernière expérience professionnelle : </strong> ";
        // line 52
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "experience", [], "any", false, false, false, 52);
        yield "</p>
                            <p class=\"card-text mb-3\">  <strong>  Profession : </strong> ";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "profession", [], "any", false, false, false, 53), "html", null, true);
        yield "</p>
                            <p class=\"card-text mb-3\">  <strong>  Entreprise : </strong> ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "entreprise", [], "any", false, false, false, 54), "html", null, true);
        yield "</p>
                            <p class=\"card-text mb-3\">  <strong>  Secteur : </strong> ";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "secteur", [], "any", false, false, false, 55), "html", null, true);
        yield "</p>
                            <p class=\"card-text mb-3\">  <strong>  Profil LinkedIn : </strong> <a class=\"\" href=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "link", [], "any", false, false, false, 56), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "link", [], "any", false, false, false, 56), "html", null, true);
        yield "</a></p>
                        </div>
                      </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
  
 </section>
<!-- SECOND SECTION END -->
";
        yield from [];
    }

    // line 71
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
        return "annuaire/details.html.twig";
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
        return array (  225 => 71,  205 => 56,  201 => 55,  197 => 54,  193 => 53,  189 => 52,  185 => 51,  181 => 50,  177 => 49,  164 => 38,  160 => 36,  154 => 34,  151 => 33,  149 => 32,  145 => 31,  139 => 30,  135 => 29,  131 => 28,  127 => 27,  123 => 26,  119 => 24,  115 => 22,  113 => 21,  106 => 19,  89 => 12,  82 => 7,  75 => 6,  65 => 4,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "annuaire/details.html.twig", "/workspace/deploy/amemba-site-dev/templates/annuaire/details.html.twig");
    }
}
