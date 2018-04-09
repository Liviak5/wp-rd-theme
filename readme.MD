gulp sass:watch

## TODO Kommentare
Kommentare sind bei Seiten grundsätzlich nie aktiviert. Um dies zu aktivieren musst du auf "Seiten > Gästebuch > Quick Edit" bei "Erlaube Kommentare" einen Haken setzen. 
Danach zeigt es bei deinem Code schon mal das Eingabefeld an. 

Da Kommentare aber generell noch ein paar Dinge benötigen (je nach dem was alles im Backend konfiguriert ist - wie z.B. "User müssen angemeldet sein", "Kommentare erst anzeigen wenn genehmigt" etc.) nehme ich selber da auch immer ein fixfertiges Script. Wenn du auf page-gaestebuch.php mein comments Template aktivierst kommst du vermutlich schneller zum Ziel.

## TODO Slick Slider
Den Slick Slider würde ich persönlich nicht als Dependency reinnehmen. Wenn er mal läuft, dann ist es ja OK und du bist nicht auf Updates angewiesen. Wenn du ihn als Dependency drin hast dann müsstest du ja den node_modules auch hochladen (was relativ umfangreich sein kann) und die JS und CSS Files dann aus dem node_modules "enqueuen". Oder du packetierst und kopierst im Gulpfile die entsprechenden JS/CSS Files in einen assets Folder. Alles ein wenig überdimensioniert für diese Anforderung.

- Slick Slider wieder uninstallen (resp. zumindest einfach aus dem package.json entfernen)
- Slick Slider entweder über CSN importieren oder runterladen, Files in assets Folder legen und über functions.php enqueuen
- Tutorial (noch nie verwendet, aber sieht soweit OK aus): https://wpbeaches.com/coding-a-slider-with-slick-and-acf-pro-in-wordpress/
   

*...reviewed and commented with lots of :heart: and :kiss: by [Rolf](https://github.com/kunstwort)*