<?php if (is_404() ) :
  $img_prefix = 'https://res.cloudinary.com/krisnelson/image/upload/q_auto,f_auto,c_fill,g_face';
  $featured_image_url = "v1503261746/blizzard-pup.jpg";
  $featured_image_caption = '';
  if( $featured_image_url ) { featured_image_build_css($img_prefix, $featured_image_url, "jumbotron-featured-image"); }
?>
<?php elseif (is_search() ) :
  $img_prefix = 'https://res.cloudinary.com/krisnelson/image/upload/e_blur:200,q_auto,f_auto,c_fill';
  $featured_image_url = "v1502608937/unsplash/andrew-neel-133200.jpg";
  $featured_image_caption = "Photo by Andrew Neel on Unsplash.";
  if( $featured_image_url ) { featured_image_build_css($img_prefix, $featured_image_url, "jumbotron-featured-image"); }
?>
<?php elseif (is_category() || is_tag() ) : ?>
  <?php
  switch ( single_term_title( '', false ) ) {
      case "history":
      case "research":
        $img_prefix = 'https://res.cloudinary.com/krisnelson/image/upload/e_blur:200,q_auto,f_auto,c_fill';
        $featured_image_url = "v1502438280/unsplash/thomas-kelley-128626.jpg";
        $featured_image_caption = "Photo by Thomas Kelley on Unsplash.";
        break;
      case "law":
      case "privacy":
      case "search and seizure":
        $img_prefix = 'https://res.cloudinary.com/krisnelson/image/upload/e_blur:200,q_auto,f_auto,c_fill,g_north_east';
        $featured_image_url = "v1502439905/unsplash/scott-webb-274694.jpg";
        $featured_image_caption = "Photo by Scott Webb on Unsplash.";
        break;
      case "technology":
        $img_prefix = 'https://res.cloudinary.com/krisnelson/image/upload/e_blur:200,q_auto,f_auto,c_fill';
        $featured_image_url = "v1502440714/unsplash/mario-calvo-355.jpg";
        $featured_image_caption = "Photo by Mario Calvo on Unsplash.";
        break;
      case "science":
      case "science studies":
        $img_prefix = 'https://res.cloudinary.com/krisnelson/image/upload/e_blur:200,q_auto,f_auto,c_fill,g_south';
        $featured_image_url = "v1502441189/unsplash/anthony-delanoix-42716.jpg";
        $featured_image_caption = "Photo by Anthony DELANOIX on Unsplash.";
        break;
      case "dissertation":
        $img_prefix = 'https://res.cloudinary.com/krisnelson/image/upload/e_blur:200,q_auto,f_auto,c_fill';
        $featured_image_url = "v1502441981/unsplash/jason-yu-39975.jpg";
        $featured_image_caption = "Photo by Jason Yu on Unsplash.";
        break;
      default:
        $img_prefix = 'https://res.cloudinary.com/krisnelson/image/upload/e_blur:200,q_auto,f_auto,c_fill';
        $featured_image_url = "v1502441604/unsplash/sanwal-deen-93466.jpg";
        $featured_image_caption = "Photo by Sanwal Deen on Unsplash.";
  }
  if( $featured_image_url ) { featured_image_build_css($img_prefix, $featured_image_url, "jumbotron-featured-image"); }
?>
<?php endif; ?>
