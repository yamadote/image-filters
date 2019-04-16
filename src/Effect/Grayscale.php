<?php

namespace yamadote\Image\Effect;

use yamadote\Image\Source;

/**
 * Class Grayscale
 *
 * @package yamadote\Effect
 * Simple effect for images
 */
class Grayscale implements InterfaceEffect
{
    /**
     * @param  Source $source
     * @return Source
     */
    public function apply(Source $source): Source
    {
        imagefilter($source->image, IMG_FILTER_GRAYSCALE);
        return $source;
    }
}
