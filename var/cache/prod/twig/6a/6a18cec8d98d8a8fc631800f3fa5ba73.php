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

/* admin/admin_membre/index.html.twig */
class __TwigTemplate_0643e5f0301d69f1ef9a9e4bf06e0fb4 extends Template
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
            'style' => [$this, 'block_style'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
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
        $this->parent = $this->loadTemplate("base.admin.html.twig", "admin/admin_membre/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " Ajout de membre ";
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "<!-- IntelTel Input CSS-->
<link rel=\"stylesheet\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/intlTelInput.css"), "html", null, true);
        yield "\" crossorigin=\"anonymous\">
";
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "
    <div class=\"page-content\">
        <section class=\"section\">
            <div class=\"row\" id=\"basic-table\">
                <div class=\"col-12 \">
                    <div class=\"card\">
                        <div class=\"accordion\" id=\"accordionPanelsStayOpenExample\">
                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingOne\">
                                    <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseOne\" aria-expanded=\"true\" aria-controls=\"panelsStayOpen-collapseOne\">
                                        <strong> Ajouter une membre </strong>
                                    </button>
                                </h2>
                                <div id=\"panelsStayOpen-collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"panelsStayOpen-headingOne\">
                                    <div class=\"accordion-body\">
                                        <div class=\"card-body\">
                                            <form class=\"form form-horizontal\" enctype=\"multipart/form-data\" method='POST' action=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_membre_add");
        yield "\">
                                                <div class=\"form-body\">
                                                    <div class=\"row\">
                                                        <div class = \"col-2\">
                                                            <div class=\"col-12\">
                                                                <div class=\"form-group\">
                                                                    <label for=\"role\">Rôle</label>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class = \"col-6\">
                                                            <div class=\"col-12\">
                                                                <div class=\"form-group\">
                                                                    <select class=\"form-select\" aria-label=\"Default select example\" id=\"role\" name=\"role\">
                                                                        <option selected value=\"0\">Membre</option>
                                                                        
                                                                        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["roles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 43
            yield "                                                                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 43), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["role"], "libelle", [], "any", false, false, false, 43), "html", null, true);
            yield "</option>
                                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "                                                                       
                                                                       
                                                                      </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
                                                    <div class=\"row\">
                                                        <div class = \"col-4\">
                                                            <div class=\"col-12\">
                                                                <div class=\"form-group\">
                                                                    <label for=\"email-id-vertical\">Email</label>
                                                                    <input type=\"email\" id=\"email-id-vertical\" class=\"form-control\" name=\"mail\"  required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class = \"col-4\">
                                                            <div class=\"col-12\">
                                                                <div class=\"form-group\">
                                                                    <label class=\"form-label col-12\">Téléphone</label>
                                                                    <input class=\"form-control\" id='phone' name=\"telTest\" type=\"tel\" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class = \"col-4\">
                                                            <div class=\"col-12\">
                                                                <div class=\"form-group\">
                                                                    <label class=\"form-label col-12\">Promotion</label>
                                                                    <input class=\"form-control\" id='' name=\"promotion\" type=\"number\" min=\"1983\" max=\"2022\" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    <div class=\"row\">
                                                        <div class = \"col-4\">
                                                            <div class=\"col-12\">
                                                                <div class=\"form-group\">
                                                                    <label for=\"email-id-vertical\">Pays de résidence</label>
                                                                    <input type=\"text\" id=\"email-id-vertical\" class=\"form-control\" name=\"pays\"  required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class = \"col-4\">
                                                            <div class=\"col-12\">
                                                                <div class=\"form-group\">
                                                                    <label class=\"form-label col-12\">Ville de résidence </label>
                                                                    <input class=\"form-control\" id='' name=\"ville\" type=\"text\" required>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class = \"col-4\">
                                                            <div class=\"col-12\">
                                                                <div class=\"form-group\">
                                                                    <label class=\"form-label col-12\">Photo</label>
                                                                    <input class=\"form-control\" id='' name=\"photo\" type=\"file\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class = \"col-4\">
                                                            <div class=\"col-12\">
                                                                <div class=\"form-group\">
                                                                    <label class=\"form-label col-12\">Série de BAC</label>
                                                                    <input class=\"form-control\" id='' name=\"bac\" type=\"text\" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class = \"col-4\">
                                                            <div class=\"col-12\">
                                                                <div class=\"form-group\">
                                                                    <label for=\"email-id-vertical\">Secteur d'activité</label>
                                                                    <input type=\"text\" class=\"form-control\" name=\"secteur\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class = \"col-4\">
                                                            <div class=\"col-12\">
                                                                <div class=\"form-group\">
                                                                    <label class=\"form-label col-12\">Entreprise</label>
                                                                    <input class=\"form-control\" name=\"entreprise\" type=\"text\" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class=\"form-group\">
                                                        <label for=\"my_editor\">Etablissement(s) d'Etudes Supérieures fréquenté(s)</label>
                                                        <textarea class=\"form-control\" name=\"etudes\" id=\"my_editor\" rows=\"4\"></textarea>
                                                    </div>

                                                    <div class=\"form-group\">
                                                        <label for=\"my_editor\">Diplôme(s) Obtenu(s)</label>
                                                        <textarea class=\"form-control\" name=\"diplomes\" id=\"my_editor2\" rows=\"4\"></textarea>
                                                    </div>

                                                    <div class=\"form-group\">
                                                        <label for=\"my_editor\">Experiences Professionnelles</label>
                                                        <textarea class=\"form-control\" name=\"exp\" id=\"my_editor1\" rows=\"4\"></textarea>
                                                    </div>

                                                    <div class=\"form-group\">
                                                        <label for=\"my_editor\">Profil Linkedin</label>
                                                        <input class=\"form-control\" name=\"profil\" type=\"text\" >
                                                    </div>

                                                    <div class=\"form-group\">
                                                        <label for=\"my_editor\"> Bio / Entrepreneurship</label>
                                                        <textarea class=\"form-control\" name=\"bio\" id=\"\" rows=\"2\"></textarea>
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

                    <!-- Recherche de membre 
                    <div class=\"card\">
                        <div class=\"accordion\" id=\"accordionPanelsStayOpenExample\">
                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingOne\">
                                    <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapse2\" aria-expanded=\"true\" aria-controls=\"panelsStayOpen-collapse2\">
                                        <strong> recherche de membre </strong>
                                    </button>
                                </h2>
                                <div id=\"panelsStayOpen-collapse2\" class=\"accordion-collapse collapse show\" aria-labelledby=\"panelsStayOpen-heading2\">
                                    <div class=\"accordion-body\">
                                        <div class=\"card-body\">
                                            <form class=\"form form-horizontal\" enctype=\"multipart/form-data\" method='POST' action=\"\">
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
                                                    <div class=\"row\">
                                                        <div class = \"col-4\">
                                                            <div class=\"col-12\">
                                                                <div class=\"form-group\">
                                                                    <label for=\"email-id-vertical\">Email</label>
                                                                    <input type=\"email\" id=\"email-id-vertical\" class=\"form-control\" name=\"mail\"  required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class = \"col-4\">
                                                            <div class=\"col-12\">
                                                                <div class=\"form-group\">
                                                                    <label class=\"form-label col-12\">Téléphone</label>
                                                                    <input class=\"form-control\" id='phone' name=\"telTest\" type=\"tel\" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class = \"col-4\">
                                                            <div class=\"col-12\">
                                                                <div class=\"form-group\">
                                                                    <label class=\"form-label col-12\">Promotion</label>
                                                                    <input class=\"form-control\" id='' name=\"promotion\" type=\"number\" min=\"1983\" max=\"2022\" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    <div class=\"row\">
                                                        <div class = \"col-4\">
                                                            <div class=\"col-12\">
                                                                <div class=\"form-group\">
                                                                    <label for=\"email-id-vertical\">Pays de résidence</label>
                                                                    <input type=\"email\" id=\"email-id-vertical\" class=\"form-control\" name=\"mail\"  required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class = \"col-4\">
                                                            <div class=\"col-12\">
                                                                <div class=\"form-group\">
                                                                    <label class=\"form-label col-12\">Ville de résidence </label>
                                                                    <input class=\"form-control\" id='phone' name=\"telTest\" type=\"tel\" required>
                                                                </div>
                                                            </div>
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
                -->
                </div>
            </div>


        </section>
    </div>

";
        yield from [];
    }

    // line 284
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 285
        yield "<!-- IntelTel Input -->
<script type=\"text/javascript\" src=\"";
        // line 286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/intlTelInput.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 287
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/form-edit/ckeditor.js"), "html", null, true);
        yield "\"></script>
<script>
    var input = document.querySelector(\"#phone\");
    window.intlTelInput(input, {
        // allowDropdown: false,
        // autoHideDialCode: false,
        // autoPlaceholder: \"off\",
        // dropdownContainer: document.body,
        // excludeCountries: [\"us\"],
        // formatOnDisplay: false,
        // geoIpLookup: function(callback) {
        //   \$.get(\"http://ipinfo.io\", function() {}, \"jsonp\").always(function(resp) {
        //     var countryCode = (resp && resp.country) ? resp.country : \"\";
        //     callback(countryCode);
        //   });
        // },
        hiddenInput: \"full_number\",
        // initialCountry: \"auto\",
        // localizedCountries: { 'de': 'Deutschland' },
        // nationalMode: false,
        // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
        placeholderNumberType: \"MOBILE\",
        preferredCountries: ['sn'],
        separateDialCode: true,
        utilsScript: \"";
        // line 311
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/utils.js"), "html", null, true);
        yield "\",
    });
</script>
    <script>
        ClassicEditor.create(document.getElementById('my_editor'));
        ClassicEditor.create(document.getElementById('my_editor1'));
        ClassicEditor.create(document.getElementById('my_editor2'));
    </script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/admin_membre/index.html.twig";
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
        return array (  424 => 311,  397 => 287,  393 => 286,  390 => 285,  383 => 284,  142 => 45,  131 => 43,  127 => 42,  107 => 25,  89 => 9,  82 => 8,  75 => 6,  72 => 5,  65 => 4,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/admin_membre/index.html.twig", "/workspace/deploy/amemba-site-dev/templates/admin/admin_membre/index.html.twig");
    }
}
