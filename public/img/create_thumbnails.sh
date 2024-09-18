#!/bin/bash

# Set the main gallery directory (current directory assumed to be the 'gallery' folder)
GALLERY_DIR="."

# First, find and convert all .jpg images to .webp format
find "$GALLERY_DIR" -type f -name "*.jpg" | while read -r image; do
  # Extract the directory path and filename without the extension
  dir=$(dirname "$image")
  filename=$(basename "$image" .jpg)

  # Create the output path for the .webp image
  output_image_webp="$dir/${filename}.webp"

  # Convert the .jpg to .webp format
  ffmpeg -y -i "$image" "$output_image_webp"
  echo "Converted $image to $output_image_webp"

  # Remove the original .jpg file after conversion
  rm "$image"
  echo "Deleted original JPG: $image"
done

# Now process all .webp images (including the newly converted ones), excluding files with '-small' or '-medium' in their names
find "$GALLERY_DIR" -type f -name "*.webp" ! -name "*-small.webp" ! -name "*-medium.webp" | while read -r image; do
  # Extract the directory path and filename without the extension
  dir=$(dirname "$image")
  filename=$(basename "$image" .webp)

  # Create output paths for small and medium images
  output_image_medium="$dir/${filename}-medium.webp"
  output_image_small="$dir/${filename}-small.webp"

  # Create the medium-sized thumbnail
  ffmpeg -y -i "$image" -vf "scale=600:-1" -vframes 1 "$output_image_medium"
  echo "Medium thumbnail created for $image -> $output_image_medium"

  # Create the small-sized thumbnail
  ffmpeg -y -i "$image" -vf "scale=20:-1" -vframes 1 "$output_image_small"
  echo "Small thumbnail created for $image -> $output_image_small"
done