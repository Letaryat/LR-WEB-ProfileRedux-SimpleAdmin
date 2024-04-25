# LR-WEB-ProfileRedux-With-SimpleAdmin

## [ENG]:
Modified version of Profile Redux for Rich Template with SimpleAdmin integration.
I've deleted some things that made my site more laggy in js_controller.php (if(isset($_POST['online']))). Also this module has integration for SklepCS (it shows on player profile if player has VIP access by checking if proper steamid is in the sklepcs_vip table).
I also deleted some things such as link for a player demo's and player steam friends. You can add it by yourself in interface.php by coping those urls from the original redux profile.

If there are any errors please write an issue on github. In free time I'm gonna try to fix them.

## [PL]:
Zmodyfikowana wersja Profilu Redux dla Rich Template z integracja dla pluginu SimpleAdmin.
Usunalem kilka funkcji w pliku js_controller.php. Jesli ktos tego potrzebuje to niech po prostu wklei. Mi cala funkcja tylko powodowala dluzsze ladowanie strony (if(isset($_POST['online']))). 
Modul rowniez posiada odrazu polaczenie z baza danych dla SklepuCS (na profilu uzytkownika pokazuje czy dany gracz posiada VIP jesli jest w bazie danych).
Usunalem rowniez kilka odnosnikow z profilu gracza takich jak dema oraz znajomi steam. Mozecie sobie dodac je spowrotem wklejajac do pliku interface.php linki z oryginalnego profilu redux.

Jesli sa bledy pisac issue na githubie. W wolnej chwili postaram sie poprawic.