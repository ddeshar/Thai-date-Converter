# Your Library

A library to convert dates to Thai format.

## Installation

To install Date Converter, run the following command:

```sh
composer require ddeshar/dateconverter
```

## Usage

```sh
use YourNameSpace\DateConverter;

$date = '2022-01-01';
$thaiDate = DateConverter::DateTimeThai($date);

echo $thaiDate; // Output: "1 ม.ค. 2565, 00:00"

$time = 180;
$formattedTime = DateConverter::format_time($time);

echo $formattedTime; // Output: "03:00"
```


## License

Date Converter is licensed under the MIT license.

