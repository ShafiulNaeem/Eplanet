<?php

namespace App\Service;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImageGenerator
{

    /**
     * Generates a branded placeholder image
     * 
     * @param int $width
     * @param int $height
     * @param string|null $text
     * @return string Filename of generated image
     */
    function generate(int $width = 640, int $height = 480, string $path = 'images', ?string $text = null): string
    {
        // 1. Prepare directory structure
        $dir = Storage::disk('public')->path($path);

        // Create directory if it doesn't exist
        if (!Storage::disk('public')->exists($path)) {
            Storage::disk('public')->makeDirectory($path);
        }

        // 2. Generate unique filename
        $filename = 'image_' . Str::random(10) . '.jpg';
        $fullPath = "{$dir}\\{$filename}";

        // 3. Create image resource
        $image = imagecreatetruecolor($width, $height);

        // 4. Generate gradient background
        $startColor = [rand(50, 200), rand(50, 200), rand(50, 200)];
        $endColor = [rand(50, 200), rand(50, 200), rand(50, 200)];

        for ($y = 0; $y < $height; $y++) {
            // Interpolate between start and end colors
            $ratio = $y / $height;
            $r = $startColor[0] + ($endColor[0] - $startColor[0]) * $ratio;
            $g = $startColor[1] + ($endColor[1] - $startColor[1]) * $ratio;
            $b = $startColor[2] + ($endColor[2] - $startColor[2]) * $ratio;

            $color = imagecolorallocate($image, $r, $g, $b);
            imageline($image, 0, $y, $width, $y, $color);
        }

        // 5. Add centered text
        $text = $text ?? 'Image';
        $textColor = imagecolorallocate($image, 255, 255, 255);
        $font = 5; // Built-in GD font

        // Calculate text position for center alignment
        $textWidth = imagefontwidth($font) * strlen($text);
        $textHeight = imagefontheight($font);
        $x = ($width - $textWidth) / 2;
        $y = ($height - $textHeight) / 2;

        imagestring($image, $font, $x, $y, $text, $textColor);

        // 6. Save and cleanup
        imagejpeg($image, $fullPath, 90); // 90% quality
        imagedestroy($image);

        return $filename;
    }
}
