<?php

/* themes/d8training/templates/block/block--header.html.twig */
class __TwigTemplate_82df5d525761bbef827e5691bcf7ae4d8e73d677967e9219257917bee21ac7a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 3, "for" => 4, "if" => 16);
        $filters = array("merge" => 5, "lower" => 8, "length" => 16);
        $functions = array("attach_library" => 1, "file_url" => 38);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'for', 'if'),
                array('merge', 'lower', 'length'),
                array('attach_library', 'file_url')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("d8training/header"), "html", null, true));
        echo "

";
        // line 3
        $context["bookmarks"] = array();
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "#header_bookmarks", array(), "array"), "#items", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["bookmark"]) {
            // line 5
            echo "  ";
            $context["bookmarks"] = twig_array_merge((isset($context["bookmarks"]) ? $context["bookmarks"] : null), array(0 => array("text" => $this->getAttribute(            // line 6
$context["bookmark"], "title", array()), "url" => $this->getAttribute(            // line 7
$context["bookmark"], "url", array()), "icon_class" => ("fa fa-" . twig_lower_filter($this->env, $this->getAttribute(            // line 8
$context["bookmark"], "title", array()))))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bookmark'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
";
        // line 12
        $context["links"] = array();
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "#header_menu", array(), "array"), "#items", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "  ";
            $context["sub_menu"] = array();
            // line 15
            echo "
  ";
            // line 16
            if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "below", array())) > 0)) {
                // line 17
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "below", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item2"]) {
                    // line 18
                    echo "      ";
                    $context["sub_menu"] = twig_array_merge((isset($context["sub_menu"]) ? $context["sub_menu"] : null), array(0 => array("url" => $this->getAttribute(                    // line 19
$context["item2"], "url", array()), "text" => $this->getAttribute(                    // line 20
$context["item2"], "title", array()), "active" => $this->getAttribute(                    // line 21
$context["item2"], "in_active_trail", array()))));
                    // line 23
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "  ";
            }
            // line 25
            echo "
  ";
            // line 26
            $context["links"] = twig_array_merge((isset($context["links"]) ? $context["links"] : null), array(0 => array("url" => $this->getAttribute(            // line 27
$context["item"], "url", array()), "text" => $this->getAttribute(            // line 28
$context["item"], "title", array()), "active" => $this->getAttribute(            // line 29
$context["item"], "in_active_trail", array()), "sub_menu" =>             // line 30
(isset($context["sub_menu"]) ? $context["sub_menu"] : null))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
";
        // line 34
        $context["vars"] = array("main_menu" => array("home_url" => $this->getAttribute(        // line 36
(isset($context["content"]) ? $context["content"] : null), "#home_url", array(), "array"), "primary_logo" => array("src" => call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute(        // line 38
(isset($context["content"]) ? $context["content"] : null), "#primary_logo", array(), "array"), "fileuri", array())))), "secondary_logo" => array("src" => call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute(        // line 41
(isset($context["content"]) ? $context["content"] : null), "#secondary_logo", array(), "array"), "fileuri", array())))), "email" => $this->getAttribute(        // line 43
(isset($context["content"]) ? $context["content"] : null), "#email", array(), "array"), "telephone" => $this->getAttribute(        // line 44
(isset($context["content"]) ? $context["content"] : null), "#telephone", array(), "array"), "bookmarks" =>         // line 45
(isset($context["bookmarks"]) ? $context["bookmarks"] : null), "cta" => array("text" => "Book A Table", "url" => "#"), "menu" =>         // line 50
(isset($context["links"]) ? $context["links"] : null), "search_form" => array("heading" => "Search", "placeholder" => "Search...")));
        // line 57
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/d8training/templates/block/block--header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 57,  124 => 50,  123 => 45,  122 => 44,  121 => 43,  120 => 41,  119 => 38,  118 => 36,  117 => 34,  114 => 33,  108 => 30,  107 => 29,  106 => 28,  105 => 27,  104 => 26,  101 => 25,  98 => 24,  92 => 23,  90 => 21,  89 => 20,  88 => 19,  86 => 18,  81 => 17,  79 => 16,  76 => 15,  73 => 14,  69 => 13,  67 => 12,  64 => 11,  58 => 8,  57 => 7,  56 => 6,  54 => 5,  50 => 4,  48 => 3,  43 => 1,);
    }

    public function getSource()
    {
        return "{{ attach_library('d8training/header') }}

{% set bookmarks = [] %}
{% for bookmark in content['#header_bookmarks']['#items'] %}
  {% set bookmarks = bookmarks|merge([{
    'text': bookmark.title,
    'url': bookmark.url,
    'icon_class': 'fa fa-' ~ bookmark.title|lower
  }]) %}
{% endfor %}

{% set links = [] %}
{% for item in content['#header_menu']['#items'] %}
  {% set sub_menu = [] %}

  {% if item.below|length > 0 %}
    {% for item2 in item.below %}
      {% set sub_menu = sub_menu|merge([{
        'url': item2.url,
        'text': item2.title,
        'active': item2.in_active_trail
      }]) %}
    {% endfor %}
  {% endif %}

  {% set links = links|merge([{
    'url': item.url,
    'text': item.title,
    'active': item.in_active_trail,
    'sub_menu': sub_menu
  }]) %}
{% endfor %}

{% set vars = {
  'main_menu': {
    'home_url': content['#home_url'],
    'primary_logo': {
      'src': file_url(content['#primary_logo'].fileuri)
    },
    'secondary_logo': {
      'src': file_url(content['#secondary_logo'].fileuri)
    },
    'email': content['#email'],
    'telephone': content['#telephone'],
    'bookmarks': bookmarks,
    'cta': {
      'text': 'Book A Table',
      'url': '#'
    },
    'menu': links,
    'search_form': {
      'heading': 'Search',
      'placeholder': 'Search...'
    }
  }
} %}

";
    }
}
