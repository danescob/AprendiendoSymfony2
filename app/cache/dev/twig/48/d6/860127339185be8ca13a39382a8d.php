<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_48d6860127339185be8ca13a39382a8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" />
    ";
        // line 5
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_menu($context, array $blocks = array())
    {
        // line 9
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/exception.png"), "html", null, true);
        echo "\" alt=\"Exception\" /></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 13
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 14
            echo "            <span>1</span>
        ";
        }
        // line 16
        echo "    </span>
</span>
";
    }

    // line 20
    public function block_panel($context, array $blocks = array())
    {
        // line 21
        echo "    <h2>Exception</h2>

    ";
        // line 23
        if ((!$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception"))) {
            // line 24
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 28
            echo "        ";
            echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Exception:show", array("exception" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "exception"), "format" => "html"), array());
            // line 29
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 13,  185 => 68,  174 => 67,  167 => 64,  164 => 63,  134 => 54,  110 => 42,  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  558 => 401,  540 => 398,  523 => 397,  520 => 396,  518 => 395,  513 => 393,  508 => 391,  252 => 138,  204 => 71,  190 => 89,  173 => 85,  166 => 82,  161 => 80,  156 => 77,  150 => 75,  112 => 52,  87 => 34,  62 => 16,  209 => 73,  188 => 69,  182 => 64,  160 => 59,  148 => 74,  90 => 41,  40 => 6,  53 => 11,  97 => 45,  86 => 29,  82 => 37,  77 => 24,  65 => 23,  49 => 13,  23 => 1,  140 => 39,  117 => 44,  113 => 43,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 95,  198 => 69,  181 => 87,  176 => 61,  170 => 60,  168 => 60,  146 => 58,  142 => 56,  128 => 50,  125 => 44,  107 => 36,  38 => 5,  144 => 73,  141 => 51,  135 => 47,  126 => 61,  109 => 51,  103 => 37,  67 => 23,  61 => 22,  47 => 9,  94 => 44,  88 => 41,  59 => 13,  225 => 96,  216 => 90,  212 => 88,  205 => 71,  201 => 83,  196 => 92,  194 => 79,  191 => 70,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 58,  132 => 47,  127 => 52,  121 => 30,  118 => 29,  114 => 42,  104 => 39,  100 => 34,  78 => 21,  75 => 23,  71 => 21,  34 => 5,  28 => 3,  26 => 9,  105 => 41,  93 => 42,  79 => 35,  76 => 34,  72 => 14,  68 => 20,  58 => 14,  27 => 3,  24 => 3,  91 => 35,  84 => 33,  44 => 8,  31 => 4,  25 => 29,  21 => 2,  19 => 1,  70 => 24,  63 => 16,  46 => 12,  22 => 2,  163 => 81,  155 => 58,  152 => 49,  149 => 48,  145 => 57,  139 => 71,  131 => 51,  123 => 33,  120 => 50,  115 => 44,  106 => 36,  101 => 45,  96 => 21,  83 => 28,  80 => 32,  74 => 21,  66 => 15,  55 => 24,  52 => 14,  50 => 10,  43 => 11,  41 => 19,  37 => 5,  35 => 6,  32 => 5,  29 => 3,  184 => 88,  178 => 86,  171 => 66,  165 => 58,  162 => 57,  157 => 60,  153 => 62,  151 => 53,  143 => 56,  138 => 55,  136 => 50,  133 => 31,  130 => 53,  122 => 51,  119 => 57,  116 => 35,  111 => 37,  108 => 41,  102 => 34,  98 => 32,  95 => 36,  92 => 43,  89 => 31,  85 => 29,  81 => 24,  73 => 33,  64 => 14,  60 => 15,  57 => 16,  54 => 12,  51 => 13,  48 => 9,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
