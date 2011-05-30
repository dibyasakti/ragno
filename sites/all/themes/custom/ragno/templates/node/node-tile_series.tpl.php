<div id="node-<?php print $node->nid; ?>" class="<?php print $nodeclasses; ?>">
  <div class="node-content">
        
  	<?php if (!empty($node->content['body']['#value'])): ?>
  		<div class="field field-type-text field-field-description">
                        <?php if(!empty($technology_type)) print "<h3>" . $technology_type . "</h3>"; ?>
  			<?php print $content; ?>
  		</div>
  	<?php endif;?>
  	<?php if ($featured_icons): ?>
  		<div id="featured-icons" class="section region"><?php print $featured_icons;?></div>
  	<?php endif;?>
  	<?php if ( !empty( $node->field_sizes) ): ?>
  		<div class="field field-type-text field-field-subtitle">
                  Field Tile Sizes
  		</div>
  	<?php endif;?>
  	<?php /*if ( !empty( $node->field_subtitle) ): ?>
  		<div class="field field-type-text field-field-subtitle">
  			<?php print $node->field_subtitle[0]['value']; ?>
  		</div>
  	<?php endif;*/?>
  	<?php if (!empty($node->field_sizes)): ?>
  		<div class="field field-type-text field-field-sizes">
  			<div class="field-items"><?php print $sizes_list; ?></div>
  		</div>
  	<?php endif;?>	
  	<?php if (!empty($node->field_tech_spec)): ?>
	
  		<div class="field field-type-filefield field-field-tech-spec">
  			<div class="field-label"><?php // print_r ($node->content['field_tech_spec']['field']['#title']); ?>Series Overview</div>
  			<div class="field-items"><div class="filefield-item"><div><a href="<?php print base_path() . $node->field_tech_spec[0]['filepath']; ?>" target="_blank">Printer Friendly Version</a></div></div></div>
  		</div>
  	<?php endif;?>   
  	<div class="field field-type-filefield">
  		<div class="field-label">catalog</div>
		
		<div class="field-items"><div class="filefield-item"><a href="<?php print base_path() . drupal_get_path_alias('node/' . $node->field_related_catalog[0]['nid']) ?>">View The Product Catalog Online</a></div></div>
  	</div> 	
  	<div class="field field-type-filefield">
  		<div class="field-label">CARE &amp; MAINTENANCE</div>
  		<div class="field-items"><div class="filefield-item"><a href="/care-maintenance">View Care &amp; Maintenance Recommendations</a></div></div>
  	</div>
  	<div class="field field-type-filefield">
  		<div class="field-label">Idea Center</div>
  		<div class="field-items"><div class="filefield-item"><a href="/idea-center">View Room Scenes For Design Ideas</a></div></div>
  	</div>
  	<div class="field field-type-filefield">
  		<div class="field-label">Homeowner Collections</div>
  		<div class="field-items"><div class="filefield-item"><a href="/home-owner">Go Back To Home Owner Collections</a></div></div>
  	</div>
  	<div class="field field-type-filefield">
  		<div class="field-label">Professional Collections</div>
  		<div class="field-items"><div class="filefield-item"><a href="/professional">Go Back To Professional Collections</a></div></div>
  	</div>
  	<div class="field field-type-filefield field-last">
  		<div class="field-label">Where to buy</div>
  		<div class="field-items"><div class="filefield-item"><a href="/directory/all">Find Locations Near You</a></div></div>
  	</div>
  </div>
</div> 
