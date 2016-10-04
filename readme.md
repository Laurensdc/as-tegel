# http://www.as-tegel.be

## Features
- Product weergave -> prijzen wanneer ingelogd als Handelaar
- Hiërarchie: categorie > subcategorie > producten
- Adhv product kan zijn subcat en cat worden opgevraagd

- Offerte aanvragen
- Handelaar -> bestellen -> per mail bestelbon versturen
- Handelaar status aanvragen
- Login systeem
- Wachtwoord vergeten links
- Rollen per user
- Afgeschermd admin deel
- Mails automatisch versturen als bestelling wordt gedaan
- Mail naar user wanneer gepromoveerd naar Handelaar
- Handelaar kan DAP attest aanvragen bij bestelling
- Foto uploaden als admin, wordt resized naar thumbnail
- Asde klikt op foto laadt dan hoge res foto in lightbox
- 3 talen (behalve data zoals in db)
- Admin kan producten bijvoegen, aanpassen, groeperen
- Admin kan in promo zetten dan komen ze op homepage
- Bestelling items verwijderen, toevoegen
- Prijslijst genereren adhv huidige db
- Informatieve pagina's -> contact, EC



# Project setup
- composer install
- npm install
- Set db settings in .env
- php artisan migrate:refresh --seed

# TODO's
 - I gave full linux read/write permissions because I had issues on chromebook, look into it

