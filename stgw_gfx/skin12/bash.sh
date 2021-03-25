 for i in *.jpg; 
   do 
	convert -type Grayscale -fill rgb\(40,200,40\) -tint 90 -compress JPEG -quality 85 $i $i;
   done
