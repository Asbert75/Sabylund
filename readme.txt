För att ändra texten under "Information och kalendarium" på "Konst"-delen av eran hemsida är det enklaste ni kan göra att ta er in på webbhosten via FTP (File Transfer Protocol) med ett program så som FileZilla eller direkt vid datorn. När ni väl är inne på hosten navigerar ni till "kalendariumText.txt" och öppnar dokumentet och lägger helt enkelt in den text ni vill ha där.


För att connecta till servern via datorn:
Steg 1: Tryck på windows-knappen och sedan på "Dator".

Steg 2: Höger-klicka någonstans i rutan och välj alternativet "Lägg till en nätverksplats".
https://i.gyazo.com/eaf72256f5e8cc45bb3f993419d99872.png

Steg 3: Klicka på nästa och välj "Välj en anpassad nätverksplats - Ange adressen till en webbplats, en nätverksplats eller en FTP-plats." och klicka sedan på nästa igen.

Steg 4: I fältet "Internet- eller nätverksadress:" skriver ni "ftp://" föjlt av FTP-adressen som ni får när ni köper ett webbhotell. Det ser ut ungefär såhär: ftp.webdesign-sto.se. Det bör då se ut ungefär såhär: "ftp://ftp.webdesign-sto.se". Klicka sedan på nästa.
https://i.gyazo.com/5e9a40f9849c7e4b53f4b4fe8e8c30a0.png

Steg 5: Klicka ur "Logga in anonymt" och skriv sedan in användarnamnet till FTP-kontot ni skapar via erat webbhotell (Chansen finns att användarnamnet redan är satt till eran domän, i vårat fall "webdesign-sto.se". Klicka sedan på "Nästa".
https://i.gyazo.com/ba524a27b0a30b2052fe4a873f8fd7c0.png

Steg 6: Välj ett namn som ni sparar FTPn under och tryck sedan på nästa. Detta kan vara vad som helst som ni kan använda för att identifiera vad det är. T.ex. "Webdesign STO FTP Server".

Steg 7: Klicka på nästa och sedan kryssa i "Öppna den här nätverksplatsen när jag klickar på Slutför." och klicka sedan på slutför. En ruta kommer nu komma upp som frågar efter lösenord. Här skriver ni in lösenordet som ni valt på erat webbhotell och klicka sedan på Logga in.
https://i.gyazo.com/55534fdf0aec45e1a5c9a5b82a7f8e4e.png

Klart. Om allt gjorts rätt ska ni nu vara inne på platsen där alla hemsidans filer ligger. Allt ni behöver göra nu är att navigera till "KalendariumText.txt" och öppna den med en filredigerare.