<?php
/**
 * Projekty Dla Szkół: Walerasan
 */
register_nav_menus( array(
    'main-menu' => 'Primary', //menu główne w topie strony
) );

    //dodaje możliwość dodawania miniatur do dodawania wpisów
    // Ikony - thumbnails
if ( function_exists( 'add_theme_support' ) ) {
        add_theme_support( 'post-thumbnails' );
}

class MenuWalerasanWalker extends Walker_Nav_Menu{

        function start_el(&$output, $item, $depth = 0, $args =[], $current_object_id = 0)
        {
            
            $output .= "<li class='nav-link " .  implode(" ", $item->classes) . "'>";
            if ($item->url && $item->url != '#') {
                $output .= '<a href="' . $item->url . '">';
            } else {
                $output .= '<span>';
            }
            $output .= $item->title;
            if ($item->url && $item->url != '#') {
                $output .= '</a>';
            } else {
                $output .= '</span>';
            }


        }
}

?>