<?php

/* @App/default/index.html.twig */
class __TwigTemplate_5bd696753cd2a18421ad55344976fc15262bb3490b710fe47f6049b3c8580b90 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<!DOCTYPE html>
<!--[if IE 8 ]><html class=\"no-js oldie ie8\" lang=\"en\"> <![endif]-->
<!--[if IE 9 ]><html class=\"no-js oldie ie9\" lang=\"en\"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class=\"no-js\" lang=\"en\"> <!--<![endif]-->
 

<body id=\"top\">

\t<!-- header 
   ================================================== -->
   <header>   \t
   \t<div class=\"row\">

   \t\t<div class=\"top-bar\">
   \t\t\t<a class=\"menu-toggle\" href=\"#\"><span>Menu</span></a>

\t   \t\t<div class=\"logo\">
\t\t         <a href=\"app_dev.php\">Thomas.P</a>
\t\t      </div>\t\t      

\t\t   \t<nav id=\"main-nav-wrap\">
\t\t\t\t\t<ul class=\"main-navigation\">
\t\t\t\t\t\t<li class=\"current\"><a class=\"smoothscroll\"  href=\"#intro\" title=\"\">Home</a></li>
\t\t\t\t\t\t<li><a class=\"smoothscroll\"  href=\"#about\" title=\"\">Skills</a></li>
\t\t\t\t\t\t<li><a class=\"smoothscroll\"  href=\"#resume\" title=\"\">Qualifications & Work Experiences </a></li>
\t\t\t\t\t\t<li><a class=\"smoothscroll\"  href=\"#portfolio\" title=\"\">Portfolio</a></li>
\t\t\t\t\t\t<li><a class=\"smoothscroll\"  href=\"#services\" title=\"\">Services</a></li>\t\t\t\t\t
\t\t\t\t\t\t<li><a class=\"smoothscroll\"  href=\"#contact\" title=\"\">Contact</a></li>\t
\t\t\t\t\t</ul>
\t\t\t\t</nav>    \t\t
   \t\t</div> <!-- /top-bar --> 
   \t\t
   \t</div> <!-- /row --> \t\t
   </header> <!-- /header -->

\t<!-- intro section
   ================================================== -->
   <section id=\"intro\">   

   \t<div class=\"intro-overlay\"></div>\t

   \t<div class=\"intro-content\">
   \t\t<div class=\"row\">

   \t\t\t<div class=\"col-twelve\">

\t   \t\t\t<h1>";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["firstname"]) || array_key_exists("firstname", $context) ? $context["firstname"] : (function () { throw new Twig_Error_Runtime('Variable "firstname" does not exist.', 49, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "</h1>

\t   \t\t\t<p class=\"intro-position\">
\t   \t\t\t\t<span>Vidéo Maker</span>
\t   \t\t\t\t<span>Editor</span> 
\t   \t\t\t</p>

\t   \t\t\t<a class=\"button stroke smoothscroll\" href=\"#about\" title=\"\">More About Me</a>

\t   \t\t</div>  
   \t\t\t
   \t\t</div>   \t\t \t\t
   \t</div> <!-- /intro-content --> 

   \t<ul class=\"intro-social\">        
         <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
         <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
         <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
         <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
         <li><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
      </ul> <!-- /intro-social -->      \t

   </section> <!-- /intro -->


   <!-- about section
   ================================================== -->
   <section id=\"about\">  

   \t<div class=\"row section-intro\">
   \t\t<div class=\"col-twelve\">

   \t\t\t<h5>About</h5>
   \t\t\t<h1>My Skills</h1>

   \t\t\t<div class=\"intro-info\">

   \t\t\t\t<img src=\"images/profile-pic.jpg\" alt=\"Profile Picture\">

   \t\t\t\t<p class=\"lead\">Lorem ipsum Exercitation culpa qui dolor consequat exercitation fugiat laborum ex ea eiusmod ad do aliqua occaecat nisi ad irure sunt id pariatur Duis laboris amet exercitation veniam labore consectetur ea id quis eiusmod.</p>
   \t\t\t</div>   \t\t\t

   \t\t</div>   \t\t
   \t</div> <!-- /section-intro -->

   \t<div class=\"row about-content\">

   \t\t<div class=\"col-six tab-full\">

   \t\t\t<h3>Profile</h3>
   \t\t\t<p>Lorem ipsum Qui veniam ut consequat ex ullamco nulla in non ut esse in magna sint minim officia consectetur nisi commodo ea magna pariatur nisi cillum.</p>

   \t\t\t<ul class=\"info-list\">
   \t\t\t\t<li>
   \t\t\t\t\t<strong>Fullname:</strong>
   \t\t\t\t\t<span>";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["firstname"]) || array_key_exists("firstname", $context) ? $context["firstname"] : (function () { throw new Twig_Error_Runtime('Variable "firstname" does not exist.', 104, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 104, $this->source); })()), "html", null, true);
        echo "</span>
   \t\t\t\t</li>
   \t\t\t\t<li>
   \t\t\t\t\t<strong>Birth Date:</strong>
   \t\t\t\t\t<span>19/07/1998</span>
   \t\t\t\t</li>
   \t\t\t\t<li>
   \t\t\t\t\t<strong>Job:</strong>
   \t\t\t\t\t<span>Vidéo Maker</span>
   \t\t\t\t</li>
   \t\t\t\t<li>
   \t\t\t\t\t<strong>Website:</strong>
   \t\t\t\t\t<span>www.ThomasPapile.com</span>
   \t\t\t\t</li>
   \t\t\t\t<li>
   \t\t\t\t\t<strong>Email:</strong>
   \t\t\t\t\t<span>papilethomas@gmail.com</span>
   \t\t\t\t</li>

   \t\t\t</ul> <!-- /info-list -->

   \t\t</div>

   \t\t<div class=\"col-six tab-full\">

   \t\t\t<h3>Software</h3>

\t\t\t\t<ul class=\"skill-bars\">
\t\t\t\t\t";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["competences"]);
        foreach ($context['_seq'] as $context["_key"] => $context["competences"]) {
            // line 133
            echo "\t\t\t\t   <li>
\t\t\t\t   \t<div class=\"progress percent90\"><span>90%</span></div>
\t\t\t\t   \t<strong>";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competences"], "getName", array()), "html", null, true);
            echo "</strong>
\t\t\t\t   </li>
\t\t\t\t   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competences'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "\t\t\t\t</ul> <!-- /skill-bars -->\t\t

   \t\t</div>

   \t</div>

   \t<div class=\"row button-section\">
   \t\t<div class=\"col-twelve\">
   \t\t\t<a href=\"#contact\" title=\"Hire Me\" class=\"button stroke smoothscroll\">Hire Me</a>
   \t\t\t<a href=\"#\" title=\"Download CV\" class=\"button button-primary\">Download CV</a>
   \t\t</div>   \t\t
   \t</div>

   </section> <!-- /process-->    


   <!-- resume Section
   ================================================== -->
\t<section id=\"resume\" class=\"grey-section\">

\t\t<div class=\"row resume-timeline\">

   \t\t<div class=\"col-twelve resume-header\">

   \t\t\t<h2>Qualifications</h2>

   \t\t</div> <!-- /resume-header -->
";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["formations"]);
        foreach ($context['_seq'] as $context["_key"] => $context["formations"]) {
            // line 166
            echo "   \t\t<div class=\"col-twelve\">

   \t\t\t<div class=\"timeline-wrap\">

   \t\t\t\t<div class=\"timeline-block\">

\t   \t\t\t\t<div class=\"timeline-ico\">
\t   \t\t\t\t\t<i class=\"fa fa-graduation-cap\"></i>
\t   \t\t\t\t</div>

\t   \t\t\t\t<div class=\"timeline-header\">
\t   \t\t\t\t\t<h3>";
            // line 177
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formations"], "getName", array()), "html", null, true);
            echo "</h3>
\t   \t\t\t\t\t<p>";
            // line 178
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formations"], "getDateDebut", array(), "method"), "d/m/Y"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formations"], "getDateFin", array()), "d/m/Y"), "html", null, true);
            echo "</p>
\t   \t\t\t\t</div>

\t   \t\t\t\t<div class=\"timeline-content\">
\t   \t\t\t\t\t<h4>";
            // line 182
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formations"], "getLieu", array()), "html", null, true);
            echo "</h4>
\t   \t\t\t\t</div>
\t   \t\t\t</div> <!-- /timeline-block -->
           </div>
   \t\t</div> <!-- /col-twelve -->
   \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formations'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "   \t</div> <!-- /resume-timeline -->

   \t<div class=\"row resume-timeline\">

   \t\t<div class=\"col-twelve resume-header\">

   \t\t\t<h2>Work Experiences</h2>

   \t\t</div> <!-- /resume-header -->
";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["experiences"]);
        foreach ($context['_seq'] as $context["_key"] => $context["experiences"]) {
            // line 198
            echo "   \t\t<div class=\"col-twelve\">

   \t\t\t<div class=\"timeline-wrap\">

   \t\t\t\t<div class=\"timeline-block\">
\t   \t\t\t\t<div class=\"timeline-header\">
\t   \t\t\t\t\t<h3>";
            // line 204
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experiences"], "getName", array()), "html", null, true);
            echo "</h3>
\t   \t\t\t\t\t<p>";
            // line 205
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experiences"], "getDateDebut", array(), "method"), "d/m/Y"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experiences"], "getDateFin", array()), "d/m/Y"), "html", null, true);
            echo "</p>
\t   \t\t\t\t</div>
\t   \t\t\t\t<div class=\"timeline-content\">
\t   \t\t\t\t\t<h4>";
            // line 208
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experiences"], "getLieu", array()), "html", null, true);
            echo "</h4>
\t   \t\t\t\t\t<p>";
            // line 209
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experiences"], "getDescription", array()), "html", null, true);
            echo "</p>
\t   \t\t\t\t</div>
\t   \t\t\t</div> <!-- /timeline-block -->
           </div>
   \t\t</div> <!-- /col-twelve -->
   \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['experiences'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        echo "   \t</div> <!-- /resume-timeline -->
\t
\t</section> <!-- /features -->


\t<!-- Portfolio Section
   ================================================== -->
\t<section id=\"portfolio\">

\t\t<div class=\"row section-intro\">
   \t\t<div class=\"col-twelve\">
   \t\t\t<h5>Portfolio</h5>
   \t\t\t<h1>My Works</h1>
   \t\t</div>   \t\t
   \t</div> <!-- /section-intro--> 

   \t<div class=\"row portfolio-content\">

   \t\t<div class=\"col-twelve\">

   \t\t\t<!-- portfolio-wrapper -->
\t         <div id=\"folio-wrapper\" class=\"block-1-2 block-mob-full stack\">

\t         \t<div class=\"bgrid folio-item\">
\t               <div class=\"item-wrap\">
\t               \t<img src=\"Template/images/portfolio/liberty.jpg\" alt=\"Liberty\">
\t                  <a href=\"#modal-01\" class=\"overlay\">\t                  \t           
\t                     <div class=\"folio-item-table\">
\t                     \t<div class=\"folio-item-cell\">
\t\t     \t\t\t\t\t       <h3 class=\"folio-title\">Liberty</h3>\t     \t\t\t\t\t    
\t\t     \t\t\t\t\t    \t 
\t\t     \t\t\t\t\t   </div>\t                      \t
\t                     </div>                    
\t                  </a>
\t               </div>\t               
\t        \t\t</div> <!-- /folio-item -->

\t        \t\t<div class=\"bgrid folio-item\">
\t               <div class=\"item-wrap\">
\t               \t<img src=\"Template/images/portfolio/shutterbug.jpg\" alt=\"Shutterbug\">
\t               \t<a href=\"#modal-02\" class=\"overlay\">              \t\t                  
\t                     <div class=\"folio-item-table\">
\t                     \t<div class=\"folio-item-cell\">
\t                     \t\t<h3 class=\"folio-title\">Shutterbug</h3>\t     \t\t\t\t\t    
\t\t     \t\t\t\t\t    \t\t\t     \t\t
\t\t     \t\t\t\t\t   </div> \t                      \t
\t                     </div>                    
\t                  </a>
\t               </div>
\t        \t\t</div> <!-- /folio-item -->

\t            <div class=\"bgrid folio-item\">
\t               <div class=\"item-wrap\">
\t               \t<img src=\"Template/images/portfolio/clouds.jpg\"alt=\"Clouds\">
\t                  <a href=\"#modal-03\" class=\"overlay\">             \t\t                  
\t                     <div class=\"folio-item-table\">
\t                     \t<div class=\"folio-item-cell\">
\t                     \t\t<h3 class=\"folio-title\">Clouds</h3>\t     \t\t\t\t\t    
\t\t     \t\t\t\t\t    \t\t\t     \t\t
\t\t     \t\t\t\t\t   </div> \t                      \t
\t                     </div>                    
\t                  </a>
\t               </div>
\t        \t\t</div> <!-- /folio-item -->

\t            <div class=\"bgrid folio-item\">
\t               <div class=\"item-wrap\">
\t               \t<img src=\"Template/images/portfolio/beetle.jpg\" alt=\"Beetle\">
\t                  <a href=\"#modal-04\" class=\"overlay\">                  \t                 
\t                     <div class=\"folio-item-table\">
\t                     \t<div class=\"folio-item-cell\">
\t                     \t\t<h3 class=\"folio-title\">Beetle</h3>\t     \t\t\t\t\t    
\t\t     \t\t\t\t\t    \t\t\t     \t\t
\t\t     \t\t\t\t\t   </div>  \t                      \t
\t                     </div>                    
\t                  </a>
\t               </div>
\t        \t\t</div> <!-- /folio-item -->     

\t        \t\t<div class=\"bgrid folio-item\">
\t               <div class=\"item-wrap\">
\t               \t<img src=\"Template/images/portfolio/lighthouse.jpg\" alt=\"Lighthouse\">
\t                  <a href=\"#modal-05\" class=\"overlay\">             \t\t                  
\t                     <div class=\"folio-item-table\">
\t                     \t<div class=\"folio-item-cell\">
\t                     \t\t<h3 class=\"folio-title\">Lighthouse</h3>\t     \t\t\t\t\t    
\t\t     \t\t\t\t\t    \t\t     \t\t
\t\t     \t\t\t\t\t   </div> \t                      \t
\t                     </div>                    
\t                  </a>
\t               </div>
\t        \t\t</div> <!-- /folio-item -->

\t            <div class=\"bgrid folio-item\">
\t               <div class=\"item-wrap\">
\t               \t<img src=\"Template/images/portfolio/salad.jpg\" alt=\"Salad\">
\t                  <a href=\"#modal-06\" class=\"overlay\">
\t                     <div class=\"folio-item-table\">
\t                     \t<div class=\"folio-item-cell\">
\t                     \t\t<h3 class=\"folio-title\">Salad</h3>\t     \t\t\t\t\t    
\t\t     \t\t\t\t\t  \t\t     \t\t
\t\t     \t\t\t\t\t   </div>\t                      \t
\t                     </div>                    
\t                  </a>
\t               </div>
\t        \t\t</div> <!-- /folio-item -->   

\t            <!-- modal popups - begin
\t            ============================================================= -->
\t            <div id=\"modal-01\" class=\"popup-modal slider mfp-hide\">\t

\t\t\t\t     \t<div class=\"media\">
\t\t\t\t     \t\t<img src=\"Template/images/portfolio/modals/m-liberty.jpg\" alt=\"\" />
\t\t\t\t     \t</div>      \t

\t\t\t\t\t   <div class=\"description-box\">
\t\t\t\t\t      <h4>Liberty</h4>\t\t      
\t\t\t\t\t      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

\t\t\t\t\t      \t\t               
\t\t\t\t\t   </div>

\t\t\t         <div class=\"link-box\">
\t\t\t            <a href=\"www.ThomasPapile.com\">Details</a>
\t\t\t\t\t      <a href=\"#\" class=\"popup-modal-dismiss\">Close</a>
\t\t\t         </div>\t\t      

\t\t\t\t   </div> <!-- /modal-01 -->

\t\t\t\t   <div id=\"modal-02\" class=\"popup-modal slider mfp-hide\">\t

\t\t\t\t     \t<div class=\"media\">
\t\t\t\t     \t\t<img src=\"Template/images/portfolio/modals/m-shutterbug.jpg\" alt=\"\" />
\t\t\t\t     \t</div>      \t

\t\t\t\t\t   <div class=\"description-box\">
\t\t\t\t\t      <h4>Shutterbug</h4>\t\t      
\t\t\t\t\t      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

\t\t\t\t\t      <\t\t\t               
\t\t\t\t\t   </div>

\t\t\t         <div class=\"link-box\">
\t\t\t            <a href=\"www.ThomasPapile.com\">Details</a>
\t\t\t\t\t      <a href=\"#\" class=\"popup-modal-dismiss\">Close</a>
\t\t\t         </div>\t\t      

\t\t\t\t   </div> <!-- /modal-02 -->

\t\t\t\t   <div id=\"modal-03\" class=\"popup-modal slider mfp-hide\">\t

\t\t\t\t     \t<div class=\"media\">
\t\t\t\t     \t\t<img src=\"Template/images/portfolio/modals/m-clouds.jpg\" alt=\"\" />
\t\t\t\t     \t</div>      \t

\t\t\t\t\t   <div class=\"description-box\">
\t\t\t\t\t      <h4>Clouds</h4>\t\t      
\t\t\t\t\t      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

\t\t\t\t\t      \t\t\t               
\t\t\t\t\t   </div>

\t\t\t         <div class=\"link-box\">
\t\t\t           <a href=\"www.ThomasPapile.com\">Details</a>
\t\t\t\t\t      <a href=\"#\" class=\"popup-modal-dismiss\">Close</a>
\t\t\t         </div>\t\t      

\t\t\t\t   </div> <!-- /modal-03 -->

\t\t\t\t   <div id=\"modal-04\" class=\"popup-modal slider mfp-hide\">\t

\t\t\t\t     \t<div class=\"media\">
\t\t\t\t     \t\t<img src=\"Template/images/portfolio/modals/m-beetle.jpg\" alt=\"\" />
\t\t\t\t     \t</div>      \t

\t\t\t\t\t   <div class=\"description-box\">
\t\t\t\t\t      <h4>Beetle</h4>\t\t      
\t\t\t\t\t      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

\t\t\t\t\t      \t\t\t               
\t\t\t\t\t   </div>

\t\t\t         <div class=\"link-box\">
\t\t\t            <a href=\"www.ThomasPapile.com\">Details</a>
\t\t\t\t\t      <a href=\"#\" class=\"popup-modal-dismiss\">Close</a>
\t\t\t         </div>\t\t      

\t\t\t\t   </div> <!-- /modal-04 -->

\t\t\t\t   <div id=\"modal-05\" class=\"popup-modal slider mfp-hide\">\t

\t\t\t\t     \t<div class=\"media\">
\t\t\t\t     \t\t<img src=\"Template/images/portfolio/modals/m-lighthouse.jpg\" alt=\"\" />
\t\t\t\t     \t</div>      \t

\t\t\t\t\t   <div class=\"description-box\">
\t\t\t\t\t      <h4>Lighthouse</h4>\t\t      
\t\t\t\t\t      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

\t\t\t\t\t     \t\t\t               
\t\t\t\t\t   </div>

\t\t\t         <div class=\"link-box\">
\t\t\t           <a href=\"www.ThomasPapile.com\">Details</a>
\t\t\t\t\t      <a href=\"#\" class=\"popup-modal-dismiss\">Close</a>
\t\t\t         </div>\t\t      

\t\t\t\t   </div> <!-- /modal-05 -->

\t\t\t\t   <div id=\"modal-06\" class=\"popup-modal slider mfp-hide\">\t

\t\t\t\t     \t<div class=\"media\">
\t\t\t\t     \t\t<img src=\"Template/images/portfolio/modals/m-salad.jpg\" alt=\"\" />
\t\t\t\t     \t</div>      \t

\t\t\t\t\t   <div class=\"description-box\">
\t\t\t\t\t      <h4>Salad</h4>\t\t      
\t\t\t\t\t      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
\t\t\t\t\t   </div>

\t\t\t         <div class=\"link-box\">
\t\t\t            <a href=\"www.ThomasPapile.com\">Details</a>
\t\t\t\t\t      <a href=\"#\" class=\"popup-modal-dismiss\">Close</a>
\t\t\t         </div>\t\t      

\t\t\t\t   </div> <!-- /modal-06 -->


\t\t\t\t   <!-- modal popups - end
\t            ============================================================= -->

\t         </div> <!-- /portfolio-wrapper --> 

   \t\t</div>  <!-- /twelve -->   

   \t</div> <!-- /portfolio-content --> 
\t\t
\t</section> <!-- /portfolio --> 


\t<!-- CTA Section
   ================================================== -->
\t
\t<section id=\"services\">

\t\t<div class=\"overlay\"></div>

\t\t<div class=\"row section-intro\">
   \t\t<div class=\"col-twelve\">

   \t\t\t<h5>Services</h5>
   \t\t\t<h1>What Can I Do For You?</h1>

   \t\t\t<p class=\"lead\">CREATIVE EVERY DAY</p>

   \t\t</div>   \t\t
   \t</div> <!-- /section-intro -->

   \t<div class=\"row services-content\">

   \t\t<div id=\"owl-slider\" class=\"owl-carousel services-list\">

\t      \t<div class=\"service\">\t

\t      \t\t<span class=\"icon\"><i class=\"icon-video\"></i></span>            

\t            <div class=\"service-content\">\t

\t            \t <h3>Video making</h3>

\t\t            <p class=\"desc\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
\t         \t\t</p>
\t         \t\t
\t         \t</div> \t         \t 

\t\t\t\t</div> <!-- /service -->

\t\t\t\t<div class=\"service\">\t

\t\t\t\t\t<span class=\"icon\"><i class=\"icon-camera\"></i></span>                          

\t            <div class=\"service-content\">\t

\t            \t<h3>Framing</h3>  

\t\t            <p class=\"desc\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
\t         \t\t</p>

\t            </div>\t                          

\t\t\t   </div> <!-- /service -->

\t\t\t   <div class=\"service\">

\t\t\t   \t<span class=\"icon\"><i class=\"icon-target\"></i></span>\t\t            

\t            <div class=\"service-content\">

\t            \t<h3>Content Selecting</h3>

\t\t            <p class=\"desc\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
\t        \t\t\t</p> 

\t            </div> \t            \t               

\t\t\t   </div> <!-- /service -->

\t\t\t   <div class=\"service\">

\t\t\t   \t<span class=\"icon\"><i class=\"icon-projector\"></i></span>\t            

\t            <div class=\"service-content\">

\t            \t<h3>Film Making</h3>

\t\t            <p class=\"desc\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
\t        \t\t\t</p> 

\t            </div>\t               

\t\t\t   </div> <!-- /service -->

\t\t\t   <div class=\"service\">

\t\t\t   \t<span class=\"icon\"><i class=\"icon-chat\"></i></span>\t   \t           

\t            <div class=\"service-content\">

\t            \t <h3>Consultancy</h3>

\t\t            <p class=\"desc\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
\t        \t\t\t</p> 
\t        \t\t\t
\t            </div>\t               

\t\t\t   </div> <!-- /service -->

\t      </div> <!-- /services-list -->
   \t\t
   \t</div> <!-- /services-content -->
\t\t
\t</section> <!-- /services -->\t


\t<!-- stats Section
   ================================================== -->
\t<section id=\"stats\" class=\"count-up\">

\t\t<div class=\"row\">
\t\t\t<div class=\"col-twelve\">

\t\t\t\t<div class=\"block-1-6 block-s-1-3 block-tab-1-2 block-mob-full stats-list\">

\t\t\t\t\t<div class=\"bgrid stat\">

\t\t\t\t\t\t<div class=\"icon-part\">
\t\t\t\t\t\t\t<i class=\"icon-pencil-ruler\"></i>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<h3 class=\"stat-count\">
\t\t\t\t\t\t\t10
\t\t\t\t\t\t</h3>

\t\t\t\t\t\t<h5 class=\"stat-title\">
\t\t\t\t\t\t\tProjects Completed
\t\t\t\t\t\t</h5>

\t\t\t\t\t</div> <!-- /stat -->\t\t\t\t\t

\t\t\t\t\t<div class=\"bgrid stat\">

\t\t\t\t\t\t<div class=\"icon-part\">
\t\t\t\t\t\t\t<i class=\"icon-users\"></i>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<h3 class=\"stat-count\">
\t\t\t\t\t\t\t500
\t\t\t\t\t\t</h3>

\t\t\t\t\t\t<h5 class=\"stat-title\">
\t\t\t\t\t\t\tHappy Clients
\t\t\t\t\t\t</h5>

\t\t\t\t\t</div> <!-- /stat -->

\t\t\t\t\t<div class=\"bgrid stat\">

\t\t\t\t\t\t<div class=\"icon-part\">
\t\t\t\t\t\t\t<i class=\"icon-badge\"></i>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<h3 class=\"stat-count\">
\t\t\t\t\t\t\t10
\t\t\t\t\t\t</h3>

\t\t\t\t\t\t<h5 class=\"stat-title\">
\t\t\t\t\t\t\tAwards Received
\t\t\t\t\t\t</h5>

\t\t\t\t\t</div> <!-- /stat -->\t\t\t\t\t\t\t\t\t

\t\t\t\t\t<div class=\"bgrid stat\">

\t\t\t\t\t\t<div class=\"icon-part\">
\t\t\t\t\t\t\t<i class=\"icon-light-bulb\"></i>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<h3 class=\"stat-count\">
\t\t\t\t\t\t\t1000
\t\t\t\t\t\t</h3>

\t\t\t\t\t\t<h5 class=\"stat-title\">
\t\t\t\t\t\t\tCrazy Ideas
\t\t\t\t\t\t</h5>

\t\t\t\t\t</div> <!-- /stat -->

\t\t\t\t\t<div class=\"bgrid stat\">

\t\t\t\t\t\t<div class=\"icon-part\">
\t\t\t\t\t\t\t<i class=\"icon-cup\"></i>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<h3 class=\"stat-count\">
\t\t\t\t\t\t\t10000
\t\t\t\t\t\t</h3>

\t\t\t\t\t\t<h5 class=\"stat-title\">
\t\t\t\t\t\t\tCoffee Cups
\t\t\t\t\t\t</h5>

\t\t\t\t\t</div> <!-- /stat -->

\t\t\t\t\t<div class=\"bgrid stat\">

\t\t\t\t\t\t<div class=\"icon-part\">
\t\t\t\t\t\t\t<i class=\"icon-clock\"></i>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<h3 class=\"stat-count\">
\t\t\t\t\t\t\t8000
\t\t\t\t\t\t</h3>

\t\t\t\t\t\t<h5 class=\"stat-title\">
\t\t\t\t\t\t\tHours
\t\t\t\t\t\t</h5>

\t\t\t\t\t</div> <!-- /stat -->

\t\t\t\t</div> <!-- /stats-list -->

\t\t\t</div> <!-- /twelve -->
\t\t</div> <!-- /row -->

\t</section> <!-- /stats -->

\t
   <!-- contact
   ================================================== -->
\t<section id=\"contact\">

\t\t<div class=\"row section-intro\">
   \t\t<div class=\"col-twelve\">

   \t\t\t<h5>Contact</h5>
   \t\t\t<h1>Tell me what you want !</h1>

   \t\t\t<p class=\"lead\">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p>

   \t\t</div> 
   \t</div> <!-- /section-intro -->

   \t<div class=\"row contact-form\">

   \t\t<div class=\"col-twelve\">

            <!-- form -->
            <form name=\"contactForm\" id=\"contactForm\" method=\"post\" action=\"\">
      \t\t\t<fieldset>

                  <div class=\"form-field\">
 \t\t\t\t\t\t   <input name=\"contactName\" type=\"text\" id=\"contactName\" placeholder=\"Name\" value=\"\" minlength=\"2\" required=\"\">
                  </div>
                  <div class=\"form-field\">
\t      \t\t\t   <input name=\"contactEmail\" type=\"email\" id=\"contactEmail\" placeholder=\"Email\" value=\"\" required=\"\">
\t               </div>
                  <div class=\"form-field\">
\t     \t\t\t\t   <input name=\"contactSubject\" type=\"text\" id=\"contactSubject\" placeholder=\"Subject\" value=\"\">
\t               </div>                       
                  <div class=\"form-field\">
\t                 \t<textarea name=\"contactMessage\" id=\"contactMessage\" placeholder=\"message\" rows=\"10\" cols=\"50\" required=\"\"></textarea>
\t               </div>                      
                 <div class=\"form-field\">
                     <button class=\"submitform\">Submit</button>
                     <div id=\"submit-loader\">
                        <div class=\"text-loader\">Sending...</div>                             
       \t\t\t\t      <div class=\"s-loader\">
\t\t\t\t\t\t\t\t  \t<div class=\"bounce1\"></div>
\t\t\t\t\t\t\t\t  \t<div class=\"bounce2\"></div>
\t\t\t\t\t\t\t\t  \t<div class=\"bounce3\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
                  </div>

      \t\t\t</fieldset>
      \t\t</form> <!-- Form End -->

            <!-- contact-warning -->
            <div id=\"message-warning\">            \t
            </div>            
            <!-- contact-success -->
      \t\t<div id=\"message-success\">
               <i class=\"fa fa-check\"></i>Your message was sent, thank you!<br>
      \t\t</div>

         </div> <!-- /col-twelve -->
   \t\t
   \t</div> <!-- /contact-form -->

   \t<div class=\"row contact-info\">

   \t\t<div class=\"col-four tab-full\">

   \t\t\t<div class=\"icon\">
   \t\t\t\t<i class=\"icon-pin\"></i>
   \t\t\t</div>

   \t\t\t<h5>Where to find me</h5>

   \t\t\t<p>
            12 Rue Hipolytte Muller<br>
            Grenoble, Isère<br>
            38000 FR
            </p>

   \t\t</div>

   \t\t<div class=\"col-four tab-full collapse\">

   \t\t\t<div class=\"icon\">
   \t\t\t\t<i class=\"icon-mail\"></i>
   \t\t\t</div>

   \t\t\t<h5>Email Me At</h5>

   \t\t\t<p>papilethomas@gmail.com</p>

   \t\t</div>

   \t\t<div class=\"col-four tab-full\">

   \t\t\t<div class=\"icon\">
   \t\t\t\t<i class=\"icon-phone\"></i>
   \t\t\t</div>

   \t\t\t<h5>Call Me At</h5>

   \t\t\t<p>Phone: (+33)6 58 81 89 07 
\t\t\t   </p>

   \t\t</div>
   \t\t
   \t</div> <!-- /contact-info -->
\t\t
\t</section> <!-- /contact -->


   <!-- footer
   ================================================== -->

   <footer>
     \t<div class=\"row\">

     \t\t<div class=\"col-six tab-full pull-right social\">

     \t\t\t<ul class=\"footer-social\">        
\t\t\t      <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t      <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
\t\t\t      <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t      <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
\t\t\t      <li><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
\t\t\t   </ul> 
\t      \t\t
\t      </div>


\t      \t<div id=\"go-top\">
\t\t         <a class=\"smoothscroll\" title=\"Back to Top\" href=\"#top\"><i class=\"fa fa-long-arrow-up\"></i></a>
\t\t      </div>

      \t</div> <!-- /row -->     \t
   </footer>  

   <div id=\"preloader\"> 
    \t<div id=\"loader\"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src=\"js/jquery-2.1.3.min.js\"></script>
   <script src=\"js/plugins.js\"></script>
   <script src=\"js/main.js\"></script>

</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@App/default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 215,  321 => 209,  317 => 208,  309 => 205,  305 => 204,  297 => 198,  293 => 197,  282 => 188,  270 => 182,  261 => 178,  257 => 177,  244 => 166,  240 => 165,  211 => 138,  202 => 135,  198 => 133,  194 => 132,  161 => 104,  101 => 49,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
 {% block body %}
<!DOCTYPE html>
<!--[if IE 8 ]><html class=\"no-js oldie ie8\" lang=\"en\"> <![endif]-->
<!--[if IE 9 ]><html class=\"no-js oldie ie9\" lang=\"en\"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class=\"no-js\" lang=\"en\"> <!--<![endif]-->
 

<body id=\"top\">

\t<!-- header 
   ================================================== -->
   <header>   \t
   \t<div class=\"row\">

   \t\t<div class=\"top-bar\">
   \t\t\t<a class=\"menu-toggle\" href=\"#\"><span>Menu</span></a>

\t   \t\t<div class=\"logo\">
\t\t         <a href=\"app_dev.php\">Thomas.P</a>
\t\t      </div>\t\t      

\t\t   \t<nav id=\"main-nav-wrap\">
\t\t\t\t\t<ul class=\"main-navigation\">
\t\t\t\t\t\t<li class=\"current\"><a class=\"smoothscroll\"  href=\"#intro\" title=\"\">Home</a></li>
\t\t\t\t\t\t<li><a class=\"smoothscroll\"  href=\"#about\" title=\"\">Skills</a></li>
\t\t\t\t\t\t<li><a class=\"smoothscroll\"  href=\"#resume\" title=\"\">Qualifications & Work Experiences </a></li>
\t\t\t\t\t\t<li><a class=\"smoothscroll\"  href=\"#portfolio\" title=\"\">Portfolio</a></li>
\t\t\t\t\t\t<li><a class=\"smoothscroll\"  href=\"#services\" title=\"\">Services</a></li>\t\t\t\t\t
\t\t\t\t\t\t<li><a class=\"smoothscroll\"  href=\"#contact\" title=\"\">Contact</a></li>\t
\t\t\t\t\t</ul>
\t\t\t\t</nav>    \t\t
   \t\t</div> <!-- /top-bar --> 
   \t\t
   \t</div> <!-- /row --> \t\t
   </header> <!-- /header -->

\t<!-- intro section
   ================================================== -->
   <section id=\"intro\">   

   \t<div class=\"intro-overlay\"></div>\t

   \t<div class=\"intro-content\">
   \t\t<div class=\"row\">

   \t\t\t<div class=\"col-twelve\">

\t   \t\t\t<h1>{{ firstname }} {{ name }}</h1>

\t   \t\t\t<p class=\"intro-position\">
\t   \t\t\t\t<span>Vidéo Maker</span>
\t   \t\t\t\t<span>Editor</span> 
\t   \t\t\t</p>

\t   \t\t\t<a class=\"button stroke smoothscroll\" href=\"#about\" title=\"\">More About Me</a>

\t   \t\t</div>  
   \t\t\t
   \t\t</div>   \t\t \t\t
   \t</div> <!-- /intro-content --> 

   \t<ul class=\"intro-social\">        
         <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
         <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
         <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
         <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
         <li><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
      </ul> <!-- /intro-social -->      \t

   </section> <!-- /intro -->


   <!-- about section
   ================================================== -->
   <section id=\"about\">  

   \t<div class=\"row section-intro\">
   \t\t<div class=\"col-twelve\">

   \t\t\t<h5>About</h5>
   \t\t\t<h1>My Skills</h1>

   \t\t\t<div class=\"intro-info\">

   \t\t\t\t<img src=\"images/profile-pic.jpg\" alt=\"Profile Picture\">

   \t\t\t\t<p class=\"lead\">Lorem ipsum Exercitation culpa qui dolor consequat exercitation fugiat laborum ex ea eiusmod ad do aliqua occaecat nisi ad irure sunt id pariatur Duis laboris amet exercitation veniam labore consectetur ea id quis eiusmod.</p>
   \t\t\t</div>   \t\t\t

   \t\t</div>   \t\t
   \t</div> <!-- /section-intro -->

   \t<div class=\"row about-content\">

   \t\t<div class=\"col-six tab-full\">

   \t\t\t<h3>Profile</h3>
   \t\t\t<p>Lorem ipsum Qui veniam ut consequat ex ullamco nulla in non ut esse in magna sint minim officia consectetur nisi commodo ea magna pariatur nisi cillum.</p>

   \t\t\t<ul class=\"info-list\">
   \t\t\t\t<li>
   \t\t\t\t\t<strong>Fullname:</strong>
   \t\t\t\t\t<span>{{ firstname }} {{ name }}</span>
   \t\t\t\t</li>
   \t\t\t\t<li>
   \t\t\t\t\t<strong>Birth Date:</strong>
   \t\t\t\t\t<span>19/07/1998</span>
   \t\t\t\t</li>
   \t\t\t\t<li>
   \t\t\t\t\t<strong>Job:</strong>
   \t\t\t\t\t<span>Vidéo Maker</span>
   \t\t\t\t</li>
   \t\t\t\t<li>
   \t\t\t\t\t<strong>Website:</strong>
   \t\t\t\t\t<span>www.ThomasPapile.com</span>
   \t\t\t\t</li>
   \t\t\t\t<li>
   \t\t\t\t\t<strong>Email:</strong>
   \t\t\t\t\t<span>papilethomas@gmail.com</span>
   \t\t\t\t</li>

   \t\t\t</ul> <!-- /info-list -->

   \t\t</div>

   \t\t<div class=\"col-six tab-full\">

   \t\t\t<h3>Software</h3>

\t\t\t\t<ul class=\"skill-bars\">
\t\t\t\t\t{% for competences in competences %}
\t\t\t\t   <li>
\t\t\t\t   \t<div class=\"progress percent90\"><span>90%</span></div>
\t\t\t\t   \t<strong>{{competences.getName}}</strong>
\t\t\t\t   </li>
\t\t\t\t   {% endfor %}
\t\t\t\t</ul> <!-- /skill-bars -->\t\t

   \t\t</div>

   \t</div>

   \t<div class=\"row button-section\">
   \t\t<div class=\"col-twelve\">
   \t\t\t<a href=\"#contact\" title=\"Hire Me\" class=\"button stroke smoothscroll\">Hire Me</a>
   \t\t\t<a href=\"#\" title=\"Download CV\" class=\"button button-primary\">Download CV</a>
   \t\t</div>   \t\t
   \t</div>

   </section> <!-- /process-->    


   <!-- resume Section
   ================================================== -->
\t<section id=\"resume\" class=\"grey-section\">

\t\t<div class=\"row resume-timeline\">

   \t\t<div class=\"col-twelve resume-header\">

   \t\t\t<h2>Qualifications</h2>

   \t\t</div> <!-- /resume-header -->
{% for formations in formations %}
   \t\t<div class=\"col-twelve\">

   \t\t\t<div class=\"timeline-wrap\">

   \t\t\t\t<div class=\"timeline-block\">

\t   \t\t\t\t<div class=\"timeline-ico\">
\t   \t\t\t\t\t<i class=\"fa fa-graduation-cap\"></i>
\t   \t\t\t\t</div>

\t   \t\t\t\t<div class=\"timeline-header\">
\t   \t\t\t\t\t<h3>{{formations.getName}}</h3>
\t   \t\t\t\t\t<p>{{formations.getDateDebut() | date('d/m/Y') }} - {{formations.getDateFin | date('d/m/Y') }}</p>
\t   \t\t\t\t</div>

\t   \t\t\t\t<div class=\"timeline-content\">
\t   \t\t\t\t\t<h4>{{formations.getLieu}}</h4>
\t   \t\t\t\t</div>
\t   \t\t\t</div> <!-- /timeline-block -->
           </div>
   \t\t</div> <!-- /col-twelve -->
   \t{% endfor %}
   \t</div> <!-- /resume-timeline -->

   \t<div class=\"row resume-timeline\">

   \t\t<div class=\"col-twelve resume-header\">

   \t\t\t<h2>Work Experiences</h2>

   \t\t</div> <!-- /resume-header -->
{% for experiences in experiences %}
   \t\t<div class=\"col-twelve\">

   \t\t\t<div class=\"timeline-wrap\">

   \t\t\t\t<div class=\"timeline-block\">
\t   \t\t\t\t<div class=\"timeline-header\">
\t   \t\t\t\t\t<h3>{{experiences.getName}}</h3>
\t   \t\t\t\t\t<p>{{experiences.getDateDebut() | date('d/m/Y') }} - {{experiences.getDateFin | date('d/m/Y') }}</p>
\t   \t\t\t\t</div>
\t   \t\t\t\t<div class=\"timeline-content\">
\t   \t\t\t\t\t<h4>{{experiences.getLieu}}</h4>
\t   \t\t\t\t\t<p>{{experiences.getDescription}}</p>
\t   \t\t\t\t</div>
\t   \t\t\t</div> <!-- /timeline-block -->
           </div>
   \t\t</div> <!-- /col-twelve -->
   \t{% endfor %}
   \t</div> <!-- /resume-timeline -->
\t
\t</section> <!-- /features -->


\t<!-- Portfolio Section
   ================================================== -->
\t<section id=\"portfolio\">

\t\t<div class=\"row section-intro\">
   \t\t<div class=\"col-twelve\">
   \t\t\t<h5>Portfolio</h5>
   \t\t\t<h1>My Works</h1>
   \t\t</div>   \t\t
   \t</div> <!-- /section-intro--> 

   \t<div class=\"row portfolio-content\">

   \t\t<div class=\"col-twelve\">

   \t\t\t<!-- portfolio-wrapper -->
\t         <div id=\"folio-wrapper\" class=\"block-1-2 block-mob-full stack\">

\t         \t<div class=\"bgrid folio-item\">
\t               <div class=\"item-wrap\">
\t               \t<img src=\"Template/images/portfolio/liberty.jpg\" alt=\"Liberty\">
\t                  <a href=\"#modal-01\" class=\"overlay\">\t                  \t           
\t                     <div class=\"folio-item-table\">
\t                     \t<div class=\"folio-item-cell\">
\t\t     \t\t\t\t\t       <h3 class=\"folio-title\">Liberty</h3>\t     \t\t\t\t\t    
\t\t     \t\t\t\t\t    \t 
\t\t     \t\t\t\t\t   </div>\t                      \t
\t                     </div>                    
\t                  </a>
\t               </div>\t               
\t        \t\t</div> <!-- /folio-item -->

\t        \t\t<div class=\"bgrid folio-item\">
\t               <div class=\"item-wrap\">
\t               \t<img src=\"Template/images/portfolio/shutterbug.jpg\" alt=\"Shutterbug\">
\t               \t<a href=\"#modal-02\" class=\"overlay\">              \t\t                  
\t                     <div class=\"folio-item-table\">
\t                     \t<div class=\"folio-item-cell\">
\t                     \t\t<h3 class=\"folio-title\">Shutterbug</h3>\t     \t\t\t\t\t    
\t\t     \t\t\t\t\t    \t\t\t     \t\t
\t\t     \t\t\t\t\t   </div> \t                      \t
\t                     </div>                    
\t                  </a>
\t               </div>
\t        \t\t</div> <!-- /folio-item -->

\t            <div class=\"bgrid folio-item\">
\t               <div class=\"item-wrap\">
\t               \t<img src=\"Template/images/portfolio/clouds.jpg\"alt=\"Clouds\">
\t                  <a href=\"#modal-03\" class=\"overlay\">             \t\t                  
\t                     <div class=\"folio-item-table\">
\t                     \t<div class=\"folio-item-cell\">
\t                     \t\t<h3 class=\"folio-title\">Clouds</h3>\t     \t\t\t\t\t    
\t\t     \t\t\t\t\t    \t\t\t     \t\t
\t\t     \t\t\t\t\t   </div> \t                      \t
\t                     </div>                    
\t                  </a>
\t               </div>
\t        \t\t</div> <!-- /folio-item -->

\t            <div class=\"bgrid folio-item\">
\t               <div class=\"item-wrap\">
\t               \t<img src=\"Template/images/portfolio/beetle.jpg\" alt=\"Beetle\">
\t                  <a href=\"#modal-04\" class=\"overlay\">                  \t                 
\t                     <div class=\"folio-item-table\">
\t                     \t<div class=\"folio-item-cell\">
\t                     \t\t<h3 class=\"folio-title\">Beetle</h3>\t     \t\t\t\t\t    
\t\t     \t\t\t\t\t    \t\t\t     \t\t
\t\t     \t\t\t\t\t   </div>  \t                      \t
\t                     </div>                    
\t                  </a>
\t               </div>
\t        \t\t</div> <!-- /folio-item -->     

\t        \t\t<div class=\"bgrid folio-item\">
\t               <div class=\"item-wrap\">
\t               \t<img src=\"Template/images/portfolio/lighthouse.jpg\" alt=\"Lighthouse\">
\t                  <a href=\"#modal-05\" class=\"overlay\">             \t\t                  
\t                     <div class=\"folio-item-table\">
\t                     \t<div class=\"folio-item-cell\">
\t                     \t\t<h3 class=\"folio-title\">Lighthouse</h3>\t     \t\t\t\t\t    
\t\t     \t\t\t\t\t    \t\t     \t\t
\t\t     \t\t\t\t\t   </div> \t                      \t
\t                     </div>                    
\t                  </a>
\t               </div>
\t        \t\t</div> <!-- /folio-item -->

\t            <div class=\"bgrid folio-item\">
\t               <div class=\"item-wrap\">
\t               \t<img src=\"Template/images/portfolio/salad.jpg\" alt=\"Salad\">
\t                  <a href=\"#modal-06\" class=\"overlay\">
\t                     <div class=\"folio-item-table\">
\t                     \t<div class=\"folio-item-cell\">
\t                     \t\t<h3 class=\"folio-title\">Salad</h3>\t     \t\t\t\t\t    
\t\t     \t\t\t\t\t  \t\t     \t\t
\t\t     \t\t\t\t\t   </div>\t                      \t
\t                     </div>                    
\t                  </a>
\t               </div>
\t        \t\t</div> <!-- /folio-item -->   

\t            <!-- modal popups - begin
\t            ============================================================= -->
\t            <div id=\"modal-01\" class=\"popup-modal slider mfp-hide\">\t

\t\t\t\t     \t<div class=\"media\">
\t\t\t\t     \t\t<img src=\"Template/images/portfolio/modals/m-liberty.jpg\" alt=\"\" />
\t\t\t\t     \t</div>      \t

\t\t\t\t\t   <div class=\"description-box\">
\t\t\t\t\t      <h4>Liberty</h4>\t\t      
\t\t\t\t\t      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

\t\t\t\t\t      \t\t               
\t\t\t\t\t   </div>

\t\t\t         <div class=\"link-box\">
\t\t\t            <a href=\"www.ThomasPapile.com\">Details</a>
\t\t\t\t\t      <a href=\"#\" class=\"popup-modal-dismiss\">Close</a>
\t\t\t         </div>\t\t      

\t\t\t\t   </div> <!-- /modal-01 -->

\t\t\t\t   <div id=\"modal-02\" class=\"popup-modal slider mfp-hide\">\t

\t\t\t\t     \t<div class=\"media\">
\t\t\t\t     \t\t<img src=\"Template/images/portfolio/modals/m-shutterbug.jpg\" alt=\"\" />
\t\t\t\t     \t</div>      \t

\t\t\t\t\t   <div class=\"description-box\">
\t\t\t\t\t      <h4>Shutterbug</h4>\t\t      
\t\t\t\t\t      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

\t\t\t\t\t      <\t\t\t               
\t\t\t\t\t   </div>

\t\t\t         <div class=\"link-box\">
\t\t\t            <a href=\"www.ThomasPapile.com\">Details</a>
\t\t\t\t\t      <a href=\"#\" class=\"popup-modal-dismiss\">Close</a>
\t\t\t         </div>\t\t      

\t\t\t\t   </div> <!-- /modal-02 -->

\t\t\t\t   <div id=\"modal-03\" class=\"popup-modal slider mfp-hide\">\t

\t\t\t\t     \t<div class=\"media\">
\t\t\t\t     \t\t<img src=\"Template/images/portfolio/modals/m-clouds.jpg\" alt=\"\" />
\t\t\t\t     \t</div>      \t

\t\t\t\t\t   <div class=\"description-box\">
\t\t\t\t\t      <h4>Clouds</h4>\t\t      
\t\t\t\t\t      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

\t\t\t\t\t      \t\t\t               
\t\t\t\t\t   </div>

\t\t\t         <div class=\"link-box\">
\t\t\t           <a href=\"www.ThomasPapile.com\">Details</a>
\t\t\t\t\t      <a href=\"#\" class=\"popup-modal-dismiss\">Close</a>
\t\t\t         </div>\t\t      

\t\t\t\t   </div> <!-- /modal-03 -->

\t\t\t\t   <div id=\"modal-04\" class=\"popup-modal slider mfp-hide\">\t

\t\t\t\t     \t<div class=\"media\">
\t\t\t\t     \t\t<img src=\"Template/images/portfolio/modals/m-beetle.jpg\" alt=\"\" />
\t\t\t\t     \t</div>      \t

\t\t\t\t\t   <div class=\"description-box\">
\t\t\t\t\t      <h4>Beetle</h4>\t\t      
\t\t\t\t\t      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

\t\t\t\t\t      \t\t\t               
\t\t\t\t\t   </div>

\t\t\t         <div class=\"link-box\">
\t\t\t            <a href=\"www.ThomasPapile.com\">Details</a>
\t\t\t\t\t      <a href=\"#\" class=\"popup-modal-dismiss\">Close</a>
\t\t\t         </div>\t\t      

\t\t\t\t   </div> <!-- /modal-04 -->

\t\t\t\t   <div id=\"modal-05\" class=\"popup-modal slider mfp-hide\">\t

\t\t\t\t     \t<div class=\"media\">
\t\t\t\t     \t\t<img src=\"Template/images/portfolio/modals/m-lighthouse.jpg\" alt=\"\" />
\t\t\t\t     \t</div>      \t

\t\t\t\t\t   <div class=\"description-box\">
\t\t\t\t\t      <h4>Lighthouse</h4>\t\t      
\t\t\t\t\t      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

\t\t\t\t\t     \t\t\t               
\t\t\t\t\t   </div>

\t\t\t         <div class=\"link-box\">
\t\t\t           <a href=\"www.ThomasPapile.com\">Details</a>
\t\t\t\t\t      <a href=\"#\" class=\"popup-modal-dismiss\">Close</a>
\t\t\t         </div>\t\t      

\t\t\t\t   </div> <!-- /modal-05 -->

\t\t\t\t   <div id=\"modal-06\" class=\"popup-modal slider mfp-hide\">\t

\t\t\t\t     \t<div class=\"media\">
\t\t\t\t     \t\t<img src=\"Template/images/portfolio/modals/m-salad.jpg\" alt=\"\" />
\t\t\t\t     \t</div>      \t

\t\t\t\t\t   <div class=\"description-box\">
\t\t\t\t\t      <h4>Salad</h4>\t\t      
\t\t\t\t\t      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
\t\t\t\t\t   </div>

\t\t\t         <div class=\"link-box\">
\t\t\t            <a href=\"www.ThomasPapile.com\">Details</a>
\t\t\t\t\t      <a href=\"#\" class=\"popup-modal-dismiss\">Close</a>
\t\t\t         </div>\t\t      

\t\t\t\t   </div> <!-- /modal-06 -->


\t\t\t\t   <!-- modal popups - end
\t            ============================================================= -->

\t         </div> <!-- /portfolio-wrapper --> 

   \t\t</div>  <!-- /twelve -->   

   \t</div> <!-- /portfolio-content --> 
\t\t
\t</section> <!-- /portfolio --> 


\t<!-- CTA Section
   ================================================== -->
\t
\t<section id=\"services\">

\t\t<div class=\"overlay\"></div>

\t\t<div class=\"row section-intro\">
   \t\t<div class=\"col-twelve\">

   \t\t\t<h5>Services</h5>
   \t\t\t<h1>What Can I Do For You?</h1>

   \t\t\t<p class=\"lead\">CREATIVE EVERY DAY</p>

   \t\t</div>   \t\t
   \t</div> <!-- /section-intro -->

   \t<div class=\"row services-content\">

   \t\t<div id=\"owl-slider\" class=\"owl-carousel services-list\">

\t      \t<div class=\"service\">\t

\t      \t\t<span class=\"icon\"><i class=\"icon-video\"></i></span>            

\t            <div class=\"service-content\">\t

\t            \t <h3>Video making</h3>

\t\t            <p class=\"desc\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
\t         \t\t</p>
\t         \t\t
\t         \t</div> \t         \t 

\t\t\t\t</div> <!-- /service -->

\t\t\t\t<div class=\"service\">\t

\t\t\t\t\t<span class=\"icon\"><i class=\"icon-camera\"></i></span>                          

\t            <div class=\"service-content\">\t

\t            \t<h3>Framing</h3>  

\t\t            <p class=\"desc\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
\t         \t\t</p>

\t            </div>\t                          

\t\t\t   </div> <!-- /service -->

\t\t\t   <div class=\"service\">

\t\t\t   \t<span class=\"icon\"><i class=\"icon-target\"></i></span>\t\t            

\t            <div class=\"service-content\">

\t            \t<h3>Content Selecting</h3>

\t\t            <p class=\"desc\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
\t        \t\t\t</p> 

\t            </div> \t            \t               

\t\t\t   </div> <!-- /service -->

\t\t\t   <div class=\"service\">

\t\t\t   \t<span class=\"icon\"><i class=\"icon-projector\"></i></span>\t            

\t            <div class=\"service-content\">

\t            \t<h3>Film Making</h3>

\t\t            <p class=\"desc\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
\t        \t\t\t</p> 

\t            </div>\t               

\t\t\t   </div> <!-- /service -->

\t\t\t   <div class=\"service\">

\t\t\t   \t<span class=\"icon\"><i class=\"icon-chat\"></i></span>\t   \t           

\t            <div class=\"service-content\">

\t            \t <h3>Consultancy</h3>

\t\t            <p class=\"desc\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
\t        \t\t\t</p> 
\t        \t\t\t
\t            </div>\t               

\t\t\t   </div> <!-- /service -->

\t      </div> <!-- /services-list -->
   \t\t
   \t</div> <!-- /services-content -->
\t\t
\t</section> <!-- /services -->\t


\t<!-- stats Section
   ================================================== -->
\t<section id=\"stats\" class=\"count-up\">

\t\t<div class=\"row\">
\t\t\t<div class=\"col-twelve\">

\t\t\t\t<div class=\"block-1-6 block-s-1-3 block-tab-1-2 block-mob-full stats-list\">

\t\t\t\t\t<div class=\"bgrid stat\">

\t\t\t\t\t\t<div class=\"icon-part\">
\t\t\t\t\t\t\t<i class=\"icon-pencil-ruler\"></i>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<h3 class=\"stat-count\">
\t\t\t\t\t\t\t10
\t\t\t\t\t\t</h3>

\t\t\t\t\t\t<h5 class=\"stat-title\">
\t\t\t\t\t\t\tProjects Completed
\t\t\t\t\t\t</h5>

\t\t\t\t\t</div> <!-- /stat -->\t\t\t\t\t

\t\t\t\t\t<div class=\"bgrid stat\">

\t\t\t\t\t\t<div class=\"icon-part\">
\t\t\t\t\t\t\t<i class=\"icon-users\"></i>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<h3 class=\"stat-count\">
\t\t\t\t\t\t\t500
\t\t\t\t\t\t</h3>

\t\t\t\t\t\t<h5 class=\"stat-title\">
\t\t\t\t\t\t\tHappy Clients
\t\t\t\t\t\t</h5>

\t\t\t\t\t</div> <!-- /stat -->

\t\t\t\t\t<div class=\"bgrid stat\">

\t\t\t\t\t\t<div class=\"icon-part\">
\t\t\t\t\t\t\t<i class=\"icon-badge\"></i>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<h3 class=\"stat-count\">
\t\t\t\t\t\t\t10
\t\t\t\t\t\t</h3>

\t\t\t\t\t\t<h5 class=\"stat-title\">
\t\t\t\t\t\t\tAwards Received
\t\t\t\t\t\t</h5>

\t\t\t\t\t</div> <!-- /stat -->\t\t\t\t\t\t\t\t\t

\t\t\t\t\t<div class=\"bgrid stat\">

\t\t\t\t\t\t<div class=\"icon-part\">
\t\t\t\t\t\t\t<i class=\"icon-light-bulb\"></i>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<h3 class=\"stat-count\">
\t\t\t\t\t\t\t1000
\t\t\t\t\t\t</h3>

\t\t\t\t\t\t<h5 class=\"stat-title\">
\t\t\t\t\t\t\tCrazy Ideas
\t\t\t\t\t\t</h5>

\t\t\t\t\t</div> <!-- /stat -->

\t\t\t\t\t<div class=\"bgrid stat\">

\t\t\t\t\t\t<div class=\"icon-part\">
\t\t\t\t\t\t\t<i class=\"icon-cup\"></i>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<h3 class=\"stat-count\">
\t\t\t\t\t\t\t10000
\t\t\t\t\t\t</h3>

\t\t\t\t\t\t<h5 class=\"stat-title\">
\t\t\t\t\t\t\tCoffee Cups
\t\t\t\t\t\t</h5>

\t\t\t\t\t</div> <!-- /stat -->

\t\t\t\t\t<div class=\"bgrid stat\">

\t\t\t\t\t\t<div class=\"icon-part\">
\t\t\t\t\t\t\t<i class=\"icon-clock\"></i>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<h3 class=\"stat-count\">
\t\t\t\t\t\t\t8000
\t\t\t\t\t\t</h3>

\t\t\t\t\t\t<h5 class=\"stat-title\">
\t\t\t\t\t\t\tHours
\t\t\t\t\t\t</h5>

\t\t\t\t\t</div> <!-- /stat -->

\t\t\t\t</div> <!-- /stats-list -->

\t\t\t</div> <!-- /twelve -->
\t\t</div> <!-- /row -->

\t</section> <!-- /stats -->

\t
   <!-- contact
   ================================================== -->
\t<section id=\"contact\">

\t\t<div class=\"row section-intro\">
   \t\t<div class=\"col-twelve\">

   \t\t\t<h5>Contact</h5>
   \t\t\t<h1>Tell me what you want !</h1>

   \t\t\t<p class=\"lead\">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p>

   \t\t</div> 
   \t</div> <!-- /section-intro -->

   \t<div class=\"row contact-form\">

   \t\t<div class=\"col-twelve\">

            <!-- form -->
            <form name=\"contactForm\" id=\"contactForm\" method=\"post\" action=\"\">
      \t\t\t<fieldset>

                  <div class=\"form-field\">
 \t\t\t\t\t\t   <input name=\"contactName\" type=\"text\" id=\"contactName\" placeholder=\"Name\" value=\"\" minlength=\"2\" required=\"\">
                  </div>
                  <div class=\"form-field\">
\t      \t\t\t   <input name=\"contactEmail\" type=\"email\" id=\"contactEmail\" placeholder=\"Email\" value=\"\" required=\"\">
\t               </div>
                  <div class=\"form-field\">
\t     \t\t\t\t   <input name=\"contactSubject\" type=\"text\" id=\"contactSubject\" placeholder=\"Subject\" value=\"\">
\t               </div>                       
                  <div class=\"form-field\">
\t                 \t<textarea name=\"contactMessage\" id=\"contactMessage\" placeholder=\"message\" rows=\"10\" cols=\"50\" required=\"\"></textarea>
\t               </div>                      
                 <div class=\"form-field\">
                     <button class=\"submitform\">Submit</button>
                     <div id=\"submit-loader\">
                        <div class=\"text-loader\">Sending...</div>                             
       \t\t\t\t      <div class=\"s-loader\">
\t\t\t\t\t\t\t\t  \t<div class=\"bounce1\"></div>
\t\t\t\t\t\t\t\t  \t<div class=\"bounce2\"></div>
\t\t\t\t\t\t\t\t  \t<div class=\"bounce3\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
                  </div>

      \t\t\t</fieldset>
      \t\t</form> <!-- Form End -->

            <!-- contact-warning -->
            <div id=\"message-warning\">            \t
            </div>            
            <!-- contact-success -->
      \t\t<div id=\"message-success\">
               <i class=\"fa fa-check\"></i>Your message was sent, thank you!<br>
      \t\t</div>

         </div> <!-- /col-twelve -->
   \t\t
   \t</div> <!-- /contact-form -->

   \t<div class=\"row contact-info\">

   \t\t<div class=\"col-four tab-full\">

   \t\t\t<div class=\"icon\">
   \t\t\t\t<i class=\"icon-pin\"></i>
   \t\t\t</div>

   \t\t\t<h5>Where to find me</h5>

   \t\t\t<p>
            12 Rue Hipolytte Muller<br>
            Grenoble, Isère<br>
            38000 FR
            </p>

   \t\t</div>

   \t\t<div class=\"col-four tab-full collapse\">

   \t\t\t<div class=\"icon\">
   \t\t\t\t<i class=\"icon-mail\"></i>
   \t\t\t</div>

   \t\t\t<h5>Email Me At</h5>

   \t\t\t<p>papilethomas@gmail.com</p>

   \t\t</div>

   \t\t<div class=\"col-four tab-full\">

   \t\t\t<div class=\"icon\">
   \t\t\t\t<i class=\"icon-phone\"></i>
   \t\t\t</div>

   \t\t\t<h5>Call Me At</h5>

   \t\t\t<p>Phone: (+33)6 58 81 89 07 
\t\t\t   </p>

   \t\t</div>
   \t\t
   \t</div> <!-- /contact-info -->
\t\t
\t</section> <!-- /contact -->


   <!-- footer
   ================================================== -->

   <footer>
     \t<div class=\"row\">

     \t\t<div class=\"col-six tab-full pull-right social\">

     \t\t\t<ul class=\"footer-social\">        
\t\t\t      <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t      <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
\t\t\t      <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t      <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
\t\t\t      <li><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
\t\t\t   </ul> 
\t      \t\t
\t      </div>


\t      \t<div id=\"go-top\">
\t\t         <a class=\"smoothscroll\" title=\"Back to Top\" href=\"#top\"><i class=\"fa fa-long-arrow-up\"></i></a>
\t\t      </div>

      \t</div> <!-- /row -->     \t
   </footer>  

   <div id=\"preloader\"> 
    \t<div id=\"loader\"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src=\"js/jquery-2.1.3.min.js\"></script>
   <script src=\"js/plugins.js\"></script>
   <script src=\"js/main.js\"></script>

</body>
</html>
{% endblock %}", "@App/default/index.html.twig", "/home/ubuntu/workspace/src/AppBundle/Resources/views/default/index.html.twig");
    }
}
