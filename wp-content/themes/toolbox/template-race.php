<?php
/*
Template Name: Race
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
                    <img style="width: 100px;" src="<?php echo $rs[$x][$y]->foto; ?>" alt="<?php echo $rs[$x][$y]->nombre_apellido; ?>">
                    <p><?php echo $rs[$x][$y]->nombre_apellido; ?></p>
                  </div>
                  <div class="table">
                    
                    <?php $scores = get_my_scores_by_drivers_id($rs[$x][$y]->id); ?>
                    <!-- [driver_id][race_id] -->
                    <?php $race = get_my_races(); ?>
                    
                    
                    <table border="1">
                    
                      <tr>
                        <td>-</td>
                        <?php for($m=0 ; $m<count($race) ; $m++): ?>
                          <td><?php echo $race[$m]->name; ?></td>
                        <?php endfor; ?>
                      </tr>
                      <tr>
                        <td>Clasificacion</td>
                        <?php for($m=1 ; $m<count($race)+1 ; $m++): ?>
                          <td><?php if(!empty($scores[$rs[$x][$y]->id][$m]->clasificacion_marca)){ echo $scores[$rs[$x][$y]->id][$m]->clasificacion_marca . " (Puesto: " . $scores[$rs[$x][$y]->id][$m]->clasificacion_puesto . ")"; }else{ echo "-"; } ?></td>
                        <?php endfor; ?>
                      </tr>
                      <tr>
                        <td>Serie</td>
                        <?php for($m=1 ; $m<count($race)+1 ; $m++): ?>
                          <td><?php if(!empty($scores[$rs[$x][$y]->id][$m]->serie_marca)){ echo $scores[$rs[$x][$y]->id][$m]->serie_marca . " (Puesto: " . $scores[$rs[$x][$y]->id][$m]->serie_puesto . ")"; }else{ echo "-"; } ?></td>
                        <?php endfor; ?>
                      </tr>
                      <tr>
                        <td>Final</td>
                        <?php for($m=1 ; $m<count($race)+1 ; $m++): ?>
                          <td><?php if(!empty($scores[$rs[$x][$y]->id][$m]->final_marca)){ echo $scores[$rs[$x][$y]->id][$m]->final_marca . " (Puesto: " . $scores[$rs[$x][$y]->id][$m]->final_puesto . ")"; }else{ echo "-"; } ?></td>
                        <?php endfor; ?>
                      </tr>
                    </table>
                  
                  </div>
                </div>
              
              <?php endfor; ?>
            </div>
          <?php endfor; ?>
          
        </div>
        
			</div><!-- #content -->
		</div><!-- #primary -->
  <script type="text/javascript" >
  jQuery(document).ready(function(){
    jQuery("#tabs").tabs();
  });
  </script>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

