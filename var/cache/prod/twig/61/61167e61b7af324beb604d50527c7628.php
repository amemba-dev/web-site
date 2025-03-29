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

/* about/index.html.twig */
class __TwigTemplate_3dcba3c817959434d27db8202cdb54df extends Template
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
        $this->parent = $this->loadTemplate("base.pages.html.twig", "about/index.html.twig", 1);
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
        yield "
<!-- MISSION SECTION START -->
<section class=\"mission-section d-flex align-items-center container\">
    <div class=\"mission-left d-flex align-items-center justify-content-center w-50 img-wrap\" style=\"background-image: url(";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pages/"), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "missionPath", [], "any", false, false, false, 7), "html", null, true);
        yield ");height:300px;border-radius: 10px;margin-right: 15%; background-size: cover\"></div>
    <div class=\"mission-right w-50 h-50\">
        <h3>";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "missionTitre", [], "any", false, false, false, 9), "html", null, true);
        yield "</h3>
        <p>
            ";
        // line 11
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "missionText", [], "any", false, false, false, 11);
        yield "
        </p>
    </div>
</section>
<!-- MISSION SECTION END -->

<!-- STATS SECTION START -->
<section class=\"container-fluid stats-about\">
    <div class=\"stats container d-flex flex-column justify-content-between\">
        <h2 class=\"text-center my-5\">L'Amicale en chiffres</h2>
        <div class=\"stats-cards w-100 h-50 d-flex justify-content-around mb-5\">
            <div class=\"stats-card\">
                <div class=\"stats-ico d-flex justify-content-center align-items-center grad\">
                    <i class=\"fa-solid fa-graduation-cap fa-2x\"></i>
                </div>
                <h4 class=\"text-center\">
                    <span class=\"count\"> ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["home"] ?? null), "chiffreAlumni", [], "any", false, false, false, 27), "html", null, true);
        yield " </span> Alumnis
                </h4>
                <p class=\"text-center\"> ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["home"] ?? null), "chiffreAlumniText", [], "any", false, false, false, 29), "html", null, true);
        yield " </p>
            </div>
            <div class=\"stats-card\">
                <div class=\"stats-ico d-flex justify-content-center align-items-center chart\">
                    <i class=\"fa-solid fa-chart-line fa-2x\"></i>
                </div>
                <h4 class=\"text-center\">
                    <span class=\"count\"> ";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["home"] ?? null), "chiffreProjet", [], "any", false, false, false, 36), "html", null, true);
        yield " </span> Projets
                </h4>
                <p class=\"text-center\"> ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["home"] ?? null), "chiffreProjetText", [], "any", false, false, false, 38), "html", null, true);
        yield " </p>
            </div>
            <div class=\"stats-card\">
                <div class=\"stats-ico d-flex justify-content-center align-items-center money\">
                    <i class=\"fa-solid fa-money-bill fa-2x\"></i>
                </div>
                <h4 class=\"text-center\">
                    <span class=\"count\"> ";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["home"] ?? null), "chiffreFonds", [], "any", false, false, false, 45), "html", null, true);
        yield " </span> Millions
                </h4>
                <p class=\"text-center\"> ";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["home"] ?? null), "chiffreFondsText", [], "any", false, false, false, 47), "html", null, true);
        yield " </p>
            </div>
        </div>
    </div>
</section>
<!-- STATS SECTION END -->

<!-- REALISATION SECTION START  -->
<section class=\"realisations\">
    <div class=\"container\">
        <h2 class=\"text-center my-5\">Nos réalisations</h2>
        <div class=\"realisations-carousel-container w-100\">
            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["realisations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["real"]) {
            // line 60
            yield "            <div class=\"realisations-card\">
                <div class=\"image\" style=\"background-image: url(/pages/";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["real"], "image", [], "any", false, false, false, 61), "html", null, true);
            yield ");\"></div>
                <h5 class=\"py-2\">";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["real"], "titre", [], "any", false, false, false, 62), "html", null, true);
            yield "</h5>
                <p>
                    ";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["real"], "miniDescription", [], "any", false, false, false, 64), "html", null, true);
            yield "
                    <a href=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_realisation_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["real"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            yield "\">Voir plus</a>
                </p>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['real'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "            
        </div>
    </div>
</section>
<!-- REALISATION SECTION END  -->

    <!-- COLLEGE SECTION START -->
    <section class=\"historique\">
        <h2 class=\"text-center my-5\">College Présidentes d'Honneur</h2>
        <div class=\"container\">
            <div class=\"historiques-caroussel-container\">
                ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["college"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mb"]) {
            // line 81
            yield "                    <div class=\"historique-card\">
                        <div class=\"image\" style=\"background-image: url(/pp/";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["mb"], "membre", [], "any", false, false, false, 82), "profile", [], "any", false, false, false, 82), "html", null, true);
            yield "); object-fit: cover;\"></div>
                        <h6 class=\"mt-3\"> <strong> ";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mb"], "nomComplet", [], "any", false, false, false, 83), "html", null, true);
            yield "</strong> - Promotion de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["mb"], "membre", [], "any", false, false, false, 83), "promotion", [], "any", false, false, false, 83), "html", null, true);
            yield " </h6>
                        <h5 class=\"mt-3\">";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["mb"], "fonction", [], "any", false, false, false, 84), "libelle", [], "any", false, false, false, 84), "html", null, true);
            yield "</h5>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['mb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        yield "            </div>
        </div>
    </section>
    <!-- BUREAU SECTION END -->

<!-- BUREAU SECTION START -->
<section class=\"historique\">
    <h2 class=\"text-center my-5\">Bureau actuel</h2>
    <div class=\"container\">
        <div class=\"historiques-caroussel-container\">
            ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["membres"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mb"]) {
            // line 98
            yield "            <div class=\"historique-card\">
                <div class=\"image\" style=\"background-image: url(/pp/";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["mb"], "membre", [], "any", false, false, false, 99), "profile", [], "any", false, false, false, 99), "html", null, true);
            yield "); object-fit: cover;\"></div>
                <h6 class=\"mt-3\"> <strong> ";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mb"], "nomComplet", [], "any", false, false, false, 100), "html", null, true);
            yield "</strong> - Promotion de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["mb"], "membre", [], "any", false, false, false, 100), "promotion", [], "any", false, false, false, 100), "html", null, true);
            yield " </h6>
                <h5 class=\"mt-3\">";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["mb"], "fonction", [], "any", false, false, false, 101), "libelle", [], "any", false, false, false, 101), "html", null, true);
            yield "</h5>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['mb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        yield "        </div>
    </div>
</section>
<!-- BUREAU SECTION END -->


<!-- TESTIMONY SECTION START  -->
<section class=\"testimony-section container-fluid\">
    <h2 class=\"text-center mb-5 pt-5\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "motTitre", [], "any", false, false, false, 112), "html", null, true);
        yield "</h2>
    <div class=\"testimony-container container d-flex justify-content-between\">
        <div class=\"testimony-left testimony-card\" style=\"background-image: url(";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pages/"), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "motPath", [], "any", false, false, false, 114), "html", null, true);
        yield ");\"></div>
        <div class=\"testimony-right testimony-card\">
            <p>
                    ";
        // line 117
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "motContenu", [], "any", false, false, false, 117);
        yield "
            </p>
            <h6 class=\"my-3\">La présidente</h6>
        </div>
    </div>
</section>
<!-- TESTIMONY SECTION START  -->

<!-- PARTNERS SECTION START -->
  <section class=\"partners container\">
      <h2 class=\"text-center py-5\">Nos partenaires</h2>
      <div class=\"partners-carousel-container pb-5\">
          
          ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["partenaires"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["part"]) {
            // line 131
            yield "          <div class=\"d-flex justify-content-center align-items center\">
              <img src=\"/partenaires/";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["part"], "logo", [], "any", false, false, false, 132), "html", null, true);
            yield "\" alt=\"\" style=\"width: 200px; object-fit: cover\">    
          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['part'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        yield "      </div>
  </section>
  <!-- PARTNERS SECTION END -->


";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "about/index.html.twig";
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
        return array (  315 => 135,  306 => 132,  303 => 131,  299 => 130,  283 => 117,  276 => 114,  271 => 112,  261 => 104,  252 => 101,  246 => 100,  242 => 99,  239 => 98,  235 => 97,  223 => 87,  214 => 84,  208 => 83,  204 => 82,  201 => 81,  197 => 80,  184 => 69,  174 => 65,  170 => 64,  165 => 62,  161 => 61,  158 => 60,  154 => 59,  139 => 47,  134 => 45,  124 => 38,  119 => 36,  109 => 29,  104 => 27,  85 => 11,  80 => 9,  74 => 7,  69 => 4,  62 => 3,  52 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "about/index.html.twig", "/workspace/deploy/amemba-site-dev/templates/about/index.html.twig");
    }
}
