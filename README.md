# Thai-date-Converter
A simple library for converting dates to Thai date format and formatting elapsed time.

## Installation

You can install the library using composer:

```sh
composer require ddeshar/thai-date-converter
```

## Usage

### FormatTimeConverter

The `FormatTimeConverter` class provides two methods for converting time values:

- `format_time`: Converts the given number of seconds into a formatted time string in the format of hh:mm.
- `time_ago`: Converts a given timestamp into a human-readable string indicating the time elapsed since that timestamp.

For more information and usage examples, see the [FormatTimeConverter User Manual](UserManual.md#FormatTimeConverter).

### ThaiDateConverter

The `ThaiDateConverter` class provides a method for converting a date string to Thai date format.

- `convert`: Converts a date string to Thai date format.

For more information and usage examples, see the [ThaiDateConverter User Manual](UserManual.md#ThaiDateConverter).

## User Manual

For detailed information on using this library, see the [User Manual](UserManual.md).
