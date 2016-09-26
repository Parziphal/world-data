## Countries and languages

List of countries and languages, in english. Countries have their corresponding ISO 2, ISO 3 and ISO Numeric codes; languages have their corresponding ISO 639-1 codes.

There are two classes under the `Parziphal\WorldData` namespace: `Languages` and `Countries`. These can be used to get the data of each resource, and to optionally customize it:

```php
use Parziphal\WorldData\Countries;

// Get all data columns
$countries = Countries::get();

// Get only country names
$countries = Countries::get(['name']);

// Get both "names" and "iso_code_2" columns, and change "iso_code_2" column name to just "iso"
$countries = Countries::get(['name', 'iso_code_2' => 'iso']);
```

### Credits

* Country taken from http://www.nationsonline.org/oneworld/country_code_list.htm
* Languages taken from https://raw.githubusercontent.com/datasets/language-codes/master/data/language-codes.csv

### License

MIT
