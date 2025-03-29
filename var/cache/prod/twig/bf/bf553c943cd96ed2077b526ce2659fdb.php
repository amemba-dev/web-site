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

/* cotisation/admin.cotisation.details.html.twig */
class __TwigTemplate_909c7e216fd22e73e538fa3c5648eaaf extends Template
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
            'style' => [$this, 'block_style'],
            'page_title' => [$this, 'block_page_title'],
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
        $this->parent = $this->loadTemplate("base.admin.html.twig", "cotisation/admin.cotisation.details.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        yield "<!-- IntelTel Input CSS-->
<link rel=\"stylesheet\" href=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/intlTelInput.css"), "html", null, true);
        yield "\" crossorigin=\"anonymous\">

";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " Details cotisation ";
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "    <!-- SECOND SECTION START -->
    <section class=\"second\">
        <div class=\"container\">


            <!-- Update cotisation -->

            <div class=\"card \">
                <div class=\"accordion\" id=\"accordionPanelsStayOpenExample\">
                    <div class=\"accordion-item\">
                        <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingOne\">
                            <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseOne\" aria-expanded=\"true\" aria-controls=\"panelsStayOpen-collapseOne\">
                                <strong> Editer la cotisation </strong>
                            </button>
                        </h2>
                        <div id=\"panelsStayOpen-collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"panelsStayOpen-headingOne\">
                            <div class=\"accordion-body\">
                                <div class=\"card-body\">

                                    <form class=\"form form-horizontal\" method='POST' action=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_cotisation_update_content");
        yield "\" >
                                        <div class=\"form-body\">

                                            <div class=\"row\">
                                                <div class=\"col-md-4\">
                                                    <label for=\"last-name\">Titre</label>
                                                </div>
                                                <div class=\"col-md-8 form-group\">
                                                    <input type=\"text\" id=\"last-name\" value=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["cotisation"] ?? null), "titre", [], "any", false, false, false, 38), "html", null, true);
        yield "\" class=\"form-control\" name=\"titre\" required>
                                                </div>
                                            </div>

                                            <div class=\"row\">
                                                <div class=\"col-md-4\">
                                                    <label for=\"first-name\">Description</label>
                                                </div>
                                                <div class=\"col-md-8 form-group\">

                                                    <textarea class=\"form-control\" id=\"desc\" rows=\"2\" name=\"description\" required>";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["cotisation"] ?? null), "description", [], "any", false, false, false, 48), "html", null, true);
        yield "</textarea>
                                                    <input type=\"text\" value=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["cotisation"] ?? null), "id", [], "any", false, false, false, 49), "html", null, true);
        yield "\" name=\"id\" hidden>
                                                </div>
                                            </div>

                                            <div class=\"col-sm-12 d-flex justify-content-end\">

                                                <button type=\"submit\" class=\"btn btn-primary me-1 mb-1\">Editer</button>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"card \">
                    <div class=\"accordion\" id=\"accordionPanelsStayOpenExample\">
                        <div class=\"accordion-item\">
                          <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingOne\">
                            <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseOne\" aria-expanded=\"true\" aria-controls=\"panelsStayOpen-collapseOne\">
                                <strong> Ajouter un contributeur </strong> 
                            </button>
                          </h2>
                          <div id=\"panelsStayOpen-collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"panelsStayOpen-headingOne\">
                            <div class=\"accordion-body\">
                                <div class=\"card-body\">
                                    ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["warning"], "method", false, false, false, 78));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 79
            yield "                                        <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
                                            <strong>";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</strong> 
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        yield "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["okay"], "method", false, false, false, 84));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 85
            yield "                                        <div class=\"alert alert-primary alert-dismissible fade show\" role=\"alert\">
                                            <strong>";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</strong> 
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        yield "                                    <form class=\"form form-horizontal\" method='POST' action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cotisation_add_cont");
        yield "\" >
                                        <div class=\"form-body\">

                                            <div class=\"row\">
                                                <div class=\"col-md-4\">
                                                    <label for=\"last-name\">Nom</label>
                                                </div>
                                                <div class=\"col-md-8 form-group\">
                                                    <input type=\"text\" id=\"last-name\" class=\"form-control\" name=\"nom\" required>
                                                </div>
                                            </div>                                            

                                            <div class=\"row\">
                                                <div class=\"col-md-4\">
                                                    <label for=\"first-name\">Prenom</label>
                                                </div>
                                                <div class=\"col-md-8 form-group\">
                                                    <input type=\"text\" id=\"first-name\" class=\"form-control\" name=\"prenom\" required>
                                                    <input type=\"text\" value=\"";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["cotisation"] ?? null), "id", [], "any", false, false, false, 108), "html", null, true);
        yield "\" name=\"id\" hidden>
                                                </div>
                                            </div>

                                            <div class=\"row\">
                                                <div class=\"col-md-4\">
                                                    <label for='phonr' class=\"form-label col-12\">Téléphone</label>
                                                </div>
                                                <div class=\"col-md-8 form-group\">
                                                    <input class=\"form-control\" id='phone' type=\"tel\" required>
                                                </div>
                                            </div>

                                            

                                                <div class=\"col-sm-12 d-flex justify-content-end\">
                                                    
                                                    <button type=\"submit\" class=\"btn btn-primary me-1 mb-1\">Ajouter</button>
                                                   
                                                </div>
                                        </div> 
                                    </form>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>

            <h2>Listes des contributions</h2>
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["cotisation"] ?? null), "contributeurs", [], "any", false, false, false, 147));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 148
            yield "                    <tr>
                        <td scope=\"row\">";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["i"], "nom", [], "any", false, false, false, 149), "html", null, true);
            yield "</td>
                        <td>";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["i"], "prenom", [], "any", false, false, false, 150), "html", null, true);
            yield "</td>
                        <td>";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["i"], "email", [], "any", false, false, false, 151), "html", null, true);
            yield "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        yield "                    
                </tbody>
            </table>
        </div>
    </section>
    <!-- SECOND SECTION END -->


";
        yield from [];
    }

    // line 163
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 164
        yield "
<!-- IntelTel Input -->
<script type=\"text/javascript\" src=\"";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/intlTelInput.js"), "html", null, true);
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
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/utils.js"), "html", null, true);
        yield "\",
    });
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "cotisation/admin.cotisation.details.html.twig";
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
        return array (  345 => 190,  318 => 166,  314 => 164,  307 => 163,  294 => 154,  285 => 151,  281 => 150,  277 => 149,  274 => 148,  270 => 147,  228 => 108,  206 => 90,  196 => 86,  193 => 85,  188 => 84,  178 => 80,  175 => 79,  171 => 78,  139 => 49,  135 => 48,  122 => 38,  111 => 30,  90 => 11,  83 => 10,  72 => 7,  64 => 4,  61 => 3,  54 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "cotisation/admin.cotisation.details.html.twig", "/workspace/deploy/amemba-site-dev/templates/cotisation/admin.cotisation.details.html.twig");
    }
}
