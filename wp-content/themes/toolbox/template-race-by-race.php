<?php
/*
Template Name: Race by Race
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
        
        <ul>
          <li><a href="torneo" title="Resultados por corredor">Resultados por corredor</a></li>
          <li><a href="resultados-de-los-torneos-por-carrera" title="Resultados por carrera">Resultados por carrera</a></li>
        </ul>
        
        <?php $rs = get_my_races(); ?>
        <?php $category = get_my_categories(); ?>
        <?php $scores = get_scores_by_category(); ?>
        
        <div id="tabs">
          <ul>
          <?php for($r=0 ; $r<count($rs) ; $r++): ?>
            <li><a href="#tabs-<?php echo $r; ?>"><?php echo $rs[$r]->name; ?></a></li>
          <?php endfor; ?>
          </ul>
          
          <?php for($r=0 ; $r<count($rs) ; $r++): ?>
            <div id="tabs-<?php echo $r; ?>">
              <?php for($c=0 ; $c<count($category) ; $c++): ?>
                
                <h2><?php echo $category[$c]->nombre; ?></h2>
                
                <!--<div>
                  <pre>
                  <?php //print_r($scores[$r+1][$c+1]) ?>
                  </pre>
                </div>-->

                  <div>
                    <table cellspacing="0">
                      <tr>
                        <th>Corredor</th>
                        <th>Clasificacion</th>
                        <th>Serie</th>
                        <th>Final</th>
                      </tr>
                      <?php if(!empty($scores[$r+1][$c+1])): ?>
                      <?php foreach($scores[$r+1][$c+1] as $value): ?>
                      <tr>
                        <td><?php echo get_pilot_by_id($value->piloto_id ); ?></td>
                        <td><?php echo "Puesto: ".$value->clasificacion_puesto . "<br />Marca: " . $value->clasificacion_marca; ?></td>
                        <td><?php echo "Puesto: ".$value->serie_puesto . "<br />Marca: " . $value->serie_marca; ?></td>
                        <td><?php echo "Puesto: ".$value->final_puesto . "<br />Marca: " . $value->final_marca; ?></td>
                      </tr>
                      <?php endforeach; ?>
                      <?php endif; ?>
                    </table>
                    
                    
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
