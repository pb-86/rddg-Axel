# Axel

Axel to motyw startowy używany przeze mnie jako baza do przygotowywania stron internetowych opartych na WordPress.

## Organizacja katalogów

```
axel
├─── assets
│    ├─── css
│    ├─── font
│    ├─── img
│    ├─── js
│    ├─── scss
│    └─── vendor
├─── config
├─── custom-templates
└──- template-parts
     ├─── excerpts
     ├─── footer
     ├─── header
     ├─── loops
     ├─── navigation
     └─── shared
```

### Katalog `assets`

Zawiera wszystkie statyczne pliki używane do budowy strony takie jak fonty, obrazki, skrypty oraz style. Nazwy katalogów wyjaśniają jakie pliki są w nich przechowywane.

### Katalog `config`

Zawiera pliki konfiguracyjne motywu:

- `setup.php` - główny plik konfiguracyjny motywu,
- `menus.php` - rejestrowanie menu,
- `sidebars.php` - rejestrowanie sidebarów,
- `scripts.php` - rejestrowanie oraz dołączanie skryptów JS,
- `styles.php` - rejestrowanie oraz dołączanie styli CSS,
- `optimisation.php` - miejsce na wszelki dodatkowy kod służący do optymalizacji działania strony.

### Katalog `custom-templates`

Zawiera wszelkie niestandardowe szablony, których domyślnie WordPress nie przewiduje.

### Katalog `template-parts`

Zawiera wszelkie szablony częściowe podzielone na podkatalogi.

## Szablony częściowe

W katalogach `header` oraz `footer` znajdują się szablony częściowe używane w nagłówku i stopce strony.

W katalogu `navigation` znajdują się szablony częściowe odpowiadające za wszelkie elementy nawigacyjne używane na całej stronie. Poza menu dolnym czy górnym są to np. skip linki lub przycisk powrotu na górę strony.

W katalogu `excerpts` znajdują się szablony skrótów wpisów.

W katalogu `loops` znajdują się wszelkiego rodzaju szablony pętli pobierających wpisy.

W katalogu `shared` znajdują się wszelkie pozostałe szablony częściowe, które są dzielone przez dwa lub więcej głównych plików szablonowych.

## Kontakt

Jeśli chcesz się ze mną skontaktować w kwestiach stron internetowych, wejdź na moją stronę internetową [Reddog Systems](https://reddog.systems) lub napisz pod adres [przemek@reddog.systems](przemek@reddog.systems).

