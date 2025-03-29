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

/* admin/admin_evenement/index.html.twig */
class __TwigTemplate_44719093d9e7996af3a3083de2b66668 extends Template
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
        $this->parent = $this->loadTemplate("base.admin.html.twig", "admin/admin_evenement/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " Planification d'évènement ";
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
        yield "<section class=\"row\">
    <div class=\"col-12 \">
        <div class=\"row\">
            <div class=\"col-6 col-lg-6 col-md-6\">
                <div class=\"card\">
                    <div class=\"card-body px-3 py-4-5\">
                        <div class=\"row\">
                            <div class=\"col-md-4\">
                                <div class=\"stats-icon green\">
                                    <i class=\"iconly-boldCalendar\"></i>
                                </div>
                            </div>
                            <div class=\"col-md-8\">
                                <h6 class=\"text-muted font-semibold\">Nombre d'évènements</h6>
                                <h6 class=\"font-extrabold mb-0\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["evenements"] ?? null)), "html", null, true);
        yield "</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            

        </div>
        
        
    </div>
    
</section>

<div class=\"page-content\">
    <section class=\"section\">
        <div class=\"row\" id=\"basic-table\">
            <div class=\"col-12 \">
                <div class=\"card \">
                    <div class=\"accordion\" id=\"accordionPanelsStayOpenExample\">
                        <div class=\"accordion-item\">
                          <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingOne\">
                            <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseOne\" aria-expanded=\"true\" aria-controls=\"panelsStayOpen-collapseOne\">
                                <strong> Ajouter un evenement </strong> 
                            </button>
                          </h2>
                          <div id=\"panelsStayOpen-collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"panelsStayOpen-headingOne\">
                            <div class=\"accordion-body\">
                                <div class=\"card-body\">
                                    <form class=\"form form-horizontal\" enctype=\"multipart/form-data\" method='post'  action=\"";
        // line 49
        if (array_key_exists("selected", $context)) {
            yield " ";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_update");
        } else {
            yield " ";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_add");
            yield " ";
        }
        yield "\">
                                        
                                        <div class=\"col-sm-12 d-flex justify-content-end\">
                                            ";
        // line 52
        if (array_key_exists("selected", $context)) {
            yield " 
                                            <button type=\"submit\" class=\"btn btn-warning me-1 mb-1\">Modifier</button>
                                            ";
        } else {
            // line 55
            yield "                                            <button type=\"submit\" class=\"btn btn-primary me-1 mb-1\">Ajouter</button>
                                            ";
        }
        // line 57
        yield "                                        </div>
                                        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 59
            yield "                                            <div class=\"alert alert-danger\">
                                                ";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "                                        <div class=\"form-body\">
                                            <div class=\"mb-3\">
                                                <label for=\"formFileMultiple\" class=\"form-label\">Importer l'image</label>
                                                <input name=\"image\" class=\"form-control\" id=\"formFileLg\" type=\"file\" ";
        // line 66
        if ( !array_key_exists("selected", $context)) {
            yield " required ";
        }
        yield ">
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-4\">
                                                    <label>Titre</label>
                                                </div>
                                                <div class=\"col-md-8 form-group\">
                                                    <input type=\"text\" id=\"first-name\" class=\"form-control\" name=\"title\" ";
        // line 73
        if (array_key_exists("selected", $context)) {
            yield " value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "title", [], "any", false, false, false, 73), "html", null, true);
            yield "\" ";
        }
        yield " required>
                                                </div>
                                            </div>

                                            <div class=\"row\">
                                                <div class=\"col-md-4\">
                                                    <label>";
        // line 79
        if (array_key_exists("selected", $context)) {
            yield " Nouvelle catégorie ";
        } else {
            yield " Categorie ";
        }
        yield "</label>
                                                </div>
                                                <div class=\"col-md-8 form-group\">
                                                    <select class=\"form-control\" name=\"categorie\" required>
                                                        ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 84
            yield "                                                            <option value = \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 84), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 84), "html", null, true);
            yield "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        yield "                                                    </select>
                                                
                                            </div>

                                            <div class=\"dropdown-divider\"></div>

                                            <div class=\"col-12 mt-2\">
                                                <div class=\"form-group\">
                                                    <label for=\"email-id-vertical\">Date</label>
                                                    <input type=\"date\" id=\"email-id-vertical\" class=\"form-control\" name=\"date\" ";
        // line 95
        if (array_key_exists("selected", $context)) {
            yield " value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "date", [], "any", false, false, false, 95), "Y-m-d"), "html", null, true);
            yield "\" ";
        }
        yield " required>
                                                </div>
                                            </div>

                                            <div class=\"row\">
                                                <div class = \"col-6\">
                                                    <div class=\"col-12\">
                                                        <div class=\"form-group\">
                                                            <label for=\"email-id-vertical\">Debut</label>
                                                            <input type=\"time\" id=\"email-id-vertical\" class=\"form-control\" name=\"startAt\" ";
        // line 104
        if (array_key_exists("selected", $context)) {
            yield " value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "startAt", [], "any", false, false, false, 104), "H:i"), "html", null, true);
            yield "\" ";
        }
        yield " required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class = \"col-6\">
                                                    <div class=\"col-12\">
                                                        <div class=\"form-group\">
                                                            <label for=\"email-id-vertical\">Fin</label>
                                                            <input type=\"time\" id=\"email-id-vertical\" class=\"form-control\" name=\"endAt\" ";
        // line 112
        if (array_key_exists("selected", $context)) {
            yield " value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "endAt", [], "any", false, false, false, 112), "H:i"), "html", null, true);
            yield "\" ";
        }
        yield " required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"dropdown-divider\"></div>

                                            <input class=\"form-control\" type=\"text\" id=\"formFileMultiple\" ";
        // line 119
        if (array_key_exists("selected", $context)) {
            yield " value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "id", [], "any", false, false, false, 119), "html", null, true);
            yield "\" ";
        }
        yield "  name=\"id\" hidden>
                                            <div class=\"col-12\">
                                                <div class=\"form-group\">
                                                    <label for=\"my_editor\">Description </label>
                                                    <textarea class=\"form-control\" id=\"my_editor\" rows=\"5\" name=\"description\">";
        // line 123
        if (array_key_exists("selected", $context)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["selected"] ?? null), "content", [], "any", false, false, false, 123), "html", null, true);
            yield " ";
        }
        yield "</textarea>
                                                </div>
                                            </div>
                                            
                                            
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
                                    <th>Titre</th>
                                    <th>Catégorie</th>
                                    <th>Date</th>
                                    <th>Heure</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody >
                             ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["evenements"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ev"]) {
            // line 159
            yield "                                <tr>
                                    <td>";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "title", [], "any", false, false, false, 160), "html", null, true);
            yield " </td>
                                    <td class=\"text-bold-500\">";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "categorie", [], "any", false, false, false, 161), "name", [], "any", false, false, false, 161), "html", null, true);
            yield "</td>
                                    <td>";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "date", [], "any", false, false, false, 162), "d/m/Y"), "html", null, true);
            yield "</td>
                                    <td> ";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "startAt", [], "any", false, false, false, 163), "H:i"), "html", null, true);
            yield " -- ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "endAt", [], "any", false, false, false, 163), "H:i"), "html", null, true);
            yield "</td>
                                    <td>
                                        <a href=\"";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ev"], "id", [], "any", false, false, false, 165)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary\">Details</a></td>    
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ev'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
<script src=\"";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/form-edit/ckeditor.js"), "html", null, true);
        yield "\"></script>
<script>
    ClassicEditor.create(document.getElementById('my_editor'));
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/admin_evenement/index.html.twig";
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
        return array (  374 => 178,  363 => 169,  353 => 165,  346 => 163,  342 => 162,  338 => 161,  334 => 160,  331 => 159,  327 => 158,  285 => 123,  274 => 119,  260 => 112,  245 => 104,  229 => 95,  218 => 86,  207 => 84,  203 => 83,  192 => 79,  179 => 73,  167 => 66,  162 => 63,  153 => 60,  150 => 59,  146 => 58,  143 => 57,  139 => 55,  133 => 52,  120 => 49,  86 => 18,  70 => 4,  63 => 3,  52 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/admin_evenement/index.html.twig", "/workspace/deploy/amemba-site-dev/templates/admin/admin_evenement/index.html.twig");
    }
}
