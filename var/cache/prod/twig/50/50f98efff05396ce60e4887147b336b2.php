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

/* demande_partenariat/index.html.twig */
class __TwigTemplate_74c2f8e2403b402b9a2cc938447d8502 extends Template
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
        $this->parent = $this->loadTemplate("base.pages.html.twig", "demande_partenariat/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " Demande de partenariat ";
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

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "<!-- REGISTER SECTION START -->
<section class=\"login-register\">
    <div class=\"container d-flex\">
        <div class=\"login-left login-card d-flex justify-content-center align-items-center\">
            <div>
                <img src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/business_woman.svg"), "html", null, true);
        yield "\" alt=\"business woman\">
                <h2 class=\"mt-5 mb-3\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text"] ?? null), "html", null, true);
        yield "</h2>
            </div>
        </div>
        <div class=\"login-right login-card\">
            <div class=\"container\">
                <form method=\"POST\" action=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_partenariat_add");
        yield "\">
                    <h2>Entrez vos donnees pour vous inscrire</h2>
                    <div class=\"mb-3\">
                        <label class=\"form-label\" for=\"nom\">Nom</label>
                        <input class=\"form-control\" id=\"nom\" name=\"nom\" placeholder=\"Nom\" type=\"text\" required>
                    </div>

                    <div class=\"mb-3\">
                        <label class=\"form-label\" for=\"prenom\">Prenom</label>
                        <input class=\"form-control\" id=\"prenom\" name=\"prenom\" placeholder=\"Prenom\" type=\"text\" required>
                    </div>
                   
                    <div class=\"mb-3\">
                        <label class=\"form-label\" for=\"entreprise\">Entreprise</label>
                        <input class=\"form-control\" id=\"entreprise\" name=\"entreprise\" placeholder=\"Nom de l'entreprise\" type=\"text\" required>
                    </div>

                    <div class=\"mb-3\">
                        <label class=\"form-label col-12\">Téléphone</label>
                        <input class=\"form-control\" id='phone' name=\"tel\" type=\"tel\" required>
                    </div>

                    <div class=\"mb-3\">
                        <label class=\"form-label\" for=\"mail\">Mail</label>
                        <input class=\"form-control\" id=\"mail\" name=\"email\" placeholder=\"E-mail\" type=\"email\" required>
                    </div>

                    <div class=\"mb-3\">
                        <label class=\"form-label\" for=\"req\">Requête</label>
                        <textarea class=\"form-control\" id=\"req\" name=\"req\" placeholder=\"Motif de votre demande\" rows=\"4\" required></textarea>
                    </div>
                    <div class=\"mb-4\">
                        <button type=\"submit\" class=\"btn btn-primary w-100\" ";
        // line 48
        if (array_key_exists("etat", $context)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["etat"] ?? null), "html", null, true);
        }
        yield "> Envoyer la demande  </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- REGISTER SECTION END -->

<!-- PARTNERS SECTION START -->
<section class=\"partners container\">
    <h2 class=\"text-center py-5\">Nos partenaires</h2>
    <div class=\"partners-carousel-container pb-5\">

        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["partenaires"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["part"]) {
            // line 63
            yield "        <div class=\"d-flex justify-content-center align-items center\">
            <img src=\"/partenaires/";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["part"], "logo", [], "any", false, false, false, 64), "html", null, true);
            yield "\" alt=\"\" style=\"width: 200px; object-fit: cover\">
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['part'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "    </div>
</section>
<!-- PARTNERS SECTION END -->


";
        // line 72
        yield from $this->unwrap()->yieldBlock('part', $context, $blocks);
        // line 73
        yield "
";
        yield from [];
    }

    // line 72
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_part(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 76
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 77
        yield "<!-- IntelTel Input -->
<script type=\"text/javascript\" src=\"";
        // line 78
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
        // line 102
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
        return "demande_partenariat/index.html.twig";
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
        return array (  234 => 102,  207 => 78,  204 => 77,  197 => 76,  187 => 72,  181 => 73,  179 => 72,  172 => 67,  163 => 64,  160 => 63,  156 => 62,  137 => 48,  102 => 16,  94 => 11,  90 => 10,  83 => 5,  76 => 4,  66 => 3,  55 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "demande_partenariat/index.html.twig", "/workspace/deploy/amemba-site-dev/templates/demande_partenariat/index.html.twig");
    }
}
