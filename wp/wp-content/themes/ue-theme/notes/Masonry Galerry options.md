# Masonry Galerry options

[Masonry website][def]

[Dynamic Feature Image](https://github.com/ankitpokhrel/Dynamic-Featured-Image)

[MapPress doc](https://mappresspro.com/mappress-documentation/#toc-create-a-map-with-the-gutenberg-block-editor)

[Jquery LightBox Plugin](https://wordpress.org/plugins/wp-jquery-lightbox/#installation)

## para imprimir las features fotos desde template
```php
        if( class_exists('Dynamic_Featured_Image') ) {
        global $dynamic_featured_image;
        $featured_images = $dynamic_featured_image->get_featured_images( );

        foreach ($featured_images as $key=>$value) {
            echo('<h4>' . $dynamic_featured_image->get_image_title($value['full']) . '</h4>');
            echo('<p>' . $dynamic_featured_image->get_image_caption($value['full']) . '</p>');
            echo('<img src="') . $value['full'] . ('" alt="') . $dynamic_featured_image->get_image_alt($value['full']) . ('" style="max-width:70%">');
        }
```

```php
        <?php foreach ($featured_images as $key => $value): ?>
            <h4><?php $dynamic_featured_image->get_image_title($value['full'])?></h4>
            <p><?php $dynamic_featured_image->get_image_caption($value['full'])?></p>
            <img src="<?php $value['full'] ?>" alt="<?php $dynamic_featured_image->get_image_alt($value['full']) ?>" style="max-width:50%; padding-left:10px;">
        <?php endforeach; ?>

```

[wp_colorbox_media url="http://example.com/wp-content/uploads/image/lightbox.jpg" type="image" hyperlink="click here to open image"]