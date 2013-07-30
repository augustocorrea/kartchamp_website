<?php
/*
Template Name: Pilots score
*/

/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">
        
        <h1>Resultados de los torneos por corredor</h1>
        
        <div id="selector-of-filter">
          <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-top">
            <li class="ui-state-default ui-corner-top"><a href="torneo" title="Resultados por corredor">Resultados por corredor</a></li>
            <li class="ui-state-default ui-corner-top right-option"><a href="resultados-de-los-torneos-por-carrera" title="Resultados por carrera">Resultados por carrera</a></li>
            <li class="ui-state-default active-option ui-corner-top campeonato-option"><a href="campeonato" title="Campeonato">Campeonato</a></li>
          </ul>
        </div>
        
        <?php $rs = get_my_drivers_by_categories(); ?>
        <div id="tabs">
          <ul>
          <?php for($x=0 ; $x<count($rs) ; $x++): ?>
            <li><a href="#tabs-<?php echo $x; ?>"><?php echo $rs[$x]['category_name']; ?></a></li>
          <?php endfor; ?>
          </ul>
          
          <?php for($x=0 ; $x<count($rs) ; $x++): ?>
            <div id="tabs-<?php echo $x; ?>">
              <?php for($y=0 ; $y<count($rs[$x])-1 ; $y++): ?>
                
                <div class="driver">
                  <div class="photo">
                    <img style="width: 45px;" src="<?php echo thumb($rs[$x][$y]->foto); ?>" alt="<?php echo $rs[$x][$y]->nombre_apellido; ?>">
                  </div>
                  <div class="table" border="0">
                    <table cellspacing="0">
                      <tr>
                        <th>Corredor</th>
                        <th>Posición</th>
                        <th>Puntaje</th>
                      </tr>
                      <tr>
                        <td style="width: 200px;"><?php echo $rs[$x][$y]->nombre_apellido; ?></td>
                        <td><?php echo $rs[$x][$y]->posicion; ?></td>
                        <td><?php echo $rs[$x][$y]->puntaje; ?></td>
                      </tr>
                    </table>
                  </div>
                  <br clear="all" />
                </div>
                
              <?php endfor; ?>
            </div>
          <?php endfor; ?>
          
        </div>
        <br />
			</div><!-- #content -->
		</div><!-- #primary -->
  <script type="text/javascript" >
  jQuery(document).ready(function(){
    jQuery("#tabs").tabs();
  });
  </script>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

