> :white_check_mark: *Jeśli będziesz mieć problem z rozwiązaniem tego zadania, poproś o pomoc na odpowiednim kanale na Slacku, tj. `s5e01-php-the-fundamentals` (dotyczy [mentee](https://devmentor.pl/mentoring-javascript/)) lub na ogólnodostępnej i bezpłatnej [społeczności na Discordzie](https://devmentor.pl/discord). Pamiętaj, aby treść Twojego wpisu spełniała [odpowiednie kryteria](https://devmentor.pl/jak-prosic-o-pomoc/).*

&nbsp;

# `#04` PHP: The Fundamentals

Tym razem w pliku `index.php` znajdziesz rozbudowaną strukturę, która przechowuje informacje o książkach. Nazwa klucza tablicy asocjacyjnej to number ISBN książki. Przypisana do niej wartość to również tablica, która przechowuje informacje o książce identyfikującej się tym numerem ISBN.

Twoim zadaniem będzie napisanie funkcji `getTitle` oraz `getTranslator`, które pozwolą pobrać informacje o konkretnej książce. Funkcja `getAuthor` została już napisana i możesz się na niej wzorować, jednak pamiętaj, że przyjmuje ona tylko dwa parametry.

W przypadku Twoich funkcji mamy dodatkową zależność, która jest identyfikowana przy pomocy trzeciego parametru. Pamiętaj, aby sprawdzić, czy właściwość istnieje. Jeśli nie, to zwróć `null`.

W przypadku funkcji `getTranslator` sprawdź również, czy wartość dla konkretnego języka we właściwości `translator` nie jest równa `null`. Jeśli jest, oznacza to, że wybrany język jest językiem oryginału i wtedy należy zwrócić `false`.


&nbsp;
> :no_entry: *Jeśli nie posiadasz materiałów do tego zadania tj. **Wideo**, znajdziesz je na stronie [laracasts.com](https://laracasts.com/referral/bogolubow)*

> :arrow_left: [*poprzednie zadanie*](./../03) | [*następne zadanie*](./../05) :arrow_right:
