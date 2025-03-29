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

/* blog/membre.article.add.html.twig */
class __TwigTemplate_4cdc6b244415774c3bd5162df65b7ecd extends Template
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
        $this->parent = $this->loadTemplate("base.pages.html.twig", "blog/membre.article.add.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Redaction Article";
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
        yield "<!-- SECOND SECTION START -->
    <section class=\"second\">
        <div class=\"container py-5\">

            <a type=\"button\" href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_auteur");
        yield "\" class=\"btn btn-primary position-relative my-3\">
                Liste de mes articles <span class=\"position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-2\"><span class=\"visually-hidden\">unread messages</span></span>
            </a>
            <form method=\"POST\" enctype=\"multipart/form-data\">
                <div class=\"form-top d-flex\">
                    <div class=\"form-top-left form-top-side\">
                        <div class=\"form-group\" class=\"py-2\">
                            <div class=\"text-center\">
                            </div>
                            <div class=\"d-flex justify-content-center\">
                                <img src=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/nopreview.jpeg"), "html", null, true);
        yield "\" alt=\"article illustration\" id=\"addArticleImg\" width=\"500px\">
                            </div>
                        </div>
                    </div>
                    <div class=\"form-top-right form-top-side\">
                        <div class=\"form-group\">
                            <label for=\"title\">Titre <span class=\"require\">*</span> <small>(Ce champ est utilisé dans le chemin de l'url.)</small></label>
                            <input type=\"text\" class=\"form-control mb-3\" name=\"titre\" required />
                        </div>
                        <div class=\"form-group form-row\">
                            <label for=\"title\">Categorie <span class=\"require\">*</span></label>
                            <select name=\"categorie\" id=\"\" class=\"form-control mb-3\" required>
                                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 34
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 34), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["i"], "libelle", [], "any", false, false, false, 34), "html", null, true);
            yield "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "                            </select>
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"exampleFormControlFile1\">Ajouter une image a l'article </label>
                            <input name=\"image\" class=\"form-control mb-4\" type=\"file\" id=\"formFileImage\" accept=\"image/png, image/jpeg\" required>
                        </div>
                        <div class=\"form-group mt-3\">
                            <label for=\"article\">Contenu de l'article</label>
                            <textarea rows=\"5\" minlength=\"20\" class=\"form-control\" name=\"contenu\" required></textarea>
                        </div>
                    </div>
                </div>
    \t\t    
    \t\t    <div class=\"form-group\">
    \t\t        <p><span class=\"require\">*</span> - Champs obligatoires</p>
    \t\t    </div>
    \t\t    <div class=\"form-group\">
    \t\t        <button type=\"submit\" class=\"btn btn-primary\">
    \t\t            Poster
    \t\t        </button>
    \t\t    </div>
    \t\t</form>
        </div>
    </section>
    <!-- SECOND SECTION END -->
";
        yield from [];
    }

    // line 64
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
        return "blog/membre.article.add.html.twig";
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
        return array (  161 => 64,  131 => 36,  120 => 34,  116 => 33,  101 => 21,  88 => 11,  82 => 7,  75 => 6,  65 => 4,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "blog/membre.article.add.html.twig", "/workspace/deploy/amemba-site-dev/templates/blog/membre.article.add.html.twig");
    }
}
