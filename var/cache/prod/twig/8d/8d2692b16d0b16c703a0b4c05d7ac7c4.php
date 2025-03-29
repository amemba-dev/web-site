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

/* admin/admin_add_account/index.html.twig */
class __TwigTemplate_974db12c531c7a37cd52f9f393515d17 extends Template
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
        $this->parent = $this->loadTemplate("base.admin.html.twig", "admin/admin_add_account/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " Ajout d'admin ";
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
        yield "
    <div class=\"page-content\">
        <section class=\"section\">
            <div class=\"row\" id=\"basic-table\">
                <div class=\"col-12 \">
                    <div class=\"card \">
                        <div class=\"accordion\" id=\"accordionPanelsStayOpenExample\">
                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingOne\">
                                    <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseOne\" aria-expanded=\"true\" aria-controls=\"panelsStayOpen-collapseOne\">
                                        <strong> Ajouter un admin </strong>
                                    </button>
                                </h2>
                                <div id=\"panelsStayOpen-collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"panelsStayOpen-headingOne\">
                                    <div class=\"accordion-body\">
                                        <div class=\"card-body\">
                                            <form class=\"form form-horizontal\" enctype=\"multipart/form-data\" method='POST' action=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_account_add");
        yield "\">
                                                <div class=\"form-body\">



                                                    <div class=\"row\">
                                                        <div class = \"col-6\">
                                                            <div class=\"col-12\">
                                                                <div class=\"form-group\">
                                                                    <label for=\"email-id-vertical\">Nom</label>
                                                                    <input type=\"text\" id=\"email-id-vertical\" class=\"form-control\" name=\"nom\"  required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class = \"col-6\">
                                                            <div class=\"col-12\">
                                                                <div class=\"form-group\">
                                                                    <label for=\"email-id-vertical\">Prenom</label>
                                                                    <input type=\"text\" id=\"email-id-vertical\" class=\"form-control\" name=\"prenom\" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--
                                                    <div class=\"dropdown-divider\"></div>
                                                    -->
                                                    <div class=\"row\">
                                                        <div class=\"col-md-4\">
                                                            <label>Email</label>
                                                        </div>
                                                        <div class=\"col-md-8 form-group\">
                                                            <input type=\"email\" id=\"first-name\" class=\"form-control\" name=\"email\" required>
                                                        </div>
                                                    </div>

                                                    <div class=\"row\">
                                                        <div class=\"col-md-4\">
                                                            <label>Mot de passe </label>
                                                        </div>
                                                        <div class=\"col-md-8 form-group\">
                                                            <input type=\"password\" id=\"first-name\" class=\"form-control\" name=\"pwd\" required>
                                                        </div>
                                                    </div>

                                                    <button type=\"submit\" class=\"btn btn-primary me-1 mb-1\">Ajouter</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Liste des catégories</h4>
                    </div>
                    <div class=\"card-content\">
                        <!-- Table with no outer spacing -->
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover mb-0 table-lg\">
                                <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Mail</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody >
                                ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["admins"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
            // line 97
            yield "                                    <tr>
                                        <td>";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "nom", [], "any", false, false, false, 98), "html", null, true);
            yield " </td>
                                        <td class=\"text-bold-500\">";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "prenom", [], "any", false, false, false, 99), "html", null, true);
            yield "</td>
                                        <td>";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "email", [], "any", false, false, false, 100), "html", null, true);
            yield "</td>

                                        <td>
                                            <a href=\"";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_account_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ad"], "id", [], "any", false, false, false, 103)]), "html", null, true);
            yield "\" class=\"btn btn-outline-danger\">Supprimer l'admin</a></td>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ad'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        yield "                                </tbody>
                            </table>
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
        return "admin/admin_add_account/index.html.twig";
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
        return array (  196 => 107,  186 => 103,  180 => 100,  176 => 99,  172 => 98,  169 => 97,  165 => 96,  88 => 22,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/admin_add_account/index.html.twig", "/workspace/deploy/amemba-site-dev/templates/admin/admin_add_account/index.html.twig");
    }
}
