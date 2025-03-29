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

/* admin/admin_page_accueil/index.html.twig */
class __TwigTemplate_ee50a169604b0333f4dc86f70bd87819 extends Template
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
        $this->parent = $this->loadTemplate("base.admin.html.twig", "admin/admin_page_accueil/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " Contenue de la page d'accueil ";
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
        yield "<div class=\"page-content\">
    <section class=\"section\">
        <div class=\"row\" id=\"basic-table\">
            <div class=\"col-12 \">

                <div class=\"card\">
                    <div class=\"accordion\" id=\"accordionPanelsStayOpenExample\">
                        <div class=\"accordion-item\">
                          <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingOne\">
                            <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseOne\" aria-expanded=\"true\" aria-controls=\"panelsStayOpen-collapseOne\">
                                <strong> Section 1 : Carousel </strong> 
                            </button>
                          </h2>
                          <div id=\"panelsStayOpen-collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"panelsStayOpen-headingOne\">
                            <div class=\"accordion-body\">
                                <div class=\"card-body\">
                                    <form class=\"form form-horizontal\" enctype=\"multipart/form-data\" method='POST' action=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_accueil_section1");
        yield "\">
                                        <div class=\"form-body\">
                                            <div class=\"row justify-content-between\">
                                                <div class=\"col-4\">
                                                    <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                        <figure class=\"card card-product-grid\" >
                                                          <div class=\"img-wrap text-center\" style=\"margin-bottom: 0px;\"> 
                                                            <img src=\"/pages/";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "carouselImage1", [], "any", false, false, false, 28), "html", null, true);
        yield "\" style=\"width:300px\"> 
                                                          </div>
                                                          <figcaption class=\"info-wrap border-top\" style=\"margin-bottom: -30px;\">
                                                            <p class=\"title mb-2\"></p>
                                                            <div class=\"form-group\">
                                                              <input type=\"file\" class=\"form-control-file\" name=\"img1\" id=\"\" placeholder=\"\" aria-describedby=\"fileHelpId\" accept=\".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*\">
                                                              <small id=\"fileHelpId\" class=\"form-text text-muted\">Modifier l'image</small>
                                                            </div>
                                                        </figcaption>
                                                        </figure>
                                                    </div>
                                                </div>
                                                <div class=\"col-4\">
                                                    <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                        <figure class=\"card card-product-grid\" >
                                                          <div class=\"img-wrap text-center\" style=\"margin-bottom: 0px;\"> 
                                                            <img src=\"/pages/";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "carouselImage2", [], "any", false, false, false, 44), "html", null, true);
        yield "\" style=\"width:300px\"> 
                                                          </div>
                                                          <figcaption class=\"info-wrap border-top\" style=\"margin-bottom: -30px;\">
                                                            <p class=\"title mb-2\"></p>
                                                            <div class=\"form-group\">
                                                              <input type=\"file\" class=\"form-control-file\" name=\"img2\" id=\"\" placeholder=\"\" aria-describedby=\"fileHelpId\" accept=\".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*\">
                                                              <small id=\"fileHelpId\" class=\"form-text text-muted\">Modifier l'image</small>
                                                            </div>
                                                        </figcaption>
                                                        </figure>
                                                    </div>
                                                </div>
                                                <div class=\"col-4\">
                                                    <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                        <figure class=\"card card-product-grid\" >
                                                          <div class=\"img-wrap text-center\" style=\"margin-bottom: 0px;\"> 
                                                            <img src=\"/pages/";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "carouselImage3", [], "any", false, false, false, 60), "html", null, true);
        yield "\" style=\"width:300px\"> 
                                                          </div>
                                                          <figcaption class=\"info-wrap border-top\" style=\"margin-bottom: -30px;\">
                                                            <p class=\"title mb-2\"></p>
                                                            <div class=\"form-group\">
                                                              <input type=\"file\" class=\"form-control-file\" name=\"img3\" id=\"\" placeholder=\"\" aria-describedby=\"fileHelpId\" accept=\".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*\">
                                                              <small id=\"fileHelpId\" class=\"form-text text-muted\">Modifier l'image</small>
                                                            </div>
                                                        </figcaption>
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class=\"row\">
                                                <div class=\"col-4\">
                                                   <div class=\"form-group\">
                                                        <label for=\"\">Titre</label>
                                                        <input type=\"text\" name=\"titre1\" id=\"\" class=\"form-control\" placeholder=\"\" aria-describedby=\"helpId\" value=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "carouselTitre1", [], "any", false, false, false, 78), "html", null, true);
        yield "\">
                                                        <label for=\"\" class=\"mt-2\">Text de couverture de l'image</label>
                                                        <textarea class=\"form-control\" name=\"text1\" id=\"\" rows=\"3\"> ";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "carouselText1", [], "any", false, false, false, 80), "html", null, true);
        yield " </textarea>
                                                   </div>
                                                </div>
                                                <div class=\"col-4\">
                                                    <div class=\"form-group\">
                                                         <label for=\"\">Titre</label>
                                                         <input type=\"text\" name=\"titre2\" id=\"\" class=\"form-control\" placeholder=\"\" aria-describedby=\"helpId\" value=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "carouselTitre2", [], "any", false, false, false, 86), "html", null, true);
        yield "\">
                                                         <label for=\"\" class=\"mt-2\">Text de couverture de l'image</label>
                                                         <textarea class=\"form-control\" name=\"text2\" id=\"\" rows=\"3\"> ";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "carouselText2", [], "any", false, false, false, 88), "html", null, true);
        yield "</textarea>
                                                    </div>
                                                </div>
                                                <div class=\"col-4\">
                                                    <div class=\"form-group\">
                                                        <label for=\"\">Titre</label>
                                                        <input type=\"text\" name=\"titre3\" id=\"\" class=\"form-control\" placeholder=\"\" aria-describedby=\"helpId\" value=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "carouselTitre3", [], "any", false, false, false, 94), "html", null, true);
        yield "\">
                                                        <label for=\"\" class=\"mt-2\">Text de couverture de l'image</label>
                                                        <textarea class=\"form-control\" name=\"text3\" id=\"\" rows=\"3\">";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "carouselText3", [], "any", false, false, false, 96), "html", null, true);
        yield "</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <button type=\"submit\" class=\"btn btn-primary mt-2\">Modifier</button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>

                <div class=\"card\">
                    <div class=\"accordion\" id=\"accordionPanelsStayOpenExample\">
                        <div class=\"accordion-item\">
                            <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingTwo\">
                              <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseTwo\" aria-expanded=\"false\" aria-controls=\"panelsStayOpen-collapseTwo\">
                                <strong> Section 2 : Mission de l'amicale </strong> 
                              </button>
                            </h2>
                            <div id=\"panelsStayOpen-collapseTwo\" class=\"accordion-collapse collapse\" aria-labelledby=\"panelsStayOpen-headingTwo\">
                                <div class=\"accordion-body\">
                                    <form class=\"form form-horizontal\" enctype=\"multipart/form-data\" method=\"POST\" action=\"";
        // line 122
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_accueil_section2");
        yield "\">
                                        <figure class=\"card card-product-grid\" >
                                            <div class=\"img-wrap text-center\" style=\"margin-bottom: 15px;\"> 
                                            <img src=\"/pages/";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "missionImg", [], "any", false, false, false, 125), "html", null, true);
        yield "\" style=\"width:300px\"> 
                                            </div>
                                            <figcaption class=\"info-wrap border-top\" style=\"margin-bottom: -30px;\">
                                            <p class=\"title mb-2\"></p>
                                            <div class=\"form-group\">
                                                <input type=\"file\" class=\"form-control-file\" name=\"missionImg\" id=\"\" placeholder=\"\" aria-describedby=\"fileHelpId\" accept=\".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*\">
                                                <small id=\"fileHelpId\" class=\"form-text text-muted\">Modifier l'image</small>
                                            </div>
                                        </figcaption>
                                        <br>
                                        <div class=\"row\">
                                            <div class=\"col-6\">
                                                <div class=\"form-group\">
                                                    <label for=\"missionTitre\">Titre</label>
                                                    <input type=\"text\" class=\"form-control\" name=\"missionTitre\" id=\"missionTitre\" aria-describedby=\"helpId\" placeholder=\"\" value=\"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "missionTitre", [], "any", false, false, false, 139), "html", null, true);
        yield "\">                                               
                                                </div>
                                            </div>
                                        </div>
                                            <div class=\"form-group\">
                                              <label for=\"my_editor\">Texte</label>
                                              <textarea class=\"form-control\" name=\"my_editor\" id=\"my_editor\" rows=\"4\">";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "missionText", [], "any", false, false, false, 145), "html", null, true);
        yield "</textarea>
                                            </div>
                                        <button type=\"submit\" class=\"btn btn-primary\">Modifier la section</button>      
                                    </form>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>

                <div class=\"card\">
                    <div class=\"accordion-item\">
                        <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingThree\">
                          <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseThree\" aria-expanded=\"false\" aria-controls=\"panelsStayOpen-collapseThree\">
                            <strong> Section 3 : Chiffres </strong>
                          </button>
                        </h2>
                        <div id=\"panelsStayOpen-collapseThree\" class=\"accordion-collapse collapse\" aria-labelledby=\"panelsStayOpen-headingThree\">
                          <div class=\"accordion-body\">
                             <form method=\"POST\" action=\"";
        // line 164
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_accueil_section3");
        yield "\">
                                <div class=\"row\">
                                    <div class=\"col-4\">
                                        <div class=\"form-group\">
                                        <label for=\"chiffreTitre1\">Nombre Alumni</label>
                                        <input type=\"text\"
                                            class=\"form-control\" name=\"chiffreAlumni\" id=\"chiffreTitre1\" aria-describedby=\"helpId\" placeholder=\"\" value=\"";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "chiffreAlumni", [], "any", false, false, false, 170), "html", null, true);
        yield "\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"chiffreTexte1\">Texte nombre alumni</label>
                                            <textarea class=\"form-control\" name=\"chiffreAlumniText\" id=\"chiffreTexte1\" rows=\"3\">";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "chiffreAlumniText", [], "any", false, false, false, 174), "html", null, true);
        yield "</textarea>
                                        </div>
                                    </div>
                                    <div class=\"col-4\">
                                        <div class=\"form-group\">
                                        <label for=\"chiffreTitre2\">Nombre de projets</label>
                                        <input type=\"text\"
                                            class=\"form-control\" name=\"chiffreProjet\" id=\"chiffreTitre2\" aria-describedby=\"helpId\" placeholder=\"\" value=\"";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "chiffreProjet", [], "any", false, false, false, 181), "html", null, true);
        yield "\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"chiffreTexte1\">Texte nombre de projets</label>
                                            <textarea class=\"form-control\" name=\"chiffreProjetText\" id=\"chiffreTexte2\" rows=\"3\"> ";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "chiffreProjetText", [], "any", false, false, false, 185), "html", null, true);
        yield " </textarea>
                                        </div>
                                    </div>
                                    <div class=\"col-4\">
                                        <div class=\"form-group\">
                                        <label for=\"chiffreTitre1\">Fonds immobilisés</label>
                                        <input type=\"text\"
                                            class=\"form-control\" name=\"chiffreFonds\" id=\"chiffreTitre3\" aria-describedby=\"helpId\" placeholder=\"\" value=\"";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "chiffreFonds", [], "any", false, false, false, 192), "html", null, true);
        yield "\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"chiffreTexte1\">Texte de fonds immobilisés</label>
                                            <textarea class=\"form-control\" name=\"chiffreFondsText\" id=\"chiffreTexte3\" rows=\"3\">";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "chiffreProjettext", [], "any", false, false, false, 196), "html", null, true);
        yield "</textarea>
                                        </div>
                                        <button type=\"submit\" class=\"btn btn-primary\">Modifier la section</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                        </div>
                    </div>
                </div>

                <div class=\"card\">
                    <div class=\"accordion\" id=\"accordionPanelsStayOpenExample\">
                        <div class=\"accordion-item\">
                            <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingFour\">
                              <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseFour\" aria-expanded=\"false\" aria-controls=\"panelsStayOpen-collapseFour\">
                                <strong> Section 4 : Entreprise </strong> 
                              </button>
                            </h2>
                            <div id=\"panelsStayOpen-collapseFour\" class=\"accordion-collapse collapse\" aria-labelledby=\"panelsStayOpen-headingFour\">
                                <div class=\"accordion-body\">
                                    <form class=\"form form-horizontal\" method=\"POST\" action=\"";
        // line 218
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_accueil_section4");
        yield "\">
                                        <div class=\"row\">
                                            <div class=\"col-6\">
                                                <div class=\"form-group\">
                                                    <label for=\"entrepriseTitre\">Titre</label>
                                                    <input type=\"text\" class=\"form-control\" name=\"entrepriseTitre\" id=\"entrepriseTitre\" aria-describedby=\"helpId\" placeholder=\"\" value=\"";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "entrepriseTitre", [], "any", false, false, false, 223), "html", null, true);
        yield "\">                                               
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                          <label for=\"entrepriseTexte\">Texte</label>
                                          <textarea class=\"form-control\" name=\"entrepriseTexte\" id=\"entrepriseTexte\" rows=\"4\">";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "entrepriseTexte", [], "any", false, false, false, 229), "html", null, true);
        yield "</textarea>
                                        </div>
                                        <button type=\"submit\" class=\"btn btn-primary\">Modifier la section</button>      
                                    </form>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>

                <div class=\"card\">
                    <div class=\"accordion\" id=\"accordionPanelsStayOpenExample\">
                        <div class=\"accordion-item\">
                            <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingFive\">
                              <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseFive\" aria-expanded=\"false\" aria-controls=\"panelsStayOpen-collapseFive\">
                                <strong> Section 5 : Témoignages </strong> 
                              </button>
                            </h2>
                            <div id=\"panelsStayOpen-collapseFive\" class=\"accordion-collapse collapse\" aria-labelledby=\"panelsStayOpen-headingFive\">
                                <div class=\"accordion-body\">
                                    <form class=\"form form-horizontal\" enctype=\"multipart/form-data\" method=\"POST\" action=\"";
        // line 249
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_accueil_section5");
        yield "\">
                                        
                                        <div class=\"row\">
                                            <p class=\"mb-2\"><strong> Temoignages avec titre </strong>  </p>
                                        </div>


                                        <div class=\"row mb-3\">
                                            <div class=\"col-6\">
                                                <figure class=\"card card-product-grid\" >
                                                <div class=\"img-wrap text-center\" style=\"margin-bottom: 15px;\"> 
                                                    <img src=\"/pages/";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "ancienneImg1", [], "any", false, false, false, 260), "html", null, true);
        yield "\" style=\"width:300px\"> 
                                                </div>
                                                <figcaption class=\"info-wrap border-top\" style=\"margin-bottom: -30px;\">
                                                    <p class=\"title mb-2\"></p>
                                                    <div class=\"form-group\">
                                                        <input type=\"file\" class=\"form-control-file\" name=\"ancienneImg1\" id=\"\" placeholder=\"\" aria-describedby=\"fileHelpId\" accept=\".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*\">
                                                        <small id=\"fileHelpId\" class=\"form-text text-muted\">Modifier l'image</small>
                                                    </div>
                                                </figcaption>
                                                <br>
                                                <div class=\"form-group\">
                                                  <label for=\"temoignageAuteur1\">Auteur</label>
                                                  <input type=\"text\" class=\"form-control\" name=\"temoignageAuteur1\" id=\"temoignageAuteur1\" aria-describedby=\"helpId\" value=\"";
        // line 272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "temoignageAuteur1", [], "any", false, false, false, 272), "html", null, true);
        yield "\">
                                                  <label for=\"temoignageTitre1\">Titre</label>
                                                  <input type=\"text\" class=\"form-control\" name=\"temoignageTitre1\" id=\"temoignageTitre1\" aria-describedby=\"helpId\"value=\"";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "temoignageTitre1", [], "any", false, false, false, 274), "html", null, true);
        yield "\">
                                                  <label for=\"temoignageText1\">Temoignage</label>
                                                  <textarea class=\"form-control\" name=\"temoignageText1\" id=\"temoignageText1\" rows=\"3\">";
        // line 276
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "temoignageText1", [], "any", false, false, false, 276), "html", null, true);
        yield "</textarea>
                                                </div>
                                            </div>
                                            <div class=\"col-6\">
                                                <figure class=\"card card-product-grid\" >
                                                <div class=\"img-wrap text-center\" style=\"margin-bottom: 15px;\"> 
                                                    <img src=\"/pages/";
        // line 282
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "ancienneImg2", [], "any", false, false, false, 282), "html", null, true);
        yield "\" style=\"width:300px\"> 
                                                </div>
                                                <figcaption class=\"info-wrap border-top\" style=\"margin-bottom: -30px;\">
                                                    <p class=\"title mb-2\"></p>
                                                    <div class=\"form-group\">
                                                        <input type=\"file\" class=\"form-control-file\" name=\"ancienneImg2\" id=\"\" placeholder=\"\" aria-describedby=\"fileHelpId\" accept=\".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*\">
                                                        <small id=\"fileHelpId\" class=\"form-text text-muted\">Modifier l'image</small>
                                                    </div>
                                                </figcaption>
                                                <br>
                                                <div class=\"form-group\">
                                                  <label for=\"temoignageAuteur2\">Auteur</label>
                                                  <input type=\"text\" class=\"form-control\" name=\"temoignageAuteur2\" id=\"temoignageAuteur2\" aria-describedby=\"helpId\" placeholder=\"\" value=\"";
        // line 294
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "temoignageAuteur2", [], "any", false, false, false, 294), "html", null, true);
        yield "\">
                                                  <label for=\"temoignageTitre2\">Titre</label>
                                                  <input type=\"text\" class=\"form-control\" name=\"temoignageTitre2\" id=\"temoignageTitre2\" aria-describedby=\"helpId\" placeholder=\"\" value=\"";
        // line 296
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "temoignageTitre2", [], "any", false, false, false, 296), "html", null, true);
        yield "\">
                                                  <label for=\"temoignageText2\">Temoignage</label>
                                                  <textarea class=\"form-control\" name=\"temoignageText2\" id=\"temoignageText2\" rows=\"3\">";
        // line 298
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "temoignageText2", [], "any", false, false, false, 298), "html", null, true);
        yield "</textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <hr class=\"my-5\">

                                        <div class=\"row\">
                                            <p class=\"mb-2\"><strong> Temoignages sans titre </strong>  </p>
                                        </div>

                                        <div class=\"row mb-3\">
                                            <div class=\"col-6\">
                                                <div class=\"form-group\">
                                                  <label for=\"temoignageAuteur3\">Auteur</label>
                                                  <input type=\"text\" class=\"form-control\" name=\"temoignageAuteur3\" id=\"temoignageAuteur3\" aria-describedby=\"helpId\" placeholder=\"\" value=\"";
        // line 313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "temoignageAuteur3", [], "any", false, false, false, 313), "html", null, true);
        yield "\">
                                                  <label for=\"temoignageText3\">Temoignage</label>
                                                  <textarea class=\"form-control\" name=\"temoignageText3\" id=\"temoignageText3\" rows=\"3\">";
        // line 315
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "temoignageText3", [], "any", false, false, false, 315), "html", null, true);
        yield "</textarea>
                                                </div>
                                            </div>
                                            <div class=\"col-6\">
                                                <div class=\"form-group\">
                                                  <label for=\"temoignageAuteur4\">Auteur</label>
                                                  <input type=\"text\" class=\"form-control\" name=\"temoignageAuteur4\" id=\"temoignageAuteur4\" aria-describedby=\"helpId\" placeholder=\"\" value=\"";
        // line 321
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "temoignageAuteur4", [], "any", false, false, false, 321), "html", null, true);
        yield "\">
                                                  <label for=\"temoignageText4\">Temoignage</label>
                                                  <textarea class=\"form-control\" name=\"temoignageText4\" id=\"temoignageText4\" rows=\"3\">";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "temoignageText4", [], "any", false, false, false, 323), "html", null, true);
        yield "</textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <button type=\"submit\" class=\"btn btn-primary\">Modifier la section</button>      
                                    </form>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>


                <div class=\"card\">
                <div class=\"accordion\" id=\"accordionPanelsStayOpenExample\">
                    <div class=\"accordion-item\">
                        <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingSix\">
                            <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseSix\" aria-expanded=\"false\" aria-controls=\"panelsStayOpen-collapseSix\">
                                <strong> Section 6 : Blog </strong>
                            </button>
                        </h2>
                        <div id=\"panelsStayOpen-collapseSix\" class=\"accordion-collapse collapse\" aria-labelledby=\"panelsStayOpen-headingSix\">
                            <div class=\"accordion-body\">
                                <form class=\"form form-horizontal\" enctype=\"multipart/form-data\" method=\"POST\" action=\"";
        // line 347
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_accueil_section6");
        yield "\">
                                    <figure class=\"card card-product-grid\" >

                                        <div class=\"row\">
                                            <div class=\"col-6\">
                                                <div class=\"form-group\">
                                                    <label for=\"blogTitre\">Titre</label>
                                                    <input type=\"text\" class=\"form-control\" name=\"blogTitre\" id=\"blogTitre\" aria-describedby=\"helpId\" placeholder=\"\" value=\"";
        // line 354
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "blogTitre", [], "any", false, false, false, 354), "html", null, true);
        yield "\">
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"blogText\">Texte</label>
                                            <textarea class=\"form-control\" name=\"blogText\" id=\"blogText\" rows=\"4\">";
        // line 360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "blogText", [], "any", false, false, false, 360), "html", null, true);
        yield "</textarea>
                                        </div>
                                        <button type=\"submit\" class=\"btn btn-primary\">Modifier la section</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <div class=\"card\">
                    <div class=\"accordion\" id=\"accordionPanelsStayOpenExample\">
                        <div class=\"accordion-item\">
                            <h2 class=\"accordion-header\" id=\"panelsStayOpen-headingSix\">
                              <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseSix\" aria-expanded=\"false\" aria-controls=\"panelsStayOpen-collapseSix\">
                                <strong> Section 7 : Ancienne </strong>
                              </button>
                            </h2>
                            <div id=\"panelsStayOpen-collapseSix\" class=\"accordion-collapse collapse\" aria-labelledby=\"panelsStayOpen-headingSix\">
                                <div class=\"accordion-body\">
                                    <form class=\"form form-horizontal\" enctype=\"multipart/form-data\" method=\"POST\" action=\"";
        // line 380
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_accueil_section7");
        yield "\">
                                        <figure class=\"card card-product-grid\" >
                                            <div class=\"img-wrap text-center\" style=\"margin-bottom: 15px;\"> 
                                            <img src=\"/pages/";
        // line 383
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "ancienneImg3", [], "any", false, false, false, 383), "html", null, true);
        yield "\" style=\"width:300px\"> 
                                            </div>
                                            <figcaption class=\"info-wrap border-top\" style=\"margin-bottom: -30px;\">
                                            <p class=\"title mb-2\"></p>
                                            <div class=\"form-group\">
                                                <input type=\"file\" class=\"form-control-file\" name=\"ancienneImg3\" id=\"\" placeholder=\"\" aria-describedby=\"fileHelpId\" accept=\".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*\">
                                                <small id=\"fileHelpId\" class=\"form-text text-muted\">Modifier l'image</small>
                                            </div>
                                        </figcaption>
                                        <br>
                                        <div class=\"row\">
                                            <div class=\"col-6\">
                                                <div class=\"form-group\">
                                                    <label for=\"membreTitre\">Titre</label>
                                                    <input type=\"text\" class=\"form-control\" name=\"membreTitre\" id=\"membreTitre\" aria-describedby=\"helpId\" placeholder=\"\" value=\"";
        // line 397
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "membreTitre", [], "any", false, false, false, 397), "html", null, true);
        yield "\">                                               
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                          <label for=\"membreText\">Texte</label>
                                          <textarea class=\"form-control\" name=\"membreText\" id=\"membreText\" rows=\"4\">";
        // line 403
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "membreText", [], "any", false, false, false, 403), "html", null, true);
        yield "</textarea>
                                        </div>
                                        <button type=\"submit\" class=\"btn btn-primary\">Modifier la section</button>      
                                    </form>
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
        yield from [];
    }

    // line 421
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 422
        yield "<script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/js/form-edit/ckeditor.js"), "html", null, true);
        yield "\"></script>
    <script>
        ClassicEditor.create(document.getElementById('my_editor'))
    </script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/admin_page_accueil/index.html.twig";
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
        return array (  629 => 422,  622 => 421,  600 => 403,  591 => 397,  574 => 383,  568 => 380,  545 => 360,  536 => 354,  526 => 347,  499 => 323,  494 => 321,  485 => 315,  480 => 313,  462 => 298,  457 => 296,  452 => 294,  437 => 282,  428 => 276,  423 => 274,  418 => 272,  403 => 260,  389 => 249,  366 => 229,  357 => 223,  349 => 218,  324 => 196,  317 => 192,  307 => 185,  300 => 181,  290 => 174,  283 => 170,  274 => 164,  252 => 145,  243 => 139,  226 => 125,  220 => 122,  191 => 96,  186 => 94,  177 => 88,  172 => 86,  163 => 80,  158 => 78,  137 => 60,  118 => 44,  99 => 28,  89 => 21,  71 => 5,  64 => 4,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/admin_page_accueil/index.html.twig", "/workspace/deploy/amemba-site-dev/templates/admin/admin_page_accueil/index.html.twig");
    }
}
