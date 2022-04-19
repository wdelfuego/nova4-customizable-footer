This package reintroduces footer customization to Nova 4.

## Installation
Add the dependency to your project's `composer.json`:
```
composer require wdelfuego/nova4-customizable-footer
```

This package sets the default footer content to an empty string, so if you only wanted to remove the default footer you are now done.

## Customizing the footer

- Open `app/Providers/NovaServiceProvider.php` and add a use statement for `Wdelfuego\Nova4\CustomizableFooter\Footer`.

- In the `boot` method of that class, set your custom footer content by supplying the raw HTML:

```
Footer::set('<p class="text-center">Your own footer HTML</p>');
```

## Word of warning

This package works by firing an Ajax request to the server to fetch the customized footer content and insert it into the DOM after the Nova interface has been loaded successfully. While the request to fetch the footer content is loading, the original footer content may still be visible briefly to the end user. This typically only happens when the user first loads Nova and should take much less than a second.