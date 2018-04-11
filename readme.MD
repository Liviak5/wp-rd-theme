gulp sass:watch


## TODO Slick Slider
Den Slick Slider würde ich persönlich nicht als Dependency reinnehmen. Wenn er mal läuft, dann ist es ja OK und du bist nicht auf Updates angewiesen. Wenn du ihn als Dependency drin hast dann müsstest du ja den node_modules auch hochladen (was relativ umfangreich sein kann) und die JS und CSS Files dann aus dem node_modules "enqueuen". Oder du packetierst und kopierst im Gulpfile die entsprechenden JS/CSS Files in einen assets Folder. Alles ein wenig überdimensioniert für diese Anforderung.

- Slick Slider wieder uninstallen (resp. zumindest einfach aus dem package.json entfernen)
- Slick Slider entweder über CSN importieren oder runterladen, Files in assets Folder legen und über functions.php enqueuen
- Tutorial (noch nie verwendet, aber sieht soweit OK aus): https://wpbeaches.com/coding-a-slider-with-slick-and-acf-pro-in-wordpress/
   

*...reviewed and commented with lots of :heart: and :kiss: by [Rolf](https://github.com/kunstwort)*