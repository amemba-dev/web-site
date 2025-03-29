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

/* agenda_details/index.html.twig */
class __TwigTemplate_c4a9a87c617da5252ed02a318dbe9704 extends Template
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
        $this->parent = $this->loadTemplate("base.pages.html.twig", "agenda_details/index.html.twig", 1);
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
        yield "<!-- SECOND SECTION START -->
    <section class=\"second py-5\">
        <div class=\"container single-event d-flex justify-content-between w-100\">
            <div class=\"single-event-left single-event-side\">
                <img src=\"/evenements/";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "images", [], "any", false, false, false, 8)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null), "path", [], "any", false, false, false, 8), "html", null, true);
        yield "\" alt=\"event\"  height=\"500\">
            </div>
            <div class=\"single-event-right single-event-side px-3\">
                <h3>";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "title", [], "any", false, false, false, 11), "html", null, true);
        yield "</h3>
                <p class=\"my-4\">
                    ";
        // line 13
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "content", [], "any", false, false, false, 13);
        yield "
                </p>
                
                <div class=\"d-flex\">
                    <div class=\"hour mr-4\">
                        <i class=\"fa-solid fa-clock\"></i>
                        <span> ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "startAt", [], "any", false, false, false, 19), "H:i"), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "endAt", [], "any", false, false, false, 19), "H:i"), "html", null, true);
        yield " </span>
                    </div>
                    <div class=\"day\">
                        <i class=\"fa-solid fa-calendar\"></i>
                        <span> ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "date", [], "any", false, false, false, 23), "medium", "none", "", null, "gregorian", "fr"), "html", null, true);
        yield " </span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\" style=\"margin-top:50px\">
            <h4>Commentaires</h4>

            <div class=\"row \">
                <div class=\"col-12 \">
                    <div class=\"container p-0\">
                        <div class=\"row d-flex justify-content-center\">
                            <div class=\"col-md-12 col-lg-10 col-xl-8 w-100\">
                                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["commentaires"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 37
            yield "                                <div class=\"card mb-3\">
                                    <div class=\"card-body\">
                                        <div class=\"d-flex flex-start align-items-center\">
                                            <img class=\"rounded-circle shadow-1-strong me-3\" src=\"https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp\" alt=\"avatar\" width=\"60\" height=\"60\" />
                                            <div>
                                                <h6 class=\"fw-bold text-primary mb-1\">";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["com"], "user", [], "any", false, false, false, 42), "nom", [], "any", false, false, false, 42), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["com"], "user", [], "any", false, false, false, 42), "prenom", [], "any", false, false, false, 42), "html", null, true);
            yield "</h6>
                                                <p class=\"text-muted small mb-0\">
                                                    ";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["com"], "date", [], "any", false, false, false, 44), "medium", "none", "", null, "gregorian", "fr"), "html", null, true);
            yield " 
                                                </p>
                                            </div>
                                        </div>

                                        <p class=\"mt-3 mb-4 pb-2\">
                                            ";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["com"], "content", [], "any", false, false, false, 50), "html", null, true);
            yield "
                                        </p>
                                    </div>
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['com'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "                                
                                
                                <Form method=\"POST\" action=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agenda_commentaire");
        yield "\"> 
                                    <div class=\"card\">
                                        <div class=\"card-footer py-3 border-0\" style=\"background-color: #f8f9fa;\">
                                            <h6>Votre commentaire</h6>
                                            <div class=\"d-flex flex-start w-100\">
                                                <img class=\"rounded-circle shadow-1-strong me-3\" src=\"https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp\" alt=\"avatar\" width=\"40\" height=\"40\" />
                                                <div class=\"form-outline w-100\">
                                                    <textarea class=\"form-control\" id=\"textAreaExample\" rows=\"4\" style=\"background: #fff;\" name=\"content\"></textarea>
                                                    <input type=\"number\" name=\"id\" value=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["evenement"] ?? null), "id", [], "any", false, false, false, 65), "html", null, true);
        yield "\" hidden>
                                                </div>
                                            </div>
                                            <div class=\"float-end mt-2 pt-1\">
                                                
                                                <button type=\"submit\" class=\"btn btn-outline-primary btn-sm\"> Commenter </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
        </div>
    </section>
    <!-- SECOND SECTION END -->

";
        yield from [];
    }

    // line 88
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
        return "agenda_details/index.html.twig";
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
        return array (  200 => 88,  174 => 65,  163 => 57,  159 => 55,  148 => 50,  139 => 44,  132 => 42,  125 => 37,  121 => 36,  105 => 23,  96 => 19,  87 => 13,  82 => 11,  76 => 8,  70 => 4,  63 => 3,  53 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "agenda_details/index.html.twig", "/workspace/deploy/amemba-site-dev/templates/agenda_details/index.html.twig");
    }
}
