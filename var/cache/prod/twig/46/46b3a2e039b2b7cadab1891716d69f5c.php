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

/* membre_profile/index.html.twig */
class __TwigTemplate_728dcc55585db29a12c5a55db666138b extends Template
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
            'js' => [$this, 'block_js'],
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
        $this->parent = $this->loadTemplate("base.pages.html.twig", "membre_profile/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Mon profile";
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
        yield "<!-- SECOND SECTION START -->
    <section class=\"second \">
        <div class=\"container py-5\">
            <form class=\"row\" enctype=\"multipart/form-data\"  method=\"POST\"  action=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_membre_profile_edit");
        yield "\">
                <div class=\"profile-left col-4 d-flex flex-column align-items-center\">
                    ";
        // line 11
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "profile", [], "any", false, false, false, 11)) {
            yield " 
                        <img class=\"mt-5\" src=\"/pp/";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "profile", [], "any", false, false, false, 12), "html", null, true);
            yield "\" alt=\"avatar user\" class=\"mx-auto\">
                    ";
        } else {
            // line 14
            yield "                        <img class=\"mt-5\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/avatars/exemple.jpg"), "html", null, true);
            yield "\" alt=\"avatar user\" class=\"mx-auto\">
                    ";
        }
        // line 16
        yield "                    <span class=\"mt-5\">Changer l'avatar</span>
                    <input type=\"file\" class=\"mb-5 form-control\" accept=\"image/png, image/gif, image/jpeg\" name=\"image\">
                </div>
                <div class=\"profile-right col\">
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["danger"], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 21
            yield "                        <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
                            <strong>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</strong> 
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 27
            yield "                        <div class=\"alert alert-primary alert-dismissible fade show\" role=\"alert\">
                            <strong>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</strong> 
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "                    <div class=\"row gx-2\">
                        <div class=\"col-6 mb-3\">
                            <label class=\"form-label\" for=\"role\">Rôle dans l'amicale</label>
                            <input type=\"text\" class=\"form-control\" id=\"role\" name=\"role\" required value=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "roleAmicale", [], "any", false, false, false, 35), "html", null, true);
        yield "\" disabled>
                        </div>
                    </div>

                    <div class=\"row gx-2 mb-3\">
                          <label for=\"bio\">Bio</label>
                          <textarea class=\"form-control\" name=\"bio\" id=\"bio\" rows=\"3\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "bio", [], "any", false, false, false, 41), "html", null, true);
        yield "</textarea>
                        
                    </div>

                    <div class=\"row gx-2\">
                        <div class=\"col-6 mb-3\">
                            <label class=\"form-label\" for=\"prenom\">Prenom</label>
                            <input type=\"text\" class=\"form-control\" id=\"prenom\" name=\"prenom\" required value=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "prenom", [], "any", false, false, false, 48), "html", null, true);
        yield "\">
                        </div>
                        <div class=\"col-6 mb-3\">
                            <label class=\"form-label\" for=\"nom\">Nom</label>
                            <input type=\"text\" id=\"nom\" class=\"form-control\" name=\"nom\" required value=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "nom", [], "any", false, false, false, 52), "html", null, true);
        yield "\">
                        </div>
                    </div>

                    <div class=\"row gx-2\">
                        <div class=\"col-6 mb-3\">
                            <label class=\"form-label\" for=\"promotion\">Promotion</label>
                            <input type=\"number\" id=\"promotion\" class=\"form-control\" name=\"promotion\" required value=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "promotion", [], "any", false, false, false, 59), "html", null, true);
        yield "\">
                        </div>
                        <div class=\"col-6 mb-3\">
                            <label class=\"form-label\" for=\"bac\">Série de BAC </label>
                            <input type=\"text\" class=\"form-control\" id=\"bac\" name=\"bac\" required value=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "bac", [], "any", false, false, false, 63), "html", null, true);
        yield "\">
                        </div>
                    </div>

                    <div class=\"row gx-2\">
                        <div class=\"col-6 mb-3\">
                            <label class=\"form-label\" for=\"univ\">Université</label>
                            <input type=\"text\" id=\"univ\" class=\"form-control\" name=\"univ\" value=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "univ", [], "any", false, false, false, 70), "html", null, true);
        yield "\">
                        </div>
                        <div class=\"col-6 mb-3\">
                            <label class=\"form-label\" for=\"diplome\">Dernier diplôme obtenue </label>
                            <input type=\"text\" class=\"form-control\" id=\"diplome\" name=\"diplome\" required value=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "diplome", [], "any", false, false, false, 74), "html", null, true);
        yield "\">
                        </div>
                    </div>

                    <div class=\"row gx-2\">
                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"experience\">Dernière expérience professionnelle</label>
                            <input type=\"text\" id=\"experience\" class=\"form-control\" name=\"experience\" value=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "experience", [], "any", false, false, false, 81), "html", null, true);
        yield "\">
                        </div>
                    </div>

                    <div class=\"row gx-2\">
                        <div class=\"col-4 mb-3\">
                            <label class=\"form-label\" for=\"profession\">Profession </label>
                            <input type=\"text\" class=\"form-control\" id=\"profession\" name=\"profession\" required value=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "profession", [], "any", false, false, false, 88), "html", null, true);
        yield "\">
                        </div>
                        <div class=\"col-4 mb-3\">
                            <label class=\"form-label\" for=\"entreprise\">Entreprise </label>
                            <input type=\"text\" class=\"form-control\" id=\"entreprise\" name=\"entreprise\" value=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "entreprise", [], "any", false, false, false, 92), "html", null, true);
        yield "\">
                        </div>
                        <div class=\"col-4 mb-3\">
                            <label class=\"form-label\" for=\"secteur\">Secteur d'activité </label>
                            <input type=\"text\" class=\"form-control\" id=\"secteur\" name=\"secteur\" value=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "secteur", [], "any", false, false, false, 96), "html", null, true);
        yield "\">
                        </div>
                    </div>

                    <div class=\"row gx-2\">
                        <div class=\"col-6 mb-3\">
                            <label class=\"form-label\" for=\"pays\">Pays de résidence</label>
                            <input type=\"text\" class=\"form-control\" id=\"pays\" name=\"pays\" required value=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "pays", [], "any", false, false, false, 103), "html", null, true);
        yield "\" onChange=\"javascript:this.value=this.value.toUpperCase();\">
                        </div>
                        <div class=\"col-6 mb-3\">
                            <label class=\"form-label\" for=\"ville\">Ville de résidence</label>
                            <input type=\"text\" id=\"nom\" class=\"form-control\" name=\"ville\" required value=\"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "ville", [], "any", false, false, false, 107), "html", null, true);
        yield "\" onChange=\"javascript:this.value=this.value.toUpperCase();\">
                        </div>
                    </div>

                    <div class=\"row gx-2\">
                        <div class=\"col-6 mb-3\">
                            <label class=\"form-label\" for=\"email\">Email</label>
                            <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" required value=\"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "email", [], "any", false, false, false, 114), "html", null, true);
        yield "\">
                        </div>
                        <div class=\"col-6 mb-3\">
                                <label class=\"form-label col-12\" for=\"phone\">Téléphone</label>
                                <input class=\"form-control\" id='phone' type=\"tel\" value=\"";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "telephone", [], "any", false, false, false, 118), "html", null, true);
        yield "\" required>
                        </div>
                    </div>

                    <div class=\"row gx-2\">
                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"link\">Lien vers votre profil Linkedin</label>
                            <input type=\"url\" class=\"form-control\" id=\"link\" name=\"link\" value=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "link", [], "any", false, false, false, 125), "html", null, true);
        yield "\">
                        </div>
                    </div>


                    <div class=\"mb-3\">
                        <label class=\"form-label\" for=\"pwd1\">Nouveau mot de passe (laisser vide si vous ne souhaitez pas le changer)</label>
                        <input class=\"form-control\" id=\"pwd1\" name=\"pwd1\" placeholder=\"Au moins 6 caractères.\" type=\"password\" >
                    </div>
                    <div class=\"mb-3\">
                        <label class=\"form-label\" for=\"pwd2\">Répéter le mot de passe</label>
                        <input class=\"form-control\" id=\"pwd2\" name=\"pwd2\"  placeholder=\"\" type=\"password\" >
                    </div>

                   

                    ";
        // line 141
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["membre"] ?? null), "statut", [], "any", false, false, false, 141)) {
            // line 142
            yield "                     <div class=\"mb-3\">
                        <label class=\"form-label\" for=\"cv\">Uploader votre cv (uniquement sous format pdf)</label>
                       <input type=\"file\" class=\"mb-5 form-control\"  accept=\".pdf\" id=\"cv\" name=\"cv\">
                    </div>    
                    ";
        }
        // line 147
        yield "                    <div class=\"mb-4\">
                        <p>
                            *mettre à jour le profil avant de modifier les informations de votre entreprise
                        </p>
                        <a class=\"btn btn-primary mb-3\" href=\"";
        // line 151
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_membre_entreprise");
        yield "\" >Mettre à jour les information de mon entreprise</a>
                        <button type=\"submit\" class=\"btn btn-primary w-100\"> Enregistrer les modifications  </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- SECOND SECTION END -->
";
        yield from [];
    }

    // line 160
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_part(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 161
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 162
        yield "<!-- IntelTel Input -->
<script type=\"text/javascript\" src=\"";
        // line 163
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
        // line 187
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
        return "membre_profile/index.html.twig";
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
        return array (  387 => 187,  360 => 163,  357 => 162,  350 => 161,  340 => 160,  326 => 151,  320 => 147,  313 => 142,  311 => 141,  292 => 125,  282 => 118,  275 => 114,  265 => 107,  258 => 103,  248 => 96,  241 => 92,  234 => 88,  224 => 81,  214 => 74,  207 => 70,  197 => 63,  190 => 59,  180 => 52,  173 => 48,  163 => 41,  154 => 35,  149 => 32,  139 => 28,  136 => 27,  131 => 26,  121 => 22,  118 => 21,  114 => 20,  108 => 16,  102 => 14,  97 => 12,  93 => 11,  88 => 9,  83 => 6,  76 => 5,  66 => 3,  55 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "membre_profile/index.html.twig", "/workspace/deploy/amemba-site-dev/templates/membre_profile/index.html.twig");
    }
}
