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

/* admin/admin_membre/modifier.membre.html.twig */
class __TwigTemplate_1775a134aaa325451f0eda98f12963da extends Template
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
        $this->parent = $this->loadTemplate("base.admin.html.twig", "admin/admin_membre/modifier.membre.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " Modification de membre ";
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
    ";
        // line 10
        if (array_key_exists("membreFound", $context)) {
            // line 11
            yield "    <div class=\"page-content\">
        <section class=\"section\">
            <div class=\"row\" id=\"basic-table\">
                <div class=\"col-12 \">
                    <div class=\"card\">
                        <div class=\"accordion\" id=\"accordionPanelsStayOpenExample\">
                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingOne\">
                                    <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseOne\" aria-expanded=\"true\" aria-controls=\"panelsStayOpen-collapseOne\">
                                        <strong>Mettre à jour une membre </strong>
                                    </button>
                                </h2>
                                <div id=\"panelsStayOpen-collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"panelsStayOpen-headingOne\">
                                    <div class=\"accordion-body\">
                                        <div class=\"card-body\">
                                            <form class=\"form form-horizontal\" enctype=\"multipart/form-data\" method='POST' action=\"";
            // line 26
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_membre_modif");
            yield "\">
                                                <div class=\"form-body\">
                                                    ";
            // line 54
            yield "                                                    <input type=\"text\" name=\"modif\" value=\"fun\" hidden>

                                                    <div class=\"form-check mb-3\">
                                                        <input class=\"form-check-input\" type=\"checkbox\" checked name=\"etat\" id=\"flexCheckDefault\">
                                                        <label class=\"form-check-label\" for=\"flexCheckDefault\">
                                                            Afficher dans l'annuaire
                                                        </label>
                                                    </div>
                                                    <input type=\"number\" name=\"id\" value=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membreFound"] ?? null), "id", [], "any", false, false, false, 62), "html", null, true);
            yield "\" hidden>
                                                    <div class=\"row\">
                                                        <div class = \"col-6\">
                                                            <div class=\"col-12\">
                                                                <div class=\"form-group\">
                                                                    <label for=\"email-id-vertical\">Nom</label>
                                                                    <input type=\"text\" id=\"email-id-vertical\" class=\"form-control\" name=\"nom\" value=\"";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membreFound"] ?? null), "nom", [], "any", false, false, false, 68), "html", null, true);
            yield "\" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class = \"col-6\">
                                                            <div class=\"col-12\">
                                                                <div class=\"form-group\">
                                                                    <label for=\"email-id-vertical\">Prenom</label>
                                                                    <input type=\"text\" id=\"email-id-vertical\" class=\"form-control\" name=\"prenom\" value=\"";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membreFound"] ?? null), "prenom", [], "any", false, false, false, 76), "html", null, true);
            yield "\" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class = \"col-4\">
                                                            <div class=\"col-12\">
                                                                <div class=\"form-group\">
                                                                    <label for=\"email-id-vertical\">Email</label>
                                                                    <input type=\"email\" id=\"email-id-vertical\" class=\"form-control\" name=\"mail\" value=\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membreFound"] ?? null), "email", [], "any", false, false, false, 86), "html", null, true);
            yield "\" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class = \"col-4\">
                                                            <div class=\"col-12\">
                                                                <div class=\"form-group\">
                                                                    <label class=\"form-label col-12\">Téléphone</label>
                                                                    <input class=\"form-control\" id='phone' name=\"telTest\" type=\"tel\" value=\"";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membreFound"] ?? null), "telephone", [], "any", false, false, false, 94), "html", null, true);
            yield "\" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class = \"col-4\">
                                                            <div class=\"col-12\">
                                                                <div class=\"form-group\">
                                                                    <label class=\"form-label col-12\">Promotion</label>
                                                                    <input class=\"form-control\" id='' name=\"promotion\" type=\"number\" min=\"1983\" max=\"2022\" value=\"";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membreFound"] ?? null), "promotion", [], "any", false, false, false, 102), "html", null, true);
            yield "\" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    <div class=\"row\">
                                                        <div class = \"col-4\">
                                                            <div class=\"col-12\">
                                                                <div class=\"form-group\">
                                                                    <label for=\"email-id-vertical\">Pays de résidence</label>
                                                                    <input type=\"text\" id=\"email-id-vertical\" class=\"form-control\" name=\"pays\" value=\"";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membreFound"] ?? null), "pays", [], "any", false, false, false, 112), "html", null, true);
            yield "\" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class = \"col-4\">
                                                            <div class=\"col-12\">
                                                                <div class=\"form-group\">
                                                                    <label class=\"form-label col-12\">Ville de résidence </label>
                                                                    <input class=\"form-control\" id='' name=\"ville\" type=\"text\" value=\"";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membreFound"] ?? null), "ville", [], "any", false, false, false, 120), "html", null, true);
            yield "\" required>
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
                                                                    <input class=\"form-control\" id='' name=\"bac\" type=\"text\"value=\"";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membreFound"] ?? null), "bac", [], "any", false, false, false, 139), "html", null, true);
            yield "\" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class = \"col-4\">
                                                            <div class=\"col-12\">
                                                                <div class=\"form-group\">
                                                                    <label for=\"email-id-vertical\">Secteur d'activité</label>
                                                                    <input type=\"text\" class=\"form-control\" name=\"secteur\" value=\"";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membreFound"] ?? null), "secteur", [], "any", false, false, false, 147), "html", null, true);
            yield "\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class = \"col-4\">
                                                            <div class=\"col-12\">
                                                                <div class=\"form-group\">
                                                                    <label class=\"form-label col-12\">Entreprise</label>
                                                                    <input class=\"form-control\" name=\"entreprise\" type=\"text\" value=\"";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membreFound"] ?? null), "entreprise", [], "any", false, false, false, 155), "html", null, true);
            yield "\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class=\"form-group\">
                                                        <label for=\"my_editor\">Etablissement(s) d'Etudes Supérieures fréquenté(s)</label>
                                                        <textarea class=\"form-control\" name=\"etudes\" id=\"my_editor\" rows=\"4\">";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membreFound"] ?? null), "univ", [], "any", false, false, false, 163), "html", null, true);
            yield "</textarea>
                                                    </div>

                                                    <div class=\"form-group\">
                                                        <label for=\"my_editor\">Diplôme(s) Obtenu(s)</label>
                                                        <textarea class=\"form-control\" name=\"diplomes\" id=\"my_editor2\" rows=\"4\">";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membreFound"] ?? null), "diplome", [], "any", false, false, false, 168), "html", null, true);
            yield "</textarea>
                                                    </div>

                                                    <div class=\"form-group\">
                                                        <label for=\"my_editor\">Experiences Professionnelles</label>
                                                        <textarea class=\"form-control\" name=\"exp\" id=\"my_editor1\" rows=\"4\">";
            // line 173
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membreFound"] ?? null), "experience", [], "any", false, false, false, 173), "html", null, true);
            yield "</textarea>
                                                    </div>

                                                    <div class=\"form-group\">
                                                        <label for=\"my_editor\">Profil Linkedin</label>
                                                        <input class=\"form-control\" name=\"profil\" type=\"text\" value=\"";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membreFound"] ?? null), "link", [], "any", false, false, false, 178), "html", null, true);
            yield "\">
                                                    </div>

                                                    <div class=\"form-group\">
                                                        <label for=\"my_editor\"> Bio / Entrepreneurship</label>
                                                        <textarea class=\"form-control\" name=\"bio\" id=\"\" rows=\"2\">";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membreFound"] ?? null), "bio", [], "any", false, false, false, 183), "html", null, true);
            yield "</textarea>
                                                    </div>

                                                    <button type=\"submit\" class=\"btn btn-primary me-1 mb-1\">Mettre à jour</button>
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


        </section>
    </div>
    ";
        } else {
            // line 203
            yield "        <h6 class=\"my-2 mb-3\"> Rechercher une membre pour mettre à jour ses informations </h6>
        <form class=\"form form-horizontal\" method=\"POST\" action=\"";
            // line 204
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_membre_modif");
            yield "\">
            <div class=\"row mt-2\">
                <div class=\"col-md-2\">
                    <label for='phone' class=\"form-label col-12\">E-mail</label>
                </div>
                <div class=\"col-md-6 form-group\">
                    <input type=\"email\" class=\"form-control\" name=\"email\" id=\"nom\" aria-describedby=\"helpId\" placeholder=\"\" required>
                </div>
                <input type=\"text\" name=\"recherche\" value=\"fun\" hidden>
                <div class=\"col-md-3 form-group\">
                    <button type=\"submit\" class=\"btn btn-primary\">Rechercher </button>      
                </div>
            </div>
        </form>

    ";
        }
        // line 220
        yield "
";
        yield from [];
    }

    // line 224
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 225
        yield "<!-- IntelTel Input -->
<script type=\"text/javascript\" src=\"";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/intlTelInput.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 227
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
        // line 251
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
        return "admin/admin_membre/modifier.membre.html.twig";
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
        return array (  384 => 251,  357 => 227,  353 => 226,  350 => 225,  343 => 224,  337 => 220,  318 => 204,  315 => 203,  292 => 183,  284 => 178,  276 => 173,  268 => 168,  260 => 163,  249 => 155,  238 => 147,  227 => 139,  205 => 120,  194 => 112,  181 => 102,  170 => 94,  159 => 86,  146 => 76,  135 => 68,  126 => 62,  116 => 54,  111 => 26,  94 => 11,  92 => 10,  89 => 9,  82 => 8,  75 => 6,  72 => 5,  65 => 4,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/admin_membre/modifier.membre.html.twig", "/workspace/deploy/amemba-site-dev/templates/admin/admin_membre/modifier.membre.html.twig");
    }
}
