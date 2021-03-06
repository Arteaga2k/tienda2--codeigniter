<?php

/* usuario/usuario_edita_formulario.twig */
class __TwigTemplate_891768df667d7c4e75b4ee4ef671564a33990156943b409c8b41f65eaff824a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_templates/base.twig");

        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_templates/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_contenido($context, array $blocks = array())
    {
        // line 3
        echo "

<div class=\"row\"> 
    ";
        // line 6
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array()))) {
            // line 7
            echo "    
    <div class=\"alert alert-danger\" role=\"alert\">";
            // line 8
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array());
            echo "</div>
    
    ";
        }
        // line 11
        echo "\t<div class=\"col-md-5\">
\t<h3>Edición Usuario</h3>
\t<hr />
       ";
        // line 14
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "form_edicion", array());
        echo "\t\t
         <div class=\"form-group ";
        // line 15
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()))) {
            echo "has-error";
        }
        echo "\">
            <label for=\"username\" class=\"col-sm-2 control-label\">Username</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, ((set_value("username")) ? (set_value("username")) : ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "usuario", array()), "username", array()))), "html", null, true);
        echo "\">
                <span>";
        // line 19
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array());
        echo "</span>
            </div>          
         </div>
         
          <div class=\"form-group ";
        // line 23
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()))) {
            echo "has-error";
        }
        echo "\">
            <label for=\"email\" class=\"col-sm-2 co ntrol-label\">Email</label>
            <div class=\"col-sm-10\">
              <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, ((set_value("email")) ? (set_value("email")) : ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "usuario", array()), "email", array()))), "html", null, true);
        echo "\">
                <span>";
        // line 27
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array());
        echo "</span>
            </div>
           
          </div>         
          
                  
          <hr />
           <div class=\"form-group ";
        // line 34
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()))) {
            echo "has-error";
        }
        echo "\">
            <label for=\"nombre\" class=\"col-sm-2 control-label\">Nombre</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"nombre\" id=\"nombre\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, ((set_value("nombre")) ? (set_value("nombre")) : ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "usuario", array()), "nombre", array()))), "html", null, true);
        echo "\">
               <span>";
        // line 38
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array());
        echo "</span>
            </div>
          </div>
           <div class=\"form-group ";
        // line 41
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "apellidos", array()))) {
            echo "has-error";
        }
        echo "\">
            <label for=\"apellidos\" class=\"col-sm-2 control-label\">Apellidos</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"apellidos\" id=\"apellidos\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, ((set_value("apellidos")) ? (set_value("apellidos")) : ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "usuario", array()), "apellidos", array()))), "html", null, true);
        echo "\">
               <span>";
        // line 45
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "apellidos", array());
        echo "</span>
            </div>
          </div>
          
          <div class=\"form-group ";
        // line 49
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dni", array()))) {
            echo "has-error";
        }
        echo "\">
            <label for=\"dni\" class=\"col-sm-2 control-label\">DNI</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"dni\" id=\"dni\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, ((set_value("dni")) ? (set_value("dni")) : ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "usuario", array()), "dni", array()))), "html", null, true);
        echo "\">
               <span>";
        // line 53
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dni", array());
        echo "</span>
            </div>
          </div>
          
          <div class=\"form-group ";
        // line 57
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "direccion", array()))) {
            echo "has-error";
        }
        echo "\">
            <label for=\"direccion\" class=\"col-sm-2 control-label\">Dirección</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"direccion\" id=\"direccion\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, ((set_value("direccion")) ? (set_value("direccion")) : ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "usuario", array()), "direccion", array()))), "html", null, true);
        echo "\">
            </div>
          </div>
          
          <div class=\"form-group \">
\t\t  <label for=\"provincia\" class=\"col-sm-2 control-label\">Provincia</label>\t\t  
    \t\t  <div class=\"col-sm-10\">
    \t\t\t<select class=\"form-control\" name=\"provincia\" id=\"provincia\">
    \t\t\t\t";
        // line 68
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["provincias"]) ? $context["provincias"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["provincia"]) {
            // line 69
            echo "    \t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["provincia"], "idProvincia", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["provincia"], "idProvincia", array()) == $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "usuario", array()), "idProvincia", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["provincia"], "provincia", array()), "html", null, true);
            // line 70
            echo "</option> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provincia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "    \t\t\t</select>    \t\t\t
    \t\t  </div>
\t      </div>
          
           <div class=\"form-group ";
        // line 75
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cp", array()))) {
            echo "has-error";
        }
        echo "\">
            <label for=\"cp\" class=\"col-sm-2 control-label\">Código Postal</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"cp\" id=\"cp\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, ((set_value("cp")) ? (set_value("cp")) : ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "usuario", array()), "cp", array()))), "html", null, true);
        echo "\">
               <span>";
        // line 79
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cp", array());
        echo "</span>
            </div>
          </div>
          
          <input type=\"hidden\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "token", array()), "html", null, true);
        echo "\" name=\"token\" />
           <input type=\"hidden\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array()), "html", null, true);
        echo "\" name=\"id\" />
         
          <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
              <button type=\"submit\" class=\"btn btn-primary\">Guardar datos</button>
            </div>
          </div>
        </form>
    </div>   

";
    }

    public function getTemplateName()
    {
        return "usuario/usuario_edita_formulario.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 84,  216 => 83,  209 => 79,  205 => 78,  197 => 75,  191 => 71,  185 => 70,  176 => 69,  172 => 68,  161 => 60,  153 => 57,  146 => 53,  142 => 52,  134 => 49,  127 => 45,  123 => 44,  115 => 41,  109 => 38,  105 => 37,  97 => 34,  87 => 27,  83 => 26,  75 => 23,  68 => 19,  64 => 18,  56 => 15,  52 => 14,  47 => 11,  41 => 8,  38 => 7,  36 => 6,  31 => 3,  28 => 2,);
    }
}
