# User Manual for ddeshar/Thai-date-Converter Package

## Table of Contents

1. Introduction
2. Class: FormatTimeConverter
   - Method: format_time
   - Method: time_ago
3. Class: ThaiDateConverter
   - Method: getMonthNames
   - Method: convert

## Introduction

The ddeshar/Thai-date-Converter package provides two classes for converting time and dates: FormatTimeConverter and ThaiDateConverter. The FormatTimeConverter class provides methods for converting a given number of seconds into a formatted time string, and for converting a given timestamp into a human-readable string indicating the time elapsed since that timestamp. The ThaiDateConverter class provides methods for converting a date string to Thai date format.

## Class: FormatTimeConverter

### Method: format_time

The format_time method takes two arguments: the number of seconds to convert (`$t`), and the separator for hours and minutes (`$f`). The default separator is `:`.

This method returns a string in the format of `hh:mm`.

#### Parameters

- `$t` (int) The number of seconds to convert
- `$f` (string) The separator for hours and minutes (defaults to `:`)

#### Returns

The formatted time string in the format of `hh:mm`.

### Method: time_ago

The time_ago method takes a single argument: the timestamp to convert (`$timestamp`).

This method returns a human-readable string indicating the time elapsed since the given timestamp.

#### Parameters

- `$timestamp` (string) The timestamp to convert

#### Returns

The human-readable elapsed time string.

## Class: ThaiDateConverter

### Method: getMonthNames

The getMonthNames method takes a single argument: the language code (`$language`).

This method returns an array of month names for the specified language.

#### Parameters

- `$language` (string) The language code

#### Returns

An array of month names for the specified language.

### Method: convert

The convert method takes four arguments: the date string to convert (`$strDate`), the language code (`$language`), a flag indicating whether to include the time in the output (`$includeTime`), and the date format to use (`$dateFormat`).

This method returns the date string in Thai date format.

#### Parameters

- `$strDate` (string) The date string to convert
- `$language` (string) The language code (`th` or `en`)
- `$includeTime` (bool) Whether to include time in the output
- `$dateFormat` (string) The date format to use (`dd/mm/yyyy`, `mm/dd/yyyy`, `yyyy-mm-dd`)

#### Returns

The converted date string in Thai date format.
