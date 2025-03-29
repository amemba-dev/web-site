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

/* newsletter/index.html.twig */
class __TwigTemplate_259c5c2eb5a66f61d0a493573b86dcff extends Template
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
            'page_title' => [$this, 'block_page_title'],
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
        $this->parent = $this->loadTemplate("base.admin.html.twig", "newsletter/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " Gestion de la newsletter";
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
    <section class=\"second\">
        <div class=\"container py-5\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">Rediger une newsletter</h3>
                </div>
                <div class=\"card-body\">
                    <form method=\"POST\" enctype=\"multipart/form-data\" action=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_newletter_add");
        yield "\">
                        
                        <div class=\"form-group\">
                          <label for=\"titre\">Titre</label>
                          <input type=\"text\" class=\"form-control\" name=\"titre\" id=\"titre\" aria-describedby=\"helpId\">
                        </div>
                        <div class=\"form-group mt-3\">
                            <label for=\"article\">Contenu de la letter</label>
                            <textarea rows=\"5\" minlength=\"20\" class=\"form-control\" name=\"contenu\" id=\"article\"></textarea>
                        </div>

                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                Poster
                            </button>
                        </div>
                    </form>
                   
                </div>
            </div>
            
        </div>

            <div class=\"card\">
            <div class=\"card-header\">
                Newsletters
            </div>
            <div class=\"card-body\">
                <table class=\"table\" id=\"table1\">
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["letters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["letter"]) {
            // line 50
            yield "                        <tr>
                            <td>";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["letter"], "titre", [], "any", false, false, false, 51), "html", null, true);
            yield "</td>
                            <td>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["letter"], "createdAt", [], "any", false, false, false, 52), "medium", "none", "", null, "gregorian", "fr"), "html", null, true);
            yield "</td>
                            <td>
                                <a class=\"btn-btn-outline-primary btn-sm\" href=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_newsletter_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["letter"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            yield "\">Aperçu</a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['letter'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- SECOND SECTION END -->
    

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "newsletter/index.html.twig";
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
        return array (  146 => 58,  136 => 54,  131 => 52,  127 => 51,  124 => 50,  120 => 49,  80 => 12,  70 => 4,  63 => 3,  52 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "newsletter/index.html.twig", "/workspace/deploy/amemba-site-dev/templates/newsletter/index.html.twig");
    }
}
